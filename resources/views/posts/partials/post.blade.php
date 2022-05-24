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
    <div class="col-lg-6 ml-xl-4 mb-4">
        <!-- Grid row -->
        <div class="row">
            <p class="text-sm">Tags:</p>
            <!-- Grid column -->
            <div class="col-xl-2 col-md-6 text-sm-center text-md-right text-lg-left">
                <p class="orange-text font-small font-weight-bold mb-1 spacing">
                    <a>
                        <strong>DESIGN</strong>
                    </a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-5 col-md-6 text-sm-center text-md-left">
                <p class="pl-md-5 font-small grey-text">
                    <em>{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</em>
                        @if($post->comments_count)
                        <em>Comments: {{ $post->comments_count }}</em>
                        @else
                            <em>No comments</em>
                        @endif
                    <em>
                @if(now()->diffInMinutes($post->created_at) < 5)
                    <p>New Post</p>
                    @endif
                    </em>
                    </p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <h4 class="mb-3 dark-grey-text mt-0">
            <strong>
                <a href="{{ route("posts.show", $post->id) }}">{{ $post->title }}</a>
            </strong>
        </h4>
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque
            nihil impedit
            quo minus
            id vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium.
        </p>

        <!-- Deep-orange -->
        <button type="button" class="btn btn-deep-orange btn-rounded btn-sm">Read more</button>
    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->

