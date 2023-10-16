<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mammoth;
use Illuminate\Support\Facades\File;

class LaudoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('laudo.index');
    }
    public function gerarDocumentoWord(Request $request)
    {
        $conteudo = $request->input('conteudo');

        // Converta o conteúdo HTML em um documento Word
        $docx = htmlDocx::asBlob($conteudo);

        // Crie um URL para o arquivo DOCX e envie-o como resposta
        return response()->stream(
            function () use ($docx) {
                echo $docx;
            },
            200,
            [
                'Content-Type' => 'application/msword',
                'Content-Disposition' => 'attachment; filename=meu_documento.docx',
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laudo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
