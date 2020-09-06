<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <title>Calibrant</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
        <a href="index.html"><h1 class="brand">Calibrant</h1></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Lastest news</a></li>
          <li><a href="#schedule">Study-material</a></li>
          <!-- <li><a href="#speakers">Speakers</a></li> -->
          <!-- <li><a href="#schedule">Schedule</a></li> -->
          <li><a href="#venue">Venue</a></li>
          <!-- <li><a href="#hotels">Hotels</a></li> -->
          <!-- <li><a href="#gallery">Gallery</a></li> -->
          <!-- <li><a href="#supporters">Sponsors</a></li> -->
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="login.php">LOG IN</a></li>
          <!-- <li class="buy-tickets"><a href="signup.html">SIGN UP</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <!-- <h3 class="mb-4 pb-0" style="color: white;">Welcome <?php echo $_SESSION['username']; ?> </h3> -->
      <h1 class="mb-4 pb-0">Select your year.</h1>
      <!-- <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p> -->
      <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a> -->
      <a href="#schedule" class="about-btn scrollto" >11th</a>
      <a href="#schedule" class="about-btn scrollto">12th</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Website</h2>
            <p>Calibrant provides an online platformfor study resources and educational information for all the students currently entering Junior college(11th and 12th) for HSC State Board</p>
          </div>
         <!--  <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, New York</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
          </div> -->
        </div>
      </div>
    </section>

    <!--==========================
      Latest News Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Latest news:</h2>
          <!-- <p>Here are some of our speakers</p> -->
        </div>

        <div class="card-deck" style="margin-top: 20px;">
  <div class="card" data-aos="slide-up">
    <!-- <img src="https://static.digit.in/default/thumb_135760_default_td_480x480.jpeg" class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Fingers Resonance wireless earphones review: It’s different</h5>
      <a href=" https://indianexpress.com/article/technology/tech-reviews/fingers-resonance-wireless-earphones-review-its-different-5826493/">Fingers Resonance wireless earphones review: At Rs 3,999, I have to say the Fingers Resonance is certainly expensive and it's not the best in this price category. There are much better devices you can buy if you are willing to spend a bit more, such as the OnePlus Bullets 2</a>
      <p class="card-text"><small class="text-muted">   date:</small></p>
    </div>
  </div>
  <div class="card" data-aos="slide-up">
   <!--  <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Researchers develop camera to capture polarised light, study atmospheric chemistry</h5>
      <a href=" https://indianexpress.com/article/technology/science/researchers-develop-camera-to-capture-polarised-light-study-atmospheric-chemistry-5821045/" class="card-text">Cameras that see polarised light are currently used to detect material stress, enhance contrast for object detection, and analyse surface quality for dents or scratches</a>
      <p class="card-text"><small class="text-muted"><br>date:</small></p>
    </div>
  </div>
  <div class="card" data-aos="slide-up">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">
       MIT’s AI system can see objects using touch</h5>
       <a href=" https://indianexpress.com/article/technology/science/mits-ai-system-can-see-objects-using-touch-5786241/t">To better bridge this sensory gap, researchers from Massachusetts Institute of Technology (MIT) in the US have come up with a predictive AI that can learn to see by touching and learn to feel by seeing.</a>
      <p class="card-text"><small class="text-muted"><br>date:</small></p>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card" data-aos="slide-up"> 
   <!--  <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Scientists confirm promise of silicon for quantum computing</h5>
      <a href=" https://indianexpress.com/article/technology/science/scientists-confirm-promise-of-silicon-for-quantum-computing-5734759/">For the first time, researchers have measured the accuracy of two-qubit logic operations in silicon, an advance that may help develop full-scale quantum processor..</a>
      <p class="card-text"><small class="text-muted"><br> date: </small></p>
    </div>
  </div>
  <div class="card" data-aos="slide-up">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Novel algorithm can help robots prevent colliding with humans</h5>
      <a href=" https://indianexpress.com/article/technology/science/novel-algorithm-can-help-robots-prevent-colliding-with-humans-5784443/">Researchers from the Massachusetts Institute of Technology (MIT) in the US created an algorithm. A scientist has developed an algorithm that helps the robot avoid collisions by accurately calculating what path a human is going to take..</a>
      <p class="card-text"><small class="text-muted">date:</small></p>
    </div>
  </div>
  <div class="card" data-aos="slide-up">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Virtual biopsy device can non-invasively detect skin tumours</h5>
    <a href=" https://indianexpress.com/article/technology/science/virtual-biopsy-device-can-non-invasively-detect-skin-tumours-5785949/">The first-of-its-kind experimental procedure, called vibrational optical coherence tomography (VOCT), creates a 3D map of the legion's width and depth under the skin with a tiny laser diode.</a>
      <p class="card-text"><small class="text-muted"><br>date:</small></p>
    </div>
  </div>
</div>

        
      </div>

    </section>

    <!--==========================
      Grades Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Study Material</h2>
          <!-- <p>Here is our event schedule</p> -->
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active about-btn1" href="#day-1" role="tab" data-toggle="tab">11th</a>
          </li>
          <li class="nav-item">
            <a class="nav-link about-btn2 about-btn1" href="#day-2" role="tab" data-toggle="tab">12th</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li> -->
        </ul>

        <!-- <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore </h3>
 -->
        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->

  
         <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">



			<div class="content" id="schedule11" data-spy="scroll" data-target="#navbar-example3" data-offset="0">
        <h1 class="grade-title"> 11th Grade</h1>
			  <h4 id="Syllabus" class="item-1 hover">Syllabus</h4>
			  <p><div class="syllabus">
			  	<ul><a href="newsyllabus11.pdf" target="_blank" id="Physics" ><h6 class="hoverass">Click here!</h6></a></ul>
			  	<!-- <ul><a href="#" id="Chemistry"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="#" id="Biology"><h6 class="hoverass">Biology</h6></a></ul>
			  	<ul><a href="#" id="Maths"><h6 class="hoverass">Maths</h6></a></ul>
			  	<ul><a href="#" id="CS"><h6 class="hoverass">CS</h6></a></ul> -->
			  </div>
			  </p>

			  <h4 class="hover" id="item-2">Reference Books</h4>
			  <p><div class="reference">
			  	<ul><a href="phy11.pdf" target="_blank" id="Physics1"><h6 class="hoverass"> Physics</h6></a></ul>
			  	<ul><a href="chem11.pdf" target="_blank" id="Chemistry1"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="bio11.pdf" target="_blank" id="Biology1"><h6 class="hoverass">Biology</h6></a></ul>
			  	<ul><a href="math(1)11.pdf" target="_blank" id="Maths1"><h6 class="hoverass">Maths and Stat 1</h6></a></ul>
          <ul><a href="math(2)11.pdf" target="_blank" id="Maths1"><h6 class="hoverass">Maths and Stat 2</h6></a></ul>
			  	<!-- <ul><a href="#" id="CS1"><h6 class="hoverass">CS</h6></a></ul> -->
			  </div>
			  </p>
			  

			 
			 <h4 class="hover" id="item-4">Past Papers</h4>
			  <p><div class="college">
			<!--   	<ul><a href="#" id="Physics1"><h6 class="hoverass">Physics</h6></a></ul>
			  	<ul><a href="#" id="Chemistry1"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="#" id="Biology1"><h6 class="hoverass"> Biology</h6></a></ul>
			  	<ul><a href="#" id="Maths1"><h6 class="hoverass"> Maths</h6></a></ul> -->
			  	<ul><a href="#" id="CS1"><h6 class="hoverass"> Coming Soon! </h6></a></ul>
			    </div>
			  </p>

			 <h4 class="hover" id="item-5">Admissions</h4>
			  <p><div class="college">
			  	<ul><a href="#" id=""><h6 class="hoverass">Cut offs</h6></a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Reviews</h6></a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Allotment List </h6></a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Procedures</h6></a></ul>
			  </div>
			  </p>

			</div>

          </div> 
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
           <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

           	  <div class="content" id="schedule12" data-spy="scroll" data-target="#navbar-example3" data-offset="0">
                <h1 class="grade-title"> 12th Grade</h1>
			  <h4 id="Syllabus" class="item-1 hover">Syllabus</h4>
			  <p><div class="syllabus">
			  	<ul><a href="newsyllabus12.pdf" target="_blank" id="Physics"><h6 class="hoverass">Click here!</h6></a></ul>
			  	<!-- <ul><a href="#" id="Chemistry"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="#" id="Biology"><h6 class="hoverass">Biology</h6></a></ul>
			  	<ul><a href="#" id="Maths"><h6 class="hoverass">Maths</h6></a></ul>
			  	<ul><a href="#" id="CS"><h6 class="hoverass">CS</h6></a></ul> -->
			  </div>
			  </p>

			  <h4 class="hover" id="item-2">Reference Books</h4>
			  <p><div class="reference">
<!-- 			  	<ul><a href="#" id="Physics1"><h6 class="hoverass"> Physics</h6></a></ul>
			  	<ul><a href="#" id="Chemistry1"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="#" id="Biology1"><h6 class="hoverass">Biology</h6></a></ul>
			  	<ul><a href="#" id="Maths1"><h6 class="hoverass">Maths</h6></a></ul> -->
			  	<ul><a href="#" id="CS1"><h6 class="hoverass">Coming Soon</h6></a></ul>
			  </div>
			  </p>
			  

			 
			 <h4 class="hover" id="item-4">Past Papers</h4>
			  <p><div class="college">
			  	<ul><a href="phy12.pdf" target="_blank" id="Physics1"><h6 class="hoverass"> Physics</h6></a></ul>
			  	<ul><a href="chem12.pdf" target="_blank" id="Chemistry1"><h6 class="hoverass">Chemistry</h6></a></ul>
			  	<ul><a href="bio12.pdf" target="_blank" id="Biology1"><h6 class="hoverass">Biology</h6></a></ul>
			  	<ul><a href="math12.pdf" target="_blank" id="Maths1"><h6 class="hoverass">Maths</h6></a></ul>
			  	<ul><a href="english12.pdf" target="_blank" id="CS1"><h6 class="hoverass">English</h6></a></ul>
			    </div>
			  </p>

			 <h4 class="hover" id="item-5">Admissions</h4>
			  <p><div class="college">
			  	<ul><a href="#" id=""><h6 class="hoverass">Cut offs</h6></a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Reviews</h6></a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Allotment List</h6> </a></ul>
			  	<ul><a href="#"><h6 class="hoverass">Procedures</h6></a></ul>
			  </div>
			  </p>

			</div>

            
          </div>
          <!-- End Schdule Day 2 -->

      

        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Venue</h2>
          <!-- <p>Event venue location info and gallery</p> -->
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/search/Calibrant+Classes+Pvt.+Ltd.+Unit+No.+3,+1st+Floor,+Alankar+CHS+Above+Trupti+Farsan,+NADCO+Shopping+Centre+Andheri+West,+Mumbai+-+400093/@19.1186996,72.8430657,17z/data=!3m1!4b1" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Mumbai</h3>
                <p>Calibrant Classes Pvt. Ltd.
                Unit No. 3, 1st Floor, Alankar CHS
                Above Trupti Farsan, NADCO Shopping Centre
                Andheri West, Mumbai - 400093</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div> -->
      </div>

    </section>

    <!--==========================
      Hotels Section
    ============================-->
<!--     <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section> -->

    <!--==========================
      Gallery Section
    ============================-->
    <!-- <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section> -->

    <!--==========================
      Sponsors Section
    ============================-->
<!--     <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section> -->

    <!--==========================
      F.A.Q Section
    ============================-->
    <!-- <section id="faq" class="wow fadeInUp">

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

    </section> -->

    <!--==========================
      Subscribe Section
    ============================-->
    <!-- <section id="subscribe">
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
 -->
    <!--==========================
      Buy Ticket Section
    ============================-->
	    <!-- <section id="buy-tickets" class="section-with-bg wow fadeInUp">
	      <div class="container">

	        <div class="section-header">
	          <h2>Buy Tickets</h2>
	          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
	        </div>

	        <div class="row">
	          <div class="col-lg-4">
	            <div class="card mb-5 mb-lg-0">
	              <div class="card-body">
	                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
	                <h6 class="card-price text-center">$150</h6>
	                <hr>
	                <ul class="fa-ul">
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
	                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
	                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
	                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
	                </ul>
	                <hr>
	                <div class="text-center">
	                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4">
	            <div class="card mb-5 mb-lg-0">
	              <div class="card-body">
	                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
	                <h6 class="card-price text-center">$250</h6>
	                <hr>
	                <ul class="fa-ul">
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
	                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
	                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
	                </ul>
	                <hr>
	                <div class="text-center">
	                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
	                </div>
	              </div>
	            </div>
	          </div>
	          
	          <div class="col-lg-4">
	            <div class="card">
	              <div class="card-body">
	                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
	                <h6 class="card-price text-center">$350</h6>
	                <hr>
	                <ul class="fa-ul">
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
	                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
	                </ul>
	                <hr>
	                <div class="text-center">
	                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
	                </div>

	              </div>
	            </div>
	          </div>
	        </div>

	      </div>

	      
	      <div id="buy-ticket-modal" class="modal fade">
	        <div class="modal-dialog" role="document">
	          <div class="modal-content">
	            <div class="modal-header">
	              <h4 class="modal-title">Buy Tickets</h4>
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>
	            <div class="modal-body">
	              <form method="POST" action="#">
	                <div class="form-group">
	                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
	                </div>
	                <div class="form-group">
	                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
	                </div>
	                <div class="form-group">
	                  <select id="ticket-type" name="ticket-type" class="form-control" >
	                    <option value="">-- Select Your Ticket Type --</option>
	                    <option value="standard-access">Standard Access</option>
	                    <option value="pro-access">Pro Access</option>
	                    <option value="premium-access">Premium Access</option>
	                  </select>
	                </div>
	                <div class="text-center">
	                  <button type="submit" class="btn">Buy Now</button>
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
	      </div>

	    </section>
 -->
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Please do because we'll be bankrupt otherwise plz plz.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Calibrant Classes Pvt. Ltd. Mumbai-93</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 9876543210</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <!-- <div class="form">
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
        </div> -->

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
            <h1 class="brand">Calibrant</h1>
            <p>Calibrant provides an online platformfor study resources and educational information for all the students currently entering Junior college(11th and 12th) for HSC State Board</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Education</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Past papers</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Study Materials</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Syllabus</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Weightage</a></li>
              <!-- <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>College</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Admission</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">College reviews</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Cut offs</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
               Calibrant Classes Pvt. Ltd.
               Unit No. 3, 1st Floor, Alankar CHS
               Above Trupti Farsan, NADCO Shopping Centre
               Andheri West, Mumbai - 400093
              <strong>Phone:</strong> +91 9876543210<br>
              <strong>Email:</strong> info@example.com<br>
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
        &copy; Copyright <strong>Calibrant</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="script.js"></script>
   

</body>

</html>
