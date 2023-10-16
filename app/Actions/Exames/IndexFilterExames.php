<?php

namespace App\Actions\Exames;

use App\Models\Exame;

class IndexFilterExames
{
    public function __construct(private object $request)
    {
    }

    public function execute()
    {
        $descricao = $this->request->descricao;
        return Exame::where('descricao','like','%'.$descricao.'%')->get();
    }
}
