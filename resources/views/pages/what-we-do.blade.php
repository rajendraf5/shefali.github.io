@extends('layouts.default')
@section('content')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>What We Do</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                      <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">What We Do</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="working-area">
            <div class="container">
                <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <p>Working Areas</p>
                    <div class="title clr-white">How We <span>Do</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/plan-review.png')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-architecture-and-city1"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Plan Review</h3>
                                        <p>We can add the most value to your project when brought in during the design phase. We look at the spaces with fresh eyes and ensure they work for the way you live.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="400ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/detailed-design.jpg')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-shop"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Detailed Design</h3>
                                        <p>We produce all interior CAD drawings in-house, detailing every interior architectural element that falls outside your architect’s scope. This means just one company for all your interior design requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="800ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/finishes-selection.jpg')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-company"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Finishes Selection</h3>
                                        <p>Whether you are building, renovating or restyling, there are many decisions to be made.– from interior and exterior colours to lighting and fireplaces. We know what’s available, what works and what doesn’t.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="1200ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/furniture.jpg')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-furniture-and-household"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Furnishing & Window Treatments</h3>
                                        <p>One room or a whole house – trust us to select the furnishings, window treatments and accessories to create spaces that reflect your style and enhance your home.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="1400ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/design-management.jpg')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-window"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Design Management</h3>
                                        <p>What sets us apart, is our commitment to communication and our attention to detail. We ensure everyone involved in your project is kept informed and our documentation is meticulous.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="1600ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/work/delivery.jpg')}}" alt="">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box">
                                    <div class="icon">
                                        <div class="inner">
                                            <div class="box">
                                                <span class="icon-floor"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text minh252DM">
                                        <h3>Procurement & Delivery</h3>
                                        <p>We have invested heavily in our relationships with suppliers over many years so that you can receive the benefits. We will also handle all aspects of procurement and timely delivery on your behalf.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @stop    