<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreComment;
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;

    class UserCommentController extends Controller
    {
        public function __construct()
        {
            $this->middleware("auth")->only(["store"]);
        }

        public function store(User $user, StoreComment $request): \Illuminate\Http\RedirectResponse
        {
            $validatedData = $request->validated();
            $validatedData["user_id"] = Auth::id();

            $user->commentsOn()->create($validatedData);

            $request->session()->flash("status", "You've commented!");

            return redirect()->back();
        }
    }
