<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;

    class DatabaseSeeder extends Seeder
    {
        public function run ()
        {
            if ($this->command->confirm("Do you want to refresh the database?", false)) {
                $this->command->call("migrate:refresh");
                $this->command->info("Database refreshed successfully.");
            }

            $this->call([
                UserSeeder::class,
                BlogPostSeeder::class,
                CommentSeeder::class,
            ]);
        }
    }
