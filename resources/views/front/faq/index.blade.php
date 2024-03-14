@extends('front.master')
@section('title')
Faq
@endsection
@section('body')
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="{{asset('/')}}fronts/assets/images/elements/inner-hero-shape-2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Pages</a></li>
                        <li class="active">Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- faq section start -->
    <section class="pb-120 mt-minus-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-top-wrapper pt-120">
                        <div class="section-header text-center">
                            <span class="section-sub-title">You Have Questions</span>
                            <h2 class="section-title">WE HAVE ANSWERS</h2>
                            <p>Do not hesitate to send us an email if you can't find what you're looking for.</p>
                        </div>
                        <ul class="nav nav-tabs cmn-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ticket-tab" data-bs-toggle="tab" data-bs-target="#ticket" role="tab" aria-controls="ticket" aria-selected="false">rifa tickets</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="banking-tab" data-bs-toggle="tab" data-bs-target="#banking" role="tab" aria-controls="banking" aria-selected="true">banking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="winning-tab" data-bs-toggle="tab" data-bs-target="#winning" role="tab" aria-controls="winning" aria-selected="false">winning</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="result-tab" data-bs-toggle="tab" data-bs-target="#result" role="tab" aria-controls="result" aria-selected="false">results & alerts</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" role="tab" aria-controls="about" aria-selected="false">about rifa</button>
                            </li>
                        </ul>
                    </div><!-- faq-top-wrapper end -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-body-wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-one">
                                    <div class="card">
                                        <div class="card-header" id="h-1">
                                            <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                How do I deposit funds into my Rifa Lottos account?
                                            </button>
                                        </div>
                                        <div id="collapse1" class="collapse show" aria-labelledby="h-1" data-bs-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-2">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="h-2" data-bs-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-3">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="h-3" data-bs-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="banking" role="tabpanel" aria-labelledby="banking-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-two">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How do I deposit funds into my Rifa Lottos account?
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Am I allowed to withdraw my deposit?
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Which payment methods are accepted by Rifa Lottos?
                                            </button>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="winning" role="tabpanel" aria-labelledby="winning-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-three">
                                    <div class="card">
                                        <div class="card-header" id="h-4">
                                            <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                How do I deposit funds into my Rifa Lottos account?
                                            </button>
                                        </div>
                                        <div id="collapse4" class="collapse show" aria-labelledby="h-4" data-bs-parent="#faqAcc-three">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-5">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="h-5" data-bs-parent="#faqAcc-three">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-6">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="h-6" data-bs-parent="#faqAcc-three">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-four">
                                    <div class="card">
                                        <div class="card-header" id="h-7">
                                            <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                How do I deposit funds into my Rifa Lottos account?
                                            </button>
                                        </div>
                                        <div id="collapse7" class="collapse show" aria-labelledby="h-7" data-bs-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-8">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="h-8" data-bs-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-9">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="h-9" data-bs-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-five">
                                    <div class="card">
                                        <div class="card-header" id="h-10">
                                            <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                How do I deposit funds into my Rifa Lottos account?
                                            </button>
                                        </div>
                                        <div id="collapse10" class="collapse show" aria-labelledby="h-10" data-bs-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-11">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapse11" class="collapse" aria-labelledby="h-11" data-bs-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-12">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapse12" class="collapse" aria-labelledby="h-12" data-bs-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                        </div><!-- tab-content end -->
                    </div><!-- faq-body-wrapper end -->
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->
@endsection
