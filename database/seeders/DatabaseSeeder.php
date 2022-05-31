<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        public function run()
        {
            if ($this->command->confirm("Do you want to refresh the database?", false)) {
                $this->command->call("migrate:refresh");
                $this->command->info("Database refreshed successfully.");
            }

            // Cache Configuration
//            Cache::tags(["blog-post"])->flush();

            $this->call([
                UserSeeder::class,
                BlogPostSeeder::class,
                CommentSeeder::class,
            ]);
        }
    }
