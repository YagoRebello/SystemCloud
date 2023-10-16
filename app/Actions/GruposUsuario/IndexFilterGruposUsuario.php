<?php

namespace App\Actions\GruposUsuario;

use App\Models\GruposUsuario;

class IndexFilterGruposUsuario
{
    public function __construct(private object $request)
    {
    }

    public function execute()
    {
        $descricao = $this->request->descricao;
        return GruposUsuario::where('descricao','like','%'.$descricao.'%')->get();
    }
}
