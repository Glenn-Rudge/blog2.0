<!-- Grid row -->
<div class="row">
    <!-- Grid column -->
    <div class="col-lg-5 mb-4">
        <!-- Featured image -->
        <div class="view overlay z-depth-1">
            @if(isset($post->image->path))
                <div class="">
                    <img src="{{ $post->image->url() }}" class="img-fluid"
                         alt="post image">
                </div>
            @endif
        </div>
        <div class="my-2">
            @foreach($post->tags as $tag)
                <a class="badge badge-primary"
                   href="{{ route("posts.tags.index", ["tag" => $tag->id]) }}">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6 mb-4">
        <h4 class="mb-3 dark-grey-text mt-0">
            <x-updated :date="$post->created_at" name="{{ $post->user->first_name }}">
                @slot("userId", $post->user_id)
            </x-updated>
            <strong>
                <a href="{{ route("posts.show", $post->id) }}">{{ $post->title }}</a>
            </strong>
        </h4>
        <p class="dark-grey-text">
            {{ \Illuminate\Support\Str::limit($post->content, 275, "...") }}
        </p>
        <!-- Deep-orange -->
        <a href="{{ route("posts.show", $post->id) }}" type="button" class="btn btn-deep-orange btn-rounded
        btn-sm">Read more</a>
    </div>
    <!-- Grid column -->
    <hr/>
</div>
<!-- Grid row -->

