<?php

    namespace App\Providers;

    use App\Models\BlogPost;
    use App\Models\Comment;
    use App\Observers\BlogPostObserver;
    use App\Observers\CommentObserver;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            //
        }

        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            Schema::defaultStringLength(191);

            BlogPost::observe(BlogPostObserver::class);
            Comment::observe(CommentObserver::class);
        }
    }
