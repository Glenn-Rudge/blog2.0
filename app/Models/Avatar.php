<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Storage;

    class Avatar extends Model
    {
        use HasFactory;

        public $fillable = ["user_id"];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function url(): string
        {
            return Storage::url($this->path);
        }
    }
