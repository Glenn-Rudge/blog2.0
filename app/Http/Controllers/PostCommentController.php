<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreComment;
    use App\Jobs\SendCommentEmail;
    use App\Models\BlogPost;
    use Illuminate\Support\Facades\Auth;

    class PostCommentController extends Controller
    {
        public function __construct()
        {
            $this->middleware("auth")->only(["store"]);
        }

        public function store(BlogPost $post, StoreComment $request)
        {
            $validatedData = $request->validated();
            $validatedData["user_id"] = Auth::id();

            $comment = $post->comments()->create($validatedData);

            $this->dispatch(new SendCommentEmail($post, $comment));

            $request->session()->flash("status", "Commented created.");

            return redirect()->back();
        }
    }
