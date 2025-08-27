@extends('layouts.app')

@section('title', 'About Page')

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
    <!--  -->
    <!-- <section id="home" class="home">
        <div class="about-hero-container">
            <img src="{{ asset('assets/images/pages_wallpaper.jpg')}}" alt="Nature" class="about-hero-img img-fluid">
            <div class="about-text-block">
                <h4 style="color: white !important;">About Us</h4>
            </div>
        </div>
    </section> -->
    <!--  -->


    <!-- Portfolio -->
    <section id="portfolio">
        <div class="container portfolio_area text-center">
            <h2>Made with Cement</h2>
            <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui
                ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                velit,
            </p>

            <div id="filters">
                <button class="button is-checked" data-filter="*">
                    Show All
                </button>
                <button class="button" data-filter=".buildings">
                    Buildings
                </button>
                <button class="button" data-filter=".interior">
                    Interior Design
                </button>
                <button class="button" data-filter=".isolation">
                    Isolation
                </button>
                <button class="button" data-filter=".plumbing">
                    Plumbing
                </button>
            </div>
            <!-- Portfolio grid -->
            <div class="grid">
                <div class="grid-sizer"></div>
                <div
                    class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                    <img alt="" src="{{ asset('assets/images/highligh_img.jpg') }}" />
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('assets/images/highligh_img.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                        <a href="#"><span class="fa fa-link"></span></a>
                    </div>
                </div>

                <div class="grid-item buildings interior isolation">
                    <img alt="" src="{{ asset('assets/images/portfolio1.jpg') }}" />
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('assets/images/portfolio1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                        <a href="#"><span class="fa fa-link"></span></a>
                    </div>
                </div>

                <div class="grid-item interior plumbing isolation">
                    <img alt="" src="{{ asset('assets/images/portfolio2.jpg') }}" />
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('assets/images/portfolio2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                        <a href="#"><span class="fa fa-link"></span></a>
                    </div>
                </div>

                <div class="grid-item isolation buildings">
                    <img alt="" src="{{ asset('assets/images/portfolio3.jpg') }}" />
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('assets/images/portfolio3.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                        <a href="#"><span class="fa fa-link"></span></a>
                    </div>
                </div>

                <div class="grid-item plumbing isolation">
                    <img alt="" src="{{ asset('assets/images/portfolio4.jpg') }}" />
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('assets/images/portfolio4.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                        <a href="#"><span class="fa fa-link"></span></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio grid end -->
        </div>
    </section>
    <!-- Portfolio end -->

</section>
<!-- Contact form end -->
@endsection