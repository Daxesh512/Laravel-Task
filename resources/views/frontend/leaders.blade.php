@extends("frontend.layouts.main")
@section('main-container')
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Leaders </h2>
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
                                <h2 class="company-title color-title"> OUR TEAM </h2>
                                <h4 class="company-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.  </h4>
                                <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences. Interactively disintermediate empowered data whereas distinctive human capital. Compellingly utilize.</p>
                                <p> Dynamically utilize intermandated materials through customized process improvements. Conveniently recaptiualize adaptive leadership before long-term high-impact functionalities. Completely incubate customer directed meta-services after economically sound imperatives. Distinctively evolve diverse applications for enterprise processes. Monotonectally disintermediate functionalized solutions rather than progressive leadership.</p>

                            </div>
                        </section>

                        <section class="about-leaders">
                            <div class="section-title text-center">
                                <h2 class="title-services-other title-2"> OUR LEADERS </h2>
                                <h4 class="subtitle-services-other subtitle-2">Objectively whiteboard transparent models for prospective <br/> information. Authoritatively myocardinate.</h4>
                                <div class="spacer-50"> </div>
                            </div>

                            <div class="row leaders text-center">

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/gregory.jpg')}}" alt="Gregory">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">Gregory Walker</h4>
                                    <p>Founder &amp; CEO</p>
                                </div>

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/patrick.jpg')}}" alt="Patrick">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">Patrick Morgan</h4>
                                    <p>VP Sales &amp; Marketing</p>
                                </div>

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/taylor.jpg')}}" alt="Taylor">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">Taylor White</h4>
                                    <p>Cheif Finance Officer</p>
                                </div>

                                <div class="clearfix spacer-50"></div>

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/david.jpg')}}" alt="David">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">David Hanson</h4>
                                    <p>Technical Head, Refineries</p>

                                </div>

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/kathryn.jpg')}}" alt="Kathryn">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">Kathryn Stephens</h4>
                                    <p>Operations Lead</p>

                                </div>

                                <div class="col-sm-4">
                                    <div class="img-hover-effect">
                                        <img src="{{url('frontend/images/clifton.jpg')}}" alt="Clifton">
                                        <div class="social-links">
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                    </div>
                                    <h4 class="subtitle">Clifton Mitchell</h4>
                                    <p>Human Resouce Manager</p>

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