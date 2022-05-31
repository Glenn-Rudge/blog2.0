<?php

    namespace Database\Seeders;

    use App\Models\BlogPost;
    use App\Models\Tag;
    use Illuminate\Database\Seeder;

    class BlogPostTagSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $tagCount = Tag::all()->count();

            if ($tagCount === 0) {
                $this->command->info("There are no tags, skipping tag assignment to post.");
                return;
            }

            $minTags = (int) $this->command->ask("Minimum amount of tags each blog post? Default is 0", 0);
            $maximumTags = max((int) $this->command->ask("Maximum amount of tags per blog post?", $tagCount),
                $tagCount);

            BlogPost::all()->each(function (BlogPost $post) use ($minTags, $maximumTags) {
                $take = random_int($minTags, $maximumTags);
                $tags = Tag::inRandomOrder()->take($take)->get()->pluck("id");
                $post->tags()->sync($tags);
            });
        }
    }
