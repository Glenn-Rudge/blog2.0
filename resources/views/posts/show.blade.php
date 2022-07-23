@extends("layouts.app")
@section("content")
    <!-- Main layout -->
    <main>

        <!-- Intro -->
        <section>
            <div class="container-fluid">
                @foreach($post->tags as $tag)
                    <a href="{{ route('posts.tags.index', ['tag' => $tag->id]) }}" class="my-2 badge badge-primary">
                        {{ $tag->name }}
                    </a>
                @endforeach
                @if($post->image)
                    <div class="col-md-8 offset-4">
                        <img src="{{ $post->image->url() }}" class="img-fluid"
                             alt="post image">
                    </div>
                @endif
                <div class="col-md-8 offset-4">
                    <h1 class="text-center dark-grey-text pb-3 pt-5 wow fadeIn" data-wow-delay="0.2s">
                        <strong> {{ $post->title }} </strong>
                    </h1>

                    <p class="grey-text text-center mb-4 text-uppercase spacing wow fadeIn" data-wow-delay="0.2s">
                        post description
                    </p>
                    <p class="grey-text text-center mb-4 text-uppercase spacing wow fadeIn" data-wow-delay="0.2s">
                        Currently being read by $count people.
                    </p>
                </div>
            </div>
        </section>
        <!-- Intro -->

        <!-- Blog section -->
        <section>
            <div class="container">
                <!-- Blog -->
                <div class="row mt-4 pt-3">
                    <!-- Section: Blog v.3 -->
                    <section class="extra-margins pb-5 text-lg-left">

                        <!-- Grid row -->
                        <div class="row mb-4">

                            <!-- Grid column -->
                            <div class="col-md-10 offset-3">
                                <div class="row mx-4 wow fadeIn" data-wow-delay="0.2s">
                                    <p>
                                        {{ $post->content }}
                                    </p>
                                </div>
                                <hr>
                                <!-- Grid row -->
                                <div class="row mb-4 wow fadeIn" data-wow-delay="0.2s">

                                    <!-- Grid column -->
                                    <div class="col-md-12 text-center">

                                        <h4 class="text-center font-weight-bold dark-grey-text mt-3 mb-3">
                                            <strong>Share this post: </strong>
                                        </h4>

                                        <button type="button" class="btn btn-fb btn-sm">
                                            <i class="fab fa-facebook-f left"></i> Facebook
                                        </button>
                                        <!-- Twitter -->
                                        <button type="button" class="btn btn-tw btn-sm">
                                            <i class="fab fa-twitter left"></i> Twitter
                                        </button>
                                        <!-- Google + -->
                                        <button type="button" class="btn btn-gplus btn-sm">
                                            <i class="fab fa-google-plus-g left"></i> Google +
                                        </button>

                                        <hr class="mt-5">
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <!-- Comments -->
                                <section>

                                    <!-- Main wrapper -->
                                    <div class="comments-list text-center text-md-left">
                                        <div class="text-center my-5">
                                            <h3 class="font-weight-bold">Comments
                                                <span class="badge indigo">{{ $post->comments->count() }}</span>
                                            </h3>
                                        </div>
                                        <!-- First row -->
                                        <div class="mb-5">
                                            @foreach($post->comments as $comment)
                                                <div class="d-flex justify-content-between my-5">
                                                    <!-- Image column -->
                                                    <div class="d-flex">
                                                        <div class="mb-3">
                                                            @if($comment->user->image)
                                                                <img
                                                                        src="{{ $comment->user->image->url() }}"
                                                                        class="avatar rounded-circle"
                                                                        alt="sample image">
                                                            @endif
                                                        </div>
                                                        <!-- Image column -->

                                                        <!-- Content column -->
                                                        <div class="mx-5">
                                                            <a>
                                                                <h5 class="user-name font-weight-bold">
                                                                    <a href="/users/{{$comment->user->id}}">
                                                                        {{ $comment->user->first_name }} {{ $comment->user->last_name }}
                                                                    </a>
                                                                    <span> - $user->role</span>
                                                                </h5>
                                                            </a>
                                                            <div class="mr-1 card-data">
                                                                <ul class="list-unstyled">
                                                                    <li class="comment-date font-small">
                                                                        {{ $comment->content }}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                <!-- Comments -->
                                <hr>
                                <!-- Section: Leave a reply (Not Logged In User) -->
                                @auth
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s">
                                        @if($errors->any)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </section>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        @include("comments._form")
                                    @else
                                        <p class="lead">Login/Register to create a comment</p>
                                    @endif
                                @endguest
                            </div>
                        </div>
                        <!-- Grid row -->
                    </section>
                    <!-- Grid row -->
                </div>
            </div>
        </section>
    </main>
    <!-- Main layout -->
@endsection
