<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        $blogPostCount = $this->command->ask("How many blog posts would you like to create?", 100);

        BlogPost::factory($blogPostCount)->create();
    }
}
