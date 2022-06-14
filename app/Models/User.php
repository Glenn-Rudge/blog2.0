<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    class User extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable;

        protected $fillable = [
            "first_name",
            "last_name",
            "avatar",
            "email",
            "password",
            "phone_number",
        ];

        protected $hidden = [
            "password",
            "remember_token",
        ];

        protected $casts = [
            "email_verified_at" => "datetime",
            "is_admin" => "boolean",
        ];

        public function scopeWithMostBlogPosts(Builder $query): Builder
        {
            return $query->withCount("blogPosts")->orderBy("blog_posts_count", "DESC");
        }

//        TODO:// Try to remember this
        // The withCount method takes an array, with the column and closure, for a more complicated query.
        // For example: withCount(["posts" => function () ])
        public function scopeWithMostBlogPostsLastMonth(Builder $query): Builder
        {
            return $query->withCount([
                "blogPosts" => function (Builder $query) {
                    $query->whereBetween(static::CREATED_AT, [now()->subMonths(1), now()]);
                }
            ])
                ->having("blog_posts_count", ">=", 2)
                ->orderBy("blog_posts_count", "DESC");
        }

        public function blogPosts(): HasMany
        {
            return $this->hasMany(BlogPost::class);
        }

        public function comments(): HasMany
        {
            return $this->hasMany(Comment::class);
        }

        public function avatar(): HasOne
        {
            return $this->hasOne(Avatar::class);
        }
    }
