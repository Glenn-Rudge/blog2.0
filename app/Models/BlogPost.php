<?php

    namespace App\Models;

    use App\Scopes\DeletedAdminScope;
    use App\Scopes\LatestScope;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Facades\Cache;

    class BlogPost extends Model
    {
        use HasFactory, SoftDeletes;

        protected $fillable = ["title", "content", "user_id"];

//        public function scopeLatest(Builder $query): Builder
//        {
//            return $query->orderBy(static::CREATED_AT, "DESC");
//        }

        // Local Scope
        public function scopeMostCommented(Builder $query): Builder
        {
            return $query->withCount("comments")->orderBy("comments_count", "DESC");
        }

        public function scopeLatestWithRelations(Builder $query): Builder
        {
            return $query->latest()
                ->withCount("comments")
                ->with("user")
                ->with("tags");
        }

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class, "user_id", "id");
        }

        public function comments(): HasMany
        {
            return $this->hasMany(Comment::class);
        }

        public function tags(): BelongsToMany
        {
            return $this->belongsToMany(Tag::class)->withTimestamps();
        }

        public static function boot()
        {
            // Global Scope
            static::addGlobalScope(new LatestScope);

            static::AddGlobalScope(new DeletedAdminScope);

            parent::boot();

            static::updating(function (BlogPost $blogPost) {
                Cache::forget("blog-post-{$blogPost->id}");
            });

            static::restoring(function (BlogPost $blogPost) {
                $blogPost->comments()->restore();
            });
        }
    }
