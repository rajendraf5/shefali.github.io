@extends('layouts.default')
@section('content')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Our Fees</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">Our Fees</li>
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
                                <img src="{{asset('assets/images/ourfees1.jpg')}}" alt="">

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

                                  <div class="how-works">  
                                   <ul class="">
                                    <li><div class="icon"><span class="icon-tick"></span></div>
                                        <div class="text">Our fees are flexible and reflect the complexity, cost and time frame of each commission.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">We believe in separating the fees for our professional interior design expertise from our ability to source and supply goods and services. These are discussed in detail and agreed during the briefing stage.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">Our design fees may be charged as hourly rates, as a fixed fee, or as a percentage of the overall contract value.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">Our fees for the co-ordination of building work, or attendance on site where others are acting as project managers, are charged on the same basis as our design fees.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">For the source and supply of furniture, fittings and equipment, including loose furniture, curtains, carpets, fixtures, materials, lighting, antiques, works of art and accessories, we charge cost plus an agreed percentage.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">In the event that no design fee is involved we charge the retail price for all the goods which we supply.</div></li>
                                    <li><div class="icon"><span class="icon-tick"></span></div><div class="text">Everything we specify is designed to keep the balance between the style, the brief and the budget.</div></li>
                                </ul>
                            </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @stop

      