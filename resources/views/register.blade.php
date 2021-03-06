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


  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-end justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="mb-0">Registration</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>


  <div class="custom-breadcrumns border-bottom">
    <div class="container">
      <a href="index.html">Home</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">Register</span>
    </div>
  </div>

  <div class="site-section">
      <div class="container">
        @include('layouts.message')
          <div class="row justify-content-center">
              <div class="col-md-5">
                <form action="{{route('register-form')}}" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" id="name" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="surname">Surname</label>
                          <input type="text" name="surname" id="surname" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="email" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="pword">Password</label>
                          <input type="password" name="password" id="pword" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="pword2">Re-type Password</label>
                          <input type="password" name="repassword" id="pword2" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                      </div>
                  </div>
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
