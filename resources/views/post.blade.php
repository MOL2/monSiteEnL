
<div>
    <a href="{{route('posts.create', )}}"> CREE UN NOUVEAU POST</a>
</div>

<div>
        <p>
            {{$posts->id}}
            {{$posts->title}}
        </p>

            <a href="{{route('posts.edit', $posts->id)}}"> MODIFIER</a>

            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </p>

</div>

