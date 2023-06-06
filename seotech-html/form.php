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

  <title>Poetic Trails of Perlis</title>

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
                  <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="form.php">Video Submission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
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

    <?php
// define variables and set to empty values
$fullname = $age = $gender = $religion = $race = $occupation = $email = $phonenumber = $address = $fitnesslevel = $dietary = $allergic = $food = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <div class="formbold-input-flex">
        
          <input
            type="hidden"
            name="participant_id"
            id="participant_id"
            class="formbold-form-input"
          />
        

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
            value="<?php echo $age;?>"
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
          <label for="occupation" class="formbold-form-label"> Occupation </label>
          <input
            type="text"
            name="occupation"
            id="occupation"
            value="<?php echo $occupation;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="gender" class="formbold-form-label"> Gender </label>
          <select name="gender" id="gender" value="<?php echo $gender;?>" class="formbold-form-input"> 
            <option value="male">Male</option>
            <option value="female">Female</option>
           </select>
        </div>

        <div>
          <label for="religion" class="formbold-form-label"> Religion </label>
          <input
            type="text"
            name="religion"
            id="religion"
            value="<?php echo $religion;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      

      <div class="formbold-input-flex">
        
        <div>
          <label for="phonenumber" class="formbold-form-label"> Phone Number </label>
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
        <label for="address" class="formbold-form-label"> Address </label>
        <input
          type="text"
          name="address"
          id="address"
          value="<?php echo $address;?>"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="fitnesslevel" class="formbold-form-label"> How would you describe your physical fitness level? </label>
          <select name="fitnesslevel" id="fitnesslevel" value="<?php echo $fitnesslevel;?>" class="formbold-form-input"> 
            <option value="excellent">Excellent</option>
            <option value="good">Good</option>
            <option value="moderate">Moderate</option>
            <option value="poor">Poor</option>
            <option value="very poor">Very Poor</option>
           </select>
        </div>
        <div>
          <label for="dietary" class="formbold-form-label"> Dietary Requirements </label>
          <input
            type="text"
            name="dietary"
            id="dietary"
            value="<?php echo $dietary;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="allergic" class="formbold-form-label"> Are you allergic to any food? </label>
          <select name="allergic" id="allergic" value="<?php echo $allergic;?>" class="formbold-form-input"> 
            <option value="yes">Yes</option>
            <option value="no">No</option>
           </select>
        </div>
        <div>
          <label for="food" class="formbold-form-label"> What food are you allergic, please specify </label>
          <input
            type="text"
            name="food"
            id="food"
            value="<?php echo $food;?>"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input
              type="checkbox"
              id="supportCheckbox"
              class="formbold-input-checkbox"
            />
            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg
                  width="11"
                  height="8"
                  viewBox="0 0 11 8"
                  fill="none"
                  class="formbold-stroke-current"
                >
                  <path
                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                    stroke-width="0.4"
                  ></path>
                </svg>
              </span>
            </div>
          </div>
          I agree to the defined
          <a href="#"> terms, conditions, and policies</a>
        </label>
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