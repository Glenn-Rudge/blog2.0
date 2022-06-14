<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\Avatar;
    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\Rules;

    class RegisteredUserController extends Controller
    {
        /**
         * Display the registration view.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("auth.register");
        }

        /**
         * Handle an incoming registration request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         *
         * @throws \Illuminate\Validation\ValidationException
         */
        public function store(Request $request)
        {
            $request->validate([
                "first_name" => ["required", "string", "max:255"],
                "last_name" => ["required", "string", "max:255"],
                "avatar" => ["image:png,jpeg,jpg"],
                "email" => ["required", "string", "email", "max:255", "unique:users"],
                "password" => ["required", "confirmed", Rules\Password::defaults()],
                "phone_number" => ["required"],
            ]);

            $user = User::create([
                "first_name" => $request->input("first_name"),
                "last_name" => $request->input("last_name"),
                "email" => $request->input("email"),
                "password" => Hash::make($request->password),
                "phone_number" => $request->input("phone_number"),
            ]);

            $user->refresh();

            if ($request->hasFile("avatar")) {
                $path = $request->file("avatar")->store("images/users/avatar");

                $user->avatar()->save(
                    Avatar::create([
                        "path" => $path
                    ])
                );
            }

            event(new Registered($user));

            Auth::login($user);

            $request->session()->flash("status", "You're logged in!");

            return redirect(RouteServiceProvider::HOME);
        }
    }
