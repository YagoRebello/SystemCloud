<?php

namespace App\Actions\Exames;

use App\Models\Exame;

class StoreExames
{
    public function __construct(private object $request)
    {
    }

    public function execute(): Exame
    {
        return Exame::create([
            'codigo' => $this->codigo(),
            'descricao' => $this->request->descricao,
        ]);
    }

    private function codigo()
    {
        $check = Exame::select('codigo')->orderBy('codigo','desc')->first();
        if(!empty($check)){
            $codigo = $check->codigo;
            $codigo++;
            return $codigo;
        }else{
            return 1;
        }

    }
}
