@extends('layouts.default')
@section('content')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('assets/images/slider4.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Project</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{URL::to('/')}">Home</a></li>
                                    <li class="active">Project</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Main project area-->
        <section class="main-project-area">
            <div class="container">
                <ul class="project-filter post-filter has-dynamic-filters-counter">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
                    <li data-filter=".mod"><span class="filter-text">Residential</span></li>
                    <li data-filter=".contem"><span class="filter-text">Commercial</span></li>
                    <li data-filter=".trad"><span class="filter-text">Furniture</span></li>
                    <li data-filter=".ret"><span class="filter-text">Decor</span></li>
                </ul>
                <div class="row filter-layout masonary-layout">
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-1.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-2.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-3.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->

                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-4.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-5.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-6.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->

                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-7.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-8.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('assets/images/projects/lat-pro-9.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{URL::to('project-single')}}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>Modern Design</span>
                                        <h3><a href="{{URL::to('project-single')}}">Art Family Residence</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                </div>
            </div>
        </section>
        <!--End Main project area-->
    @stop