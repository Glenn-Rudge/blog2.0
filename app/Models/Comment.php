<?php

    namespace App\Models;

    use App\Scopes\LatestScope;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Comment extends Model
    {
        use HasFactory, SoftDeletes;

//        public function scopeLatest(Builder $query)
//        {
//            $query->orderBy(static::CREATED_AT, "DESC");
//        }

        public function blogPost(): BelongsTo
        {
            return $this->belongsTo(BlogPost::class, "blog_post_id", "id");
        }

        public static function boot()
        {
            parent::boot();

            static::addGlobalScope(new LatestScope);
        }
    }
