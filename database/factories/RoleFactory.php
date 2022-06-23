<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
     */
    class RoleFactory extends Factory
    {
        public array $roles = [
            "Software Engineer",
            "Software Architect",
            "Front-End Web Developer",
            "Back-End Web Developer",
            "DevOps",
            "IT",
            "Student",
        ];

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            $role = random_int(0, 6);

            return [
                "role" => $role[$role],
            ];
        }
    }
