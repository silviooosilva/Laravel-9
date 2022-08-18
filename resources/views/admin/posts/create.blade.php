<h1>Cadastrar no Post</h1>

@if ($errors->any())
<div>
    @foreach ($errors->all() as $erro)
    <li>{{ $erro }}</li>
    @endforeach
</div>
@endif


<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título" value="{{ old('title') }}">
    <br><br>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Conteúdo" value="{{ old('content') }}"></textarea>
    <br><br>
    <input type="submit" value="Enviar">

</form>
