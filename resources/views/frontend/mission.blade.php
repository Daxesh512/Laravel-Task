@extends("frontend.layouts.main")
@section('main-container')
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Our Mission </h2>
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
                                <h2 class="company-title color-title"> MISSION AND VISION </h2>
                                <h4 class="company-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.  </h4>
                                <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences. Interactively disintermediate empowered data whereas distinctive human capital. Compellingly utilize.</p>
                                <p> Dynamically utilize intermandated materials through customized process improvements. Conveniently recaptiualize adaptive leadership before long-term high-impact functionalities. Completely incubate customer directed meta-services after economically sound imperatives. Distinctively evolve diverse applications for enterprise processes. Monotonectally disintermediate functionalized solutions rather than progressive leadership.</p>

                            </div>
                        </section>

                        <section class="about-vision">
                            <div class="row vision">
                                <div class="col-sm-6">
                                    <h2 class="title-2"> OUR VISION </h2>
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
                                    <h2 class="title-2"> OUR MISSION </h2>
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
                                < <li> <a href="{{ route('company') }}"> The Company </a> </li>
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