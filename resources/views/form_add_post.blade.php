
    <form method="post" action="{{route('posts.store')}}">
        @csrf

        <div class="mb-3">
            <label class="form-label">titre</label>
            <input type="text" name="title" >
        </div>

        <div class="mb-3">
            <label class="form-label">body</label>
            <input type="text" name="body" >
        </div>

        <input type="submit">

    </form>

