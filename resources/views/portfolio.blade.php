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
    <h1 class="mb-4 pb-0">Who We Work With</h1>
    <a href="{{ url('/') }}" class="about-btn scrollto"><i class="fa fa-home fa-1x"></i> Home</a>
  </div>
</section>

<main id="main">

    <!--==========================
      Project Section
    ============================-->
    <section class="container">
        <table class="table table-hover table-bordered text-white" style="background-color: #32384D;">
            <thead style="background-color: #E29930;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Partner Name</th>
                    <th scope="col">Summary Profile</th>
                    <th scope="col" colspan="3">Client profile (100 words)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>A Large Outdoor Advertising Company</td>
                    <td>Software and vendor selection and implementation</td>
                    <td>The client entity are the pioneers of the Outdoor advertising by use of billboards, street signs and event branding the East Africa, with the operations based in Kenya.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>A multi-national Non-Profit working in the primary health sector</td>
                    <td>Software and vendor selection and implementation</td>
                    <td>The client entity supports networks of ‘Avon-like’ health entrepreneurs who go door to door to teach families how to improve their health and wealth and sell life-changing products such as simple treatments for malaria and diarrhea, safe delivery kits, 
                        fortified foods, clean cookstoves, water filters, and solar lights.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Freshpro</td>
                    <td>Innovation on agri-business automation – farmer, field staff, back office operations and consumer mobile applications</td>
                    <td>The client entity is an innovative agribusiness value addition business. They work with fresh produce farmers in Kenya to drive good farming methods, bulk fresh produce and reach the target market through using new technology.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>A Large Outdoor Advertising Company</td>
                    <td>Software and vendor selection and implementation</td>
                    <td>The client entity are the pioneers of the Outdoor advertising by use of billboards, street signs and event branding the East Africa, with the operations based in Kenya.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>A Large Outdoor Advertising Company</td>
                    <td>Software and vendor selection and implementation</td>
                    <td>The client entity are the pioneers of the Outdoor advertising by use of billboards, street signs and event branding the East Africa, with the operations based in Kenya.</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

@include('layouts.footer')

</body>

</html>
