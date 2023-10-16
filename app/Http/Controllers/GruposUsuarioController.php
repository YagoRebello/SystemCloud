<?php

namespace App\Http\Controllers;

use App\Actions\GruposUsuario\IndexFilterGruposUsuario;
use App\Actions\GruposUsuario\StoreGruposUsuario;
use App\Actions\GruposUsuario\UpdateGruposUsuario;
use App\Http\Requests\GruposUsuario\StoreGruposUsuarioRequest;
use App\Http\Requests\GruposUsuario\UpdateGruposUsuarioRequest;
use App\Models\GruposUsuario;
use Illuminate\Http\Request;

class GruposUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->descricao)){
            $grupousuario = (new IndexFilterGruposUsuario($request))->execute();
        }else{
            $grupousuario = GruposUsuario::all();
        }

        return view('gruposUsuario.index', ['grupousuario' => $grupousuario,'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gruposUsuario.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGruposUsuarioRequest $request)
    {
        //
        if($request->validated()){
            try {
                (new StoreGruposUsuario($request))->execute();

                return redirect(route('GruposUsuario.index'))->with('success', 'Grupo de Usuario criado com sucesso');
            }catch (StoreGruposUsuarioRequest $e){
                report($e);
                return redirect(route('GruposUsuario.index'))->with('danger', 'Ocorreu algum problema, tente novamente');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grupousuario = GruposUsuario::where('id', $id)->first();
        if(!empty($grupousuario)){
            return view('gruposUsuario.edit', ['grupousuario'=>$grupousuario]);
        }
        else
        {
            return redirect(route('GruposUsuario.index'))->with(['danger','Ocorreu algum problema, tente novamente']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGruposUsuarioRequest $request,string $id)
    {
        try {
            (new UpdateGruposUsuario($id,$request))->execute();
            return redirect(route('GruposUsuario.index',))->with(['success', 'Grupo de usuario alterado com sucesso']);
        }catch ( \Exception $e){
            return redirect(route('GruposUsuario.index',))->with(['danger','Não foi possivel alterar o grupo de usuarios.']);
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
