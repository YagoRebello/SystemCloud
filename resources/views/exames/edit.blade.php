@extends("layouts.default",['title' => 'Editar Exames ' .$exames->descricao])
@section('content')

    <div class="panel-heading row">
        <div class="col-8">

        </div>
        <div class="col-4">
            <ul class="links">
                <li><a href="{{route('Exames.index')}}"><i class="bi bi-card-list"></i>Listagem</a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body row">
        <form method="POST" action="{{route('Exames.update', $exames->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-4">
                    <label for="titulo">Codigo</label>
                    <input class="form-control" name="codigo" type="text" placeholder="Codigo" readonly required value = "{{($exames->codigo)?$exames->codigo:null}}">
                </div>
                <div class="col-4">
                    <label for="titulo">Descrição</label>
                    <input id='descricao' name='descricao' class='form-control' type='text' placeholder="Descrição" required value = "{{($exames->descricao)?$exames->descricao:null}}">
                </div>
            </div>
            <hr>
            <div >
                <button class="btn btn-primary right">Gravar</button>
            </div>
        </form>
    </div>
@endsection
