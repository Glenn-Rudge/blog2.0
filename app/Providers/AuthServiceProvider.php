<?php

    namespace App\Providers;

    use App\Models\BlogPost;
    use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
    use Illuminate\Support\Facades\Gate;

    class AuthServiceProvider extends ServiceProvider
    {
        protected $policies = [
            // 'App\Models\Model' => 'App\Policies\ModelPolicy',
            BlogPost::class => "App\Policies\BlogPostPolicy",
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
            Gate::before(function ($user, $ability) {
                if ($user->is_admin && in_array($ability, ["update", "delete"])) {
                    return true;
                };
            });

//
//            Gate::define("update.post", [BlogPostPolicy::class, "update"]);
//
//            Gate::define("delete.post", [BlogPostPolicy::class, "delete"]);
        }
    }
