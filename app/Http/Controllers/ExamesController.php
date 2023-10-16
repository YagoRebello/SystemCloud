<?php

namespace App\Http\Controllers;

use App\Actions\Exames\IndexFilterExames;
use App\Actions\Exames\StoreExames;
use App\Actions\Exames\UpdateExames;
use App\Http\Controllers\Controller;
use App\Http\Requests\Exames\StoreExameRequest;
use App\Http\Requests\Exames\UpdateExameRequest;
use App\Models\Exame;
use Illuminate\Http\Request;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->descricao)){
            $exames = (new IndexFilterExames($request))->execute();
        }else{
            $exames = Exame::all();
        }

        return view('exames.index', ['exames' => $exames,'request' => $request]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exames.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExameRequest $request)
    {
        if($request->validated()){
            try {
                (new StoreExames($request))->execute();

                return redirect(route('Exames.index'))->with('success', 'Exame criado com sucesso');
            }catch (StoreExameRequest $e){
                report($e);
                return redirect(route('Exames.index'))->with('danger', 'Ocorreu algum problema, tente novamente');
            }
        }
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
        $exames = Exame::where('id', $id)->first();
        if(!empty($exames)){
            return view('exames.edit', ['exames'=>$exames]);
        }
        else
        {
            return redirect(route('Exames.index'))->with(['danger','Ocorreu algum problema, tente novamente']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExameRequest $request, string $id)
    {
        try {
            (new UpdateExames($id,$request))->execute();
            return redirect(route('Exames.index',))->with(['success', 'Exame alterado com sucesso']);
        }catch ( \Exception $e){
            return redirect(route('Exames.index',))->with(['danger','Não foi possivel alterar o grupo de usuarios.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
