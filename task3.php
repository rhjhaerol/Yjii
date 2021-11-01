<?php
    $name_cmp ="Yjii";
    $many_lng = 20;

    $offer = array(
        array(
            'offer' => 'Online',
            'description' => 'Booking online',
            'icon' => 'assets/img/online.png'
        ),
        array(
            'offer' => 'Flight',
            'description' => 'Many things flight option',
            'icon' => 'assets/img/plane.png'
        ),
        array(
            'offer' => 'Hotel',
            'description' => 'Best place to stay',
            'icon' => 'assets/img/hotel.png'
        ),
        array(
            'offer' => 'Insurance',
            'description' => 'Travel insurance',
            'icon' => 'assets/img/insurance.png'
        ),
    );

    $destination = array(
        array(
            'place' => 'Japan',
            'description' => 'As a giant city for business and culture, home to tens of millions of people, Tokyo is also a crossroads where Japanese people interact with people from all over the world.',
            'img' => 'assets/img/japan.jpg'
        ),
        array(
            'place' => 'Bali',
            'description' => 'The Tegalalang Rice Terrace is another major attraction for tourists. A walk around these lush fields is the perfect retreat to the hustle and bustle of one’s daily life and definitely deserves a spot on your Bali itinerary.',
            'img' => 'assets/img/bali.jpg'
        ),
        array(
            'place' => 'Switzerland',
            'description' => 'Nestled between Lake Thun to the west and Lake Brienz to the east, Interlaken is one of Switzerlands most popular summer holiday resorts.',
            'img' => 'assets/img/swiss.jpg'
        ),
        array(
            'place' => 'Paris',
            'description' => 'The Eiffel Tower is a wrought iron tower that stands 1,063 ft (324 m) tall. It was designed for the Exposition Universelle, a world fair held in Paris in 1889. It is currently the most famous symbol of Paris.',
            'img' => 'assets/img/paris.jpg'
        ),
    );
    

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
                    <?php
                    
                    foreach ($offer as $key => $value) {
                        
                        echo "
                            <div class='col-md-6 col-lg-3'>
                                <span class='service-icon rounded-circle mx-auto mb-3'><img src='{$value['icon']}' style='width: 60px; height: 60px;'></span>
                                <h4><strong>{$value['offer']}</strong></h4>
                                <p class='text-faded mb-0'>{$value['description']}</p>
                            </div>
                        ";
                    }
                    
                    ?>
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
                    <div class='row gx-0'>
                    <?php

                    foreach ($destination as $key => $value) {
                        echo "
                            <div class='col-lg-6'>
                                <a class='portfolio-item' href='#!'>
                                    <div class='caption'>
                                        <div class='caption-content'>
                                            <div class='h2'>{$value['place']}</div>
                                            <p class='mb-0'>{$value['description']}</p>
                                        </div>
                                    </div>
                                    <img class='img-fluid' src='{$value['img']}' alt='...' />
                                </a>
                            </div>
                        ";
                    }               
                    ?>
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
