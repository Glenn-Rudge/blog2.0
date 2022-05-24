<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

class AuthorFactory extends Factory
{
    public function definition()
    {
        return [

        ];
    }

    public function configure ()
    {
        return $this->afterCreating(function (Author $author) {
           $author->profile()->save(Profile::factory()->make());
        });
    }
}
