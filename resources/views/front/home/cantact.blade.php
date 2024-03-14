@extends('front.master')
@section('title')
    Cantact
@endsection
@section('body')

    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--six">
        <div class="bg-shape"><img src="{{asset('/')}}fronts/assets/images/elements/inner-hero-shape-2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contact section start -->
    <section class="mt-minus-270 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Contact</h2>
                        <p>We’d love to talk about how we can work together.Send us a message
                            below and we’ll respond as soon as possible.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-wrapper">
                                    <h3 class="title">Drop us a message</h3>
                                    <form class="contact-form" id="contact_form_submit" method="POST">
                                        <div class="form-group">
                                            <label>Name <sup>*</sup></label>
                                            <input type="text" name="name" id="name" placeholder="Enter Your FullName">
                                        </div>
                                        <div class="form-group">
                                            <label>Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Subject <sup>*</sup></label>
                                            <input type="text" name="subject" id="subject" placeholder="Enter Your Subject">
                                        </div>
                                        <div class="form-group">
                                            <label>Message <sup>*</sup></label>
                                            <textarea name="message" id="message" placeholder="Write Your Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="cmn-btn w-100">send message</button>
                                        </div>
                                    </form><!-- contact-form e nd -->
                                </div><!-- contact-form-wrapper end -->
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info-wrapper">
                                    <div class="d-flex flex-wrap justify-content-between w-100">
                                        <div class="contact-info">
                                            <div class="contact-info__icon"><img src="{{asset('/')}}fronts/assets/images/icon/contact/1.png" alt="image"></div>
                                            <div class="contact-info__content">
                                                <p>Phone Number</p>
                                                <span>+0123 456789</span>
                                            </div>
                                        </div><!-- contact-info end -->
                                        <div class="contact-info">
                                            <div class="contact-info__icon"><img src="{{asset('/')}}fronts/assets/images/icon/contact/2.png" alt="image"></div>
                                            <div class="contact-info__content">
                                                <p>Email</p>
                                                <span><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dab3b4bcb59aa8b3bcbbf4b9b5b7">[email&#160;protected]</a></span>
                                            </div>
                                        </div><!-- contact-info end -->
                                    </div>
                                    <div class="contact-thumb"><img src="{{asset('/')}}fronts/assets/images/elements/contact.png" alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-120 mb-none-30">
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>130k</h3>
                            <span>Followers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>35k</h3>
                            <span>Members</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>47k</h3>
                            <span>Followers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>29k</h3>
                            <span>Subscribers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

@endsection
