@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ $album->title }}</h1>
        <div>
            <a href="{{ route('albums.edit', $album) }}" class="btn btn-primary">Edit Album</a>
            <form action="{{ route('albums.destroy', $album) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this album?')">Delete Album</button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Image ID</th>
                    <th>Image</th>
                    <th>Image Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($album->getMedia('images') as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td><img src="{{ asset('storage/' . $image->id . '/' . $image->file_name) }}" class="img-thumbnail" alt="{{ $image->getCustomProperty('name', 'No Name') }}" style="max-height: 100px;"></td>
                    <td>{{ $image->getCustomProperty('name', 'No Name') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('albums.index') }}" class="btn btn-primary">Back to Albums</a>
</div>
@endsection
