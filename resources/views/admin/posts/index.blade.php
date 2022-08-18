<a href="{{ route('posts.create') }}">Criar Novo Post</a>



<hr>

@if (session('message'))
<div style="padding: 10px 20px;border-radius: 10px; background: red;color:white">
    {{ session('message') }}
</div>
@endif

<h1>POSTS</h1>

@foreach ($posts as $post)
<h2>{{ $post->title }} [<a href="{{ route('posts.show', $post->id) }}">Ver Detalhes</a> |
    <a href="{{route('posts.edit', $post->id)}}">Editar Post</a>
</h2>
<p>{{ $post->content }}</p>
@endforeach
