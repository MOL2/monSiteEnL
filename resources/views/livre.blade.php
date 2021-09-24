<div>
    <a href="{{route('livres.create', )}}"> CREE UN NOUVEAU POST</a>
</div>

<div>

    <p>
        {{$livres->id}}
        {{$livres->title}}
    </p>
            <a href="{{route('livres.edit', $livres->id)}}"> MODIFIER</a>

            <form action="{{ route('livres.destroy',$livres->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>

</div>
