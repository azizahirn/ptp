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
  <link href="css/poetic.css" rel="stylesheet" />
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
                <li class="nav-item active">
                  <a class="nav-link" href="participants.php">Participants<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="poetry.php">Poetry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Log out</a>
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

  <!-- about section -->
<div class="footer_bg">
  <section class="about_section ">
    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="heading_container">
          <h2>
            Participants List
          </h2>
          <p>
          
        </p>

        <div class= "container">
          <a class="btn btn-primary" href="create.php" role="button"> New Participant</a>
          <br>
          <br>
        </div>

          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Sites</th>
                <th>Choosen site reason</th>
                <th>Action</th>
              </tr>
            </thead>

        <tbody>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "form";

          //create connection
          $connection = new mysqli($servername, $username, $password, $database);

          //check connection
          if($connection->connect_error){
            die("Connection failed: " . $connection->connect_error);
          }

          //read all row from database table
          $sql = "SELECT * FROM clients";
          $result = $connection->query($sql);

          

        //read data of each row
        while($row = $result->fetch_assoc()){
          echo "
          <tr>
            <td>$row[participant_id]</td>
            <td>$row[fullname]</td>
            <td>$row[profile]</td>
            <td>$row[email]</td>
            <td>$row[phonenumber]</td>
            <td>$row[site]</td>
            <td>$row[reason]</td>
            <td>
              <a class='btn btn-primary btn-sm' href='edit.php?participant_id=$row[participant_id]'>Edit</a> <br><br>
              <a class='btn btn-primary btn-sm' href='delete.php?participant_id=$row[participant_id]'>Delete</a></td>
          </tr>";
        }
        ?>
      </tbody>
      </table>

        </div>
        </div>
      </div>
  </section>

  <!-- end about section -->


  <div class="footer_bg">

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