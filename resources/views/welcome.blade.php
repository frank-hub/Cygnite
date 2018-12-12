<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cygnite LTD Consultants</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset("img/favicon.png")}}" rel="icon">
  <link href="{{asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  {{-- Fontawesome --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Bootstrap CSS File -->
  <link href="{{asset("lib/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset("lib/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
  <link href="{{asset("lib/animate/animate.min.css")}}" rel="stylesheet">
  <link href="{{asset("lib/venobox/venobox.css")}}" rel="stylesheet">
  <link href="{{asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

<style>
 .profile_card{
            border-width:0 2px 0 2px;
            border-style: groove;
            border-color: #FF3E78;
            position:relative;
        }
        .profile_card .profile_img img{
            width:100%;
            height:auto;
        }
        .profile_card .profile_img .profile_img_content{
            position: absolute;
            width:100%;
            height:100%;
            left:0;
            top:0;
            color:#fff;
            padding:20% 3% 10% 3%;
            text-align:center;
        }
        .profile_card
        .profile_img
        .profile_img_content h2{
            position:relative;
            top:50%;
            font-size:20px;
            text-transform:capitalize;
            transition: all 0.50s linear 0s;
        }
        .profile_card:hover .profile_img_content h2{
            top:80%;
        }
        .profile_card
        .profile_img
        .profile_img_content h2 > span{
            font-size:18px;
            display: block;
            margin:10px 0;
            color:#fff;
            text-transform:uppercase;
        }
        .profile_card .profile_img .profile_img_content .social_link{
            margin:0;
            padding:80px 0;
            transform: translateY(0);
            transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.20s;
        }
        .profile_card:hover .profile_img .profile_img_content .social_link{
            transform: translateY(20%);
        }
        .profile_card
        .profile_img
        .profile_img_content
        .social_link li{
            list-style: none;
            margin:0 15px;
            display: inline-block;
        }
        .profile_card
        .profile_img
        .profile_img_content
        .social_link li a{
            width:50px;
            height:50px;
            /* color:#FF3E78; */
            font-size:20px;
            line-height:50px;
            text-align:center;
            /* border: 2px dashed #FF3E78; */
            background: #e29930;
            transition: all 0.50s linear 0s;
        }
        .profile_card:hover .social_link li a{
            text-decoration:none;
        }
</style>
</head>

<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#main">CYG<span>N</span>ITE</a></h1>
      <a href="#intro" class="scrollto"><img src="{{asset('/img/intro-c.png')}}" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#sponsors">Projects</a></li>
          <li><a href="#speakers">Team</a></li>

          <li><a href="#faq">Faqs</a></li>
          <li><a href="#hotels">Projects</a></li>
          <li><a href="#gallery">Gallery</a></li>

          <li><a href="#contact">Contact</a></li>
          <li><a href="#blog1">Blog</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Cygnite<br><span>LTD</span> Consultants</h1>
      <p class="mb-4 pb-0 text-center">We believe that Africa is the next frontier for cloud, <br>
         mobility, big data & analytics and cyber security. <br> We want to be a part of this unfolding 
        story. Our focus is on entities and clients in Africa.</p>
      <a href="" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#abouts" class="about-btn scrollto">About cygnite</a>
    </div>
  </section>
<div class="container" id="abouts">
    <div class="section-header" style="margin-bottom: 10px;padding-bottom: 5px;">
        <h2>About Cygnite</h2>
      </div>
  <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('img/about-bg.jpg')}}" class="img-fluid" alt="">
          <div class="card-body">
            <h3>WHO WE ARE</h3>
            Cygnite is nothing more than the people who make it up. Our people are our most important 
            asset. Ours is an extraordinary place to work, for our people. 
            We encourage all our people to foster a working environment that is consistent with this.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('img/about-bg.jpg')}}" class="img-fluid" alt="">
          <div class="card-body">
            <h3>WE VALUE OUR PEOPLE</h3>
            Cygnite is nothing more than the people who make it up. Our people are our 
            most important asset. Ours is an extraordinary place to work, for our people.
             We encourage 
            all our people to foster a working environment that is consistent with this.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="{{asset('img/about-bg.jpg')}}" class="img-fluid" alt="">
          <div class="card-body">
            <h3>WE BRING YOU SOUND EXPERIENCE</h3>
            Our principals have at least thirty-five years cumulative experience in technology.
             Experience in IT strategy, infrastructure, regulation of technology, sourcing, IT
              project management. They have worked for 
            many world-class clients across many industry sectors in Europe, Middle East and Africa.
          </div>
        </div>
      </div>
  </div>
</div>
 

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
         <div class="row">
          <div class="col-lg-6">
            <h3>WE PLAY IN AFRICA</h3>
            <p>We believe that Africa is the next frontier for cloud, mobility, big data & analytics and cyber security. We want to be a part of this unfolding story. Our focus is on entities and clients in Africa.</p>
          </div>
          <div class="col-lg-6">
              <h3>WE ARE BIG ON DATA AND COMMON SENSE</h3>
              <p>We are a forward-looking company. We aim to provide unparalleled solutions 
                for our clients.
                 We use research and data to identify trends, needs and opportunities.</p>
          </div>
        </div>
        <div class="col-lg-12 text-center ">
            <h3>Social Media</h3>
            <p >
            <a href="https://web.facebook.com/" style="font-size: 40px" target="_blank"><i class="fa fa-facebook"></i></a>--
            <a href="https://web.twitter.com/" style="font-size: 40px" target="_blank"><i class="fa fa-twitter"></i></a>--
            <a href="https://web.whatsapp.com/send?phone=+254717353774&text=Hello%20I%20need%20to%20talk%20to%20someone" target="_blank" style="font-size: 40px"><i class="fa fa-whatsapp"></i></a>
             
            </p>
          </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Cygnite Team</h2>
          <p>Our team is composed of </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="profile_card">
                    <div class="profile_img">
                        <img src="img/speakers/1.jpg" alt="Profile_card"/>
                        <div class="profile_img_content">
                            <h2>Eslam Adel
                                <span>UI/UX Designer & UI Developer</span>
                            </h2>
                            <ul class="social_link">
                                <li><a href="" class="fa fa-facebook" style="color: #3b5998;"></a></li>
                                <li><a href="" class="fa fa-twitter" style="color: #55acee;"></a></li>
                                <li><a href="" class="fa fa-google" style="color: #dc4e41;"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profile_card">
                    <div class="profile_img">
                        <img src="img/speakers/2.jpg" alt="Profile_card"/>
                        <div class="profile_img_content">
                            <h2>Eslam Adel
                                <span>UI/UX Designer & UI Developer</span>
                            </h2>
                            <ul class="social_link">
                              <li><a href="" class="fa fa-facebook" style="color: #3b5998;"></a></li>
                              <li><a href="" class="fa fa-twitter" style="color: #55acee;"></a></li>
                              <li><a href="" class="fa fa-google" style="color: #dc4e41;"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="profile_card">
                    <div class="profile_img">
                        <img src="img/speakers/3.jpg" alt="Profile_card"/>
                        <div class="profile_img_content">
                            <h2>Eslam Adel
                                <span>UI/UX Designer & UI Developer</span>
                            </h2>
                            <ul class="social_link">
                              <li><a href="" class="fa fa-facebook" style="color: #3b5998;"></a></li>
                              <li><a href="" class="fa fa-twitter" style="color: #55acee;"></a></li>
                              <li><a href="" class="fa fa-google" style="color: #dc4e41;"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->


    <!--==========================
      Venue Section
    ============================-->


    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Projects</h2>
          <p>Her are some of our projects</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{asset("img/hotels/1.jpg")}}" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Project 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>AJHJKXKKXKXKKX</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{asset("img/hotels/2.jpg")}}" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Project 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>DHJKTYUIOPUIIOIOI</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{asset("img/hotels/3.jpg")}}" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">project 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>DFGHJNKMLGHJMKTGHJ</p>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{asset("img/gallery/1.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/1.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/2.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/2.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/3.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/3.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/4.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/4.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/5.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/5.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/6.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/6.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/7.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/7.jpg")}}" alt=""></a>
        <a href="{{asset("img/gallery/8.jpg")}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset("img/gallery/8.jpg")}}" alt=""></a>
      </div>

    </section>

    <!--==========================
      Blog Section
    ============================-->


    <section id="blog1" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent Posts</p>
        </div>

        <div class="row">
          @foreach($articles->slice(0, 3) as $article)
          <div class="col-lg-4 col-md-6">
            <div class="hotel1">
              <div class="hotel1-img">
                <img src="{{asset('cover_images/'.$article->cover)}}" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="{{route('post', $article['id'])}}">{{ $article->title }}</a></h3>
              <p>{!! str_limit($article->content, 100) !!}</p>
              <div class="justify-content-center mb-3 ml-2">
                <small><a href="{{route('post', $article['id'])}}">Read more...</a></small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-md-auto">
            <a href="{{ route('articles') }}" class="blog1-btn scrollto align-content-center"> Read All Articles</a>
          </div>
        </div>
      </div>


    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Partners</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/1.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/2.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/3.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/4.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/5.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/6.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/7.png")}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{asset("img/sponsors/8.png")}}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>

              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Reach Out To Us</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>P.O Box 42713 – 00100</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+254206000449">+254 20 6000449</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@cygnite.co.ke">info@cygnite.co.ke</a></p>
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
    </section><!-- #contact -->

  </main>
   <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{asset("img/intro-c.jpg")}}" alt="Cygnite">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              We are at <br>
             Kenya<br>
              Here <br>
              <strong>Phone:</strong> +254 20 6000449<br>
              <strong>Email:</strong> info@cygnite.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cygnite Limited</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset("lib/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("lib/jquery/jquery-migrate.min.js")}}"></script>
  <script src="{{asset("lib/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("lib/easing/easing.min.js")}}"></script>
  <script src="{{asset("lib/superfish/hoverIntent.js")}}"></script>
  <script src="{{asset("lib/superfish/superfish.min.js")}}"></script>
  <script src="{{asset("lib/wow/wow.min.js")}}"></script>
  <script src="{{asset("lib/venobox/venobox.min.js")}}"></script>
  <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset("contactform/contactform.js")}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset("js/main.js")}}"></script>

  </body>

</html>