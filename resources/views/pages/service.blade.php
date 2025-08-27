@extends('layouts.app')

@section('title', 'Service')

@push('meta')
<meta name="keyword" content="Myanmar Cement Business,Limestone Deposit Investment">
<meta name="description" content="Myanmar Cement Business,Limestone Deposit Investment">
@endpush


@push('css')
<style>
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
            <h4 style="color: white !important;">Service</h4>
            <!-- <p>What a beautiful sunrise</p> -->
        </div>
    </div>
</section>
@endsection
