<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>neeCall</title>
    <link rel="icon" type="image/x-icon" href="/img/pngwing.com.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'neeCall') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    @vite(['resources/js/app.js'])
</head>
<body style="background-image: url('/img/andy-vult-t-WkBEOQngs-unsplash.jpg');">
    <div id="app">
    <nav class="ps-5 pt-5 pb-3 pe-3 navbar navbar-expand-md navbar-light" style="background-color: #739072; ">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><h1 class="pe-5 fw-bold">neeCall</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/home"><h5 class="ms-5 fw-bold">Home</h5></a>
                <a class="nav-link" href="/hospital"><h5 class="ms-5 fw-bold">Hospital</h5></a>
                <a class="nav-link" href="/firefighter"><h5 class="ms-5 fw-bold">Fire Fighter</h5></a>
                <a class="nav-link" href="/police"><h5 class="ms-5 fw-bold">Police</h5></a>
                <a class="nav-link" href="/more"><h5 class="ms-5 fw-bold">More</h5></a>
            </div>
        </div>
    </div>
</nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Hubungi Kami</h3>
                        <ul>
                            <li><a href="#">@neeCall</a></li>
                            <li><a href="#">neecall@gmail.com</a></li>
                            <li><a href="#">085280335042</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Tentang</h3>
                        <ul>
                            <li><a href="#">neeCall</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Projek</a></li>
                        </ul>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">neeCall © 2023</p>
            </div>
        </footer>
    </div>
</body>
</html>

<style>
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

https://epicbootstrap.com/snippets/footer-dark
</style>
