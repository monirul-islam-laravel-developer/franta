@extends('front.master')
@section('title')
Contest
@endsection
@section('body')

    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Lottery</a></li>
                        <li class="active">Contest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contest section start  -->
    <section class="pb-120 mt-minus-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contest-wrapper">
                        <div class="contest-wrapper__header pt-120">
                            <h2 class="contest-wrapper__title">Latest Contest</h2>
                        </div>
                        <div class="contest-wrapper__body">


                            <div class="tab-content mt-50" id="myTabContent">
                                <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">

                                    <div class="row mb-none-30 mt-50">
                                        @foreach($contests as $contest)
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="{{route('contest-detail',['id'=>$contest->id])}}" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset($contest->image)}}" alt="image">
                                                    <a href="{{route('contest-detail',['id'=>$contest->id])}}" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">{{$contest->code}}</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">{{$contest->title}}</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">Tk.{{$contest->price}}</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        @endforeach
                                    </div>

                                </div>


                                </div>
                            </div>
                        </div>
                    </div><!-- contest-wrapper end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest section end -->

    <!-- contest feature section start -->
    <section class="pb-120">
        <div class="container">
            <div class="row mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}fronts/assets/images/icon/contest-feature/1.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Secure Checkout</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}fronts/assets/images/icon/contest-feature/2.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Great Value</h3>
                            <p>We offer competitive prices for every lottery tickets</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}fronts/assets/images/icon/contest-feature/3.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Free Worldwide Delivery</h3>
                            <p>We are available for providing our services in major countries</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest feature section end -->
@endsection
