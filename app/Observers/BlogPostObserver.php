<?php

    namespace App\Observers;

    use App\Models\BlogPost;
    use Illuminate\Support\Facades\Cache;

    class BlogPostObserver
    {
        /**
         * Handle the BlogPost "created" event.
         *
         * @param  \App\Models\BlogPost  $blogPost
         * @return void
         */
        public function created(BlogPost $blogPost)
        {
            //
        }

        /**
         * Handle the blogPost "updating" event.
         *
         * @param  BlogPost  $blogPost
         */
        public function updating(BlogPost $blogPost)
        {
            Cache::forget("blog-post-{$blogPost->id}");
        }

        /**
         * Handle the BlogPost "updated" event.
         *
         * @param  \App\Models\BlogPost  $blogPost
         * @return void
         */
        public function updated(BlogPost $blogPost)
        {
            //
        }

        /**
         * Handle the BlogPost "deleting" event.
         *
         * @param  BlogPost  $blogPost
         */
        public function deleting(BlogPost $blogPost)
        {
            $blogPost->comments()->delete();
        }

        /**
         * Handle the BlogPost "deleted" event.
         *
         * @param  \App\Models\BlogPost  $blogPost
         * @return void
         */
        public function deleted(BlogPost $blogPost)
        {
            //
        }

        public function restoring(BlogPost $blogPost)
        {
            $blogPost->comments()->restore();
        }

        /**
         * Handle the BlogPost "restored" event.
         *
         * @param  \App\Models\BlogPost  $blogPost
         * @return void
         */
        public function restored(BlogPost $blogPost)
        {
            //
        }

        /**
         * Handle the BlogPost "force deleted" event.
         *
         * @param  \App\Models\BlogPost  $blogPost
         * @return void
         */
        public function forceDeleted(BlogPost $blogPost)
        {
            //
        }
    }
