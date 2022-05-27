<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userCount = max((int)$this->command->ask("How many users would you like to create?", 20), 1);

        User::factory($userCount)->create();

        DB::table("users")->insert([
            "is_admin" => true,
            'first_name' => "John",
            'last_name' => "Doe",
            'email' => "john@example.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
