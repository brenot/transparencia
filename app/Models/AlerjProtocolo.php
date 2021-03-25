<?php

namespace App\Models;

class AlerjProtocolo extends Alerj
{
    protected $table = 'sy_vw_autor_processo';

    public function arquivos()
    {
        return $this->hasMany(AlerjArquivo::class, 'idConteudo');
    }
}
