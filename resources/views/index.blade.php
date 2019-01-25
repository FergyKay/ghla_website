<!--==========================
  Header
============================-->
{{--<div data-include="header"></div>--}}

@extends('layout')
@section('title','Home')
<!--==========================
  Intro Section
============================-->
@section('content')
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" style="display: inline-block" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="../../assets/img/intro-carousel/2.jpg" alt=""></div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="../../assets/img/intro-carousel/1.jpg" alt=""></div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon fas fa-angle-double-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon fas fa-angle-double-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <div id="main">

        <!--==========================
          Featured Services Section
        ============================-->
        <!-- <section id="featured-services">
          <div class="container">
            <div class="row">

              <div class="col-lg-4 box">
                <i class="ion-ios-bookmarks-outline"></i>
                <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>

              <div class="col-lg-4 box box-bg">
                <i class="ion-ios-stopwatch-outline"></i>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>

              <div class="col-lg-4 box">
                <i class="ion-ios-heart-outline"></i>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>

            </div>
          </div>
        </section>#featured-services -->

        <!--==========================
          About Us Section
        ============================-->
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>About Us</h3>
                    <p>The Ghana Library Authority (GhLA) was established in 1949 by the Gold Coast Ordinance CAP 118
                        and
                        came into effect in January, 1950. The Ordinance was re-enacted as the Ghana Library Board Act,
                        1970
                        (Act 327). Act 327 was also amended by Act 562 of 1998 for Ghana Library Board to become Ghana
                        Library Authority.</p>
                </header>

                {{--<div class="row about-cols">--}}
                {{--<div class="col-lg-4 wow fadeInUp">--}}
                {{--<div class="about-col">--}}
                {{--<div class="img">--}}
                {{--<img src="../assets/img/about-mission.jpg" alt="" class="img-fluid">--}}
                {{--<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>--}}
                {{--</div>--}}
                {{--<h2 class="title">Our Mission</h2>--}}
                {{--<p>--}}
                {{--Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore--}}
                {{--magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut--}}
                {{--aliquip ex ea commodo consequat.--}}
                {{--</p>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">--}}
                {{--<div class="about-col">--}}
                {{--<div class="img">--}}
                {{--<img src="../assets/img/about-plan.jpg" alt="" class="img-fluid">--}}
                {{--<div class="icon"><i class="ion-ios-list-outline"></i></div>--}}
                {{--</div>--}}
                {{--<h2 class="title">Our Vision</h2>--}}
                {{--<p>--}}
                {{--Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,--}}
                {{--totam--}}
                {{--rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae--}}
                {{--vitae--}}
                {{--dicta sunt explicabo.--}}
                {{--</p>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">--}}
                {{--<div class="about-col">--}}
                {{--<div class="img">--}}
                {{--<img src="assets/img/about-vision.jpg" alt="" class="img-fluid">--}}
                {{--<div class="icon"><i class="ion-ios-eye-outline"></i></div>--}}
                {{--</div>--}}
                {{--<h2 class="title">Our Objective</h2>--}}
                {{--<p>--}}
                {{--Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores--}}
                {{--eos--}}
                {{--qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia--}}
                {{--dolor--}}
                {{--sit amet.--}}
                {{--</p>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}

                <div class="row about-details">
                    <div class="col-lg-4 about-item mission wow flipInY">
                        <div class="about-item-inner ">
                            <h2 class="about-title">Our Mission</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="col-lg-4 about-item vision wow rotateIn">
                        <div class="about-item-inner ">
                            <h2 class="about-title">Our Vision</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="col-lg-4 about-item objective wow zoomInLeft">
                        <div class="about-item-inner ">
                            <h2 class="about-title">Our Objectives</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;z-index: 10000">
                    <a type="button" class="see-team wow slideInDown" href="management">Leadership</a>
                </div>

            </div>
        </section>

    </div>
    <!--#about-->


    <!--==========================
      Services Section
    ============================-->
    <!-- <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section>#services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section>#call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!-- <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section> -->


    <!-- Services -->
    <header class="section-header" id="services">
        <h3>Services</h3>
    </header>
    <div class="row" id="service-row" style="background-color: #ffe0bd; padding: 10px">
        <div class="col-lg-2 col-xs-6 col-md-4 service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-user-plus fa-5x"></i>
                </div>
                <h2>Register</h2>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6 col-sm-6  col-md-4  service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-hand-holding-usd fa-5x"></i>
                </div>
                <h2>Donate</h2>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6 col-md-4 col-sm-6 service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-user-plus fa-5x"></i>
                </div>
                <h2>Register</h2>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6 col-md-4 col-sm-6 service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-hand-holding-usd fa-5x"></i>
                </div>
                <h2>Donate</h2>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6 col-md-4 col-sm-6 service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-user-plus fa-5x"></i>
                </div>
                <h2>Register</h2>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6 col-md-4 col-sm-6 service-item">
            <div class="card-outer">
                <div class="card">
                    <i class="fas fa-hand-holding-usd fa-5x"></i>
                </div>
                <h2>Donate</h2>
            </div>
        </div>


    </div>


    <!--==========================
      Facts Section
    ============================-->
    <section id="facts" class="wow fadeIn">
        <div class="container">

            <header class="section-header">
                <h3>Statistics</h3>
            </header>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">5000000</span>
                    <p>Books</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">61</span>
                    <p>Branches</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">5</span>
                    <p>Affiliates</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18000</span>
                    <p>Staff</p>
                </div>

            </div>
        </div>
    </section>
    <!--#facts






  <!--==========================
    Portfolio Section
  ============================-->
    <!-- <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>#portfolio

    <!--==========================
      Clients Section
    ============================-->
    <div class="row">
        <div class="col-lg-4">
            <div id="clients" class="wow fadeInUp">
                <div class="container">
                    <header class="section-header">
                        <h3>Staff Picks</h3>
                    </header>

                    {{--<div class="owl-carousel clients-carousel">--}}
                        {{--<a href="https://192.168.1.5/eg/opac/results?query=kill"><img--}}
                                    {{--src="../assets/img/new-arrivals/kweku-ananse.jpg"--}}
                                    {{--alt="Card image cap"></a>--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/pQOtgwFrxxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div id="news" class="wow fadeInUp">
                <header class="section-header">
                    <h3>Latest News</h3>
                </header>
                <ul>
                    @foreach($news as $newsItem)
                        <li class="news-item-image">
                            <a href="#"><img src="../news/2-1-2019/img/tema-kids.jpg"></a>
                            <h5>{{$newsItem->title}}</h5>
                            <p>{{$newsItem->content}}</p>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    </div>
    <!--#clients

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>#testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!--<section id="team">-->
    <!--<div class="container">-->
    <!--<div class="section-header wow fadeInUp">-->
    <!--<h3>Team</h3>-->
    <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
    <!--</div>-->

    <!--<div class="row">-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp">-->
    <!--<div class="member">-->
    <!--<img src="img/team-1.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Walter White</h4>-->
    <!--<span>Chief Executive Officer</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fa fa-twitter"></i></a>-->
    <!--<a href=""><i class="fa fa-facebook"></i></a>-->
    <!--<a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-2.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Sarah Jhonson</h4>-->
    <!--<span>Product Manager</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fa fa-twitter"></i></a>-->
    <!--<a href=""><i class="fa fa-facebook"></i></a>-->
    <!--<a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-3.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>William Anderson</h4>-->
    <!--<span>CTO</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fa fa-twitter"></i></a>-->
    <!--<a href=""><i class="fa fa-facebook"></i></a>-->
    <!--<a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-4.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Amanda Jepson</h4>-->
    <!--<span>Accountant</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fa fa-twitter"></i></a>-->
    <!--<a href=""><i class="fa fa-facebook"></i></a>-->
    <!--<a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->

    <!--</div>-->
    <!--</section>-->
    <!--

    <!--==========================
      Contact Section
    ============================-->
    <!-- <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>#contact -->
@endsection


<!--==========================
  Footer
============================-->

