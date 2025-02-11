@extends("frontend.layouts.main")
@section('main-container')

        <!-- Main Content Section -->
        <main class="main">
          
            <section class="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li class="has-overlay">
                            <img src="{{url('frontend/images/slider1.jpg')}}" alt="Slider 1" />
                            <div class="slider-content">
                                <div class="container">
                                    <h2> Targeting high impact exploration <br> Offshore Industry </h2>
                                    <p> Holisticly brand sustainable solutions rather than clicks-and-mortar applications.
                                        <br> Phosfluorescently whiteboard fully tested initiatives. </p>
                                    <a class="btn primary-btn"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </li>
                        <li class="has-overlay">
                            <img src="{{url('frontend/images/slider2.jpg')}}" alt="Slider 2" />
                            <div class="slider-content text-center">
                                <div class="container">

                                    <h2>Most sophisticated Storage &amp; Transport</h2>
                                    <p> Quickly disintermediate collaborative web services via high standards in products.
                                        <br> Compellingly fabricate cutting-edge portals through alternative
                                        <br> opportunities. Objectively customize.</p>
                                    <a class="btn primary-btn"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="home-company">
                <div class="container">
                    <div class="row company">
                        <div class="col-md-5 col-sm-8">
                            <div class="company-details">
                                <h2 class="company-title color-title"> THE COMPANY </h2>
                                <h4 class="company-subtitle subtitle"> Interactively empower diverse imperatives after prospective convergence. </h4>
                                <p> Assertively productize efficient partnerships through customer directed supply chains. Continually maintain process-centric catalysts for change via backward compatible value. </p>
                                <a href="#" class="btn btn-primary" role="button"> READ OUR MISSION </a>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12">
                            <div class="company-image">
                                <div class="img-left hover-effect">
                                    <img src="{{url('frontend/images/company-image2.jpg')}}" alt="Company Image" />
                                </div>
                                <div class="img-right hover-effect">
                                    <img src="{{url('frontend/images/company-image1.jpg')}}" alt="Company Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-ceo">
                <div class="container">
                    <div class="row ceo">
                        <div class="col-md-6">
                            <div class="ceo-photo">
                                <img src="{{url('frontend/images/ceo.png')}}" alt="CEO" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="ceo-details">
                                <h2 class="ceo-title color-title"> WORD FROM CEO </h2>
                                <h4 class="ceo-subtitle subtitle"> READ THE MESSAGE FROM OUR CEO </h4>
                                <p> Proactively incubate enterprise total linkage without sustainable leadership skills. Monotonectally strategize user-centric interfaces whereas low-risk high-yield materials. Efficiently syndicate web-enabled portals for principle centered partnerships.
                                </p>
                                <p>Proactively whiteboard revolutionary processes after scalable testing procedures. Holisticly reinvent seamless after business.</p>
                                <h4 class="ceo-sign"> <img src="{{url('frontend/images/ceo-sign.png')}}" alt="signature" /> </h4>
                                <p class="ceo-name">Gregory Walker, CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-services">
                <div class="container">
                    <div class="row services">
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="{{url('frontend/images/services-one.jpg')}}" alt="technology-innovation" />
                            </div>
                            <h4 class="services-title-one subtitle">TECHNOLOGY &amp; INNOVATION</h4>
                            <p>Professionally drive clicks-and-mortar web readiness after progressive e-commerce. Dramatically unleash cross functional.</p>
                            <a href="#" class="btn btn-default btn-normal">Read More</a>
                        </div>
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="{{url('frontend/images/services-two.jpg')}}" alt="our-operations" />
                            </div>
                            <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                            <p>Energistically productize wireless mindshare for emerging experiences. Myocardinate enabled alignments and magnetic scenarios. </p>
                            <a href="#" class="btn btn-default btn-normal">Read More</a>
                        </div>
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="{{url('frontend/images/services-three.jpg')}}" alt="social-resposibility" />
                            </div>
                            <h4 class="services-title-one subtitle">SOCIAL RESPONIBILITY</h4>
                            <p>Globally incubate principle-centered e-markets with standards compliant catalysts for change. Efficiently extend highly efficient products.</p>
                            <a href="#" class="btn btn-default btn-normal">Read More</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-links">
                <div class="container">
                    <div class="row links">
                        <div class="col-md-2">
                            <h4 class="links-title subtitle">Quick Links</h4>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CAREERS</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CONTACT</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">MARKET INFO</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">TECHNOLOGY</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">LATEST NEWS</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-process">
                <div class="container">
                    <div class="row process">
                        <div class="col-sm-6">
                            <h2 class="process-title title-2"> OUR PROCESS </h2>
                            <h4 class="process-subtitle subtitle-2"> Interactively empower diverse imperatives after prospective convergence. </h4>
                            <p> Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled "outside the box" thinking via scalable quality vectors. Objectively unleash optimal core competencies. </p>
                            <a href="#" class="btn btn-primary" role="button">READ THE STORY</a>
                        </div>

                        <div class="col-sm-6">
                            <div id="skills" class="process-bar">
                                <div class="skillbar-title"> FEUL AND MISCELLANEOUS </div>
                                <div class="skillbar" data-percent="46%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">46%</div>
                                </div>

                                <div class="skillbar-title"> LIQUID CHEMICALS </div>
                                <div class="skillbar" data-percent="78%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">78%</div>
                                </div>

                                <div class="skillbar-title"> MONOMERS / POLYMERS </div>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>

                                <div class="skillbar-title"> ISOCYANATE </div>
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-stats">
                <div class="container">
                    <div class="row stats">
                        <div class="col-md-3 col-xs-6">
                            <img src="{{url('frontend/images/globe.png')}}" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">26</h4>
                                <p>Offices Worldwide</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="{{url('frontend/images/friends.png')}}" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">10000</h4>
                                <p>Satisfied Employees</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="{{url('frontend/images/fire.png')}}" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">126</h4>
                                <p>Refineries &amp; Operations</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="{{url('frontend/images/badge.png')}}" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">35</h4>
                                <p>Awards &amp; Recognitions</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="home-services-other">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-services-other title-2">SERVICES</h2>
                        <h4 class="subtitle-services-other subtitle-2">Objectively whiteboard transparent models for prospective <br/> information. Authoritatively myocardinate.</h4>
                        <div class="spacer-50"> </div>
                    </div>

                    <div class="row services-other">
                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon1.png')}}" alt="SHELL CHEMICALS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL CHEMICALS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon2.png')}}" alt="COMMERCIAL FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">COMMERCIAL FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon3.png')}}" alt="AVIATION FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">AVIATION FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="clearfix spacer-70"></div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon4.png')}}" alt="LUBRICANTS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">LUBRICANTS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon5.png')}}" alt="MARINE FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">MARINE FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon6.png')}}" alt="LIQUIFIED PETROLIUM GAS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">LIQUIFIED PETROLIUM GAS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="clearfix spacer-70"></div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon7.png')}}" alt="SHELL SULPHUR" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL SULPHUR</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon8.png')}}" alt="SHELL TRADING" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL TRADING</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="{{url('frontend/images/service-icon9.png')}}" alt="SHELL FOR SUPPLIERS" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL FOR SUPPLIERS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="home-testimonials">

                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-testimonials color-title">DON’T TAKE OUR WORD</h2>
                        <h2 class="subtitle-testimonials title-2">CLIENT TESTIMONIALS</h2>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Calvin Sims</h4>
                            <p class="designation">Marketing Head, ABC Chemicals</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Bertha Gonzales</h4>
                            <p class="designation">Divisional Manager, Corpo Inc.</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                            <h4 class="client-name">Brianna Hernandez</h4>
                            <p class="designation">Founder &amp; CEO, Marine Engineering</p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="home-publications">
                <div class="container">
                    <div class="row publications">
                        <div class="col-md-7 col-sm-6">
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

                        <div class="col-md-5 col-sm-6">
                            <div class="plubication-downloads">
                                <h2 class="publish">Publications</h2>
                                <div class="download-file">
                                    <a href="#"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF <span>1.5 MB</span> </a>
                                </div>
                                <p class="download-title">Other Downloads</p>
                                <ul class="download-list">
                                    <li><a href="#"> Annual Report </a> <span>2.4 MB</span></li>
                                    <li><a href="#"> Sustainability Report </a> <span>150 KB</span></li>
                                    <li><a href="#"> Statistical Report </a> <span>250 KB</span></li>
                                    <li><a href="#"> Energy Outlook </a> <span>1.8 MB</span></li>
                                    <li><a href="#"> Chairman’s Message </a> <span>550 KB</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-news">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-blog color-title"> NEWS AND MEDIA </h2>
                        <h2 class="subtitle-blog title-2"> LATEST FROM BLOG </h2>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row news">
                        <div class="col-md-4">
                            <div class="blog-img-box">
                                <div class="blog-date"> <span class="month">MAR </span> <span class="date"> 06</span> </div>
                                <a class="hover-effect" href="blog-single.html">
                                    <img src="{{url('frontend/images/news1.jpg')}}" alt="Fuel" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-single.html"> FUEL TRANSPORTATION AND RAILWAY RULES </a> </h3>
                                <p>By <a href="#">Eduardo Flores</a> in Transportation</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="blog-img-box">
                                <div class="blog-date"> <span class="month">Feb </span> <span class="date"> 24</span> </div>
                                <a class="hover-effect" href="blog-single.html">
                                    <img src="{{url('frontend/images/news2.jpg')}}" alt="Field Training" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3> <a href="blog-single.html"> FIELD TRAINING SESSIONS FOR NEW EMPLOYEES </a></h3>
                                <p>By <a href="#">Clinton Chavez</a> in TCareers</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="blog-img-box">
                                <div class="blog-date"> <span class="month">Jan </span> <span class="date"> 17</span> </div>
                                <a class="hover-effect" href="blog-single.html">
                                    <img src="{{url('frontend/images/news3.jpg')}}" alt="Environment" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3> <a href="blog-single.html"> A STUDY ON SUSTAINABILITY &amp; ENVIRONMENT FACTORS </a> </h3>
                                <p>By <a href="#">Gertrude Rose</a> in Environment</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-btn text-center">
                        <a href="blog.html" class="btn btn-primary" role="button">READ THE BLOG</a>
                    </div>
                </div>
            </section>

            <section class="home-partners">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="subtitle-testimonials title-2"> OUR PARTNERS </h2>
                        <div class="spacer-20"> </div>
                    </div>

                    <div class="row partners">
                        <div class="logo-slides slides owl-carousel">
                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner1.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner2.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner3.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner4.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner1.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner2.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner3.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="{{url('frontend/images/partner4.png')}}" alt="Partner Image 1">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- Main Content Section -->
@endsection  