@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('albums.handlePictures', $album) }}" method="POST">
        @csrf
        <p>This album is not empty. Choose an option:</p>
        <button name="action" value="delete" class="btn btn-danger">Delete all pictures in the album</button>
        <button name="action" value="move" class="btn btn-primary">Move pictures to another album</button>
        
        @if ($albums->count() > 1)
            <select name="new_album_id" class="form-control mt-3">
                @foreach ($albums as $alb)
                    @if ($alb->id !== $album->id)
                        <option value="{{ $alb->id }}">{{ $alb->title }}</option>
                    @endif
                @endforeach
            </select>
        @endif
    </form>
</div>
@endsection
