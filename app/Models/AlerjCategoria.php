<?php

namespace App\Models;

class AlerjCategoria extends Alerj
{
    protected $table = 'tb_categoria';

    protected $primaryKey = 'idCategoria';

    public function informacoes()
    {
        return $this->hasMany(AlerjInformacao::class, 'idCategoria');
    }
}
