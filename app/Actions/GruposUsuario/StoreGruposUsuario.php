<?php

namespace App\Actions\GruposUsuario;

use App\Models\GruposUsuario;

class StoreGruposUsuario
{
    public function __construct(private object $request)
    {
    }

    public function execute(): GruposUsuario
    {
        return GruposUsuario::create([
            'codigo' => $this->codigo(),
            'descricao' => $this->request->descricao,
        ]);
    }

    private function codigo()
    {
        $check = GruposUsuario::select('codigo')->orderBy('codigo','desc')->first();
        if(!empty($check)){
            $codigo = $check->codigo;
            $codigo++;
            return $codigo;
        }else{
            return 1;
        }

    }
}
