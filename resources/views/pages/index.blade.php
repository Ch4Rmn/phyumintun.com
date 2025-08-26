@extends('layouts.app')

@section('title', 'About Page')

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
        height: 60px;
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
</style>
@endpush

@section('content')
<section id="home" class="home">
    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel-inner -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('assets/images/slider_img1.jpg') }}" alt="Construction" />
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>We are Certified</h3>
                        <h1>
                            Building Myanmar’s Future with World-Class
                            Cement Production
                        </h1>
                        <h1 class="second_heading">
                            Creative & Professional
                        </h1>
                        <p>
                            (မြန်မာနိုင်ငံ၏ အနာဂတ်ကို ကမ္ဘာ့အဆင့်မြင့်
                            စက်မှုနည်းပညာဖြင့် တည်ဆောက်နေသည်)
                        </p>
                        <a class="btn know_btn">Learn more</a>
                        <a class="btn know_btn">Explore Partnership Opportunities</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/slider_img2.jpg') }}" alt="Construction" />
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>We are Certified</h3>
                        <h1>
                            Building Myanmar’s Future with World-Class
                            Cement Production
                        </h1>
                        <h1 class="second_heading">
                            Creative & Professional
                        </h1>
                        <p>
                            (မြန်မာနိုင်ငံ၏ အနာဂတ်ကို ကမ္ဘာ့အဆင့်မြင့်
                            စက်မှုနည်းပညာဖြင့် တည်ဆောက်နေသည်)
                        </p>
                        <a class="btn know_btn">Learn more</a>
                        <a class="btn know_btn">Explore Partnership Opportunities</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/slider_img3.jpg') }}" alt="Construction" />
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>We are Certified</h3>
                        <h1>
                            Building Myanmar’s Future with World-Class
                            Cement Production
                        </h1>
                        <h1 class="second_heading">
                            Creative & Professional
                        </h1>
                        <p>
                            (မြန်မာနိုင်ငံ၏ အနာဂတ်ကို ကမ္ဘာ့အဆင့်မြင့်
                            စက်မှုနည်းပညာဖြင့် တည်ဆောက်နေသည်)
                        </p>
                        <a class="btn know_btn">Learn more</a>
                        <a class="btn know_btn">Explore Partnership Opportunities</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel-inner end -->

        <!-- Controls -->
        <a
            class="left carousel-control"
            href="#carousel"
            role="button"
            data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="right carousel-control"
            href="#carousel"
            role="button"
            data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel end-->
</section>
<!--  -->
<!-- <div class="container-fluid my-5">
    <div class="logo-slider">
        <div class="logos">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 1">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 2">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 3">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 4">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 5">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 1">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 2">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 3">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 4">
            <img src="{{ asset('assets/images/cement.jpeg')}}" alt="Logo 5">
        </div>
    </div>
</div> -->

<!-- About -->
<section id="about">
    <div class="container about_bg">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="about_content">
                    <h2>Welcome to Our Company</h2>
                    <h3>Company Overview</h3>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt. Neque porro quisquam
                        est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci velit,
                    </p>
                    <p>
                        sed quia non numquam eius modi tempora incidunt
                        ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis
                        nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi
                        consequatur?
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
</section>
<!-- About end -->

<!-- Why us -->
<section id="why_us">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="head_title">
                    <h2 style="line-height: 50px;">Phyu Min Tun (PMT) သည် မြန်မာနိုင်ငံ၏ အကြီးဆုံး Limestone Deposits ကို ပိုင်ဆိုင်ထားသော Cement Business Company</h2>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt. Neque porro quisquam
                        est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci velit,
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 col-sm-6">
                <!-- <div class="why_us_item"> -->
                <!-- <span class="fa fa-leaf"></span> -->
                <h4>Mission</h4>
                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia
                    consequuntur magni
                </p>
                <!-- </div> -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- <div class="why_us_item"> -->
                <!-- <span class="fa fa-futbol-o"></span> -->
                <h4>Vision</h4>
                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia
                    consequuntur magni
                </p>
                <!-- </div> -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- <div class="why_us_item"> -->
                <!-- <span class="fa fa-group"></span> -->
                <h4>Value</h4>
                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia
                    consequuntur magni
                </p>
                <!-- </div> -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- <div class="why_us_item"> -->
                <!-- <span class="fa fa-line-chart"></span> -->
                <h4>Professional Services</h4>
                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia
                    consequuntur magni
                </p>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Why us end -->

<!-- Services -->
<section id="services">
    <div class="container">
        <h2>Building a Sustainable Future</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service_item">
                    <!-- <img src="{{ asset('assets/images/advantage1.jpg') }}" alt="Our Services" /> -->
                    <h3>Our Advantage</h3>
                    <ul>
                        <li>Largest Limestone Deposit in Myanmar</li>
                        <li>Strategic Location – Near major cement markets & distribution hubs</li>
                        <li>Strong Supply Chain – Easy transport access (road, river, port if available)</li>
                        <li>Government Approved Concessions</li>
                        <li>Long-term Partnership Opportunities</li>

                    </ul>
                    <a href="#services" class="btn know_btn">know more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <!-- <img src="{{ asset('assets/images/service_img2.jpg') }}" alt="Our Services" /> -->
                    <h3>Business Opportunities</h3>
                    <ul>
                        <li>Joint Venture for Cement Plant</li>
                        <li>Technology & Expertise Sharing</li>
                        <li>Investment in Cement Production & Distribution</li>
                        <li>Export Potential from Myanmar to Regional Markets</li>

                    </ul>
                    <a href="#services" class="btn know_btn">know more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <!-- <img src="{{ asset('assets/images/service_img3.jpg') }}" alt="Our Services" /> -->
                    <h3>Sustainability</h3>
                    <ul>
                        <li>Environmentally responsible limestone mining</li>
                        <li>Energy-efficient cement production process</li>
                        <li>Commitment to community development</li>

                    </ul>
                    <a href="#services" class="btn know_btn">know more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services end -->

<!--  -->
<section id="services">
    <div class="container">

    </div>
</section>
<!--  -->
<div class="container-fluid my-5">
    <h2 class="text-center mb-4">Our Partners</h2>
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
<!--  -->



<!-- Testimonial -->
<section id="testimonial">
    <div class="container text-center testimonial_area">
        <h2>News & Updates</h2>
        <ul>
            <li>New partnership announcements</li>
            <li>Cement market trends</li>
            <li>Milestones of PMT</li>

        </ul>

        <!-- <div class="row">
            <div class="col-md-4">
                <div class="testimonial_item">
                    <div class="testimonial_content text-left">
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro
                            quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur, adipisci velit,
                        </p>
                    </div>
                    <img src="{{ asset('assets/images/testimonial_img1.png') }}" alt="Testimonial" />
                    <p class="worker_name">john smith</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial_item">
                    <div class="testimonial_content">
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro
                            quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur, adipisci velit,
                        </p>
                    </div>
                    <img src="{{ asset('assets/images/testimonial_img2.png') }}" alt="Testimonial" />
                    <p class="worker_name">john smith</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial_item">
                    <div class="testimonial_content">
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro
                            quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur, adipisci velit,
                        </p>
                    </div>
                    <img src="{{ asset('assets/images/testimonial_img1.png') }}" alt="Testimonial" />
                    <p class="worker_name">john smith</p>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- Testimonial end -->

<!-- Contact form -->
<section id="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Do you have any questions?</h2>
                <h2 class="second_heading">Feel free to contact us!</h2>
            </div>
            <form role="form" class="form-inline text-right col-md-6">
                <div class="form-group">
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="Name" />
                </div>
                <div class="form-group">
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Email" />
                </div>
                <div class="form-group">
                    <textarea
                        class="form-control"
                        rows="5"
                        id="msg"
                        placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn submit_btn">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
<!-- Contact form end -->
@endsection