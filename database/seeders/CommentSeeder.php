<?php

    namespace Database\Seeders;

    use App\Models\BlogPost;
    use App\Models\Comment;
    use App\Models\User;
    use Illuminate\Database\Seeder;

    class CommentSeeder extends Seeder
    {
        public function run()
        {
            $posts = BlogPost::all();
            $users = User::all();

            if ($posts->count() === 0 || $users->count() === 0) {
                $this->command->info('There are no blog posts or users, so no comments will be added');
                return;
            }

            $commentsCount = (int) $this->command->ask('How many comments would you like?', 150);

            $rand = rand(1, $commentsCount - 1);
            $postCommentsCount = $commentsCount - $rand;
            $userCommentsCount = $commentsCount - ($commentsCount - $rand);

            $comments = Comment::factory($postCommentsCount)->make()->each(function ($comment) use ($posts, $users) {
                $comment->user()->associate($users->random());
                $comment->commentable()->associate($posts->random())
                    ->save();
            });

            $comments = Comment::factory($userCommentsCount)->make()->each(function ($comment) use ($users) {
                $comment->user()->associate($users->random());
                $comment->commentable()->associate($users->random())
                    ->save();
            });
        }
    }
