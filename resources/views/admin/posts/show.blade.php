<h1>Detalhes do Post <strong style="color:dodgerblue;">{{ $post->title }}</strong></h1>
<ul>
    <li><strong>Titulo: </strong>{{$post->title}}</li>
    <li><strong>Conteúdo: </strong>{{$post->content}}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <input type="submit" value="Deletar o Post {{$post->title}}">
</form>
