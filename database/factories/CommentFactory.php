<?php

    namespace Database\Factories;

    use App\Models\BlogPost;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class CommentFactory extends Factory
    {

        public function definition()
        {
            return [
                "blog_post_id" => BlogPost::all()->random()->id,
                "user_id" => User::all()->random()->id,
                "content" => $this->faker->text,
                "created_at" => $this->faker->dateTimeBetween("-3 months"),
            ];
        }
    }
