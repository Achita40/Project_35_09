<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Pakkred Hut</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Pakkred Hut</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">

            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
              <div class="input-group-icon pe-2"></i>

              </div>
              <button class="btn btn-white shadow-warning text-warning" type="submit"> <i class="fas fa-user me-2"></i>Login</button>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="{{ asset('frontend/assets/img/gallery/Peek A Boo.png') }}" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
            </div>
          </div>
        </div>
      </section>

      @yield('popular-item-1')

      @yield('restaurant-item')

      @yield('popular-item')

      @yield('member-item')


      <section class="py-2">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src="{{ asset('frontend/assets/img/gallery/fried-chicken.png') }}" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span class="text-primary">Fried Chicken</span></h1>
                      <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-2">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="{{ asset('frontend/assets/img/gallery/pizza.png') }}" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy Pizza?</span></h1>
                      <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try it with the best deals.</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

<!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="py-2">

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card card-span mb-3 shadow-lg">
                  <div class="card-body py-0">
                    <div class="row justify-content-center">
                      <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src="{{ asset('frontend/assets/img/gallery/fried-chicken.png') }}" alt="..." /></div>
                      <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                        <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span class="text-primary">Fried Chicken</span></h1>
                        <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7 bg-1000">

        <div class="container">
          <p class="text-200 text-center text-md-start">All rights Reserved &copy; Pakkred Hut, 2023</p>
          <hr>
          </div>

          <div class="row flex-center pb-3">
            <div class="col-md-6 order-0">

            </div>

          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('frontend/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('frontend/https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('frontend/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>
