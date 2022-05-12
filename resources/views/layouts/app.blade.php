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
        {{--        <p class="grey-text text-center mb-5 pb-3">--}}
        {{--            <em>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam--}}
        {{--                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae sit aspernatur--}}
        {{--                aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.--}}
        {{--            </em>--}}
        {{--        </p>--}}

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

                <!-- Pagination dark grey -->
                <nav class="mb-5 pb-2">
                    <ul class="pagination pg-darkgrey flex-center">
                        <!-- Arrow left -->
                        <li class="page-item">
                            <a class="page-link grey-text" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!-- Numbers -->
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link grey-text">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link grey-text">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link grey-text">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link grey-text">5</a>
                        </li>

                        <!-- Arrow right -->
                        <li class="page-item">
                            <a class="page-link grey-text" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination dark grey -->

            </div>
            <!-- Main listing -->

            <!-- Sidebar -->
            <div class="col-lg-3 col-12 px-4 mt-1 blue-grey lighten-5">

                <!-- Author -->
                <section class="mb-4">

                    <hr class="mt-4">
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>ABOUT ME</strong>
                    </p>
                    <hr>

                    <!-- Avatar -->
                    <div class="flex-center mt-4">
                        <img src="{{ asset("images/63075bb6-9d2d-4959-856b-34a27de44d39.jpg") }}"
                             class="img-fluid img-author">
                    </div>

                    <!-- Description -->
                    <p class="mt-3 dark-grey-text font-small text-center">
                        <em>
                            Hello, my name's Glenn. I enjoy writing about Laravel, Vue 3 and TypeScript.
                        </em>
                    </p>

                    <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                        <!-- Facebook -->
                        <li>
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f"> </i>
                            </a>
                        </li>
                        <!-- Twitter -->
                        <li>
                            <a class="tw-ic">
                                <i class="fab fa-twitter"> </i>
                            </a>
                        </li>
                        <!-- Google + -->
                        <li>
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g"> </i>
                            </a>
                        </li>
                    </ul>

                </section>
                <!-- Author -->

                <!-- Title -->
                <hr>
                <p class="font-weight-bold dark-grey-text text-center spacing">
                    <strong>POPULAR POSTS</strong>
                </p>
                <hr>

                <!-- Popular posts -->
                <section class="mb-5">

                    <!-- Grid row -->
                    <div class="row mt-4">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-12">

                            <!-- Image -->
                            <div class="view overlay z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" class="img-fluid"
                                     alt="Post">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post data -->
                            <div class="text-center mt-3">
                                <p class="mb-1 font-weight-bold">
                                    <a href="#!" class="text-hover">This is news title</a>
                                </p>
                                <p class="font-small grey-text">
                                    <em>July 22, 2017</em>
                                </p>

                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-12">

                            <!-- Image -->
                            <div class="view overlay z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/laptop1.jpg" class="img-fluid"
                                     alt="Post">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post data -->
                            <div class="text-center mt-3">
                                <p class="mb-1 font-weight-bold">
                                    <a href="#!" class="text-hover">This is news title</a>
                                </p>
                                <p class="font-small grey-text">
                                    <em>July 22, 2017</em>
                                </p>

                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-12">

                            <!-- Image -->
                            <div class="view overlay z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/photo8.jpg" class="img-fluid"
                                     alt="Post">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post data -->
                            <div class="text-center mt-3">
                                <p class="mb-1 font-weight-bold">
                                    <a href="#!" class="text-hover">This is news title</a>
                                </p>
                                <p class="font-small grey-text">
                                    <em>July 22, 2017</em>
                                </p>

                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-12">

                            <!-- Image -->
                            <div class="view overlay z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid"
                                     alt="Post">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post data -->
                            <div class="text-center mt-3">
                                <p class="mb-1 font-weight-bold">
                                    <a href="#!" class="text-hover">This is news title</a>
                                </p>
                                <p class="font-small grey-text">
                                    <em>July 22, 2017</em>
                                </p>

                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Popular posts -->

                <!-- Title -->
                <hr>
                <p class="font-weight-bold dark-grey-text text-center spacing">
                    <strong>NEWSLETTER</strong>
                </p>
                <hr>

                <!-- Newsletter -->
                <section class="mb-5">

                    <!-- Grid row -->
                    <div class="row mt-4">

                        <!-- Grid column -->
                        <div class="col-md-12">

                            <div class="input-group md-form form-sm form-3 pl-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text white black-text" id="basic-addon9">@</span>
                                </div>
                                <input type="text" class="form-control mt-0 black-border rgba-white-strong"
                                       placeholder="Username"
                                       aria-describedby="basic-addon9">
                            </div>

                            <button type="button" class="btn btn-grey btn-block mt-4">Sign up</button>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Newsletter -->

                <!-- Title -->
                <hr>
                <p class="font-weight-bold dark-grey-text text-center spacing">
                    <strong>RECENT POSTS</strong>
                </p>
                <hr>
                <!-- Section: Recent posts -->
                <section class="section mb-5">

                    <div class="post-border">

                        <!-- Grid row -->
                        <div class="row mt-4">

                            <!-- Grid column -->
                            <div class="col-5">

                                <!-- Image -->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/project1.jpg" class="img-fluid"
                                         alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-7 mb-1">

                                <!-- Post data -->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>
                                </div>

                            </div>
                            <!-- Second column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                    <div class="post-border">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-5">

                                <!-- Image -->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo3.jpg" class="img-fluid"
                                         alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-7 mb-1">

                                <!-- Post data -->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Second column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                    <div class="post-border">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-5">

                                <!-- Image -->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" class="img-fluid"
                                         alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-7 mb-1">

                                <!-- Post data -->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>
                                </div>

                            </div>
                            <!-- Second column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                    <div class="post-border">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-5">

                                <!-- Image -->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo8.jpg" class="img-fluid"
                                         alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-7 mb-1">

                                <!-- Post data -->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Second column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                    <div class="post-border">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-5">

                                <!-- Image -->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid"
                                         alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-7 mb-1">

                                <!-- Post data -->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Second column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </section>
                <!-- Section: Recent posts -->

                <!-- Title -->
                <hr>
                <p class="font-weight-bold dark-grey-text text-center spacing">
                    <strong>FEATURED POSTS</strong>
                </p>
                <hr>

                <!-- Featured posts -->
                <section class="mb-5">

                    <!-- Grid row -->
                    <div class="row mt-4">
                        <!-- Grid column -->
                        <div class="col-md-12">

                            <!-- Carousel Wrapper -->
                            <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half"
                                 data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-4" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-4" data-slide-to="2"></li>
                                </ol>
                                <!-- Indicators -->

                                <!-- Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First slide -->
                                    <div class="carousel-item active">
                                        <!-- Mask color -->
                                        <div class="view">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/photo1.jpg"
                                                 class="img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask flex-center rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <!-- Caption -->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h4 class="h4-responsive">
                                                    <a href="#!" class="white-text font-weight-bold">News title</a>
                                                </h4>
                                                <p>
                                                    <a href="#!" class="white-text">Lorem ipsum dolor sit</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Caption -->
                                    </div>
                                    <!-- First slide -->

                                    <!-- Second slide -->
                                    <div class="carousel-item">
                                        <!-- Mask color -->
                                        <div class="view">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg"
                                                 class="img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask flex-center rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <!-- Caption -->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h4 class="h4-responsive">
                                                    <a href="#!" class="white-text">News title</a>
                                                </h4>
                                                <p>
                                                    <a href="#!" class="white-text">Lorem ipsum dolor sit</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Caption -->
                                    </div>
                                    <!-- Second slide -->

                                    <!-- Third slide -->
                                    <div class="carousel-item">
                                        <!-- Mask color -->
                                        <div class="view">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/photo5.jpg"
                                                 class="img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask flex-center rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <!-- Caption -->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h4 class="h4-responsive">
                                                    <a href="#!" class="white-text">News title</a>
                                                </h4>
                                                <p>
                                                    <a href="#!" class="white-text">Lorem ipsum dolor sit</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Caption -->
                                    </div>
                                    <!-- Third slide -->
                                </div>
                                <!-- Slides -->

                                <!-- Controls -->

                                <a class="carousel-control-prev" href="#carousel-example-4" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-4" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!-- Controls -->
                            </div>
                            <!-- Carousel Wrapper -->

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Featured posts -->

                <!-- Title -->
                <hr>
                <p class="font-weight-bold dark-grey-text text-center spacing">
                    <strong>ARCHIVE</strong>
                </p>
                <hr>

                <!-- Archive -->
                <section class="archive mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 text-center">

                            <!-- List -->
                            <ul class="list-unstyled mt-3">
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">August 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">July 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">June 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">May 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">April 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">March 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-normal">
                                        <a href="#!" class="dark-grey-text">Febuary 2016</a>
                                    </h6>
                                </li>
                            </ul>
                            <!-- List -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Archive -->

            </div>
            <!-- Sidebar -->

        </div>
        <!-- Blog -->

    </div>

</main>

@include("layouts.partials.footer")
