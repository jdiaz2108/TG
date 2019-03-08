<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                    .purple-gradient {
            background-image: linear-gradient(40deg, rgb(255, 110, 196), rgb(120, 115, 245)) !important;
        }
        .aqua-gradient {
            background-image: linear-gradient(40deg, rgb(32, 150, 255), rgb(5, 255, 163)) !important;
        }
        .blue-gradient {
            background-image: linear-gradient(40deg, rgb(69, 202, 252), rgb(48, 63, 159)) !important;
        }
        .peach-gradient {
            background-image: linear-gradient(40deg, rgb(255, 216, 111), rgb(252, 98, 98)) !important;
        }
        .timber-gradient {
            background-image: linear-gradient(40deg, rgb(252, 0, 255), rgb(0, 219, 222)) !important;
        }
        .atlas-gradient {
            background-image: linear-gradient(40deg, rgb(254, 172, 94), rgb(199, 121, 208), rgb(75, 192, 200)) !important;
        }
        .pmk-gradient {
            background-image: linear-gradient(40deg, rgb(0, 106, 179), rgb(236, 177, 11)) !important;
        }
        .aqua-marine-gradient {
            background-image: linear-gradient(40deg, rgb(26, 41, 128), rgb(38, 208, 206)) !important;
        }
        .blooker20-gradient {
            background-image: linear-gradient(40deg, rgb(230, 92, 0), rgb(249, 212, 35)) !important;
        }
        .instagram-gradient {
            background-image: linear-gradient(40deg, rgb(131, 58, 180), rgb(253, 29, 29), rgb(252, 176, 69)) !important;
        }
        .wiretap-gradient {
            background-image: linear-gradient(40deg, rgb(138, 35, 135), rgb(233, 64, 87), rgb(252, 176, 69)) !important;
        }
        .sincityred-gradient {
            background-image: linear-gradient(40deg, rgb(237, 33, 58), rgb(147, 41, 30)) !important;
        }
        .signup-section {
  padding: 10rem 0;
  background: linear-gradient(to bottom, #{fade-out($black, .9)} 0%,#{fade-out($black, .5)} 75%,$black 100%), url('../img/bg-signup.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  .form-inline {
    input {
      box-shadow: 0 0.1875rem 0.1875rem 0 rgba(0,0,0,.1) !important;
      padding: 1.25rem 2rem;
      height: auto;
      font-family: 'Varela Round';
      font-size: 80%;
      text-transform: uppercase;
      letter-spacing: 0.15rem;
      border: 0;
    }
  }
}
        </style>
    </head>
    <body>
 <div id="app">



        <div class="container-fluid bg-primary m-0 p-0 sticky-top shadow">
            <div class="container sticky-top">
                <nav class="navbar navbar-expand-lg navbar-dark py-1 h4 sticky-top">
                    <a class="navbar-brand" href="#">
                        <h3 class="my-auto">Tv Global</h3>
                    </a>
                    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-white "></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                                        </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
 
   <main>
            @yield('content')
        </main>




        <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>



        <footer>
            <div class="container-fluid bg-dark">
                <div class="container">
                    <div class="col-12 text-center">
                        <h5 class="text-light">
                            © Copyright 2019. All Rights Reserved, TVGLOBAL.CO
                        </h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark">
                <div class="container">
                    <div class="col-12 text-center">
                        <h5 class="text-light">
                            © Copyright 2019. All Rights Reserved, TVGLOBAL.CO
                        </h5>
                    </div>
                </div>
            </div>



        </footer>
        
          <main>
        @include('layouts.navbar')
        </main>
      </div>
    </body>
</html>
