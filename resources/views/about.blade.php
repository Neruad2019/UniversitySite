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
              <li>
                <a href="{{route('home')}}" class="nav-link text-left">Home</a>
              </li>
              <li class="has-children active">
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


  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-end justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="mb-0">About Us</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>


  <div class="custom-breadcrumns border-bottom">
    <div class="container">
      <a href="#">Home</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">About Us</span>
    </div>
  </div>

  <div class="container pt-5 mb-5">
          <div class="row">
            <div class="col-lg-4">
              <h2 class="section-title-underline">
                <span>About us</span>
              </h2>
            </div>
            <div class="col-lg-4">
                <p1>In 10 years of development, IITU was able to firmly enter the rating of the best technical universities in the country. The university is constantly working to improve the quality of educational services, provides high potential of the faculty.</p1>

<p2>In December 2019, according to the rating of the National Chamber of Entrepreneurs "Atameken", IITU entered the top 3 universities of Kazakhstan, as well as first place in such educational programs as "information systems" and "electronic journalism

</p2>
            </div>
            <div class="col-lg-4">
              <p>The existing academic mobility allows students to gain knowledge and international experience by studying during the semester at partner universities.
              Teachers at the University are particularly proud of the fact that after graduation from IITU, the percentage of employed graduates is always consistently high: around 90% of the total.</p>
            </div>
          </div>
        </div> -->

  <div class="site-section">
      <div class="container">
          <div class="row mb-5">
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <img src="images/about1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="col-lg-5 ml-auto align-self-center">
                  <h2 class="section-title-underline mb-5">
                      <span>Why International IT University</span>
                  </h2>
                  <p>High scientific and pedagogical potential</p>
                  <p>Interesting and diverse student life</p>
                  <p>Unique educational programmes</p>
              </div>
          </div>

          <div class="row">
                  <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                      <img src="images/about2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                      <h2 class="section-title-underline mb-5">
                          <span>Why International IT University</span>
                      </h2>
                      <p>Exchange programmes and practices abroad</p>
                      <p>Participation in international IT Competitions and Olympiads</p>
                      <p>Operational practices in the best IT companies</p>
                  </div>
              </div>
      </div>
  </div>




  <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-4 mb-5">
          <h2 class="section-title-underline mb-5">
            <span>Our Teachers</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

          <div class="feature-1 border person text-center">
              <img src="images/tch1.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Bakytov Daulet Bakytovich</h2>
              <span class="position mb-3 d-block">Computer engineering</span>
              <p>Teaching disciplines: Introduction to Networks; Routing, Switching and Wireless Essentials.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/tch2.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Omarova Aigul Shamilevna</h2>
              <span class="position mb-3 d-block">Finance, Marketing</span>
              <p>Position - Associate Professor
              Disciplines - Finance, Marketing, Marketing Management.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/tch3.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Babekenov Rifkhat Faridovich</h2>
              <span class="position mb-3 d-block">Coach</span>
              <p>Education - KazAST
                  Position - Coach
                 Disciplines - Physical culture</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

<div class="feature-1 border person text-center">
              <img src="images/tch1.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Bakytov Daulet Bakytovich</h2>
              <span class="position mb-3 d-block">Computer engineering</span>
              <p>Teaching disciplines: Introduction to Networks; Routing, Switching and Wireless Essentials.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/tch2.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Omarova Aigul Shamilevna</h2>
              <span class="position mb-3 d-block">Finance, Marketing</span>
              <p>Position - Associate Professor
              Disciplines - Finance, Marketing, Marketing Management.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/tch3.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Babekenov Rifkhat Faridovich</h2>
              <span class="position mb-3 d-block">Coach</span>
              <p>Education - KazAST
                  Position - Coach
                 Disciplines - Physical culture</p>
            </div>
          </div>
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
