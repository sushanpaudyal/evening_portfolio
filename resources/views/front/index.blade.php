<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('front.includes.head')
<body data-spy="scroll" data-target="#headerNav" data-offset="100">

<!-- Preloader Start -->
<div id="preloader" class="bg-primary">
    <div class="preloader--spinner"></div>
</div>
<!-- Preloader End -->

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Header Section Start -->
    <header id="header" class="header--section">
        <!-- Header Navbar Start -->
        <nav class="header--navbar navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo Start -->
                    <a href="{{route('frontend.index')}}" class="navbar-brand">
                            <span class="vc--parent">
                                <span class="vc--child">
                                    <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                                </span>
                            </span>
                    </a>
                    <!-- Logo End -->
                </div>

                <div id="headerNav" class="navbar-collapse collapse">
                    <!-- Header Nav Links Start -->
                    <ul class="header--nav-links ff--primary nav navbar-right">
                        <li class="active"><a href="#header" data-trigger="scroll">Home</a></li>
                        <li><a href="#aboutme" data-trigger="scroll">About Me</a></li>
                        <li><a href="#services" data-trigger="scroll">Services</a></li>
                        <li><a href="#portfolio" data-trigger="scroll">Portfolio</a></li>
                        <li><a href="#skills" data-trigger="scroll">Skills</a></li>
                        <li><a href="#blog" data-trigger="scroll">Blog</a></li>
                        <li><a href="#contact" data-trigger="scroll">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Page</a></li>
                                <li><a href="blog.html">Blog Page</a></li>
                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                <li><a href="contact.html">Contact Page</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Header Nav Links End -->
                </div>
            </div>
        </nav>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->

    <!-- Banner Section Start -->
    <section id="banner" class="banner--section" data-bg-parallax="{{asset('public/adminpanel/uploads/slider/'.$slider->image)}}" data-overlay="0.8">
        <div class="vc--parent">
            <div class="vc--child">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Banner Content Start -->
                            <div class="banner--content text-center pt--160 pb--100">
                                <div class="title text-uppercase">
                                    <h2 class="h3 text-white"><span class="text-primary">Hello</span> I'm</h2>
                                </div>

                                <div class="name text-uppercase">
                                    <h3 class="h2 text-white">{{$slider->name}}</h3>
                                </div>

                                <div class="role fs--18 fw--700 text-white">
                                    <p>{{$slider->designation}}</p>
                                </div>

                                <div class="desc">
                                    <p>
                                        {!! htmlspecialchars_decode($slider->content) !!}
                                    </p>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Hire Me</a>
                                    <a href="#" class="btn btn-white">My Works</a>
                                </div>
                            </div>
                            <!-- Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- About Section Start -->
    <section id="aboutme" class="section pt--100 pb--40">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">About Me</h2>
            </div>
            <!-- Section Title End -->

            <div class="row row--md-vc">
                <div class="col-md-6 pb--60">
                    <!-- Image Block Start -->
                    <div class="img--block">
                        <img src="{{asset('public/frontend/img/about-img/01.jpg')}}" alt="">
                    </div>
                    <!-- Image Block End -->
                </div>

                <div class="col-md-6 pb--60">
                    <!-- About Block Start -->
                    <div class="about--block">
                        <div class="title">
                            <h2 class="h4 fw--700 text-uppercase">Personal Details</h2>
                        </div>

                        <div class="details pt--30 text-dark">
                            <p>Duis aute dolor sit amet, consectetur adipisicing elit. Facere soluta, totam nihil minima, recusandae sapiente saepe provident ullam itaque nemo, beatae minus ratione asperiores aliquid vitae, debitis sint.</p>
                        </div>

                        <div class="details pt--30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ea aliquid nostrum rem. Asperiores molestiae magni obcaecati aliquam quam aliquid reiciendis corrupti excepturi perferendis ab aut, inventore sunt hic iusto.</p>
                        </div>

                        <div class="info pt--50">
                            <table class="ff--primary">
                                <tbody>
                                <tr>
                                    <th>
                                        <i class="fa fa-calendar"></i>
                                        <span>Brithday</span>
                                    </th>
                                    <td>12/10/1990</td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-phone"></i>
                                        <span>Phone</span>
                                    </th>
                                    <td><a href="tel:+123123123456" class="btn-link">(+123) 123 123456</a></td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-envelope"></i>
                                        <span>Email</span>
                                    </th>
                                    <td><a href="mailto:john@example.com" class="btn-link">john@example.com</a></td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-skype"></i>
                                        <span>Skype</span>
                                    </th>
                                    <td>john_doe</td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-globe"></i>
                                        <span>Website</span>
                                    </th>
                                    <td><a href="www.johndoe.com" class="btn-link">www.johndoe.com</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="social text-dark pt--30">
                            <ul class="nav">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>

                        <div class="action pt--60">
                            <a href="#" class="btn btn-default">Download Resume</a>
                        </div>
                    </div>
                    <!-- About Block End -->
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section pt--100 pb--40 bg-light">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Services I Offer</h2>
            </div>
            <!-- Section Title End -->

            <div class="row AdjustRow" data-scroll-reveal="group">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Service Block Start -->
                    <div class="service--block">
                        <div class="icon">
                            <i class="fa fa-heart-o"></i>
                        </div>

                        <div class="title">
                            <h3 class="h4">Amazing Design</h3>
                        </div>

                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi eum, consequatur quas cumque vel.</p>
                        </div>
                    </div>
                    <!-- Service Block End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Service Block Start -->
                    <div class="service--block">
                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="title">
                            <h3 class="h4">Development</h3>
                        </div>

                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi eum, consequatur quas cumque vel.</p>
                        </div>
                    </div>
                    <!-- Service Block End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Service Block Start -->
                    <div class="service--block">
                        <div class="icon">
                            <i class="fa fa-support"></i>
                        </div>

                        <div class="title">
                            <h3 class="h4">24/7 Support</h3>
                        </div>

                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi eum, consequatur quas cumque vel.</p>
                        </div>
                    </div>
                    <!-- Service Block End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Service Block Start -->
                    <div class="service--block">
                        <div class="icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>

                        <div class="title">
                            <h3 class="h4">Redesign</h3>
                        </div>

                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi eum, consequatur quas cumque vel.</p>
                        </div>
                    </div>
                    <!-- Service Block End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="section pt--100 pb--40">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Portfolio</h2>
            </div>
            <!-- Section Title End -->

            <!-- Portfolio Filter Menu Start -->
            <div class="portfolio--filter-menu pb--50">
                <ul class="nav">
                    <li data-target="*" class="active">All Works</li>
                    <li data-target="illustration">Illustration</li>
                    <li data-target="ui-design">UI Design</li>
                    <li data-target="branding">Branding Design</li>
                </ul>
            </div>
            <!-- Portfolio Filter Menu End -->

            <!-- Portfolio Items Start -->
            <div class="portfolio--items row MasonryRow pb--30" data-trigger="gallery_popup">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="illustration ui-design">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/01.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/01.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Cover Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="ui-design illustration">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/02.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/02.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Business Card Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="illustration branding">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/03.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/03.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Candleholders Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="branding illustration">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/04.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/04.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Branding Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="illustration ui-design">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/01.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/01.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Cover Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="ui-design illustration">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/02.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/02.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Business Card Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="illustration branding">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/03.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/03.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Candleholders Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="branding illustration">
                    <!-- Portfolio Item Start -->
                    <div class="portfolio--item">
                        <img src="{{asset('public/frontend/img/portfolio-img/04.jpg')}}" alt="">

                        <a href="{{asset('public/frontend/img/portfolio-img/04.jpg')}}" class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <h3 class="h6">Branding Design</h3>

                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Portfolio Item End -->
                </div>
            </div>
            <!-- Portfolio Items End -->
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Call To Action Start -->
    <section class="section pt--100 pb--100" data-bg-parallax="{{asset('public/frontend/img/call-to-action-img/bg.jpg')}}" data-overlay="0.7">
        <div class="container">
            <!-- Call To Action Block Start -->
            <div class="cta--block text-center">
                <div class="title">
                    <h2 class="h2 text-white">Have an exciting idea for a project?</h2>
                </div>

                <div class="content fs--20 pt--10 text-white">
                    <p>Lorem ipsum dolor sit amet, elit at debitis, consequuntur labore mollitia ea odit eum.</p>
                </div>

                <div class="action pt--20">
                    <a href="#" class="btn btn-white">Hire Me Now</a>
                </div>
            </div>
            <!-- Call To Action Block End -->
        </div>
    </section>
    <!-- Call To Action End -->

    <!-- Resume Section Start -->
    <section id="resume" class="section pt--100 pb--100">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">My Resume</h2>
            </div>
            <!-- Section Title End -->

            <!-- Timeline Block Start -->
            <div class="timeline--block">
                <div class="title">
                    <h3 class="h5">Education</h3>
                </div>

                <div class="sub-title">
                    <p class="fs--16">Knowledge is power. Information is liberating. Eduction is the premise of progress, in every society, in every family.</p>
                </div>

                <!-- Timeline Items Start -->
                <ul class="timeline--items nav">
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-default">
                                <i class="fa fa-graduation-cap"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Academy of Fine Arts</h4>

                                            <p class="institute ff--primary">Master of Arts</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-default">
                                <i class="fa fa-graduation-cap"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Academy of Fine Arts</h4>

                                            <p class="institute ff--primary">Master of Arts</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-default">
                                <i class="fa fa-graduation-cap"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Academy of Fine Arts</h4>

                                            <p class="institute ff--primary">Master of Arts</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-default">
                                <i class="fa fa-graduation-cap"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Academy of Fine Arts</h4>

                                            <p class="institute ff--primary">Master of Arts</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                </ul>
                <!-- Timeline Items End -->
            </div>
            <!-- Timeline Block End -->
        </div>
    </section>
    <!-- Resume Section End -->

    <!-- Experience Section Start -->
    <section class="section pt--100 pb--100 bg-light">
        <div class="container">
            <!-- Timeline Block Start -->
            <div class="timeline--block">
                <div class="title">
                    <h3 class="h5">Experience</h3>
                </div>

                <div class="sub-title">
                    <p class="fs--16">No matter how long you train someone to be brave, you never know if they are not until something real happens.</p>
                </div>

                <!-- Timeline Items Start -->
                <ul class="timeline--items nav">
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-light">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Company Name</h4>

                                            <p class="institute ff--primary">Your Job Title</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-light">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Company Name</h4>

                                            <p class="institute ff--primary">Your Job Title</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-light">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Company Name</h4>

                                            <p class="institute ff--primary">Your Job Title</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                    <li>
                        <!-- Timeline Item Start -->
                        <div class="timeline--item">
                            <div class="icon bg-light">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <table class="table" data-scroll-reveal="bottom">
                                <tr>
                                    <td>
                                        <p class="date bg-primary">2000 - 2013</p>

                                        <div class="bottom">
                                            <h4 class="name h6 fw--700">Company Name</h4>

                                            <p class="institute ff--primary">Your Job Title</p>

                                            <p class="location fs--12">Tokyo, Japan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad, officiis! Saepe amet beatae nihil, tempora, qui odio sapiente aliquid sit quia ipsa quae.</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Timeline Item End -->
                    </li>
                </ul>
                <!-- Timeline Items End -->
            </div>
            <!-- Timeline Block End -->
        </div>
    </section>
    <!-- Experience Section End -->

    <!-- Skills Section Start -->
    <section id="skills" class="section pt--100 pb--40" data-bg-img="img/skills-img/bg.jpg" data-overlay="0.7">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-white text-uppercase">My Skills</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-md-6 pb--60">
                    <!-- Skills Items Start -->
                    <div class="skills--items">
                        <div class="skill--title text-uppercase">
                            <h3 class="h4 text-white">Personal Skills</h3>
                        </div>

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Hard Work</span>
                                <span class="skill--count float--right">80%</span>
                            </h4>

                            <p class="skill--progress" style="width: 80%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Self Motivation</span>
                                <span class="skill--count float--right">90%</span>
                            </h4>

                            <p class="skill--progress" style="width: 90%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Communication</span>
                                <span class="skill--count float--right">60%</span>
                            </h4>

                            <p class="skill--progress" style="width: 60%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Team Work</span>
                                <span class="skill--count float--right">65%</span>
                            </h4>

                            <p class="skill--progress" style="width: 65%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Dedication</span>
                                <span class="skill--count float--right">70%</span>
                            </h4>

                            <p class="skill--progress" style="width: 70%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->
                    </div>
                    <!-- Skills Items End -->
                </div>

                <div class="col-md-6 pb--60">
                    <!-- Skills Items Start -->
                    <div class="skills--items">
                        <div class="skill--title text-uppercase">
                            <h3 class="h4 text-white">Professional Skills</h3>
                        </div>

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Photoshop</span>
                                <span class="skill--count float--right">80%</span>
                            </h4>

                            <p class="skill--progress" style="width: 80%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">Illustrator</span>
                                <span class="skill--count float--right">90%</span>
                            </h4>

                            <p class="skill--progress" style="width: 90%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">PHP</span>
                                <span class="skill--count float--right">60%</span>
                            </h4>

                            <p class="skill--progress" style="width: 60%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">CSS3</span>
                                <span class="skill--count float--right">65%</span>
                            </h4>

                            <p class="skill--progress" style="width: 65%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skill--item">
                            <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                <span class="skill--text">HTML5</span>
                                <span class="skill--count float--right">70%</span>
                            </h4>

                            <p class="skill--progress" style="width: 70%;" data-trigger="progress_bar"></p>
                        </div>
                        <!-- Skill Item End -->
                    </div>
                    <!-- Skills Items End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->

    <!-- Pricing Section Start -->
    <section id="pricing" class="section pt--100 pb--40 bg-light">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Pricing Plan</h2>
            </div>
            <!-- Section Title End -->

            <div class="row AdjustRow">
                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Pricing Item Start -->
                    <div class="pricing--item">
                        <div class="pricing--header bg-primary">
                            <div class="plan">
                                <h3 class="h3 text-primary">Starter</h3>
                            </div>

                            <div class="price ff--primary">
                                <p>Form <span>$50</span></p>
                            </div>
                        </div>

                        <div class="pricing--features fs--16 ff--primary">
                            <ul class="nav">
                                <li>Web Design Service</li>
                                <li>Web Development Service</li>
                                <li>Graphic Design Service</li>
                                <li>SEO Service</li>
                            </ul>
                        </div>

                        <div class="pricing--action">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Pricing Item Start -->
                    <div class="pricing--item">
                        <div class="pricing--header bg-primary">
                            <div class="plan">
                                <h3 class="h3 text-primary">Starter</h3>
                            </div>

                            <div class="price ff--primary">
                                <p>Form <span>$150</span></p>
                            </div>
                        </div>

                        <div class="pricing--features fs--16 ff--primary">
                            <ul class="nav">
                                <li>Web Design Service</li>
                                <li>Web Development Service</li>
                                <li>Graphic Design Service</li>
                                <li>SEO Service</li>
                            </ul>
                        </div>

                        <div class="pricing--action">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Pricing Item Start -->
                    <div class="pricing--item">
                        <div class="pricing--header bg-primary">
                            <div class="plan">
                                <h3 class="h3 text-primary">Starter</h3>
                            </div>

                            <div class="price ff--primary">
                                <p>Form <span>$250</span></p>
                            </div>
                        </div>

                        <div class="pricing--features fs--16 ff--primary">
                            <ul class="nav">
                                <li>Web Design Service</li>
                                <li>Web Development Service</li>
                                <li>Graphic Design Service</li>
                                <li>SEO Service</li>
                            </ul>
                        </div>

                        <div class="pricing--action">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section pt--100 pb--40">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Meet My Team</h2>
            </div>
            <!-- Section Title End -->

            <div class="row AdjustRow">
                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Team Member Item Start -->
                    <div class="team--member" data-scroll-reveal="bottom">
                        <div class="img">
                            <img src="{{asset('public/frontend/img/team-img/member-01.jpg')}}" alt="">
                        </div>

                        <div class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <div class="name">
                                        <h3 class="h3 fw--400">Mike Jones</h3>
                                    </div>

                                    <div class="company ff--primary">
                                        <p>ThemeLooks</p>
                                    </div>

                                    <div class="social">
                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Team Member Item Start -->
                    <div class="team--member" data-scroll-reveal="bottom">
                        <div class="img">
                            <img src="{{asset('public/frontend/img/team-img/member-02.jpg')}}" alt="">
                        </div>

                        <div class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <div class="name">
                                        <h3 class="h3 fw--400">Jack Roberts</h3>
                                    </div>

                                    <div class="company ff--primary">
                                        <p>ThemeLooks</p>
                                    </div>

                                    <div class="social">
                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Team Member Item Start -->
                    <div class="team--member" data-scroll-reveal="bottom">
                        <div class="img">
                            <img src="{{asset('public/frontend/img/team-img/member-03.jpg')}}" alt="">
                        </div>

                        <div class="caption">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <div class="name">
                                        <h3 class="h3 fw--400">Dennis Murray</h3>
                                    </div>

                                    <div class="company ff--primary">
                                        <p>ThemeLooks</p>
                                    </div>

                                    <div class="social">
                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section pt--100 pb--40 bg-light">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Blog &amp; News</h2>
            </div>
            <!-- Section Title End -->

            <div class="row AdjustRow">
                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Post Item Start -->
                    <div class="post--item">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="blog-details.html"><img src="{{asset('public/frontend/img/blog-img/post-item-01.jpg')}}" alt=""></a>

                            <a href="#" class="date">25 Jan 2017</a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Title Start -->
                        <div class="post--title text-uppercase">
                            <h3 class="h3 fs--22">
                                <a href="blog-details.html" class="btn-link">Eiusmod tempor incididunt ut labore et dolor menna aliqua</a>
                            </h3>
                        </div>
                        <!-- Post Title End -->

                        <!-- Post Excerpt Start -->
                        <div class="post--excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dignissimos molestiae voluptates ullam dolor mollitia quos commodi...</p>
                        </div>
                        <!-- Post Excerpt End -->

                        <!-- Post Action Start -->
                        <div class="post--action text-uppercase">
                            <a href="blog-details.html" class="btn-link">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!-- Post Action End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Post Item Start -->
                    <div class="post--item">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="blog-details.html"><img src="{{asset('public/frontend/img/blog-img/post-item-02.jpg')}}" alt=""></a>

                            <a href="#" class="date">25 Jan 2017</a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Title Start -->
                        <div class="post--title text-uppercase">
                            <h3 class="h3 fs--22">
                                <a href="blog-details.html" class="btn-link">Eiusmod tempor incididunt ut labore et dolor menna aliqua</a>
                            </h3>
                        </div>
                        <!-- Post Title End -->

                        <!-- Post Excerpt Start -->
                        <div class="post--excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dignissimos molestiae voluptates ullam dolor mollitia quos commodi...</p>
                        </div>
                        <!-- Post Excerpt End -->

                        <!-- Post Action Start -->
                        <div class="post--action text-uppercase">
                            <a href="blog-details.html" class="btn-link">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!-- Post Action End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--60">
                    <!-- Post Item Start -->
                    <div class="post--item">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="blog-details.html"><img src="{{asset('public/frontend/img/blog-img/post-item-03.jpg')}}" alt=""></a>

                            <a href="#" class="date">25 Jan 2017</a>
                        </div>
                        <!-- Post Image End -->

                        <!-- Post Title Start -->
                        <div class="post--title text-uppercase">
                            <h3 class="h3 fs--22">
                                <a href="blog-details.html" class="btn-link">Eiusmod tempor incididunt ut labore et dolor menna aliqua</a>
                            </h3>
                        </div>
                        <!-- Post Title End -->

                        <!-- Post Excerpt Start -->
                        <div class="post--excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dignissimos molestiae voluptates ullam dolor mollitia quos commodi...</p>
                        </div>
                        <!-- Post Excerpt End -->

                        <!-- Post Action Start -->
                        <div class="post--action text-uppercase">
                            <a href="blog-details.html" class="btn-link">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!-- Post Action End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>

            <!-- Section Footer Start -->
            <div class="section--footer text-center pb--60">
                <a href="blog.html" class="btn btn-primary">View All Posts</a>
            </div>
            <!-- Section Footer End -->
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="section pt--80 pb--20">
        <div class="container">
            <div class="row" data-scroll-reveal="group">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Client Item Start -->
                    <div class="client--item">
                        <img src="{{asset('public/frontend/img/brands-img/01.png')}}" alt="" class="center-block">
                    </div>
                    <!-- Client Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Client Item Start -->
                    <div class="client--item">
                        <img src="{{asset('public/frontend/img/brands-img/02.png')}}" alt="" class="center-block">
                    </div>
                    <!-- Client Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Client Item Start -->
                    <div class="client--item">
                        <img src="{{asset('public/frontend/img/brands-img/03.png')}}" alt="" class="center-block">
                    </div>
                    <!-- Client Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Client Item Start -->
                    <div class="client--item">
                        <img src="{{asset('public/frontend/img/brands-img/04.png')}}" alt="" class="center-block">
                    </div>
                    <!-- Client Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section pt--90 pb--90" data-bg-parallax="{{asset('public/frontend/img/testimonial-img/bg.jpg')}}" data-overlay="0.5">
        <div class="container">
            <!-- Testimonial Slider Start -->
            <div class="testimonial--slider owl-carousel" data-owl-dots="true">
                <!-- Testimonial Item Start -->
                <div class="testimonial--item text-white">
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>

                    <blockquote>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <footer>James Stone @ Company Inc.</footer>
                    </blockquote>
                </div>
                <!-- Testimonial Item End -->

                <!-- Testimonial Item Start -->
                <div class="testimonial--item text-white">
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>

                    <blockquote>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <footer>Roger Martin @ Company Inc.</footer>
                    </blockquote>
                </div>
                <!-- Testimonial Item End -->

                <!-- Testimonial Item Start -->
                <div class="testimonial--item text-white">
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>

                    <blockquote>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <footer>Wayne Stone @ Company Inc.</footer>
                    </blockquote>
                </div>
                <!-- Testimonial Item End -->
            </div>
            <!-- Testimonial Slider End -->
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section pt--100 pb--40 bg-light">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--60 text-center">
                <h2 class="h2 text-uppercase">Contact With Me</h2>
            </div>
            <!-- Section Title End -->

            <div class="row AdjustRow pb--10">
                <div class="col-md-4 col-xs-12 pb--40">
                    <!-- Contact Info Block Start -->
                    <div class="contact--info-block" data-scroll-reveal="bottom">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h4">Call Me</h3>
                        </div>

                        <div class="desc">
                            <p><a href="tel:+123123123456" class="btn-link">(+123) 123 123456</a>, <a href="tel:+123123123456" class="btn-link">(+123) 123 123456</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Block End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--40">
                    <!-- Contact Info Block Start -->
                    <div class="contact--info-block" data-scroll-reveal="bottom">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h4">Visit Me</h3>
                        </div>

                        <div class="desc">
                            <p>123 Lorem St., Ismailia, Egypt</p>
                        </div>
                    </div>
                    <!-- Contact Info Block End -->
                </div>

                <div class="col-md-4 col-xs-12 pb--40">
                    <!-- Contact Info Block Start -->
                    <div class="contact--info-block" data-scroll-reveal="bottom">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h4">Send A Message</h3>
                        </div>

                        <div class="desc">
                            <p><a href="mailto:john@example.com" class="btn-link">john@example.com</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Block End -->
                </div>
            </div>

            <!-- Contact Form Start -->
            <div class="contact--form pb--60" data-form="ajax">
                <div class="title text-center text-uppercase pb--30">
                    <h3 class="h4">You can drop me a line here</h3>
                </div>

                <form action="forms/contact-form.php">
                    <div class="status"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name *" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form End -->
        </div>
    </section>
    <!-- Contact Section End -->
@include('front.includes.footer')