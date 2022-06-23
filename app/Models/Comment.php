<?php

    namespace App\Models;

    use App\Scopes\LatestScope;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Facades\Cache;

    class Comment extends Model
    {
        use HasFactory, SoftDeletes;

        protected $fillable = ["user_id", "content"];

        public function commentable()
        {
            $this->morphTo();
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
//                Cache::forget("blog-post-{$comment->blog_post_id}");

                if ($comment->commentable_type == BlogPost::class) {
//                    Cache::forget("blog-post")->forget("blog-post-{$comment->commentable_id}");
                    Cache::forget("blog-post-{$comment->commentable_id}");
                }
            });
        }
    }
