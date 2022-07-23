<?php

    namespace Database\Seeders;

    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class UserSeeder extends Seeder
    {
        public function run()
        {
            $userCount = max((int) $this->command->ask("How many users would you like to create?", 20), 1);

            User::factory($userCount)->create();

            User::create([
                "is_admin" => true,
                'first_name' => "Glenn",
                'last_name' => "Rudge",
                'email' => "glenn@hyperapplab.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
