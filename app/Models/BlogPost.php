<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["title", "content", "user_id"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public static function boot ()
    {
        parent::boot();

        static::restoring(function (BlogPost $blogPost) {
            $blogPost->comments()->restore();
        });
    }
}
