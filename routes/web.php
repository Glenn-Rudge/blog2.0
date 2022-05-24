<?php

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Route;
    use App\Models\BlogPost;

    Route::get("/", [HomeController::class, "home"])->name("home.index");
    Route::get("/contact", [HomeController::class, "contact"])->name("home.contact");
    Route::get("/about", [HomeController::class, "about"])->name("home.about");

    Route::get("/dashboard", function () {
        return view("dashboard")->with("posts", BlogPost::all());
    })->middleware(["auth"])->name("dashboard");

    Route::resource("posts", PostController::class);

    require __DIR__ . "/auth.php";

//    TODO:// filter comment input for HTML and JavaScript
//    TODO:// create tags polymorphic table
//    TODO:// test login routes with phpunit
//    TODO: // seed database with test data
//    TODO: // set up soft deletes
//    TODO: // set up views for posts
