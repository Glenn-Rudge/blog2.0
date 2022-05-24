<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogPost;
    use App\Models\BlogPost;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class PostController extends Controller
    {
        public function index (Request $request)
        {
            if ($request->has("client-search")) {
                $clientSearch = $request->input("client-search");

                $posts = BlogPost::where("title", "like", "%{$clientSearch}%")->get();

                return view("posts.index", ["posts" => $posts]);
            }

            return view("posts.index", ["posts" => BlogPost::withCount("comments")->get()]);
        }

        public function create ()
        {
            return view("posts.create");
        }

        public function store (StoreBlogPost $request)
        {
            $validatedData = $request->validated();

            $post = BlogPost::create($validatedData);

            $request->session()->flash("status", "Blog post created successfully.");

            return redirect()->route("posts.show", ["post" => $post->id]);
        }

        public function show ($id)
        {
            return view("posts.show", ["post" => BlogPost::findOrFail($id)]);
        }

        public function edit ($id)
        {
            return view("posts.edit", ["post" => BlogPost::findOrFail($id)]);
        }

        public function update (StoreBlogPost $request, $id)
        {
            $post = BlogPost::findOrFail($id);

            $validatedData = $request->validated();

            $post->fill($validatedData);

            $post->save();

            $request->session()->flash("status", "Blog post updated successfully.");

            return redirect()->route("posts.show", ["post" => $post->id]);
        }

        public function destroy ($id, Request $request)
        {
            $post = BlogPost::findOrFail($id);

            $post->delete();

            $request->session()->flash("status", "Blog post deleted successfully");

            return redirect()->route("dashboard");
        }
    }
