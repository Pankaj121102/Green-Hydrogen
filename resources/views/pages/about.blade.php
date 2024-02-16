x@extends('layouts.app')

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
             <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                        <img src="/images/200.jpg" class="full-image" data-mask="70">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">About Us</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About [image] -->
        <section id="about" class="section-1 highlights image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Us</h2>
                                <p style="color:#000000;">
Welcome to Theorem Realty 91, where innovation meets real estate excellence. As a pioneering force in the industry, we redefine property solutions with a commitment to integrity, transparency, and client satisfaction. At Theorem Realty 91, we leverage cutting-edge technology and a seasoned team of professionals to transform your real estate journey. Our unwavering dedication to ethical practices ensures a seamless experience, whether you're buying, selling, or investing. With a focus on personalized service and market expertise, we navigate the complexities of real estate to turn your dreams into tangible assets. Discover a trusted partner in Theorem Realty 91, where every transaction is a testament to our commitment to your success.
</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-badge"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Innovative Solutions</h4>
                                        <p style="color:#000000;">Theorem Realty 91 pioneers the real estate landscape with innovative solutions.</p>
                                    </div>  
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-briefcase"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Client-Centric Approach</h4>
                                        <p style="color:#000000;">At Theorem Realty 91, clients are at the heart of our mission.</p>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a href="/images/100.png">
                            <img src="/images/100.png" class="fit-image" alt="About Us"id="ab1">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="testimonials" class="section-4 carousel">
            <div class="overflow-holder">
                <div class="container">
                    
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/team-1.jpg" alt="" class="person">
                                        <h4>Our Mission</h4>
                                        <p>My website looks amazing with the Leverage Theme.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/team-2.jpg" alt="" class="person">
                                        <h4>Our Vision</h4>
                                        <p>This company created an exclusive form. Fantastic.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/team-3.jpg" alt="" class="person">
                                        <h4>Our Values</h4>
                                        <p>I'm loving the partnership. The support deserves 5 stars.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- Features -->
        <section id="features" class="section-2 odd offers">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item" >
                        <div class="card no-hover" id="cd1">
                            <!-- <i class="icon icon-globe"></i> -->
                            <img src="images/500.png" alt="mission" class="icon" id="ic1">
                            <h4>Our Mission</h4>
                            <p>Our mission at Theorem Realty 91 is to revolutionize the real estate experience. We strive to exceed client expectations by delivering innovative solutions, fostering transparency, and providing unparalleled service. Committed to integrity and excellence, we aim to reshape the industry landscape, making every property transaction a seamless and rewarding journey for our valued<br> clients.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card no-hover"id="cd1">
                            <!-- <i class="icon icon-basket"></i> -->
                            <img src="images/400.png" alt="vision" class="icon"id="ic1">
                            <h4>Our Vision</h4>
                            <p>At Theorem Realty 91, our vision is to be the epitome of real estate excellence. We aspire to create a dynamic and forward-thinking environment, leveraging cutting-edge technology and fostering a culture of integrity. Our aim is to set new industry standards, consistently exceeding client expectations and establishing Theorem Realty 91 as the preferred and trusted choice in the ever-evolving real estate landscape.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- About [video] -->
        <section id="video" class="section-3 highlights image-left">
            <div class="container">
                <div class="row">
                    <div class="gallery col-12 col-md-6">
                        <a data-poster="images/600.png" href="images/600.png">
                            <i class="play-video icon-control-play"></i>
                            <div class="mask-radius"></div>
                            <img src="images/600.png" class="fit-image" alt="Institutional">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">What We Do ?</h2>
                                <p>At Theorem Realty 91, we specialize in providing comprehensive real estate solutions that cater to the diverse needs of our clients. From buying and selling residential properties to facilitating commercial transactions and investments, we navigate the complexities of the real estate landscape with expertise. Our team employs innovative technologies and market insights to ensure seamless transactions and optimal results. Whether you're a first-time homebuyer, seasoned investor, or business owner, we offer personalized service, transparency, and a client-centric approach. Theorem Realty 91 is committed to transforming real estate experiences, turning visions into reality, and establishing enduring relationships built on trust and satisfaction.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Comprehensive Real Estate Services</h4>

                                    </div>  
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Innovative Property Solutions</h4>
                                        
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="section-4 carousel">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h2>Our Team</h2>
                            <p class="text-max-800">Our team at Theorem Realty 91 is a dedicated blend of real estate experts committed to excellence and client success.</p>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="images/team-1.jpg" alt="Adams Baker" class="person">
                                        <h4>Adams Baker</h4>
                                        <p>My website looks amazing with the Leverage Theme.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="images/team-2.jpg" alt="Mary Evans" class="person">
                                        <h4>Mary Evans</h4>
                                        <p>This company created an exclusive form. Fantastic.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="images/team-3.jpg" alt="Sarah Lopez" class="person">
                                        <h4>Sarah Lopez</h4>
                                        <p>I'm loving the partnership. The support deserves 5 stars.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="images/team-4.jpg" alt="Joseph Hills" class="person">
                                        <h4>Joseph Hills</h4>
                                        <p>My app was perfect. I will request more services soon.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="images/team-5.jpg" alt="Karen Usman" class="person">
                                        <h4>Karen Usman</h4>
                                        <p>I had small problems with the payment, but it was resolved.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>


@endsection