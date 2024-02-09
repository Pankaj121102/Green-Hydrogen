@extends('layouts.app')

@section('content')
<style>
            :root {               
                --header-bg-color: #040402;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #040402;

                --section-1-bg-color: #111111;
                --section-2-bg-color: #191919;
                --section-3-bg-color: #040402;
                --section-4-bg-color: #111111;
                --section-5-bg-color: #191919;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #111111;
            
                --footer-bg-color: #191919;
            }
        </style>
<!-- Hero -->
<section id="slider" class="hero p-0 odd">
            <div class="swiper-container full-slider featured animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../images/5.png" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Your Castle, Our Priority</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Opening doors to dreams, one key at a time. Your perfect home awaits – welcome to a future of possibilities.</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../images/1.png" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Real Estate Excellence, Your Way</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Realizing aspirations through real estate. Your space, your story – let us guide you home with expertise and care</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="../images/3.png" class="hero-image" alt="Hero Image">
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Where Dreams Find a Home.</h2>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">From listings to keys, making dreams a reality. Your ideal space, our expertise. Elevate your life – find home now</p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- About [image] -->
        <section id="about" class="section-1 odd highlights image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Us</h2>
                                <p>Welcome to Theorem Realty 91, where we transform real estate aspirations into tangible realities. With a steadfast commitment to integrity, innovation, and client satisfaction, we stand as your trusted partner in the dynamic world of real estate. At Theorem Realty 91, we believe in the power of precision and personalized service, tailoring solutions to match your unique property needs. Our seasoned team of professionals brings a wealth of expertise to every transaction, ensuring seamless experiences and optimal outcomes. As a beacon of reliability, we navigate the intricate landscape of real estate with diligence, offering a comprehensive suite of services. Join us on this journey, where your property goals converge with our dedication to excellence. </p>
                            </div>
                        </div>
                        <a href="#" target="_blank" class="btn mr-lg-auto dark-button"><i class="icon-rocket"></i>Read More</a>
                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a href="../images/about-4.png">
                            <img src="../images/about-4.png" class="fit-image" alt="About Us"id="about1">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [video] -->
        <section id="video" class="section-2 odd highlights image-left">
            <div class="container">
                <div class="row">
                    <div class="gallery col-12 col-md-6">
                        <a data-poster="../images/about-5.png" href="#">
                            <i class="play-video icon-control-play"></i>
                            <div class="mask-radius"></div>
                            <img src="../images/about-5.png" class="fit-image" alt="Institutional" id="about1">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Why Choose Us ? </h2>
                                <p>Choose Theorem Realty 91 for your real estate endeavors because we redefine excellence in property services.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Expertise You Can Trust</h4>
                                        <p>At Theorem Realty 91, we pride ourselves on our unparalleled expertise in the real estate industry.</p>
                                    </div>  
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Personalized Service, Tailored Solutions</h4>
                                        <p>We recognize that every real estate journey is unique. That's why, at Theorem Realty 91, we go beyond one-size-fits-all solutions.</p>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fun Facts -->
        <section id="funfacts" class="section-3 odd counter funfacts featured">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Our Work</h2>
                        <p class="text-max-800">Theorem Realty 91 specializes in comprehensive real estate services, including property acquisition, sales, and investment strategies. With a focus on market insights and personalized solutions, we navigate the real estate landscape to turn your property goals into successful realities.</p>
                    </div>
                </div>
                <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="1000" class="radial">
                            <span></span>
                        </div>
                        <h4>Great Projects</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="200" class="radial">
                            <span></span>
                        </div>
                        <h4>Innovations</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="100" class="radial">
                            <span></span>
                        </div>
                        <h4>Employees</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div data-percent="10000" class="radial">
                            <span></span>
                        </div>
                        <h4>Happy Customers</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section-4 odd offers featured">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Services</h2>
                        <p>The Services offered by Theorem Realty 91.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="page-services-1.html" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-globe"></i>
                            <h4>Property Acquisition</h4>
                            <p>Entrust Theorem Realty 91 with your property search. Our expert team meticulously identifies opportunities aligned with your preferences and investment goals.</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>Sales and Listing Services</h4>
                            <p>Facilitate your property sales with Theorem Realty 91's dedicated listing services. We craft compelling listings, market your property strategically</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Market Insights and Research</h4>
                            <p>Stay ahead with Theorem Realty 91's market insights. Our research team provides up-to-date analyses, trends, and forecasts</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>Investment Consultations</h4>
                            <p>Navigate the complexities of real estate investments with our tailored consultations. Theorem Realty 91 offers in-depth market analyses, risk assessments</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Property Management</h4>
                            <p>Simplify property ownership with our comprehensive management services. From tenant acquisition and lease agreements to maintenance and financial</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <i class="icon icon-bulb"></i>
                            <h4>Consultancy for Developers</h4>
                            <p>Developers benefit from our consultancy services, gaining strategic insights for project planning, market positioning,sales</p>
                            <a href="page-single-service-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News -->
        <section id="news" class="section-5 odd carousel showcase news">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row intro">
                        <div class="col-12 col-md-12 align-self-center text-center">
                            <h2 class="featured">Our Features</h2>
                            <p> features offered by Theorem Realty 91.</p>
                        </div>
                        
                    </div>
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p1.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-1.html">
                                                <h4 class="m-0">Expert Guidance</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                            <p>Benefit from our team's extensive experience and industry knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p2.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-3.html">
                                                <h4 class="m-0">Personalized Property Matching</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                            <p>Experience tailored property recommendations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p3.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-1.html">
                                                <h4 class="m-0">Strategic Marketing</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                            <p>Elevate your property's visibility with our strategic marketing approach</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p4.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-1.html">
                                                <h4 class="m-0">Transparent Transactions</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <p>Enjoy transparency in every transaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p5.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-2.html">
                                                <h4 class="m-0">Comprehensive Market Analysis</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        Stay ahead of market trends with our in-depth analyses. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="../images/p6.png" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="page-single-post-4.html">
                                                <h4 class="m-0">Investment Portfolio Management</h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                            <p>Optimize your real estate investments with our portfolio management services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section id="subscribe" class="section-6 odd subscribe">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Newsletter</h2>
                        <p class="text-max-800">Subscribe to our newsletter and follow our content closely. Receive news based on what has to do with you. We promise not to send promotions you don't like.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <form action="php/form.php" id="leverage-subscribe" class="row m-auto items">
                            <input type="hidden" name="section" value="leverage_subscribe">

                            <input type="hidden" name="reCAPTCHA">
                            <!-- Remove this field if you want to disable recaptcha -->

                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                                <input type="text" name="name" class="form-control field-name" placeholder="Name">
                            </div>
                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                                <input type="email" name="email" class="form-control field-email" placeholder="Email">
                            </div>
                            <div class="col-12 col-lg-2 m-lg-0 input-group align-self-center item">
                                <a class="btn primary-button w-100">SUBSCRIBE</a>
                            </div>
                            <div class="col-12 text-center">
                                <span class="form-alert mt-5 mb-0"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-7 odd form featured">
            <div class="container">
                <form action="php/form.php" id="leverage-form" class="multi-step-form">
                    <input type="hidden" name="section" value="leverage_form">

                    <input type="hidden" name="reCAPTCHA">
                    <!-- Remove this field if you want to disable recaptcha -->

                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                            <!-- Success Message -->
                            <div class="row success message">
                                <div class="col-12 p-0">
                                    <div class="wait">
                                        <div class="spinner-grow" role="status">
                                            <span class="sr-only">Loading</span>
                                        </div>
                                        <h3 class="sending">SENDING</h3>
                                    </div>
                                    <div class="done">
                                        <i class="icon bigger icon-check"></i>
                                        <h3>Your message was sent successful. Thanks.</h3>						
                                        <a href="" class="btn mx-auto primary-button">
                                            <i class="icon-refresh"></i>
                                            REFRESH
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Steps Message -->
                            <div class="row intro form-content">
                                <div class="col-12 p-0">

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Let's Talk?</h2>
                                        <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Almost There</h2>
                                        <p>We need some more important information to better understand how we can help you in the best possible way.</p>
                                    </div>

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h2 class="featured alt">Are you Ready?</h2>
                                        <p>Tell us a little about the project you need to create. This is valuable so that we can direct you to the ideal team.</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Steps Group -->
                            <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                    <ul class="progressbar">
                                        <li>Personal Details</li>
                                        <li>Company Budget</li>
                                        <li>Service Setup</li>
                                    </ul>

                                    <!-- Group 1 -->
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a class="step-next btn primary-button">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 2 -->
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="company" data-minlength="3" class="form-control field-company" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="manager" data-minlength="3" class="form-control field-manager" placeholder="Manager">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" data-minlength="1" class="form-control field-budget">
                                                    <option value="" selected disabled>What's your budget range?</option>
                                                    <option>Less than $2.000</option>
                                                    <option>$2.000 — $5.000</option>
                                                    <option>$5.000 — $10.000</option>
                                                    <option>$10,000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <a class="step-next btn primary-button">NEXT<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 3 -->
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" data-minlength="3" class="form-control field-message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-between justify-content-md-start">
                                            <a class="step-prev btn primary-button mr-4"><i class="icon-arrow-left-circle"></i>PREV</a>
                                            <a class="step-next btn primary-button">SEND<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">

                            <!-- Step 1 -->
							<div class="gallery">
                                <a class="step-image" data-poster="../images/9.jpg" href="#">
                                    <i class="play-video icon-control-play"></i>
                                    <div class="mask-radius"></div>
                                    <img src="../images/9.jpg" class="fit-image" alt="Contact Us">
                                </a>
                            </div>

                            <!-- Step 2 -->
							<div class="gallery">
                                <a class="step-image" href="../images/about-6.jpg">
                                    <img src="../images/about-6.jpg" class="fit-image" alt="Contact Us">
                                </a>
                            </div>

                            <!-- Step 3 -->
							<div class="gallery">
                                <a class="step-image" href="../images/about-7.jpg">
                                    <img src="../images/about-7.jpg" class="fit-image" alt="Contact Us">
                                </a>
                            </div>

                            <!-- Step 4 -->
							<div class="gallery">
                                <a class="step-image" href="../images/about-leverage.jpg">
                                    <img src="../images/about-leverage.jpg" class="fit-image" alt="Contact Us">
                                </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </section>
        

@endsection