@extends("layouts.app")
@section("content")
    <!-- Main layout -->
    <main>

        <!-- Intro -->
        <section>
            <div class="container-fluid">
                {{--                <img src="https://mdbootstrap.com/img/Photos/Others/nature3.jpg" class="img-fluid" alt="First sample image">--}}
                <h1 class="text-center dark-grey-text pb-3 pt-5 wow fadeIn" data-wow-delay="0.2s">
                    <strong> {{ $post->title }} </strong>
                </h1>

                <p class="grey-text text-center mb-4 text-uppercase spacing wow fadeIn" data-wow-delay="0.2s">
                    post description
                </p>
            </div>
        </section>
        <!-- Intro -->

        <!-- Blog section -->
        <section>
            <div class="container-fluid">
                <hr class="my-5">
                <div class="container">

                    <!-- Cover photo -->
                    <div class="row mb-2 mt-1">

                        <div class="col-md-12">

                            <!-- Image -->
                            <div class="view">
                                <img src="https://mdbootstrap.com/img/Photos/Others/city10.jpg"
                                     class="img-fluid z-depth-1 wow fadeIn"
                                     data-wow-delay="0.2s">
                            </div>

                        </div>

                    </div>
                    <!--  Cover photo -->

                    <!-- Blog -->
                    <div class="row mt-4 pt-3">

                        <!-- Main listing -->
                        <div class="col-lg-9 col-12 mt-1">

                            <!-- Section: Blog v.3 -->
                            <section class="extra-margins pb-5 text-lg-left">

                                <!-- Grid row -->
                                <div class="row mb-4">

                                    <!-- Grid column -->
                                    <div class="col-md-12">

                                        <!-- Title -->
                                        <h4 class="font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                                            <strong>Lorem ipsum dolor sit amet</strong>
                                        </h4>
                                        <hr>
                                        <!-- Text -->
                                        <p class="dark-grey-text mb-3 mt-4 mx-4 wow fadeIn" data-wow-delay="0.2s">Sed ut
                                            perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                            et
                                            quasi
                                            architecto beatae vitae dicta sunt explicabo.</p>

                                        <!-- Grid row -->
                                        <div class="row mx-4 mt-3 wow fadeIn" data-wow-delay="0.2s">

                                            <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod
                                                tempor incididunt
                                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur.
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia
                                                deserunt
                                                mollit anim id est laborum.</p>

                                            <h5 class="mt-3 mb-4 font-weight-bold">
                                                <strong>Lorem ipsum dolor sit amet</strong>
                                            </h5>

                                            <p class="dark-grey-text">Sed ut perspiciatis unde omnis iste natus error
                                                sit
                                                voluptatem
                                                accusantium
                                                doloremque
                                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                veritatis
                                                et
                                                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                                voluptatem
                                                quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni
                                                dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                                est.</p>

                                            <blockquote class="blockquote mx-md-5 mx-1">
                                                <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit..."</p>
                                            </blockquote>

                                            <p class="dark-grey-text"> Ut enim ad minima veniam, quis nostrum
                                                exercitationem
                                                ullam corporis
                                                suscipit laboriosam,
                                                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                                reprehenderit
                                                qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                                                illum
                                                qui
                                                dolorem eum fugiat quo voluptas nulla pariatur?</p>

                                        </div>
                                        <!-- Grid row -->

                                        <!-- Grid row -->
                                        <div class="row mx-4 wow fadeIn" data-wow-delay="0.2s">

                                            <!-- Grid column -->
                                            <div class="col-md-12 my-4">

                                                <img src="https://mdbootstrap.com/img/Photos/Others/city9.jpg"
                                                     class="img-fluid z-depth-1"
                                                     alt="sample image">

                                            </div>
                                            <!-- Grid column -->

                                            <p class="dark-grey-text">Omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium,
                                                totam rem
                                                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                beatae
                                                vitae dicta sunt explicabo. Ut enim ad minima veniam, quis nostrum
                                                exercitationem
                                                ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                                commodi.Perspiciatis
                                                unde omnis iste natus error sit voluptatem accusantium doloremque.</p>

                                            <p class="dark-grey-text">Perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium
                                                doloremque laudantium,
                                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                                architecto
                                                beatae vitae dicta sunt explicabo. Ut enim ad minima veniam, quis
                                                nostrum
                                                exercitationem
                                                ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                                        </div>
                                        <!-- Grid row -->

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
                                                        <span class="badge indigo">3</span>
                                                    </h3>
                                                </div>
                                                <!-- First row -->
                                                @forelse($post->comments as $comment)
                                                    <div class="row mb-5">
                                                        <!-- Image column -->
                                                        <div class="col-sm-2 col-12 mb-3">
                                                            <img
                                                                src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg"
                                                                class="avatar rounded-circle z-depth-1-half"
                                                                alt="sample image">
                                                        </div>
                                                        <!-- Image column -->

                                                        <!-- Content column -->
                                                        <div class="col-sm-10 col-12">
                                                            <a>
                                                                <h5 class="user-name font-weight-bold">John Doe</h5>
                                                            </a>
                                                            <div class="card-data">
                                                                <ul class="list-unstyled">
                                                                    <li class="comment-date font-small">
                                                                        <i class="far fa-clock-o"></i> {{ $comment->created_at->diffForHumans() }}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <p class="dark-grey-text article">
                                                                {{ $comment->content }}
                                                            </p>
                                                        </div>
                                                        <!-- Content column -->
                                                    </div>
                                            @empty
                                            @endforelse
                                            <!-- First row -->
                                            </div>
                                            <!-- Main wrapper -->

                                        </section>
                                        <!-- Comments -->
                                        <hr>
                                        <!-- Section: Leave a reply (Not Logged In User) -->
                                        <section class="mb-4 wow fadeIn" data-wow-delay="0.2s">
                                            <h3 class="font-weight-bold text-center my-5">Leave a reply</h3>

                                            <!-- Grid row -->
                                            <div class="row">

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-12 mb-4">

                                                    <div class="input-group md-form form-sm form-3 pl-0">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text"
                                                              id="basic-addon8">1</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control mt-0 black-border rgba-white-strong"
                                                               placeholder="Name" aria-describedby="basic-addon9">
                                                    </div>

                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">

                                                    <div class="input-group md-form form-sm form-3 pl-0">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text"
                                                              id="basic-addon9">2</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control mt-0 black-border rgba-white-strong"
                                                               placeholder="Email" aria-describedby="basic-addon9">
                                                    </div>

                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">

                                                    <div class="input-group md-form form-sm form-3 pl-0">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text"
                                                              id="basic-addon10">3</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control mt-0 black-border rgba-white-strong"
                                                               placeholder="Website" aria-describedby="basic-addon9">
                                                    </div>

                                                </div>
                                                <!-- Grid column -->

                                            </div>
                                            <!-- Grid row -->

                                            <!-- Grid row -->
                                            <div class="row">

                                                <div class="col-12 mt-1">
                                                    <div class="form-group basic-textarea rounded-corners">

                            <textarea class="form-control" id="exampleFormControlTextarea6" rows="5"
                                      placeholder="Write something here..."></textarea>
                                                    </div>

                                                    <div class="text-right">
                                                        <button class="btn btn-grey btn-sm">Submit</button>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- Grid row -->

                                        </section>
                                        <!-- Section: Leave a reply (Not Logged In User) -->

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </section>
                            <!-- Section: Blog v.3 -->

                        </div>
                        <!-- Main listing -->
                    </div>
                    <!-- Blog -->

                </div>
        </section>
    </main>
    <!-- Main layout -->
@endsection
