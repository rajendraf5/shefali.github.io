@extends('layouts.default')
@section('content')

         <!--Start breadcrumb area-->
         <section class="breadcrumb-area" style="background-image:url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Contact</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Contact Address Area-->
        <section class="contact-address-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-global"></span>
                            <h3>Visit Our Office</h3>
                            <p>Ground Floor, Nahta Tower Opp. Little Kingdom School, Napier Town, Jabalpur - 482002 Madhya Pradesh, India</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-support1"></span>
                            <h3>Call Us</h3>
                            <p>9770318523, 9111321333 <br><span>Mon - Sat:</span> 9.00am to 6.00pm</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-shipping-and-delivery"></span>
                            <h3>Mail Us</h3>
                            <p>design@shefalisinteriors.com</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                </div>
            </div>
        </section>
        <!--End Contact Address Area-->

        <!--Start contact form area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="sec-title with-text">
                                <p>Drop Us a Line</p>
                                <div class="title">Send Your <span>Message</span></div>
                                <p class="bottom-text">If you have question or would like more information on our works, Please complete the form and we’ll aim get back to you with in 24 hours.</p>
                            </div>
                            <div class="inner-box">
                                <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="First Name" required="">
                                                <div class="icon">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="Last Name" required="">
                                                <div class="icon">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                                <div class="icon">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                                <div class="icon envelop">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">Send Your Message<span class="flaticon-next"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 clearfix">
                        <div class="contact-form-image-box">
                            <img src="{{asset('assets/images/resources/contact.png')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End contact form area-->

        <!--Start slogan area-->
        <section class="slogan-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="inner-content flex-box-two fix map-content-box" style="display: block;">
                            <div class="sec-title">
                                <div class="title">DISCLAIMER</div>
                            </div>
                            <div class="title float-left">
                                <h3>This is to notify that the contents in the website Shefali’s Interiors showcase beautiful designs and visuals of artists and designers and is not for commercial promotion. The site wishes to thank the designers for their brilliant work and hope to enrich the taste of those who appreciate aesthetic and creative works.</h3>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End slogan area-->
@stop
     