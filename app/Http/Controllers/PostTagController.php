<?php

    namespace App\Http\Controllers;

    use App\Models\Tag;
    use Illuminate\Support\Facades\Cache;

    class PostTagController extends Controller
    {
        public function index($tag)
        {
            $tag = Tag::findorFail($tag);

            $posts = Cache::remember("posts", now()->addSeconds(60), function () use ($tag) {
                return $tag->blogPosts;
            });


            return view("posts.index", ["posts" => $tag->blogPosts]);
        }
    }
