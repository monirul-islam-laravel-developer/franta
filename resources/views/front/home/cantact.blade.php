@extends('front.master')
@section('title')
    Cantact
@endsection
@section('body')

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area">
        <img class="contact" src="{{asset('/')}}fronts/assets/images/contact-b-icon.png" alt="">
        <div class="container">
            <div class="content">
                <h2 class="title">
                    Contact
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{route('cantact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Contact-Section========== -->
    <section class="contact">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-7">
                    <div class="contact-box">
                        <h4 class="title">
                            Get In Touch
                        </h4>
                        <form action="#">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" placeholder="Enter Your Email ">
                            </div>
                            <div class="form-group last">
                                <label>Your Message</label>
                                <textarea placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I agree to receive emails,
                                    newsletters and promotional messages</label>
                            </div>
                            <button type="submit" class="custom-button1">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-area">
                        <div class="faq-block">
                            <h4 class="title">Have questions?</h4>
                            <p>
                                If you have any questions or queries,
                                our helpful support team will be
                                more than happy to assist you.
                            </p>
                            <a href="#">
                                Read F.A.Q <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="contact-info">
                            <div class="single-info">
                                <img src="{{asset('/')}}fronts/assets/images/eicom.png" alt="">
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c0c7cfc6e9efc8c7dddbc887cac6c4">[email&#160;protected]</a></p>
                                </div>
                            </div>
                            <div class="single-info">
                                <img src="{{asset('/')}}fronts/assets/images/picon.png" alt="">
                                <div class="content">
                                    <h4>Call Us</h4>
                                    <p>+1 (987) 435-32-11</p>
                                    <p>+1 (987) 453-31-11</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
