@extends("layouts.default", ['title' => 'Laudo Médico'])
@section('content')
    @if (session('status'))
        <x-alert-default/>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html-docx/0.5.0/html-docx.js"></script>
    <script src="{{ asset('site/js/laudo/laudo.js')}}"></script>
    <div>
        <label for="conteudo">Conteúdo do Documento:</label>
        <textarea id="conteudo" name="conteudo" style="width: 100%; height: 400px;">
            Aqui estão algumas informações predefinidas...
            Linha 1 do conteúdo predefinido.
            Linha 2 do conteúdo predefinido.
            Linha 3 do conteúdo predefinido.
        </textarea>
    </div>
    <div class="">
        <button id="gerar-docx" class="btn btn-primary right">Gerar DOCX</button>
    </div>
@endsection
