@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Album</h1>
    <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Album Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="images">Album Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple required>
        </div>
        <div class="form-group">
            <label for="image_names">Image Names</label>
            @for($i = 0; $i < count(old('image_names', [''])); $i++)
                <input type="text" name="image_names[]" class="form-control" required>
            @endfor
        </div>
        <button type="submit" class="btn btn-primary">Create Album</button>
    </form>
</div>
@endsection
