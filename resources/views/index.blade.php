@extends('layouts.layout')
@section('content')
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span>FAQ</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 8 777 250 88 60</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> iitu_kz@mail.ru</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="{{route('login')}}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="{{route('registration')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo1.png" width="100" height="100" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{route('home')}}" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="{{route('about')}}" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="{{route('about')}}">Our Teachers</a></li>
                    <li><a href="{{route('about')}}">Our University</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{route('admissions')}}" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="{{route('courses')}}" class="nav-link text-left">Specialties</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="nav-link text-left">Contact</a>
                  </li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="fa fa-vk"></span></a>
              <a href="#"><span class="fa fa-telegram"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>


    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/banner1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>International IT University</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/banner2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Program Your Future For Success</h1>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Why IITU</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Education Level</h2>
                <p>IITU pays special attention to developing the personal qualities, leadership skills and creative abilities of students</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Achievements</h2>
                <p>In 10 years of development,IITU was able to firmly enter the rating of the best technical universities in the country</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Cooperation</h2>
                <p>IITU's partners are international universities and scientific and educational organisations from the USA, Malaysia, China and others.</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>OBJECTIVES</span>
            </h2>
            <p>Latest news from us</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/ob1.jpg" alt="Image" class="img-fluid"></a>

                      <div class="category"><h3>Grant</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Vacant educational grants for 2020-2021 school year</h2>


                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">More</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/obj2.jpg" alt="Image" class="img-fluid"></a>

                      <div class="category"><h3>Extended Academic Council meeting</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>On 24 October 2020, an online Extended Academic Council Meeting will be held.</h2>


                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">More</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/obj3.jpg" alt="Image" class="img-fluid"></a>

                      <div class="category"><h3>Online Championships </h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Online World Mind Sports Championship of Universities 2020</h2>


                      <p><a href="courses-single.html" class="btn btn-primary rounded-0 px-4">More</a></p>
                    </div>
                  </div>

              </div>

          </div>
        </div>



      </div>
    </div>




    <div class="section-bg style-1" style="background-image: url('images/about1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our University</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">IITU is the only higher education institution in Kazakhstan that received institutional international accreditation from ASIIN in 2019 and has undergone the procedure of official confirmation of compliance with international standards.</p>
            <p>"The International Information Technology University guarantees compliance with institutional, procedural and cultural requirements for quality teaching and successful learning", confirms ASIIN experts (Agency for Accreditation of Educational Programmes in Engineering, Computer Science, Natural Sciences and Mathematics, Germany).</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->



    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Double degree education</h3>
            <p>the opportunity to study two curricula in parallel in order to obtain two equivalent diplomas (DoubleMajor) or one basic and one additional diploma (Major - Minor);</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>Library </h3>
            <p>The Library of the International University of Information Technologies was established in 2009 as a structural unit of the university.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Academic mobility</h3>
            <p>is the movement of students or teachers to study or conduct research at a particular academic institution period.</p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>Get advice</p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo1.png" height="150" width="150" alt="Image" class="img-fluid"></p>
            <p> International Information Technologies University</p>
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>


      </div>
    </div>


   </div>


@endsection
