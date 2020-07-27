<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarzis Invoice</title>
    <script src="https://kit.fontawesome.com/127608eadc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="wow/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="styles.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="icon" sizes="32x32" href="media/logo.png">
</head>

<body>
    <section id="landing" class="text-white">
        <video autoplay muted loop class="position-fixed">
            <source src="media/v.mp4" type="video/mp4">
        </video>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark pt-4 px-0 bg-transparent align-items-start">
                <a class="navbar-brand" href="#">Zarzis Invoice</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                    type="button" name="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ml-auto flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ml-4 active"><a class="nav-link px-2 scroll" href="#content">Get Started</a></li>
                        <li class="nav-item ml-4"><a class="nav-link px-2 scroll" href="#our-team">Our Team</a></li>
                        <li class="nav-item ml-4"><a class="nav-link px-2 scroll" href="#info">Testimonials</a></li>
                        <li class="nav-item ml-4"><a class="nav-link px-2 scroll" href="#faq">F.A.Q</a></li>
                        <li class="nav-item ml-4"><a class="nav-link px-2 scroll" href="#footer">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            <div id="content" class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 font-weight-bold text-center text-lg-left">Zarzis Invoice</h1>
                    <h2 class="h1 font-weight-bold text-dark text-center text-lg-left">A Simple & Free Tool To Make Your
                        Invoices</h2>
                    <button class="btn btn-lg rounded-pill my-4 d-block mx-auto ml-lg-0" onclick="window.location.href='realwork/invoice.php';">Get Started</button>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h3 class="font-weight-bold text-center text-lg-left">Why Using Zarzis Invoice?</h3>
                    <h4 class="font-weight-light text-center text-lg-left">Check out what we can do for you.</h4>
                    <div
                        class="dimmed rounded text-dark mt-4 d-flex flex-column align-items-center align-items-lg-start">
                        <div class="d-flex align-items-center">
                            <i class="fas h4 fa-check-circle mx-3 text-success"></i>
                            <div class="my-3">
                                <h6 class="font-weight-bold mb-0">Be Part Of Our Community.</h6>
                                <p>Our Caring Team Made This Tool To Facilitate Your Work. Join Many Others In Using It.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas h4 fa-check-circle mx-3 text-success"></i>
                            <div class="my-3">
                                <h6 class="font-weight-bold mb-0">Create Your Invoice In Few Simple Steps.</h6>
                                <p>This Tool Is User Friendly! The Content Is Clear, All You Have To Do Is To Enter Your
                                    Data.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas h4 fa-check-circle mx-3 text-success"></i>
                            <div class="my-3">
                                <h6 class="font-weight-bold mb-0">Convert Directly To PDF.</h6>
                                <p>You Can Export your Invoice Into A Direct *.pdf File!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<section id="current-users">
                    <header>
                        <h4>Total Uses Of This Tool</h4>
                        <h3 id="total-users">000,120</h3>
                    </header>
                </section>-->
            </div>
        </div>
    </section>
    <section id="our-team">
        <div class="container">
            <header>
                <h2 class="text-center font-weight-light">Our Team</h2>
                <p class="text-center">This Web Application Is Made By An Intern And Octa+ Crew.</p>
            </header>
            <div class="row mt-4">
                <div class="wow fadeInLeft col-lg-3 col-md-6 mt-4" data-wow-offset="150">
                    <div class="card overflow-hidden">
                        <img class="card-img" src="media/person1.jpg" alt="A person">
                        <div
                            class="position-absolute text-center text-white w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <p>Ridha Gheryani</p>
                            <em class="small">Designer</em>
                            <div class="pt-3">
                                <i class="px-1 fab fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="px-1 fab fa-google-plus-g"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInLeft col-lg-3 col-md-6 mt-4" data-wow-offset="150">
                    <div class="card overflow-hidden">
                        <img class="card-img" src="media/person2.jpg" alt="A person">
                        <div
                            class="position-absolute text-center text-white w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <p>Khalil Azlouk</p>
                            <em class="small">Full Stack Dev</em>
                            <div class="pt-3">
                                <i class="px-1 fab fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="px-1 fab fa-google-plus-g"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInRight col-lg-3 col-md-6 mt-4" data-wow-offset="150">
                    <div class="card overflow-hidden">
                        <img class="card-img" src="media/person3.jpg" alt="A person">
                        <div
                            class="position-absolute text-center text-white w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <p>Rayen Bourguiba</p>
                            <em class="small">IT Intern</em>
                            <div class="pt-3">
                                <i class="px-1 fab fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="px-1 fab fa-google-plus-g"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInRight col-lg-3 col-md-6 mt-4" data-wow-offset="150">
                    <div class="card overflow-hidden">
                        <img class="card-img" src="media/person4.jpg" alt="A person">
                        <div
                            class="position-absolute text-center text-white w-100 h-100 py-2 d-flex flex-column justify-content-center">
                            <p>Hazem Ben Khlifa</p>
                            <em class="small">Débutant</em>
                            <div class="pt-3">
                                <i class="px-1 fab fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="px-1 fab fa-google-plus-g"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="py-5 text-white text-center">
        <div class="container">
            <h2 class="wow fadeIn h1 mt-0">Testimonials</h2>
            <p class="wow fadeIn lead text-uppercase text-muted">This App Was Rated 4.7/5 By Our Verified Users</p>
            <hr class="divider-sm my-3">
            <div class="row text-success">
                <div class="wow bounceInLeft col-md-4" data-wow-delay=".3s">
                    <div class="icon rounded mt-3 py-5 bg-white">
                        <!--<i class="fas fa-code fa-3x mb-4"></i>-->
                        <h3 class="h4 mb-2">Great App!</h3>
                        <p class="text-muted mb-0">Thanks For The Efforts You put Into Making This App It's Very Useful!
                        </p>
                    </div>
                </div>
                <div class="wow fadeIn col-md-4" data-wow-offset="200">
                    <div class="icon rounded mt-3 py-5 bg-white">
                        <!--<i class="fas fa-mobile-alt fa-3x mb-4"></i>-->
                        <h3 class="h4 mb-2">Thanks!</h3>
                        <p class="text-muted mb-0">What I Loved Most About This App Is That I Acn Use It On My Mobile
                            Phone.</p>
                    </div>
                </div>
                <div class="wow bounceInRight col-md-4" data-wow-delay=".3s">
                    <div class="icon rounded mt-3 py-5 bg-white">
                        <!--<i class="fas fa-headset fa-3x mb-4"></i>-->
                        <h3 class="h4 mb-2">You're The Best!</h3>
                        <p class="text-muted mb-0">The Teams Answers Your Questions In A Short Time.</p>
                    </div>
                </div>
            </div>
            
            <div class="row my-5">
                <div class="wow fadeInUpBig col-lg-3 col-6 cen" data-wow-delay=".1s" >
                    <h6 class="h1 font-weight-bold cen">568</h6>
                    <p class="cen">People Used This App</p>
                </div>
            </div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="mb-3">
                <h3 class="wow fadeInUp text-white font-weight-bold display-3">F.A.Q</h3>
            </div>
            <div class="row">
                <div class="wow bounceInUp col-lg-8">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="input-group input-group-lg my-3">
                                <input type="text" class="form-control" placeholder="Search FAQ">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search<i
                                            class="ml-2 fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card mt-2">
                            <div class="card-header bg-white">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link " data-toggle="collapse"
                                        data-target="#q-1">Do I have To Pay To Benify From The App?</button>
                                </h5>
                            </div>

                            <div id="q-1" class="collapse" data-parent="#accordion">
                                <div class="card-body ">
                                    <p>No, This web application is totally free to use.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header bg-white">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link " data-toggle="collapse"
                                        data-target="#q-2">Can I make an invoice as an individual not as a company?</button>
                                </h5>
                            </div>

                            <div id="q-2" class="collapse" data-parent="#accordion">
                                <div class="card-body ">
                                    <p>Yes of course, you can leave the company field emty and you'll still get your invoice.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header bg-white">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link " data-toggle="collapse"
                                        data-target="#q-3">Can I print directly from the website?</button>
                                </h5>
                            </div>

                            <div id="q-3" class="collapse" data-parent="#accordion">
                                <div class="card-body ">
                                    <p>The printing functionality is not integrated into this web application you'll get your pdf file and feel free to print it or to keep it as pdf.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header bg-white">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link " data-toggle="collapse"
                                        data-target="#q-4">Can i modify my invoice?</button>
                                </h5>
                            </div>

                            <div id="q-4" class="collapse" data-parent="#accordion">
                                <div class="card-body ">
                                    <p>yes you can! you have access to the invoice after you submit it, you can edit it or delete it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow bounceInRight col-lg-3">
                    <div class="card bg-transparent border-0 test-dark text-center ob-5 mt-4 mt-lg-0">
                        <div class="card-body bg-transparent pt-4">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="row">

                                <div class="col-sm-4 col-lg-12">
                                    <div class="card-body mt-2">
                                        <i class="fas fa-2x fa-phone-volume mb-2"></i>
                                        <p>Call Us</p>
                                        <p>+216-99-137-982</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="shadow-2">
        <footer class="container  text-center text-lg-left">
            <div class="row">
                <div class="wow slideInLeft col-lg-7" data-wow-offset="200">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="h2 font-weight-light">Zarzis Invoice<sup><small>&trade;</small></sup></h4>
                            <p>Manage your customer file, establish quotes and generate invoices for free..</p>
                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5 border-left mt-5 mt-lg-0" id="contact">
                            <h5>Contact</h5>
                            <address>
                                Octa+ <br>
                                Zarzis,Medenine <br>
                                ZIP Code 4170 <br>
                                Telephone: 99-137-982
                            </address>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-10">
                            <h3>Subscribe to out newsletter</h3>
                            <div class="input-group input-group-lg my-3">
                                <input type="text" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wow slideInRight col-lg-5" data-wow-offset="200">
                    <div id="map"></div>
                </div>
            </div>
        </footer>
        <div class="wow slideInUp text-white text-center mt-5 py-3" id="footer-bottom">
            <h6>Find Us On Social Media</h6>
            <div id="social-icons">
                <img src="media/social/facebook.png" alt="A facebook icon.">
                <img src="media/social/instagram.png" alt="A instagram icon.">
                <img src="media/social/pinterest.png" alt="A pinterest icon.">
                <img src="media/social/twitter.png" alt="A twitter icon.">
                <img src="media/social/youtube.png" alt="A youtube icon.">
            </div>
            <br>
            <h6>Copyright 2020 - All Rights Reserved </h6>
        </div>
    </section>

    <!-- Wow js -->
    <script src="wow/wow.min.js"></script>
    <script src="wow/wow-activate.js"></script>

    <!-- Google Maps -->
    <script src="initMap.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
        </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(function () {
            $('.scroll').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 100 }, 'slow');
            })
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>