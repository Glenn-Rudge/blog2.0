<!-- Grid row -->
<div class="row">
    <!-- Grid column -->
    <div class="col-lg-5 mb-4">
        <!-- Featured image -->
        <div class="view overlay z-depth-1">
            <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid"
                 alt="First sample image">
            <a href="{{ route("posts.show", $post->id) }}">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6 mb-4">
        <h4 class="mb-3 dark-grey-text mt-0">
            {{--            <p class="">Written by: {{ $post->user->first_name }}--}}
            {{--                on {{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}--}}
            {{--            </p>--}}
            <x-updated :date="$post->created_at" name="{{ $post->user->first_name }}">
            </x-updated>
            <strong>
                <a href="{{ route("posts.show", $post->id) }}">{{ $post->title }}</a>
            </strong>
        </h4>
        <p class="dark-grey-text">
            {{ \Illuminate\Support\Str::limit($post->content, 275, "...") }}
        </p>
        <!-- Deep-orange -->
        <button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->

