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
                        
                        <img src="images/l3.jpg" class="full-image" data-mask="30">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Interior Design and Customization</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/#demos">Home</a></li>
                                        <li class="breadcrumb-item"><a href="/#pages">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Interior Design and Customization</li>
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
                                <h2 class="featured mt-0 ml-0">Interior Design and Customization</h2>
                                <p>Elevate your living or working space to new heights with Theorm91's Interior Design and Customization services. Our expert designers transform interiors into personalized masterpieces, reflecting your unique style and preferences. From conceptualization to execution, we prioritize functionality, aesthetics, and innovation. Immerse yourself in a collaborative process where every detail, color, and texture is tailored to create a space that resonates with your personality. Whether it's a residential haven or a dynamic workspace, our team ensures that your vision becomes a tangible reality. Theorm91 invites you to experience the art of customization, where every corner tells a story, and each space becomes a testament to your individuality. Welcome to a world of design where your imagination knows no bounds.</p>
<h2 class="featured mt-0 ml-0">Benefits of Interior Design and Customization</h2>
<ul>
<li><strong>Personalization:</strong><br>
Tailor your living or working environment to match your unique preferences, ensuring a space that feels distinctly yours.</li>
<li><strong>Functional Design:</strong><br>Optimize your space for functionality without compromising on style, creating a harmonious balance that enhances your daily life.</li>
<li><strong>Aesthetics and Innovation:</strong><br>Immerse yourself in a world of design where aesthetics meet innovation, resulting in interiors that are both visually stunning and functionally innovative.</li>
<li><strong>Enhanced Comfort:</strong><br>Our customization services prioritize your comfort, from furniture layouts to lighting schemes, ensuring a space that feels inviting and cozy.</li>

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