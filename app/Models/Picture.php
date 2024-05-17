<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['name', 'album_id'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
