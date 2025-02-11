<!DOCTYPE html>
<html lang="en">

@extends("frontend.layouts.main")
@section('main-container')
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> The Company </h2>
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

                        <section class="about-company">

                            <div class="com">
                                <h2 class="company-title color-title"> THE COMPANY </h2>
                                <h4 class="company-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.  </h4>
                                <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences. Interactively disintermediate empowered data whereas distinctive human capital. Compellingly utilize.</p>
                                <p> Dynamically utilize intermandated materials through customized process improvements. Conveniently recaptiualize adaptive leadership before long-term high-impact functionalities. Completely incubate customer directed meta-services after economically sound imperatives. Distinctively evolve diverse applications for enterprise processes. Monotonectally disintermediate functionalized solutions rather than progressive leadership.</p>

                            </div>
                        </section>

                        <section class="about-cta">

                            <div class="cta">
                                <h2>Wealth can only be accumulated by the earnings of industry and the savings of frugality.</h2>

                            </div>
                        </section>

                        <section class="about-culture">
                            <div class="row culture">
                                <div class="col-sm-6 cul">
                                    <h2 class="culture-title"> OUR CULTURE </h2>
                                    <h4 class="culture-subtitle"> Embrace orthogonal bandwidth after backward compatible process improvements. </h4>
                                    <p> Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled "outside the box" thinking via scalable quality vectors. Objectively unleash optimal core competencies.</p>
                                </div>
                                <div class="col-sm-6 culture-video">
                                    <a href="#" class="hover-effect"> <img src="{{url('frontend/images/emp.jpg')}}" alt="employee" /> </a>
                                </div>

                            </div>

                        </section>

                        <section class="about-stats">
                            <div class="row stats stats-2">

                                <div class="col-xs-6">
                                    <img src="{{url('frontend/images/globe.png')}}" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">26</h4>
                                        <p>Offices Worldwide</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="{{url('frontend/images/friends.png')}}" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">10000</h4>
                                        <p>Satisfied Employees</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="{{url('frontend/images/fire.png')}}" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">126</h4>
                                        <p>Refineries &amp; Operations</p>
                                    </div>
                                </div>

                                <div class="col-xs-6">

                                    <img src="{{url('frontend/images/badge.png')}}" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">35</h4>
                                        <p>Awards &amp; Recognitions</p>
                                    </div>
                                </div>

                            </div>

                        </section>

                        <section class="about-accordion">
                            <div class="row publications">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Petrolium Engineering</a>
                </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">International Trade </a> </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Chemicals and Refining </a> </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
