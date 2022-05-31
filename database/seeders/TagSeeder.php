<?php

    namespace Database\Seeders;

    use App\Models\Tag;
    use Illuminate\Database\Seeder;

    class TagSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $tags = collect(["Science", "Sports", "Politics", "Entertainment", "Economy"]);

            $tags->each(function ($tagName) {
                $tag = new Tag;
                $tag->name = $tagName;
                $tag->save();
            });
        }
    }
