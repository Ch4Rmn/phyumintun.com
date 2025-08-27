@extends('layouts.app')

@section('title', 'About Us')

@push('meta')
<meta name="keyword" content="Myanmar Cement Business,Limestone Deposit Investment">
<meta name="description" content="Myanmar Cement Business,Limestone Deposit Investment">
@endpush


@push('css')
<style>
    .logo-slider {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        background: #f8f9fa;
        padding: 20px 0;
    }

    .logo-slider .logos {
        display: inline-flex;
        animation: slide 20s linear infinite;
    }

    .logo-slider img {
        height: 120px;
        margin: 0 40px;
        /* filter: grayscale(100%); */
        transition: filter 0.3s;
    }

    .logo-slider img:hover {
        filter: grayscale(0%);
    }

    @keyframes slide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .about-hero-container {
        position: relative;
        font-family: Arial, sans-serif;
        padding: 0;
    }

    .about-hero-img {
        object-position: center;
        width: 100%;
        height: 35vw;
        min-height: 200px;
        max-height: 400px;
        object-fit: cover;
        display: block;
    }

    .about-text-block {
        position: absolute;
        bottom: 5vw;
        right: 5vw;
        background-color: rgba(0, 0, 0, 1);
        color: #fff;
        padding: 1rem 2rem;
        /* border-radius: 8px; */
        max-width: 90vw;
    }

    @media (max-width: 768px) {
        .about-hero-img {
            height: 45vw;
            min-height: 120px;
        }

        .about-text-block {
            bottom: 2vw;
            right: 2vw;
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .about-hero-img {
            height: 55vw;
            min-height: 80px;
        }

        .about-text-block {
            position: static;
            margin-top: -2.5rem;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 0 0 8px 8px;
            width: 100%;
            max-width: 100%;
            text-align: center;
        }
    }
</style>
@endpush

@section('content')
<section id="home" class="home">
    <div class="about-hero-container">
        <img src="{{ asset('assets/images/pages_wallpaper.jpg')}}" alt="Nature" class="about-hero-img img-fluid">
        <div class="about-text-block">
            <h4 style="color: white !important;">About Us</h4>
            <!-- <p>What a beautiful sunrise</p> -->
        </div>
    </div>
    <!--  -->
    <div class="container about_bg">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="about_content">
                    <h2>{{ __('messages.Welcome to Our Company') }}</h2>
                    <h3>We Are More Than <span style="color:green !important">30 Years</span> on the Market</h3>
                    <p>
                        We are a leading construction company with 30+ years of experience in the industry. We are dedicated to providing a full suite of high-quality construction services driven by modern technologies. From residential construction to shopping centers and government facilities, no job is too big or too small for us.

                        Our trustworthy business practices, efficient work processes, and a huge performance capacity ensure the Basalt's ability to deliver as promised.
                    </p>
                    <p>
                        We are a leading construction company with 30+ years of experience in the industry. We are dedicated to providing a full suite of high-quality construction services driven by modern technologies. From residential construction to shopping centers and government facilities, no job is too big or too small for us.

                        Our trustworthy business practices, efficient work processes, and a huge performance capacity ensure the Basalt's ability to deliver as promised.
                    </p>
                    <a class="btn know_btn">know more</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-lg-offset-1">
                <div class="about_banner">
                    <!-- <img src="{{ asset('assets/images/cement.jpeg') }}" alt="" /> -->
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container-fluid" style="background-color:#F2F7FA;">
        <div class="row" style="padding: 20px !important;margin:20px !important">
            <h2 class="text-center">Our Values
            </h2>
            <div class="col">
                <h3>Our Vision
                </h3>
                <p>Our vision is to be the leading world's contractor and employer of choice with the ability to provide successful construction projects globally. We use the best possible materials and high-end technologies to ensure that our clients get the best results.</p>
            </div>
            <br>
            <div class="col">
                <h3>Our Mission
                </h3>
                <p>Our mission is to satisfy our clients through excellent service, integrated solutions, and the highest quality. We are focused on long-term relationships with clients delivering our promises. Er strive to build structures that will last for decades and beyond</p>
            </div>

        </div>
    </div>
    <!--  -->


    <img src="{{ asset('assets/images/officedetails.png') }}" alt="" srcset="" class="img-fluid">
    <!--  -->
    <div class="container-fluid" style="background-color:#F2F7FA;">
        <div class="row" style="padding: 20px !important;margin:20px !important">
            <h2 class="text-center">Our Features
            </h2>
            <div class="col">

                <p>Our vision is to be the leading world's contractor and employer of choice with the ability to provide successful construction projects globally. We use the best possible materials and high-end technologies to ensure that our clients get the best results.</p>
            </div>


        </div>
    </div>
    <!--  -->
    <div class="container-fluid my-5">
        <h2 class="text-center mb-4">Our Partners or Clients</h2>
        <div class="logo-slider">
            <div class="logos">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 1">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 2">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 3">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 4">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 5">
                <!-- duplicate logos for infinite effect -->
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 1">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 2">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 3">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 4">
                <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 5">
            </div>
        </div>
    </div>
<br>
    <div style="padding: 50px;background-color:black">
        <a href="tel:+123412432">
            <h2 class="text-center align-self-center">Contact Us to Specify Your Site Details Right Now!</h2>
        </a>
    </div>
</section>
@endsection
