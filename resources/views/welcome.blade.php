<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Persemki - Digibook 4.0 Landing Page</title>
  <!-- Favicon -->
  <link href="{{ asset('argon/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{ asset('argon/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('argon/css/argon.css?v=1.1.0')}}" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="index.html">
          <!-- <img src="assets/img/brand/white.png" alt="brand"> -->Digibook 4.0
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="index.html">
                  <img src="assets/img/brand/blue.png" alt="brand">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <!-- <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Components</span>
              </a> -->
              
            </li>
            <li class="nav-item dropdown">
              <!-- <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Examples</span>
              </a>
              <div class="dropdown-menu">
                <a href="examples/landing.html" class="dropdown-item">Landing</a>
                <a href="examples/profile.html" class="dropdown-item">Profile</a>
                <a href="examples/login.html" class="dropdown-item">Login</a>
                <a href="examples/register.html" class="dropdown-item">Register</a>
              </div> -->
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
                <i class="fa fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <!-- <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-cloud-download mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Download</span>
              </a> -->
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    
    @yield('konten')
    
    <!-- <section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="assets/img/theme/promo-1.png" class="img-fluid floating" alt="image">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h3>Awesome features</h3>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-settings-gear-65"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Carefully crafted components</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-html5"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Amazing page examples</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Super friendly support team</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6">
            <div class="card bg-default shadow border-0">
              <img src="assets/img/theme/img-1-1200x1000.jpg" class="card-img-top" alt="image">
              <blockquote class="card-blockquote">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                  <polygon points="0,52 583,95 0,95" class="fill-default" />
                  <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                </svg>
                <h4 class="display-3 font-weight-bold text-white">Design System</h4>
                <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pl-md-5">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                <i class="ni ni-settings"></i>
              </div>
              <h3>Our customers</h3>
              <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section pb-0 bg-gradient-warning">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="assets/img/ill/ill-2.svg" class="img-center img-fluid" alt="image">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">Modern Interface</h4>
                <p class="text-white">Digibook 4.0 di bangun dengan tampilan yang sederhana namun menyenangkan, untuk lebih menarik siswa dalam belajar</p>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Fleksibel</h5>
                    <p>Digibook 4.0 dapat diakses dimana saja dan kapan saja. Memudahkan siswa dalam belajar</p>
                    <!-- <a href="#" class="text-success">Learn more</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-warning">Additional Tools</h5>
                    <p>Dilengkapi dengan Aplikasi AR dan VR untuk Android mobile</p>
                    <a href="https://drive.google.com/open?id=1mC0KS-Ayehu-_cUJNmQGdpPn7vijn7ZA" class="text-warning">AR Respirasi</a> - <a href="https://drive.google.com/open?id=1z7R3YM_bp0iXerRHCtr3tB10haq_U7P2" class="text-warning">AR AnatomiSketch</a> - <a href="https://drive.google.com/open?id=1fh8QVT2ombIwsxyBA305W6F-lynSZuZu" class="text-warning">VR Anatomi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <br>
    <br>
    <!-- <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3">The amazing Team</h2>
            <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;" alt="image">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Ryan Tompson</span>
                  <small class="h6 text-muted">Web Developer</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img src="assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;" alt="image">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Romina Hadid</span>
                  <small class="h6 text-muted">Marketing Strategist</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img alt="image" src="assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">Alexander Smith</span>
                  <small class="h6 text-muted">UI/UX Designer</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="px-4">
              <img alt="image" src="assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">John Doe</span>
                  <small class="h6 text-muted">Founder and CEO</small>
                </h5>
                <div class="mt-3">
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="section section-lg pt-0">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="text-white">Menemukan Kesulitan? </h3>
                <p class="lead text-white mt-3">Tenang saja, sudah kami sediakan panduan untuk penggunaan Digibook dan semua additional tools nya. </p>
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="https://drive.google.com/open?id=12zp6lqnpbmIrAp3oG5OoKd-YRgmi8haV" class="btn btn-lg btn-block btn-white">Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  </main>
  <footer class="footer has-cards">
    <div class="container">
      
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019 <a href="https://www.persemki.org/" target="_blank">Persemki</a> - <a href="https://www.mandita.co.id" target="_blank">Mandita</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <!-- <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li> -->
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="{{ asset('argon/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('argon/vendor/popper/popper.min.js')}}"></script>
  <script src="{{ asset('argon/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{ asset('argon/vendor/headroom/headroom.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('argon/js/argon.js?v=1.1.0')}}"></script>
</body>

</html>
