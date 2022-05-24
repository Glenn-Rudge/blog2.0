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
                <p class="grey-text text-center mb-5 pb-3">
                    <em>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae sit aspernatur
                        aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.
                    </em>
                </p>

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
                @include("layouts.partials.sidebar")
            @endif

        </div>
        <!-- Blog -->

    </div>

</main>

@include("layouts.partials.footer")
