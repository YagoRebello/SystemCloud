<?php

namespace App\Actions\GruposUsuario;

use App\Models\GruposUsuario;

class UpdateGruposUsuario
{
    public function __construct(private string $id,private object $request){}

    public function execute(): GruposUsuario
    {
        $grupo = GruposUsuario::find($this->id);
        $grupo->descricao = $this->request->descricao;
        $grupo->save();
        return $grupo;
    }
}
