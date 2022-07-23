<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\UpdateUserRequest;
    use App\Models\Image;
    use App\Models\User;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    class UserController extends Controller
    {
        public function __construct()
        {
            $this->middleware("auth");
            $this->authorizeResource(User::class, "user");
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request  $request
         * @return Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  User  $user
         * @return Application|Factory|View
         */
        public function show(User $user): Application|Factory|View
        {
            return view("users.show", ["user" => $user]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  User  $user
         * @return Application|Factory|View
         */
        public function edit(User $user): Application|Factory|View
        {
            return view("users.edit", ["user" => $user]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  UpdateUserRequest  $request
         * @param  User  $user
         * @return RedirectResponse
         */
        public function update(UpdateUserRequest $request, User $user): RedirectResponse
        {
            if ($request->hasFile("avatar")) {
                $path = $request->file("avatar")->store("images/users/avatars");

                if ($user->image) {
                    $user->image->path = $path;
                    $user->image->save();
                } else {
                    $user->image()->save(
                        Image::make(["path" => $path])
                    );
                }
            }
            $request->session()->flash("status", "Profile updated successfully");

            return redirect()->back();
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  User  $user
         * @return Response
         */
        public function destroy(User $user)
        {
            //
        }
    }
