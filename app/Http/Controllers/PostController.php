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
            $posts = Cache::remember("posts", now()->addSeconds(60), function () {
                return BlogPost::latestWithRelations()->get();
            });

            $mostCommentedBlogPosts = Cache::remember("mostCommented", now()->addSeconds(60), function () {
                return BlogPost::latest()->mostCommented()->take(5)->get();
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
            return view("posts.create");
        }

        public function store(StoreBlogPost $request)
        {
            $validatedData = $request->validated();

            $validatedData["user_id"] = Auth::user()->id;

            $post = BlogPost::create($validatedData);

            if ($request->hasFile("thumbnail")) {
                $path = $request->file("thumbnail")->store("images/posts/thumbnails");
            }

            $request->session()->flash("status", "Blog post created successfully.");

            return redirect()->route("posts.show", ["post" => $post->id]);
        }

        public function show($id)
        {
            $post = Cache::remember("blog-post-{$id}", now()->addSeconds(30),
                function () use ($id) {
                    return BlogPost::with("comments", "tags", "user", "comments.user")
                        ->findOrFail($id);
                });

            return view("posts.show", [
                "post" => $post,
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
