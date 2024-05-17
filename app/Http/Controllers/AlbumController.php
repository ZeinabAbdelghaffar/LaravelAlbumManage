<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_names.*' => 'required|string',
        ]);

        $userId = Auth::id();

        $album = Album::create([
            'title' => $request->title,
            'user_id' => $userId,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = $request->image_names[$key] ?? '';
                $media = $album->addMedia($image)->toMediaCollection('images');
                $media->setCustomProperty('name', $imageName);
                $media->save();
            }
        }

        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.show', compact('album'));
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $album->title = $request->title;
        $album->save();

        if ($request->hasFile('images')) {
            $imageNames = $request->input('image_names', []);
            foreach ($request->file('images') as $index => $image) {
                $media = $album->addMedia($image)->toMediaCollection('images');
                if (isset($imageNames[$index])) {
                    $media->setCustomProperty('name', $imageNames[$index]);
                    $media->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        if ($album->getMedia('images')->count() > 0) {
            return view('albums.delete', ['album' => $album, 'albums' => Album::all()]);
        } else {
            $album->delete();
            return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
        }
    }

    public function handlePictures(Request $request, Album $album)
    {
        if ($request->action == 'delete') {
            $album->clearMediaCollection('images');
            $album->delete();
            return redirect()->route('albums.index')->with('success', 'Album and all pictures deleted successfully.');
        } elseif ($request->action == 'move') {
            $newAlbum = Album::find($request->new_album_id);
            if ($newAlbum) {
                foreach ($album->getMedia('images') as $media) {
                    $media->model_id = $newAlbum->id;
                    $media->save();
                }
                $album->delete();
                return redirect()->route('albums.index')->with('success', 'Pictures moved to another album successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to move pictures. Please try again.');
            }
        }
    }

    public function removeImage($albumId, $imageId)
    {
        $album = Album::findOrFail($albumId);
        $image = $album->getMedia('images')->where('id', $imageId)->first();

        if ($image) {
            $image->delete();
        }

        return response()->json(['success' => 'Image removed successfully.']);
    }
}
