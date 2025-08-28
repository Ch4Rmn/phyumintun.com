@extends('layouts.app')

@section('title', 'Home Page')

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
                <img src="{{ asset('assets/images/body_back.jpg') }}" alt="Construction" />
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

                <img src="{{ asset('assets/images/cover.png') }}" alt="Construction" />
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
                {{-- <img src="{{ asset('assets/images/slider_img3.jpg') }}" alt="Construction" /> --}}
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
                    <h2>{{ __('messages.Welcome to Our Company') }}</h2>
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
                    <a class="btn know_btn" href="{{route('about')}}">know more</a>
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

                    <div class="row">
                        <div class="col-3 col-md-3 img-thumbnail"><img src="{{asset('assets/images/gem1.png')}}" alt="" srcset=""></div>
                        <div class="col-3 col-md-3 img-thumbnail"><img src="{{asset('assets/images/gem2.png')}}" alt="" srcset=""></div>
                        <div class="col-3 col-md-3 img-thumbnail"><img src="{{asset('assets/images/gem3.png')}}" alt="" srcset=""></div>
                        <div class="col-3 col-md-3 img-thumbnail"><img src="{{asset('assets/images/gem4.png')}}" alt="" srcset=""></div>
                    </div>

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
        <div class="row" style="">
            <h2 style="">Why Choose Us</h2>
            <br>
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
        <h2>Lastest News & Updates</h2>
        <div class="row" id="news">
            <!-- Announcement Section -->
            <div class="col-md-3 mb-4" id="annouence">
                <img class="img-thumbnail w-100" src="{{ asset('assets/images/news.jpg') }}" style="object-fit:cover; border:0; height:200px;" alt="">
                <h4 id="news" class="mt-3 " style="text-align: start;">annouence updates</h4>
                <p id="news" class="" style="text-align: start;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat alias eveniet temporibus ex, exercitationem dolorum impedit, rerum eligendi sint quos deleniti dolorem incidunt aspernatur optio ullam natus voluptate. Vel, voluptatibus?
                </p>
                {{-- <span>created_at</span> --}}
                {{-- <br> --}}
                {{-- <h4 id="news" class="mt-3 " style="text-align: start;">Header</h4> --}}
                <p id="news" class="" style="text-align: start;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat alias eveniet temporibus ex, exercitationem dolorum impedit, rerum eligendi sint quos deleniti dolorem incidunt aspernatur optio ullam natus voluptate. Vel, voluptatibus?
                </p>
                <span>created_at</span>
                <br>
                <span class="text-muted">admin</span>
            </div>
            <!-- News Section -->
            <div class="col-md-9" id="news">
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 mb-4">
                        <img class="img-thumbnail w-100" src="{{ asset('assets/images/news.jpg') }}" style="object-fit:cover; border:0; height:150px;" alt="">
                        <h4 id="news" class="mt-2 " style="text-align: start;">Header</h4>
                        <p id="news" class="" style="text-align: start;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat alias eveniet temporibus ex, exercitationem dolorum impedit, rerum eligendi sint quos deleniti dolorem incidunt aspernatur optio ullam natus voluptate. Vel, voluptatibus?
                        </p>
                        <span>created_at</span>
                        <span class="text-muted">admin</span>
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>



</section>
<!-- Testimonial end -->
<hr>
<!-- Contact form -->
<section id="contact_form">
    <div class="container">
        <h2 style="text-align: center;margin-bottom: 30px;color:#484848">Contact Us
        </h2>
        <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-5 " style="margin-top:60px !important;background:#2312;padding:20px;box-shadow: 1px 2px black;border-radius: 20px;">
                <div>
                    <h3 style="color:white;text-shadow:1px 1px black">Head Office</h3>
                    <!-- <h4>Phone</h4> -->
                    <a></a>

                    <br>

                    <p style="color:white;text-shadow:1px 1px black">Phone -
                       <a href="tel:+959 500 6225" style="color:white;text-shadow:1px 1px rgb(0, 0, 0)">+959 500 6225</a>, <a href="tel:++959 517 5867" style="color:rgb(255, 255, 255);text-shadow:1px 1px rgb(0, 0, 0)">+959 517 5867</a></p>
                    <a></a>

                    <br>
                    <p style="color:white;text-shadow:1px 1px black">Email -
                        <a href="mailto:theinhtoon@tunthwinmining.com"  style="color:rgb(255, 255, 255);text-shadow:1px 1px rgb(0, 0, 0)">theinhtoon@tunthwinmining.com</a></p>
                    <a></a>

                    <br>
                    <p style="color:white;text-shadow:1px 1px black">Address - No.23, B/2, Sunirum Park, Thukhawaddi  Street, Yankin Tsp, Yangon Myanmar</h>
                        <a></a>

                        <br>
                </div>
                <a href="mailto:theinhtoon@tunthwinmining.com" class="btn btn-warning" style="margin-top:30px;border-radius:20px;box-shadow: 1px 1px black;">Send Messsage</a>


            </div>
            <br>
            <!-- <div></div> -->
            <div class="col-md-offset-1 col-md-4 col-sm-4 col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109447.76866045083!2d96.10150104314722!3d16.87859437458004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193565ea5be7d%3A0xc55abb7461764408!2sPwc!5e1!3m2!1sen!2smm!4v1756220400550!5m2!1sen!2smm" width="480" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
    </div>
</section>
<!-- Contact form end -->
@endsection
