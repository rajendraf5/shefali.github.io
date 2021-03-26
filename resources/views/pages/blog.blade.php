@extends('layouts.default')
@section('content')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image:url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Blog</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="active">Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->



        <!--Start blog area-->
        <section id="blog-area" class="blog-default-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('images/blog/latest-b-v1-1.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Mar <br><span>02</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Best low-cost interior designing ideas for your room</a></h3>
                                    <div class="text">
                                        <p>Same as saying through shrinking from toil and pain these cases perfectly simple...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/latest-b-v1-2.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Feb <br><span>14</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Wondering if interior design is a dying filed? Read this</a></h3>
                                    <div class="text">
                                        <p>When our power of choice is untrammelled and nothing prevents our being able...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/latest-b-v1-3.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Jan <br><span>31</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Creating drama and feeling with a tiled bed wall</a></h3>
                                    <div class="text">
                                        <p>Certain circumstances and owing to the claims of duty or the obligations of business...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-4.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Jan <br><span>16</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Creating drama and feeling with a tiled bed wall</a></h3>
                                    <div class="text">
                                        <p>Certain circumstances and owing to the claims of duty or the obligations of business...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-5.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Dec <br><span>25</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Best low-cost interior designing ideas for your room</a></h3>
                                    <div class="text">
                                        <p>Same as saying through shrinking from toil and pain these cases perfectly simple...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-6.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Dec <br><span>16</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Wondering if interior design is a dying filed? Read this</a></h3>
                                    <div class="text">
                                        <p>When our power of choice is untrammelled and nothing prevents our being able...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-7.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>dec <br><span>08</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Wondering if interior design is a dying filed? Read this</a></h3>
                                    <div class="text">
                                        <p>When our power of choice is untrammelled and nothing prevents our being able...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="700ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-8.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Nov <br><span>17</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Creating drama and feeling with a tiled bed wall</a></h3>
                                    <div class="text">
                                        <p>Certain circumstances and owing to the claims of duty or the obligations of business...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/v1-9.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>Nov <br><span>10</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{URL::to('/blog-single')}}">Best low-cost interior designing ideas for your room</a></h3>
                                    <div class="text">
                                        <p>Same as saying through shrinking from toil and pain these cases perfectly simple...</p>
                                        <a class="btn-two" href="{{URL::to('/blog-single')}}">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End blog area-->
@stop