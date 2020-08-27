<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header" style="background:rgb(61, 60, 60);">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg align-items-center">
                    <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" style="width:80px;height:80px;" alt=""></a>
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
                                    <a class="dropdown-item" href="/index.php/Myaccount">My account</a>
                                    <a class="dropdown-item" href="/index.php/Create_ads">Create_ad</a>
                                    <a class="dropdown-item" href="/index.php/My_ads">My ads</a>
                                    <a class="dropdown-item" href="/index.php/Mycalendar">My calendar</a>
                                    <hr>
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
