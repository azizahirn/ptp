<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

//create connection
$connection = new mysqli($servername, $username, $password, $database);


$fullname = "";
$profile = "";
$email = "";
$phonenumber = "";
$site = "";
$reason = "";
$poetryverses = "";
$ytlink = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
  $fullname = $_POST["fullname"];
  $profile = $_POST["profile"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $site = $_POST["site"];
  $reason = $_POST["reason"];
  $poetryverses = $_POST["poetryverses"];
  $ytlink = $_POST["ytlink"];

  do{
    if( empty($fullname) || empty($profile) || empty($email) || empty($phonenumber) || empty($site) || empty($reason) || empty($poetryverses) || empty($ytlink)) {
      $errorMessage = "All fields are required";
      break;
    }

    //add new participant to database
    $sql = "INSERT INTO clients (fullname, profile, email, phonenumber, site, reason, poetryverses, ytlink)" .
      "VALUES ('$fullname', '$profile', '$email', '$phonenumber', '$site', '$reason', '$poetryverses', '$ytlink')";
    $result = $connection->query($sql);

    if(!$result){
      $errorMessage = "Invalid querey: " . $connection->error;
      break;
    }


    $fullname = "";
    $profile = "";
    $email = "";
    $phonenumber = "";
    $site = "";
    $reason = "";
    $poetryverses = "";
    $ytlink = "";

    $successMessage = "Successfully added new participant";

    header("location: /seotech-html/participants.php");
    exit;


  } while (false);
}

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
  <link href="css/poetic.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
                  <a class="nav-link" href="participants.php">Participants<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="poetry.php">Poetry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactLink">Log out</a>
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
  
  <?php
  if (!empty($errorMessage)){
    echo "
    <div class = 'alert alert-warning alert-dismissible fade show' role = 'alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btnn-close' data-bs-dismiss='alert' aria-label='close'>
    </div>";

  }
  ?>



  <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">


    <form method="POST">

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
            <option value="Geosite Bukit Jernih Recreational Park @ Geotapak Taman Rekreasi Bukit Jernih">Geosite Bukit Jernih Recreational Park @ Geotapak Taman Rekreasi Bukit Jernih</option>
            <option value="Kota Kayang Museum @ Muzium Kota Kayang">Kota Kayang Museum @ Muzium Kota Kayang</option>
            <option value="Kampung Tok Tina Aluih">Kampung Tok Tina Aluih</option>
            <option value="Gunung Medan Viewpoint">Gunung Medan Viewpoint</option>
            <option value="Kampung Warna Warni">Kampung Warna Warni</option>
            <option value="Wang Kelian Viewpoint">Wang Kelian Viewpoint</option>
            <option value="Perlis State Park @ Taman Negeri Perlis">Perlis State Park @ Taman Negeri Perlis</option>
            <option value="Timah Tasoh Lake @ Tasik Timah Tasoh">Timah Tasoh Lake @ Tasik Timah Tasoh</option>
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
          <label for="poetryverses" class="formbold-form-label"> Poetry Verses </label>
          <input
            type="text"
            name="poetryverses"
            id="poetryverses"
            value="<?php echo $poetryverses;?>"
            class="formbold-form-input"
          />
        </div>
      <div class="formbold-mb-3">


      <div class="formbold-input-flex">
        <div>
          <label for="ytlink" class="formbold-form-label">Video youtube link address</label>
          <input
            type="text"
            name="ytlink"
            id="ytlink"
            value="<?php echo $ytlink;?>"
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