<?php

namespace Database\Factories;

use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    public function configure()
    {
        return $this->afterCreating(function (BlogPost $post) {
            $post->comments()->save(Comment::factory()->make());
        });
    }

    public function definition()
    {
        return [
            "user_id" => User::all()->random()->id,
            "title" => $this->faker->sentence(10),
            "content" => $this->faker->paragraphs(5, true),
        ];
    }

    public function newTitleAndContent()
    {
        return $this->state([
            "title" => "new title",
            "content" => "new content",
        ]);
    }
}
