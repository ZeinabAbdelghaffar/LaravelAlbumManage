@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Albums</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('albums.create') }}" class="btn btn-primary mb-3">Create New Album</a>
            <div class="card">
                <div class="card-body">
                    @if($albums->isEmpty())
                        <p>No albums found.</p>
                    @else
                    <h1>All Albums</h1>
                        <ul class="list-group">
                            @foreach($albums as $album)
                                <li class="list-group-item">
                                    <a href="{{ route('albums.show', $album->id) }}">{{ $album->title }}</a>
                                    <p>{{ $album->description }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
