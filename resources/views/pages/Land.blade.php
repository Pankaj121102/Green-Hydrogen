@extends('layouts.app')

@section('content')
<style>
            :root {                
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #000000;

                --section-1-bg-color: #f5f5f5;
                --section-2-bg-color: #111111;
                --section-3-bg-color: #f5f5f5;
            
                --footer-bg-color: #191919;
            }
        </style>
<section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                        <img src="images/l1.png" class="full-image" data-mask="30">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Land Acquisition and Development</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/#demos">Home</a></li>
                                        <li class="breadcrumb-item"><a href="/#pages">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Land Acquisition and Development</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content -->
        <section id="content" class="section-1 single">
            <div class="container">
                <div class="row">

                    <!-- Main -->
                    <main class="col-12 col-lg-8 p-0">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h2 class="featured mt-0 ml-0">Land Acquisition and Development</h2>
                                <p>
Theorm91 specializes in the seamless integration of Land Acquisition and Development, transforming raw landscapes into thriving, purposeful spaces. Our meticulous approach begins with identifying prime locations ripe for development. We navigate the complexities of legalities, zoning, and environmental considerations, ensuring a smooth acquisition process. Theorm91 is committed to sustainable practices, incorporating eco-friendly features into each development. Our skilled team meticulously plans and executes projects, maximizing the potential of every parcel. From residential communities to commercial hubs, our Land Acquisition and Development services are driven by a vision of creating spaces that enrich lives and contribute to vibrant, sustainable neighborhoods. Choose Theorm91 for a transformative journey from untouched land to flourishing community.</p>
<h2 class="featured mt-0 ml-0">Benefits of Land Acquisition and Development</h2>
<ul>
<li><strong>Strategic Location:</strong><br>
Identify and acquire prime locations for various types of developments, ensuring strategic positioning for residential, commercial, or mixed-use projects.</li>
<li><strong>Value Appreciation:</strong><br>Successfully developed land typically appreciates in value, providing a potentially lucrative return on investment over time.</li>
<li><strong> Tailored Developments:</strong><br>Customize projects to suit specific needs, whether creating residential communities, commercial hubs, or mixed-use spaces, catering to diverse market demands.</li>
<li><strong>Sustainable Practices:</strong><br>Theorm91 integrates eco-friendly features, emphasizing sustainable development practices to reduce environmental impact and enhance long-term value.</li>

</ul>                                
</div>
                        </div>        
                    </main>

                    <!-- Sidebar -->
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
                        <div class="row">
                            <div class="col-12 align-self-center text-left">                                

                                <!-- Share This -->
                                <div class="item widget-share-this">
                                    <h4>Share This</h4>
                                    <ul class="navbar-nav social share-list">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Widget [services] -->
                                <div class="item widget-services">
                                    <ul class="list-group list-group-flush widget-services">
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-globe"></i>
                                                <h5>Residential Development</h5>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-basket"></i>
                                                <h5>Commercial
Spaces</h5>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-screen-smartphone"></i>
                                                <h5>Land Acquisition and Development</h5>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-layers"></i>
                                                <h5>Consultation and
Advisory</h5>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-chart"></i>
                                                <h5>Interior Design and Customization</h5>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <i class="icon icon-bulb"></i>
                                                <h5>Project
Management</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <section id="contact" class="section-1 form">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        
                    </div>
                </div>
                <form action="php/form.php" id="leverage-simple-form" class="leverage-simple-form">
                    <input type="hidden" name="section" value="leverage_form">

                    <input type="hidden" name="reCAPTCHA">
                    <!-- Remove this field if you want to disable recaptcha -->

                    <div class="row form-group-margin">
                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                        </div>
                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                        </div>
                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                        </div>
                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                            <i class="icon-arrow-down mr-3"></i>
                            <select name="budget" class="form-control field-budget">
                                <option value="" selected disabled>What's your budget range?</option>
                                <option>Less than $2.000</option>
                                <option>$2.000 — $5.000</option>
                                <option>$5.000 — $10.000</option>
                                <option>$10,000+</option>
                            </select>
                        </div>
                        <div class="col-12 m-0 p-2 input-group">
                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 col-12 m-0 pl-md-2">
                            <span class="form-alert"></span>
                        </div>
                        <div class="col-12 input-group m-0 p-2">
                            <a class="btn primary-button">SEND</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
@endsection