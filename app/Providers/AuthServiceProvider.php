<?php

    namespace App\Providers;

    use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

    class AuthServiceProvider extends ServiceProvider
    {
        protected $policies = [
            "App\Models\BlogPost" => "App\Policies\BlogPostPolicy",
            "App\Models\User" => "App\Policies\UserPolicy",
        ];

        public function boot()
        {
            $this->registerPolicies();

//            Gate::define("update-post", function (User $user, BlogPost $post) {
//                return $user->id === $post->user_id;
//            });
//
//            Gate::define("delete-post", function (User $user, BlogPost $post) {
//                return $user->id === $post->user_id;
//            });
//
//            Gate::before(function ($user, $ability) {
//                if ($user->is_admin && in_array($ability, ["update", "delete"])) {
//                    return true;
//                };
//            });

//
//            Gate::define("update.post", [BlogPostPolicy::class, "update"]);
//
//            Gate::define("delete.post", [BlogPostPolicy::class, "delete"]);
        }
    }
