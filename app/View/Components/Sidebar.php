<?php

    namespace App\View\Components;

    use App\Models\BlogPost;
    use App\Models\User;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\View\Component;

    class Sidebar extends Component
    {
        public $mostCommented;
        public $mostActive;
        public $withMostBlogPostsLastMonth;

        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($mostCommented, $mostActive, $withMostBlogPostsLastMonth)
        {
            $this->mostCommented = $mostCommented;
            $this->mostActive = $mostActive;
            $this->withMostBlogPostsLastMonth = $withMostBlogPostsLastMonth;
        }

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|\Closure|string
         */
        public function render()
        {
            $this->mostCommented = Cache::remember("mostCommented", now()->addSeconds(60), function () {
                return BlogPost::mostCommented()->take(5)->get();
            });

            $this->mostActive = Cache::remember("mostActive", now()->addSeconds(60), function () {
                return User::withMostBlogPosts()->take(5)->get();
            });

            $this->withMostBlogPostsLastMonth = Cache::remember("withMostBlogPostsLastMonth", now()->addSeconds(60),
                function () {
                    return User::withMostBlogPostsLastMonth()->take(5)->get();
                });

            return view('components.sidebar',
                [
                    "mostCommented" => $this->mostCommented,
                    "mostActive" => $this->mostActive,
                    "withMostBlogPostsLastMonth" => $this->withMostBlogPostsLastMonth,
                ]);
        }
    }