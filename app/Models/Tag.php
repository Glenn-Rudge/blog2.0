<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;

    class Tag extends Model
    {
        use HasFactory;

        public function blogPosts(): MorphToMany
        {
            return $this->morphedByMany(BlogPost::class, "taggable")->withTimestamps();
        }

        public function comments(): MorphToMany
        {
            return $this->morphedByMany(Comment::class, "taggable",)->withTimestamps();
        }
    }
