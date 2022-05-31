<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogPost;
    use App\Models\BlogPost;
    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Cache;


    class PostController extends Controller
    {
        public function __construct()
        {
            $this->middleware("auth")
                ->only(["create", "store", "edit", "update", "destroy"]);
        }

        public function index(Request $request)
        {
            // Cache Configuration
//            $posts = Cache::tags(["blog-post"])->remember("posts", now()->addSeconds(60), function () {
//                return BlogPost::withCount("comments")->with("user")->get();
//            });

            $posts = Cache::remember("posts", now()->addSeconds(60), function () {
                return BlogPost::withCount("comments")->with("user")->get();
            });

            $mostCommentedBlogPosts = Cache::remember("mostCommented", now()->addSeconds(60), function () {
                return BlogPost::mostCommented()->take(5)->get();
            });

            $mostActive = Cache::remember("mostActive", now()->addSeconds(60), function () {
                return User::withMostBlogPosts()->take(5)->get();
            });

            $mostActiveLastMonth = Cache::remember("mostActiveLastMonth", now()->addSeconds(60), function () {
                return User::withMostBlogPostsLastMonth()->take(5)->get();
            });

            if ($request->has("client-search")) {
                $clientSearch = $request->input("client-search");

                $posts = BlogPost::where("title", "like", "%{$clientSearch}%")->get();

                return view("posts.index", ["posts" => $posts]);
            }

            return view("posts.index",
                [
                    "posts" => $posts,
                    "most_commented" => $mostCommentedBlogPosts,
                    "most_active" => $mostActive,
                    "most_active_last_month" => $mostActiveLastMonth,
                ]
            );
        }

        public function create()
        {
//            $this->authorize("create");

            return view("posts.create");
        }

        public function store(StoreBlogPost $request)
        {
            $validatedData = $request->validated();

            $validatedData["user_id"] = Auth::user()->id;

            $post = BlogPost::create($validatedData);

            $request->session()->flash("status", "Blog post created successfully.");

            return redirect()->route("posts.show", ["post" => $post->id]);
        }

        public function show($id)
        {
            $post = Cache::tags(["blog-post"])->remember("blog-post-{$id}", now()->addSeconds(30),
                function () use ($id) {
                    return BlogPost::with("comments")->findOrFail($id);
                });

            $sessionId = session()->getId();

            $counterKey = "blog-post-{$id}-counter";

            $userKey = "blog-post-{$id}-user";

            $users = Cache::tags(["blog-post"])->get($userKey, []);

            $usersUpdate = [];

            $difference = 0;

            $counter = 0;

            $now = now();

            foreach ($users as $session => $lastVisit) {
                if ($now->diffInMinutes($lastVisit) >= 1) {
                    $difference--;
                } else {
                    $usersUpdate[$session] = $lastVisit;
                }
            }

            if (
                !array_key_exists($sessionId, $users)
                || $now->diffInMinutes($users[$sessionId]) >= 1
            ) {
                $difference++;
            }

            $usersUpdate[$sessionId] = $now;

            Cache::tags(["blog-post"])->forever($userKey, $usersUpdate);

            if (!Cache::has($counterKey)) {
                Cache::tags(["blog-post"])->forever($counterKey, 1);
            } else {
                Cache::tags(["blog-post"])->increment($counterKey, $difference);
            }

            $counter = Cache::tags(["blog-post"])->get($counterKey);

            return view("posts.show", [
                "post" => $post,
                "counter" => $counter
            ]);
        }

        /**
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */
        public function edit($id)
        {
            $post = BlogPost::findOrFail($id);

            $this->authorize("update", $post);

            return view("posts.edit", ["post" => $post]);
        }

        /**
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */
        public function update(StoreBlogPost $request, $id)
        {
            $post = BlogPost::findOrFail($id);

            $this->authorize("update", $post);

            $validatedData = $request->validated();

            $post->fill($validatedData);

            $post->save();

            $request->session()->flash("status", "Blog post updated successfully.");

            return redirect()->route("posts.show", ["post" => $post->id]);
        }

        /**
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */
        public function destroy($id, Request $request)
        {
            $post = BlogPost::findOrFail($id);

            $this->authorize("delete", $post);

            $post->delete();

            $request->session()->flash("status", "Blog post deleted successfully");

            return redirect()->route("dashboard");
        }

        public function restore($id): RedirectResponse
        {
            $post = BlogPost::findOrFail($id);

            $post->restore();

            return redirect()->route("dashboard");
        }
    }
