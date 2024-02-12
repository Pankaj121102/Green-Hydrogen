@extends('layouts.app')

@section('content')
<style>
            :root {                
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #000000;

                --section-1-bg-color: #eeeeee;
                --section-2-bg-color: #111111;
                --section-3-bg-color: #f5f5f5;
            
                --footer-bg-color: #191919;
            }
        </style>
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                        <img src="images/s1.jpeg" class="full-image" data-mask="30">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Our Services</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/#demos">Home</a></li>
                                        <li class="breadcrumb-item"><a href="/#pages">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section-1 offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Services</h2>
                        <p>Building Communities, One Home at a Time</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>GET IN TOUCH</a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                        <img src="images/sc1.png">
                            <h4>Residential <br>Development</h4>
                            <p>Immerse yourself in the charm of our thoughtfully designed residential projects. From contemporary apartments to spacious villas, our residential developments are crafted to provide comfort, style, and a sense of community.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 item">
                        <div class="card">
                            <img src="images/sc2.png">
                            <h4>Commercial <br>Spaces</h4>
                            <p>Elevate your business with our strategically located commercial properties. Whether you need a modern office space or a retail storefront, we specialize in creating environments that foster <br>productivity and<br> success.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <img src="images/sc3.png">
                            <h4>Land Acquisition and Development</h4>
                            <p>Unlock the potential of your land with our expert land acquisition and development services. From identifying prime locations to implementing sustainable development practices, we guide you through every step of the process.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <img src="images/sc4.png">
                            <h4>Consultation and <br>Advisory</h4>
                            <p>Our team of experienced real estate professionals is here to provide personalized consultation and advisory services. From market analysis to investment strategies, we help you make informed decisions for a secure journey.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <img src="images/sc5.png">
                            <h4>Interior Design and Customization</h4>
                            <p>Tailor your living or working space to your unique tastes with our interior design and customization services. We collaborate with skilled designers to bring your vision to life, ensuring that your space is a true reflection of your lifestyle.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured">
                            <img src="images/sc6.png">
                            <h4>Project<br> Management</h4>
                            <p>Leave the details to us. Our project management team oversees every aspect of development, ensuring timely execution, cost-effectiveness, and the highest standards of <br>quality.</p>
                            <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Partners -->
<section id="partner" class="section-2 odd logos">
            <div class="overflow-holder">
                <div class="container">
                    <div class="swiper-container min-slider">
                    <h1>Our Clients</h1>
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="images/cl1.png" class="fit-image w-85" alt="Fit Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection