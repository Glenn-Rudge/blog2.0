<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $posts = BlogPost::all();

        if ($posts->count() < 0) {
            $this->command->info("There are no blog posts so no comments will be added.");
            return;
        }

        $commentCount = (int)$this->command->ask("How many comments would you like to create?");

        Comment::factory($commentCount)->create();
    }
}
