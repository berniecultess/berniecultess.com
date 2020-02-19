<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>rtCamp Simple Theme</title>
        <meta name="description" content="rtCamp Simple Theme" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/lib/js/jquery.min.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/lib/js/jquery-ui.min.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/lib/js/bootstrap.min.js'; ?>">
        </script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/lib/css/bootstrap.min.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>

    <body>

        <header class="container">
            <nav class="navbar navbar-expand-lg p-0 py-2_5">
                <a class="navbar-brand" href="#"><img src="./wp-content/uploads/2019/12/logo.png" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link nav-link-header active" href="#">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Layouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-header" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="py-4 bg-dkGrayBlue">
            <div class="container">
                <div class="p-2_5 bg-white">
                    <div class="row mx-0">
                        <!-- <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./wp-content/uploads/2019/12/Slider_img_1.png"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./wp-content/uploads/2019/12/Slider_img_2.png"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./wp-content/uploads/2019/12/Slider_img_3.png"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-danger" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <img src="./wp-content/uploads/2019/12/slider-top-pagination.png" />
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next bg-success" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <img src="./wp-content/uploads/2019/12/slider-bottom-pagination.png" />
                                <span class="sr-only">Next</span>
                            </a>
                        </div> -->
                        <div class="col-md-12"
                            style="background:url('./wp-content/uploads/2019/12/Slider_img.jpg') no-repeat center left">
                            <div class="row">
                                <div class="col-md-4 -pr-0 ml-auto">
                                    <div class="row">
                                        <div class="w-90 py-4_2 px-4_4 text-white" style="background:rgba(0,0,0,0.7);">
                                            <h3>Slide headline</h3>
                                            <p class="text-body-gray-80 slideshow">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida
                                                placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum
                                                justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla
                                                facilisi.
                                            </p>
                                        </div>
                                        <div class="w-10 border-left py-2_5 px-2 d-flex align-items-start flex-column"
                                            style="background:rgba(0,0,0,0.7);">
                                            <div class="">
                                                <a class="" href="#carouselExampleIndicators" role="button"
                                                    data-slide="prev"><img
                                                        src="./wp-content/uploads/2019/12/slider-top-pagination.png" /></a>
                                            </div>
                                            <div class="my-auto ml-1">
                                                <ul class="slider pl-0">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                                        class=""></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"
                                                        class=""></li>
                                                </ul>
                                            </div>
                                            <div class="">
                                                <a class="" href="#carouselExampleIndicators" role="button"
                                                    data-slide="next"><img
                                                        src="./wp-content/uploads/2019/12/slider-bottom-pagination.png" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-3">
            <div class="container">
                <div class="row border mx-0 border-gray-80">
                    <div class="col-md-3 bg-gray-92 border-right border-gray-80 pl-0 pr-0">
                        <ul class="list-group">
                            <li class="list-group-item py-3_1"><a href="#">Finding</a></li>
                            <li class="list-group-item py-3_1 active"><a href="#">Promotional Activities</a></li>
                            <li class="list-group-item py-3_1"><a href="#">Environment</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 row p-3_9 ml-0 mr-0">
                        <div class="col-4 pl-0">
                            <div class="overflow-hidden h-115"><img src="./wp-content/uploads/2019/12/img1.jpg"
                                    alt="" /></div>
                            <h6 class="font-weight-bold text-body-black mt-2_5 mb-0">Aldus PageMaker including versions
                                of
                                Lorem Ipsum.</h6>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et
                                sollicitudin risus.
                            </p>
                        </div>
                        <div class="col-4">
                            <div class="overflow-hidden h-115"><img src="./wp-content/uploads/2019/12/img2.jpg"
                                    alt="" /></div>
                            <h6 class="font-weight-bold text-body-black mt-2_5 mb-0">Many desktop publishing packages
                                and web
                                page </h6>
                            <p class="my-3">It is a long established fact that a reader will be distracted by the
                                readable content.
                            </p>
                        </div>
                        <div class="col-4 pr-0">
                            <div class="overflow-hidden h-115"><img src="./wp-content/uploads/2019/12/img3.jpg"
                                    alt="" /></div>
                            <h6 class="font-weight-bold text-body-black mt-2_5 mb-0">Aldus PageMaker including versions
                                of
                                Lorem Ipsum.</h6>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et
                                sollicitudin risus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <section class="bg-veryLtGray border-top border-bottom mt-4 pt-3_9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="border-bottom border-bottom-dashed"><span class="d-block mb-2_5">Latest
                                    News</span></h6>
                            <ul class="footer-latest-news mt-3_9 pl-0">
                                <li class="mb-3_1"><a href="">Many desktop publishing packages and web page </a></li>
                                <li class="mb-3_1"><a href="">Lorem Ipsum has been the industry's standard dummy text
                                        ever since the
                                        1500s</a>
                                </li>
                                <li class="mb-0"><a href="">Latin words, combined with a handful of model
                                        sentence structures</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h6 class="border-bottom border-bottom-dashed"><span class="d-block mb-2_5">Recent
                                    Projects</span></h6>
                            <div class="footer-recent-projects mt-3_9">
                                <p class="mb-3_1"><img src="./wp-content/uploads/2019/12/recent-pro-1.jpg" alt=""
                                        class="img1" /></p>
                                <p class="mb-3_1"><img src="./wp-content/uploads/2019/12/recent-pro-2.jpg" alt=""
                                        class="img2" /></p>
                                <p><img src="./wp-content/uploads/2019/12/recent-pro-3.jpg" alt="" class="img3" /></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h6 class="border-bottom border-bottom-dashed"><span class="d-block mb-2_5">Stay in
                                    Touch</span></h6>
                            <ul class="footer-s-i-t mt-3_9 pl-0">
                                <li class="facebook mb-2_5"><a href="">Facebook</a></li>
                                <li class="twitter mb-2_5"><a href="">Twitter</a></li>
                                <li class="linkedin mb-2_5"><a href="">LinkedIn</a></li>
                                <li class="rss"><a href="">RSS</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h6 class="border-bottom border-bottom-dashed"><span class="d-block mb-2_5">Security &
                                    Privacy</span></h6>
                            <ul class="footer-security-privacy mt-3_9 pl-0">
                                <li class="mb-2"><a href="">Security</a></li>
                                <li class="mb-2"><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container my-4_2">
                <div class="row">
                    <div class="col-md-8">
                        <nav class="navbar navbar-expand-lg p-0">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link nav-link-header active pl-0" href="#">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Layouts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-header" href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="mt-3 copyright">© 2011 rtPanel. All Rights Reserved. Designed by rtCamp</div>
                    </div>
                    <div class="logo col-md-4 text-right"><img src="./wp-content/uploads/2019/12/footer-logo.png" />
                    </div>
                </div>
            </section>
        </footer>
    </body>

</html>