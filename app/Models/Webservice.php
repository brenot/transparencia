<?php

namespace App\Models;

use Cache;
use HTMLPurifier;
use App\Support\Datable;
use HTMLPurifier_Config;
use App\Support\Linkable;
use App\Support\Cacheable;
use App\Support\DataRequest;
use App\Support\RemotelyRequestable;
use Illuminate\Support\Str;

class Webservice
{
    use RemotelyRequestable, Datable, Cacheable, Linkable;

    private $purifier;

    private $rawData;

    protected $data;

    protected $cacheEnabled = true;

    public function __construct($rawData = null)
    {
        $this->rawData = $rawData;

        $this->initializePurifier();
    }

    private function dataIsNeeded($slug)
    {
        return $this->rawData ? $this->rawData->where('slug', $slug)->count() : true;
    }

    private function extractOrderFromTitle($title)
    {
        preg_match('/\[(\d)\](.*)/', $title, $matches);

        if (count($matches) !== 3) {
            return [$title, 0];
        }

        return [$matches[2], $matches[1]];
    }

    private function getData()
    {
        return $this->data;
    }

    public function getFiles($id)
    {
        $data = new DataRequest(static::class, config('app.webservice.urls.files'), 'GET', [$id]);

        return $this->toFiles($this->requestJson($data));
    }

    private function getIcon($slug)
    {
        return "/images/icons/$slug.svg";
    }

    private function initializePurifier()
    {
        $config = HTMLPurifier_Config::createDefault();

        $config->set('HTML.SafeIframe', true);
        $config->set('URI.SafeIframeRegexp', '%^(http.?:)?//alerjln1.alerj.rj.gov.br%');

        $this->purifier = new HTMLPurifier($config);
    }

    private function isDataLinkExternal($item, $id)
    {
        if ($this->dataIsUrl($item, $id)) {
            $url = $this->makeDataLink($item, $id);

            return !Str::startsWith($url, '/') && strpos($url, 'alerj.rj.gov.br/') == false;
        }

        return false;
    }

    private function dataIsUrl($item)
    {
        return empty(trim($item['texto'] . $item['texto_html'])) && !empty(trim($item['url']));
    }

    private function makeData($item)
    {
        if (isset($item['transformed']) && $item['transformed']) {
            return $item;
        }

        list($title, $order) = $this->extractOrderFromTitle($item['titulo']);

        return [
            'transformed' => true,
            'id' => ($id = $item['idInformacao']),
            'data_id' => ($data_id = $item['categoria']['idCategoria']),
            'title' => $title,
            'order' => $order,
            'body' => $item['texto'],
            'user_id' => $item['idUsuario'],
            'html' => $this->purify(isset($item['texto_html']) ? $item['texto_html'] : ''),
            'link' => $this->makeDataLink($item, $id),
            'is_external' => $this->isDataLinkExternal($item, $id),
            'published_at_string' => $item['data_pub'],
            'published_at' => $this->convertDate($item['data_pub']),
            'status' => $item['status'] == 'S',
            'url' => $item['url'],
            'schedule_start' => $item['agendar_in'] == 'S',
            'schedule_end' => $item['agendar_out'] == 'S',
            'start_date' => $this->convertDate($item['data_agenda_in']),
            'end_date' => $this->convertDate($item['data_agenda_out']),
            'redirect_file' => $item['redireciona_arquivo'] == 'S',
            'data' => [
                'id' => $item['categoria']['idCategoria'],
                'title' => $item['categoria']['nome'],
                'published_at_string' => $item['data_pub'],
                'published_at' => $this->convertDate($item['data_pub']),
                'status' => $item['categoria']['status'] == 'S',
            ],
        ];
    }

    private function makeDataLink($item, $id)
    {
        if ($this->dataIsUrl($item, $id)) {
            return $item['url'];
        }

        return route('report', [$id]);
    }

    private function purify($html)
    {
        return $this->purifier->purify($html);
    }

    private function toFiles($ListaArquivos)
    {
        return collect($ListaArquivos)
            ->map(function ($item) {
                if (isset($item['transformed']) && $item['transformed']) {
                    return $item;
                }

                $type = $this->makeFileType($item);

                return [
                    'transformed' => true,
                    'id' => 'file-' . ($id = $item['idArquivo']),
                    'title' => html_entity_decode($item['titulo']),
                    'name' => $item['arquivo'],
                    'file_id' => strtolower(
                        preg_replace('/\\.[^.\\s]{3,4}$/', '', $item['arquivo'])
                    ),
                    'file_type' => $type,
                    'status' => $item['status'] == 'S',
                    'contents_id' => $item['idConteudo'],
                    'user_id' => $item['idUsuario'],
                    'type' => $item['tipo'],
                    'published_at_string' => $item['data_pub'],
                    'published_at' => $this->convertDate($item['data_pub']),
                    'year' => $item['anoRef'],
                    'period' => $item['periodoRef'],
                    'period_type' => $item['tipoPeriodoRef'],
                    'url' => $this->makeFileUrl($id),
                ];
            })
            ->where('status', 'S')
            ->groupBy('year')
            ->sortByDesc(function ($item, $key) {
                return $key;
            })
            ->map(function ($files) {
                return $files->sortByDesc('period')->groupBy('file_id');
            });
    }

    private function makeFileType($item)
    {
        $extension = strtolower(pathinfo($item['arquivo'], PATHINFO_EXTENSION));

        $type = $extension == 'xls' || $extension == 'xlsx' ? 'excel' : $extension;

        return $type;
    }

    private function toData($data)
    {
        return collect($data)
            ->where('status', 'S')
            ->map(function ($item) {
                if (isset($item['transformed']) && $item['transformed']) {
                    return $item;
                }

                $slug = Str::slug($name = $item['nome']);

                if (!$this->dataIsNeeded($slug)) {
                    return null;
                }

                return [
                    'transformed' => true,
                    'id' => ($data_id = $item['idCategoria']),
                    'title' => $name,
                    'slug' => ($slug = Str::slug($name)),
                    'icon' => $this->getIcon($slug),
                    'links' => $this->getLinks($item['informacoes']),
                    'published_at_string' => ($published_at = $item['data_pub']),
                    'published_at' => $this->convertDate($published_at),
                    'status' => $item['status'] == 'S',
                ];
            });
    }

    private function toItem($data)
    {
        return collect($data)->map(function ($item) {
            return $this->makeData($item);
        });
    }

    private function getLinks($links)
    {
        return collect($links)
            ->where('status', 'S')
            ->map(function ($item) {
                return $this->makeData($item);
            })
            ->sortBy(function ($item) {
                return isset($item['order']) ? $item['order'] : 0;
            })
            ->toArray();
    }

    public function getItem($item)
    {
        $data = $this->getData()
            ->where('slug', $item['slug'])
            ->values();

        if ($data->count() > 0) {
            $data = $data[0];
        }

        $data['webservice'] = $item;

        return $data;
    }

    public function loadAllData(DataRequest $data = null)
    {
        if (is_null($data)) {
            $data = new DataRequest(static::class);
        }

        if (is_null($data->url)) {
            $data->url = config('app.webservice.urls.all_sections');
        }

        $this->data = $this->toData($this->requestJson($data));
    }

    public function getRequester(DataRequest $data)
    {
        return $this->getGuzzleXmlRequester($data);
    }
}
