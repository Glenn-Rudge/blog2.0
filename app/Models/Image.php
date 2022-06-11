<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Storage;

    class Image extends Model
    {
        use HasFactory;

        public $fillable = ["blog_post_id", "path"];

        public function blogPost()
        {
            return $this->belongsTo(BlogPost::class, "blog_post_id", "id");
        }

        public function url(): string
        {
            return Storage::url($this->path);
        }
    }
