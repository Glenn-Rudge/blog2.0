<?php

    use App\Http\Controllers\AboutController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Route;

    Route::get("/", [HomeController::class, "home"])->name("home.index");
    Route::get("/contact", [HomeController::class, "contact"])->name("home.contact");
    Route::get("/about", [HomeController::class, "about"])->name("home.about");


    Route::get("/dashboard", function () {
        return view("dashboard");
    })->middleware(["auth"])->name("dashboard");

    Route::resource("posts", PostController::class);

    require __DIR__ . "/auth.php";
