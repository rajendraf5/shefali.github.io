@extends('layouts.default')
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Join Us</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">Join Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Company Overview Area-->
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-image-box">
                            <div class="inner-box">
                                <img src="{{asset('assets/images/joinus.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="about-text">
                            <div class="sec-title">
                                <div class="title">Our <span>Fees</span></div>
                            </div>
                            <div class="inner-content">

                                <div class="text">

                                <p>Shefali's Interior Design Company always strives for growth. We are seeking for talent from different areas all the time and are pleased to get in touch with those who believe in themselves and want to make real achievements. You should be motivated enough to be a part of this enthusiastic team.</p>
                                <p>If you believe in your expertise and are passionate to work with one of the prestigious design firm in Central India, then send in your cv to hello@shefali.ae and we will get back to you!</p>
                                <p>Mail us: A covering letter, Your CV, Portfolio/examples of recent work, Salary requirements, Earliest start date</p>
                                <p>Good luck with your career hunt!</p>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @stop