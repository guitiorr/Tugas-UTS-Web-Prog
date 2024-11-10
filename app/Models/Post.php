<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
        'author_id',
        'category_id',
    ];

    protected $with = ['user'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    }

}
