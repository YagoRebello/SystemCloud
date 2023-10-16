<?php

namespace App\Actions\Exames;

use App\Models\Exame;

class UpdateExames
{
    public function __construct(private string $id,private object $request){}

    public function execute(): Exame
    {
        $exames = Exame::find($this->id);
        $exames->descricao = $this->request->descricao;
        $exames->save();
        return $exames;
    }
}
