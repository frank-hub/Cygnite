<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset("img/favicon.png")}}" rel="icon">
  <link href="{{asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset("lib/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset("lib/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
  <link href="{{asset("lib/animate/animate.min.css")}}" rel="stylesheet">
  <link href="{{asset("lib/venobox/venobox.css")}}" rel="stylesheet">
  <link href="{{asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

<!--==========================
  Intro Section
============================-->
<section id="intro1">
  <div class="intro1-container wow fadeIn">
    <h1 class="mb-4 pb-0">Blog Details</h1>
    <a href="{{ url('/') }}" class="about-btn scrollto"><i class="fa fa-home fa-1x"></i> Home</a>
  </div>
</section>

<main id="main">

    <!--==========================
      About1 Section
    ============================-->
    <section id="about1">
      <div class="container">
          <div class="container justify-content-center">
              <div class="card mb-3">
                  <figure class="figure">
                      <img class="card-img-top img-fluid rounded mx-auto d-block" src="{{asset('/cover_images/'.$article['cover'])}}" alt="Card image cap" style="width: 100%; height:50rem; object-fit:cover;">
                  </figure>
                <div class="card-body">
                  <h5 class="card-title">{{ $article['title'] }}</h5>
                  <p class="card-text">{{ $article['content'] }}</p>
                  <p class="card-text"><small class="text-muted">{{ (new DateTime($article['created_at']))->format('F d,Y')  }}</small></p>
                </div>
              </div>
          </div>
      </div>
    </section>
</main>

@include('layouts.footer')

</body>

</html>
