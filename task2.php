<?php
    $name_cmp ="Yjii";
    $many_lng = 20;

    $x = TRUE;
    $y = FALSE;

    $destination = [
        'Japan',
        'Bali',
        'Switzerland',
        'Paris'
    ];

    $offering = [
        'Online',
        'Flight',
        'Hotel',
        'Insurance'
    ];
    
    //var_dump($x && $y);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yjii</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Start Destination</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">About</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Destination</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><?php echo $name_cmp;?></h1>
                <h3 class="mb-5"><em>Let's Travel The World With Us</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2><?php echo $name_cmp;?></h2>
                        <p class="lead mb-5">
                            Yjii is a travel guide company. Travelers around the world can use the Yjii website to find where to stay, what to do, and where to eat based on guidance from those who have been there before. As a travel guide company available in more than <?php echo $many_lng;?> languages, Yjii makes planning easy, regardless of the type of trip.
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">What We Offer</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong><?php echo $offering[0]?></strong></h4>
                        <p class="text-faded mb-0">Booking online</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-plane"></i></span>
                        <h4><strong><?php echo $offering[1]?></strong></h4>
                        <p class="text-faded mb-0">Many things flight option</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-home"></i></span>
                        <h4><strong><?php echo $offering[2]?></strong></h4>
                        <p class="text-faded mb-0">Best place to stay</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-heart"></i></span>
                        <h4><strong><?php echo $offering[3]?></strong></h4>
                        <p class="text-faded mb-0">Travel insurance</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Travel Destination</h3>
                    <h2 class="mb-5">Top Vacation Destination</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"><?php echo $destination[0]?></div>
                                    <p class="mb-0">As a giant city for business and culture, home to tens of millions of people, Tokyo is also a crossroads where Japanese people interact with people from all over the world.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/japan.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"><?php echo $destination[1]?></div>
                                    <p class="mb-0"> The Tegalalang Rice Terrace is another major attraction for tourists. A walk around these lush fields is the perfect retreat to the hustle and bustle of one’s daily life and definitely deserves a spot on your Bali itinerary.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/bali.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"><?php echo $destination[2]?></div>
                                    <p class="mb-0">Nestled between Lake Thun to the west and Lake Brienz to the east, Interlaken is one of Switzerland's most popular summer holiday resorts.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/swiss.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"><?php echo $destination[3]?></div>
                                    <p class="mb-0">The Eiffel Tower is a wrought iron tower that stands 1,063 ft (324 m) tall. It was designed for the Exposition Universelle, a world fair held in Paris in 1889. It is currently the most famous symbol of Paris.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/paris.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white" id="contact">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-3">Contact Us</h2>
                <a class="btn btn-lg btn-light me-0" href="https://www.instagram.com/rhjhaerol/">Click Here!</a>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Yjii 2021</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
