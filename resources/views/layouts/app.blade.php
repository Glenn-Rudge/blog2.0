@include("layouts.partials.header")

<!-- Main Layout -->
<main>
    <!-- Carousel Wrapper -->
    <!-- Indicators -->
    <img class="d-block w-lg-100 mt-5" src="{{ asset("images/art/banner1.jpg") }}">
    </div>
    <!-- Slides -->
    <!-- Carousel Wrapper -->

    <div class="container mt-5 pt-3">
        @if(session("status"))
            <div class="alert alert-info">
                <p class="mb-0 text-lead text-center">{{ session('status')}}</p>
            </div>

        @endif
        <hr>

        <!-- Blog -->
        <div class="row mt-5 pt-3">

            <!-- Main listing -->
            <div class="col-lg-9 col-12 mt-1">

                <!-- Section: Blog v.3 -->
                <section class="pb-3 text-center text-lg-left">
                    @yield("content")
                </section>
                <!-- Section: Blog v.3 -->
                @if(Request::route()->getName() == "posts.index")
                    @include("layouts.partials.pagination")
                @endif

            </div>
            <!-- Main listing -->
            @if(Request::route()->getName() == "home.index" || Request::route()->getName() == "posts.index")
                <x-sidebar mostCommented="$mostCommented" mostActive="$mostActive"
                           withMostBlogPostsLastMonth="$withMostBlogPostsLastMonth"></x-sidebar>
                {{--                @include("layouts.partials.sidebar",--}}
                {{--                [--}}
                {{--                    "most_commented" => App\Models\BlogPost::mostCommented()->take(5)->get(),--}}
                {{--                    "most_active" => App\Models\User::withMostBlogPosts()->take(5)->get(),--}}
                {{--                    "most_active_last_month" => App\Models\User::withMostBlogPostsLastMonth()->take(5)->get()--}}
                {{--                ])--}}
                {{--                --}}{{--                TODO:// Remove this from here and put it somewhere more suitable--}}
            @endif

        </div>
        <!-- Blog -->

    </div>

</main>

@include("layouts.partials.footer")
