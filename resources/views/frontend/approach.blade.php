<!DOCTYPE html>
<html lang="en">

@extends("frontend.layouts.main")
@section('main-container')
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Approach </h2>
                <p class="description light"> Holisticly brand sustainable solutions rather than clicks-and-mortar applications.
                    <br> Phosfluorescently whiteboard fully tested initiatives. </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="{{ route('home') }}"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> <a href="{{ route('company') }}"> About </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> COMPANY OVERVIEW </span>
                </div>
            </div>
            <div class="container">
                <div class="row about-sidebar">
                    <div class="col-md-9 about-content">
                        <section class="about-employees">
                            <div class="row employees">
                                <div class="col-sm-6 text-left">
                                    <a href="#" class="hover-effect"> <img src="{{url('frontend/images/news1.jpg')}}"> </a>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="subtitle">OUR APPROACH</h4>
                                    <p>Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled outside the box thinking via scalable.</p>
                                </div>
                            </div>
                            <div class="row employees">
                                <div class="col-sm-6">
                                    <h4 class="subtitle">EMPLOYEE BENEFITS</h4>
                                    <p>Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled outside the box thinking via scalable.</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="#" class="hover-effect">
                                        <img src="{{url('frontend/images/emp.jpg')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="spacer-80"> </div>
                        </section>
                        <section class="about-cta">
                            <div class="cta">
                                <h2>Wealth can only be accumulated by the earnings of industry and the savings of frugality.</h2>
                            </div>
                        </section>
                        <section class="about-services">
                            <div class="row services">
                                <div class="col-sm-6">
                                    <a href="#" class="hover-effect">
                                        <img src="{{url('frontend/images/services-one.jpg')}}" alt="technology-innovation" />
                                    </a>
                                    <h4 class="services-title-one subtitle">TECHNOLOGY &amp; INNOVATION</h4>
                                    <p>Professionally drive clicks-and-mortar web readiness after progressive e-commerce. Dramatically unleash cross functional.</p>
                                    <a class="link" href="#">Read More</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="hover-effect">
                                        <img src="{{url('frontend/images/services-two.jpg')}}" alt="our-operations" />
                                    </a>
                                    <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                                    <p>Energistically productize wireless mindshare for emerging experiences. Myocardinate enabled alignments and magnetic scenarios. </p>
                                    <a class="link" href="#">Read More</a>
                                </div>
                            </div>
                        </section>
                        <section class="about-innovations">

                            <div class="row services-other">
                                <div class="col-sm-6">
                                    <div class="img-box">
                                        <img src="{{url('frontend/images/service-icon1.png')}}" alt="SHELL CHEMICALS" />
                                    </div>
                                    <div class="services-info">
                                        <h4 class="services-title-one subtitle">SHELL CHEMICALS</h4>
                                        <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="img-box">
                                        <img src="{{url('frontend/images/service-icon2.png')}}" alt="COMMERCIAL FUELS" />
                                    </div>
                                    <div class="services-info">
                                        <h4 class="services-title-one subtitle">COMMERCIAL FUELS</h4>
                                        <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                                    </div>
                                </div>
                                <div class="clearfix spacer-70"></div>
                                <div class="col-sm-6">
                                    <div class="img-box">
                                        <img src="{{url('frontend/images/service-icon4.png')}}" alt="LUBRICANTS" />
                                    </div>
                                    <div class="services-info">
                                        <h4 class="services-title-one subtitle">LUBRICANTS</h4>
                                        <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{url('frontend/images/service-icon5.png')}}" alt="MARINE FUELS" />
                                    </div>
                                    <div class="services-info">
                                        <h4 class="services-title-one subtitle">MARINE FUELS</h4>
                                        <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-vision">
                            <div class="row vision">
                                <div class="col-sm-6">
                                    <h2 class="title-2"> QUALITY POLICY </h2>
                                    <ul>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Aenean eget leo ac nisi porta consectetur. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Duis sit amet ligula turpis. Suspendisse eget. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>hendrerit justo. Suspendisse eleifend. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>arcu in consequat. Nullam imperdiet consequat. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>quam quam malesuada scelerisque libero. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>quam ac quisque ut velit et felis pellentesque.</li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>vehicula ut ullamcorper velit ligula at velit. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>volutpat tempus vitae ut. Maecenas sagittis.</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="title-2"> ADVANTAGES </h2>
                                    <ul>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Aenean eget leo ac nisi porta consectetur. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Duis sit amet ligula turpis. Suspendisse eget. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>hendrerit justo. Suspendisse eleifend. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>arcu in consequat. Nullam imperdiet consequat. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>quam quam malesuada scelerisque libero. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>quam ac quisque ut velit et felis pellentesque.</li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>vehicula ut ullamcorper velit ligula at velit. </li>
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>volutpat tempus vitae ut. Maecenas sagittis.</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-3 sidebar left">
                        <div class="sidebar-blog-categories">
                            <ul>
                                <li> <a href="{{ route('company') }}"> The Company </a> </li>
                                <li> <a href="{{ route('mission') }}"> Vision &amp; Mission </a> </li>
                                <li> <a href="{{ route('innovation') }}"> Innovation </a> </li>
                                <li> <a href="{{ route('approach') }}"> Our Approach </a> </li>
                                <li> <a href="{{ route('leaders') }}"> Our Leaders </a> </li>
                            </ul>
                        </div>
                        <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span>1.5 MB</span>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-fact">
                            <h3 class="about-quick-fact">Quick Fact</h3>
                            <p>Distinctively fashion in the effect of standard products communities via seamless applications. Authoritatively recaptiualize.</p>
                            <a href="#" class="btn btn-primary about-quick-fact-button" role="button">CALL TO ACTION</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Section -->
        @endsection 