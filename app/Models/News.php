<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'tags' => 'array',
        'status' => PostStatus::class
    ];

    public function getImageAttribute($value)
    {
        return Storage::url($value);
    }
}
