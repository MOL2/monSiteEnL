
<div>
    <a href="{{route('posts.create' )}}"> CREE UN NOUVEAU POST</a>
</div>

<div>
    @foreach($posts as $post)
    <div>
        {{$post->id}}
        {{$post->title}}
        <a href="{{route('posts.show', $post->id)}}"> VOIR</a>
        <a href="{{route('posts.edit', $post->id)}}"> MODIFIER</a>

        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>
@endforeach
</div>
