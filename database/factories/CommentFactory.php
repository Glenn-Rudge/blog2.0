<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    public function definition()
    {
        return [
            "blog_post_id" => BlogPost::all()->random()->id,
            "content" => $this->faker->text,
        ];
    }
}
