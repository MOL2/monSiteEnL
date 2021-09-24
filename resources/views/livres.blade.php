
<div>
    <a href="{{route('livres.create')}}"> CREE UN NOUVEAU LIVRE</a>
</div>

<div>
    @foreach($livres as $livre)
    <div>
        {{$livre->id}}
        {{$livre->title}}

        <a href="{{route('livres.show', $livre->id)}}"> VOIR</a>
        <a href="{{route('livres.edit', $livre->id)}}"> MODIFIER</a>

        <form action="{{ route('livres.destroy',$livre->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @endforeach
</div>
