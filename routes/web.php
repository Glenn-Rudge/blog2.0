<?php

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\PostTagController;
    use App\Models\BlogPost;
    use Illuminate\Support\Facades\Route;

    Route::get("/", [HomeController::class, "home"])->name("home.index");

    Route::get("/contact", [HomeController::class, "contact"])->name("home.contact");

    Route::get("/about", [HomeController::class, "about"])->name("home.about");

    Route::get("/dashboard", function () {
        return view("dashboard", ["posts" => BlogPost::all()]);
    })->middleware(["auth"])->name("dashboard");

    Route::resource("posts", PostController::class);

    Route::get("/posts/tag/{tag}", [PostTagController::class, "index"])->name("posts.tags.index");

    Route::get("/restore-post/{id}", [PostController::class, "restore"])->name("posts.restore");

    require __DIR__."/auth.php";

    //    TODO:// filter comment input for HTML and JavaScript
    //    TODO:// create tags polymorphic table
    //    TODO: // set up views for posts
