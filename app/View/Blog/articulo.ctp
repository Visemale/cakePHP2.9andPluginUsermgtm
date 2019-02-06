 <!--Intro-->
    <!--Blog section-->
    <section>
        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="extra-margins pb-5  text-lg-left">

                            <!--Grid row-->
                            <div class="row mb-4">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(29).jpg" class="img-fluid" alt="">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong><?php echo $data_articulo[0]['Articulos']['titulo_articulo'];?></strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <?php echo $data_articulo[0]['Articulos']['cuerpo_articulo'];?>
                                        

                                            <!--Grid row-->
                                            <div class="row mb-4">

                                                <!--Grid column-->
                                                <div class="col-md-12 text-center">

                                                    <h4 class="text-center font-weight-bold dark-grey-text mt-3 mb-3">
                                                        <strong>Share this post: </strong>
                                                    </h4>

                                                    <button type="button" class="btn btn-fb btn-sm">
                                                        <i class="fab fa-facebook-f left"></i> Facebook</button>
                                                    <!--Twitter-->
                                                    <button type="button" class="btn btn-tw btn-sm">
                                                        <i class="fab fa-twitter left"></i> Twitter</button>
                                                    <!--Google +-->
                                                    <button type="button" class="btn btn-gplus btn-sm">
                                                        <i class="fab fa-google-plus-g left"></i> Google +</button>

                                                </div>
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->

                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->

                    <!--Sidebar-->
                    <div class="col-lg-3 col-12 mt-1">

                        <!--Card-->
                        <div class="card">
                        <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <a href="<?php echo $this->webroot;?>blog/" >
                                    <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                        <strong>< Regresar</strong>
                                    </h5> 
                                </a>
                            </div>
                            <!--/.Card content-->
                        </div>
                        
                        
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/20.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Anna Doe</strong>
                                </h5>

                                <!--Description-->
                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                    <!--Facebook-->
                                    <li>
                                        <a class="fb-ic">
                                            <i class="fab fa-facebook-f"> </i>
                                        </a>
                                    </li>
                                    <!--Twitter-->
                                    <li>
                                        <a class="tw-ic">
                                            <i class="fab fa-twitter mx-3"> </i>
                                        </a>
                                    </li>
                                    <!--Google +-->
                                    <li>
                                        <a class="gplus-ic">
                                            <i class="fab fa-google-plus-g"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                        <!-- Section: Featured posts -->
                        <section class="section widget-content mt-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>POPULAR POSTS</strong>
                                    </p>

                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo10.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="far fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->

                                </div>
                            </div>
                        </section>
                        <!--/ Section: Featured posts -->

                        <!--Newsletter-->
                        <section class="my-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>NEWSLETTER</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mt-4">
                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="input-group md-form form-sm form-3 pl-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text white black-text" id="basic-addon9">@</span>
                                                </div>
                                                <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Username" aria-describedby="basic-addon9">
                                            </div>

                                            <button type="button" class="btn btn-grey btn-block mb-4 mt-4">Sign up</button>

                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->

                                </div>
                            </div>

                        </section>
                        <!--Newsletter-->

                        <!--Archive-->
                        <section class="archive mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARCHIVE</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-12 text-center">

                                            <!--List-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-1 mt-2">
                                                        <a href="#!" class="dark-grey-text">August 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">July 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">June 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">May 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">April 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">March 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-0">
                                                        <a href="#!" class="dark-grey-text">Febuary 2016</a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <!--List-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>

                            </div>
                            <!--/ Card -->

                        </section>
                        <!--Archive-->

                    </div>
                    <!--Sidebar-->

                </div>
                <!--Blog-->

            </div>

    </section>
    <!--Blog section-->

    <!--Latest posts-->
    <section>
        <div class="container-fluid white mb-0 pb-0">
            <hr class="mt-0">
            <div class="container">
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12">
                        <h6 class="font-weight-bold mt-5 mb-3">ABOUT</h6>
                        <hr class="mb-5">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img (37).jpg" alt="sample image" class="img-fluid z-depth-1">
                        <p class="mt-4 mb-5">Sed ut in perspiciatis unde omnis iste natus error sit on i tatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6">
                        <h6 class="font-weight-bold mt-5 mb-3">LATESTS POSTS</h6>
                        <hr class="mb-5">
                        <!--Grid row-->
                        <div class="row mt-4">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-8 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>
                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-7 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->


                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-7 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6">
                        <h6 class="font-weight-bold mt-5 mb-3">OLDER POSTS</h6>
                        <hr class="mb-5">
                        <!--Grid row-->
                        <div class="row mt-4">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo1.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-8 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-7 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-4">

                                <!--Image-->
                                <div class="view overlay z-depth-1 mb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg" class="img-fluid" alt="Post">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Second column-->
                            <div class="col-7 mb-1">

                                <!--Post data-->
                                <div class="">
                                    <p class="mb-1">
                                        <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>
                                </div>

                            </div>
                            <!--Second column-->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>
    </section>
    <!--/Latest posts-->