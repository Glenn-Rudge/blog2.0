<?php

    namespace App\Models;

    use App\Scopes\LatestScope;
    use App\Traits\Taggable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Facades\Cache;

    class Comment extends Model
    {
        use HasFactory, SoftDeletes, Taggable;

        protected $fillable = ["user_id", "content"];

        public function commentable(): MorphTo
        {
            return $this->morphTo();
        }

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public static function boot()
        {
            parent::boot();

            static::addGlobalScope(new LatestScope);

            static::creating(function (Comment $comment) {
                if ($comment->commentable_type === BlogPost::class) {
                    Cache::forget("blog-post-{$comment->commentable_id}");
                }
            });
        }
    }
