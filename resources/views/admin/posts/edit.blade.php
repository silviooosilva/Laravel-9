<h1>Editar Post <strong>{{ $post->title }}</strong></h1>

@if ($errors->any())
<div>
    @foreach ($errors->all() as $erro)
    <li>{{ $erro }}</li>
    @endforeach
</div>
@endif


<form action="" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title }}">
    <br><br>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Conteúdo" value="{{ $post->content }}"></textarea>
    <br><br>
    <input type="submit" value="Enviar">

</form>
