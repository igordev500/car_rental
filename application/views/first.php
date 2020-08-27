    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" style="width:100px;height:80px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <?php if(!$this->session->has_userdata('email')){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_up">Sign up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_in">Sign in</a>
                                </li>
                                <?php }if($this->session->has_userdata('email')){ ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $this->session->userdata('first'); ?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- <a class="dropdown-item" href="#">Home</a> -->
                                        <a class="dropdown-item" href="/index.php/Myaccount">My account</a>
                                        <a class="dropdown-item" href="/index.php/Create_ads">Create_ad</a>
                                        <a class="dropdown-item" href="/index.php/My_ads">My ads</a>
                                        <a class="dropdown-item" href="/index.php/Mycalendar">My calendar</a>
                                        <a class="dropdown-item" href="/index.php/First/logout">Sign Out</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="btn btn-outline-light" style="font-size:12px;margin-left:22px">MY BOOKINGS</a>
                                </li>
                                <?php }if(!$this->session->has_userdata('email')){ ?>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-outline-light" style="font-size:12px;margin-left:22px">LIST MY RV</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img animated-img" style="background-image: url(/assets/img/bg-img/back.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        
                        <!-- <div class="video-overview">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a>
                        </div> -->
                        <h2>Do you own an RV or camper van Rent out your RV and start earning!</h2>
                        <a href="#" class="btn fancy-btn fancy-active">Rent an RV</a>
                        <a href="/index.php/Create_ads" class="btn fancy-btn">Create an Ad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->
    
    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="fancy-blog-area section-padding-100-70" style="margin-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3>Rent an RV, camper or conversion van <br> and travel all across Europe!</h3>
                        <!-- <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/assets/img/motorhome-img/rent1.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Converted van(Pro)</b>
                                    <p>Edinburgh</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€90</p>
                                </div>
                            </div>
                            <div>
                                <span>5 seats:4 sleeping places</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="/assets/img/motorhome-img/rent2.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Comper</b>
                                    <p>East Kilbride</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€37</p>
                                </div>
                            </div>
                            <div>
                                <span>5 seats:4 sleeping places</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="/assets/img/motorhome-img/rent3.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Camper</b>
                                    <p>Buckingham</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€43</p>
                                </div>
                            </div>
                            <div>
                                <span>4 seats:4 sleeping places</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="2s">
                        <img src="/assets/img/motorhome-img/rent1.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Converted van(Pro)</b>
                                    <p>Edinburgh</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€90</p>
                                </div>
                            </div>
                            <div>
                                <span>5 seats:4 sleeping places</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="2.5s">
                        <img src="/assets/img/motorhome-img/rent2.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Comper</b>
                                    <p>East Kilbride</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€37</p>
                                </div>
                            </div>
                            <div>
                                <span>5 seats:4 sleeping places</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="3s">
                        <img src="/assets/img/motorhome-img/rent3.jpg" alt="">
                        <div class="blog-content">
                            <div class="row">
                                <div class="col-8 col-md-8">
                                    <b>Camper</b>
                                    <p>Buckingham</p>
                                </div>
                                <div class="col-4 col-md-4 tright">
                                    <span>From</span>
                                    <p>€43</p>
                                </div>
                            </div>
                            <div>
                                <span>4 seats:4 sleeping places</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;">
                <a href="#" class="btn fancy-btn fancy-active">Rent an RV</a>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <section class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url(/assets/img/bg-img/hero-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
                        <h2>Do you own  an RV or camper van</h2>
                        <h2>Rent out your RV and start earning!</h2>
                        <p>Want to <b>rent out your RV?</b> Follow these easy steps to join the RV rental marketplace!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/assets/img/part/1.svg" alt="">
                        <p>Create your ad <br><b>for free</b> in only 2 min</p>
                        
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <img src="/assets/img/part/2.svg" alt="">
                        <p>Manage your <br>rental requests  <b></b> on your own terms</p>
                        
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <img src="/assets/img/part/3.svg" alt="">
                        <p>Meet the owner <br>to <b>hand over the keys</b> </p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="2s">
                        <img src="/assets/img/part/4.svg" alt="">
                        <p>Receive your <b>payment</b> <br>and continue to rent out </p>
                        
                    </div>
                </div>
            </div>
            <div  style="text-align:center;">
                <a href="/index.php/Create_ads" class="btn fancy-btn">Create Ad</a>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2>We Are A Creative Digital Agency Focused on Growing Brands Online</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <a href="#" class="btn fancy-btn fancy-dark">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/assets/img/bg-img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(/assets/img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 style="color:white">Let your RV have all the adventures <br>it deserves and reap the rewards in cash!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="fancy-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="/assets/img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer 
                                    and tech support tends to be the norm, it’s always great having a team like you guys at Fancy!
                                     So, be sure that I’ll always spread the word about how good your product is 
                                     and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="/assets/img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="/assets/img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Our Newsletter</h6>
                            <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                            <form action="#" method="get">
                                <input type="search" name="search" id="footer-search" placeholder="E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer-social-widegt d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Twitter Feed</h6>
                            <div class="single-tweet">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> With the popularity of podcast shows growing with each year, you might consider starting it yourself as well. <br>https://buff.ly/2zttoJb </a>
                                <span>About 20 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Link Categories</h6>
                            <nav>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Agency</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Work</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>1 (800) 686-6688 <br>info.deercreative@gmail.com
                            </p>
                            <p>40 Baria Sreet 133/2 <br>NewYork City, US</p>
                            <p>Open hours: 8.00-18.00 Mon-Fri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="#">Disclaimer</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Advertisement</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->


