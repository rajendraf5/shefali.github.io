@extends('layouts.default')
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>About</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">About</li>
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
                                <img src="{{asset('assets/images/shefali.jpg')}}" alt="">

                            </div>
                            <div class="text-box">
                                <p>Experiencd & Well knowledgeable Interior designers.</p>
                                <h3>Shefali Chopra, <span>CEO & Founder</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="about-text">
                            <div class="sec-title">
                                <p>About Company</p>
                                <div class="title">Shefali’s Interiors is<br> full-fledged  <span>design firm</span></div>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>Started by the keen initiatives of the young designer Shefali Chopra. Completing her Masters in designing course from a reputed institute of India , she has always been enthusiastic and passionate about her work. Her understanding of scale, proportion and design, and her aesthetic sense, leads her to create beautiful and warm commercial and residential spaces.</p>
                                    <p>Her passion and her eye for intricate details, has led her to create some beautiful designs. Shefali’s affinity for classical forms and close attention to detail, texture and color translate to sophisticated and elegant designs. Her clients value her attention to detail, her enthusiastic energy and her ability to translate to her client’s desires and demands into stunning interiors, her charm, confidence and demeanor. Shefali’s passion for the visual and achieving high quality standards ensures each project is well crafted and designed to perfection.</p>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!--Start Team Area-->
        <section class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>Behind Our Company</p>
                            <div class="title">Expert & Experinced <span>Team</span></div>
                        </div>
                        <div class="view-all-member style2 float-right">
                            <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{asset('assets/images/team/shefalichopra.jpg')}}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="{{URL::to('/blog')}}">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Interior Design</span></p>
                                <h3>Shefali Chopra</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{asset('assets/images/team/sapna.jpg')}}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="{{URL::to('/blog')}}">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Interior Desiging</span></p>
                                <h3>Ar. Sapna Agrawal</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{asset('assets/images/team/palak.jpg')}}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="{{URL::to('/blog')}}">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Fashion Designing</span></p>
                                <h3>Palak</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{asset('assets/images/team/sanskrita.jpg')}}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="{{URL::to('/blog')}}">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Design Management</span></p>
                                <h3>Sanskrita Singh</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                </div>
            </div>
        </section>
        <!--End Team Area-->
    @stop