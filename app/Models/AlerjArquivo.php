<?php

namespace App\Models;

use App\Traits\Excludable;

class AlerjArquivo extends Alerj
{
    use Excludable;

    protected $table = 'tb_arquivo';

    protected $primaryKey = 'idArquivo';

    protected $hidden = ['blob'];

    public function getUrlAttribute()
    {
        return $this->makeUrl(config('app.webservice.urls.file'), $this->id);
    }
}
