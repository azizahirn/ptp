<?php 

$fullname
$profile
$email
$phonenumber
$site
$reason
$poetryverses
$ytlink

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Poetic Trails Perlis</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/new.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Poetic Trails of Perlis
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="service.html"> Registeration </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactLink">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="">
                <img src="images/call.png" alt="">
                <span>
                  Call : + 01 1234567890
                </span>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="heading_container">
          <h2>
            Poetry Video Submission Form
          </h2>
          <p>
          Join us for an exciting one-day adventure tour in Perlis! Limited to 100 participants only.
        </p>
        </div>
      </div>
      
      <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">

    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <form method="POST>

      <div class="formbold-input-flex">
        
          <!-- <input
            type="hidden"
            name="participant_id"
            id="participant_id"
            class="formbold-form-input"
          /> --> 
        

        <div>
          <label for="fullname" class="formbold-form-label">Full Name</label>
          <input
            type="text"
            name="fullname"
            id="fullname"
            value="<?php echo $fullname;?>"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="profile" class="formbold-form-label">Profile</label>
          <input
            type="text"
            name="profile"
            id="profile"
            value="<?php echo $profile;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            value="<?php echo $email;?>"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="phonenumber" class="formbold-form-label">Phone Number</label>
          <input
            type="text"
            name="phonenumber"
            id="phonenumber"
            value="<?php echo $phonenumber;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <div>
          <label for="gender" class="formbold-form-label">The chosen poetic site</label>
          <select name="site" id="site" value="<?php echo $site;?>" class="formbold-form-input"> 
            <option value="Awang Batil Perlis">Awang Batil Perlis</option>
            <option value="Bukit Ayer Forest Eco Park @ Taman Eko-Rimba Bukit Ayer">Bukit Ayer Forest Eco Park @ Taman Eko-Rimba Bukit Ayer</option>
            <option value="Awang Batil Perlis">Geosite Bukit Jernih Recreational Park @ Geotapak Taman Rekreasi Bukit Jernih</option>
            <option value="Awang Batil Perlis">Kota Kayang Museum @ Muzium Kota Kayang</option>
            <option value="Awang Batil Perlis">Kampung Tok Tina Aluih</option>
            <option value="Awang Batil Perlis">Gunung Medan Viewpoint</option>
            <option value="Awang Batil Perlis">Kampung Warna Warni</option>
            <option value="Awang Batil Perlis">Wang Kelian Viewpoint</option>
            <option value="Awang Batil Perlis">Perlis State Park @ Taman Negeri Perlis</option>
            <option value="Awang Batil Perlis">Timah Tasoh Lake @ Tasik Timah Tasoh</option>
           </select>
        </div>
      </div>

      <div class="formbold-mb-3">
        <div>
          <label for="reason" class="formbold-form-label">Provide the reasons why you choose the poetic site?</label>
          <input
            type="text"
            name="reason"
            id="reason"
            value="<?php echo $reason;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <div>
          <label for="race" class="formbold-form-label"> Poetry Verses </label>
          <input
            type="text"
            name="race"
            id="race"
            value="<?php echo $race;?>"
            class="formbold-form-input"
          />
        </div>
      <div class="formbold-mb-3">


      <div class="formbold-input-flex">
        <div>
          <label for="food" class="formbold-form-label">Video youtube link address</label>
          <input
            type="text"
            name="food"
            id="food"
            value="<?php echo $food;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <center><button class="btn-1">Submit</button></center>
    </form>
  </div>
</div>

    </section>


    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                Seotech
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor indidunt ut labore et
                dolore magna
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                <li class=" ">
                  <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="about.html"> About</a>
                </li>
                <li class="active">
                  <a class="" href="service.html"> Services </a>
                </li>
                <li class="">
                  <a class="" href="#contactLink">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +01 1234567890
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  demo@gmail.com
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h4>
                NEWSLETTER
              </h4>
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>