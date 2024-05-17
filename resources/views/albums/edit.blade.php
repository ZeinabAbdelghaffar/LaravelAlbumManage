@extends('layouts.app')

@section('title', 'Edit Album')

@section('content')
<div class="container">
    <h1>Edit {{ $album->title }} Album</h1>
    <form action="{{ route('albums.update', $album) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Album Title -->
        <div class="form-group">
            <label for="title">Album Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $album->title }}" required>
        </div>

        <!-- Upload Images -->
        <div class="form-group">
            <label for="images">Upload Images:</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>

        <!-- Image Names -->
        <div class="form-group">
            <label for="image_names">Image Names:</label>
            <input type="text" name="image_names[]" class="form-control" placeholder="Enter image name" multiple>
        </div>

        <!-- Existing Images -->
        <div class="form-group">
            <h2>Existing Images:</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image ID</th>
                            <th>Image</th>
                            <th>Image Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($album->getMedia('images') as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td><img src="{{ asset('storage/' . $image->id . '/' . $image->file_name) }}" class="img-thumbnail" alt="{{ $image->getCustomProperty('name', 'No Name') }}" style="max-height: 100px;"></td>
                            <td>{{ $image->getCustomProperty('name', 'No Name') }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" onclick="removeImage('{{ $image->id }}')">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Album</button>
    </form>

    <a href="{{ route('albums.show', $album) }}" class="btn btn-secondary mt-3">Back to Album Details</a>
</div>

<script>
    function removeImage(imageId) {
        if (confirm('Are you sure you want to remove this image?')) {
            fetch(`/albums/{{ $album->id }}/remove-image/${imageId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert('Failed to remove image.');
                }
            });
        }
    }
</script>
@endsection
