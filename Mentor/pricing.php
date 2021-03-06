<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Academics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="material/pec_seal.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .card-header {
      padding: 1px;
    }
  </style>
  
</head>

<body>
<?php
    $mysqli = new mysqli("localhost", "root", "", "covwarrior");
    
	$name = $sid = $subject = $branch = $teacher = $email = $doubt = " ";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Name = $mysqli->real_escape_string($_POST["name"]);
        $Email = $mysqli->real_escape_string($_POST["email"]);
        $Sid = $mysqli->real_escape_string($_POST["sid"]);
        $Doubt = $mysqli->real_escape_string($_POST["doubt"]);
        $Subject = $mysqli->real_escape_string($_POST["subject"]);
        $Branch = $mysqli->real_escape_string($_POST["branch"]);
        $Teacher = $mysqli->real_escape_string($_POST["teacher"]);


        
        $sql = "INSERT INTO doubts (Name, Email, Sid, Branch, Subject, Teacher, Doubt) " 
            . "VALUES ('$Name', '$Email', '$Sid', '$Branch', '$Subject', '$Teacher', '$Doubt')";
        
        $result = mysqli_query($mysqli,$sql);
        
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $subject = test_input($_POST["subject"]);
        $sid = test_input($_POST["sid"]);
        $doubt = test_input($_POST["doubt"]);
        $branch = test_input($_POST["branch"]);
        $teacher = test_input($_POST["teacher"]);

        
	}

	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}

	?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Pecovid</a></h1>
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="trainers.php">COVID-19</a></li>
          <li><a href="events.php">Events</a></li>
          <li class="active"><a href="pricing.php">Academics</a></li>
          <li><a href="counceller_form.php">Councelling</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main" data-aos="fade-in">

   
    <div class="breadcrumbs">
      <div class="container">
        <h2>Academics</h2>
        <p>Get Branch Wise study material like video lectures, books and some useful links. Also ask your doubts from your respective subject teachers</p>
      </div>
    </div><!-- End Breadcrumbs -->

    
    
    <!-- ======= Trainers Section ======= -->
    <div class="container" data-aos="fade-up">
      <div class="row mt-5">
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="course-item">
            <img src="material/studymaterial.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                <h4>Get Your Resources Here...</h4>
              </div>
              <p>Don't Let this Quarantine waste your Time. Get exclusive links to books, lectures and courses right now..</p>
            </div>
          </div>
        </div>
        <div class="accordion col-md-8" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Computer Science
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLDN4rrl48XKpZkf03iYFl-O29szjTrs_O">Algorithms Playlist</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/channel/UCjmiFw-45rJn15yh-jAnShw">Data Structures</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/results?search_query=all+about+electronics">Channel For Electronics</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLhSp9OSVmeyIeKw3AdI2e3R9Q2IKzPcy7">Vector Calculus</a> </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Electronics
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li>Lectures on Power Amplifiers</li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://youtu.be/huDZjQcEBMg">Power Amplifier L-1</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://youtu.be/Cii5yoayc8Y">Power Amplifier L-2</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://youtu.be/og8iKMPKtmo">Power Amplifier L-3</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://youtu.be/hpcJKOjMNbk">Power Amplifier L-4</a></li>
                      </ul>
                    </div>
                    <div class="col-6 footer-links">
                      <h4>Other links</h4>
                      <ul style="list-style-type: none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLhSp9OSVmeyIeKw3AdI2e3R9Q2IKzPcy7">Vector Calculus</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Electrical
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLyqSpQzTE6M_JcleDbrVyPnE0PixKs2JE">Probability and Statistics</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLhSp9OSVmeyKvw2DTpzlCdl226DJ-QjTx">Electrical Measurements</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLB0226234D8AEFB72">Networks and Systems</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/results?search_query=all+about+electronics">Channel For Electronics</a> </li>
                      
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfour">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                  Mechanical
                </button>
              </h2>
            </div>
        
            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLSGws_74K01-g9nnTMBssGURHawYYQfMQ">Manufacturing Fundamentals</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLIhUrsYr8yHwDUrVYmUNYkEeZgZTvoIfS">Engineering Drawing</a> </li>
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLhSp9OSVmeyJoNnAqghUK-Lit3qBgfa6o">Partial Differential Equations</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                  Aeropspace
                </button>
              </h2>
            </div>
        
            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingsix">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                  Civil
                </button>
              </h2>
            </div>
        
            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLyqSpQzTE6M_JcleDbrVyPnE0PixKs2JE">Probability and Statistics</a> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingseven">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
                  Production
                </button>
              </h2>
            </div>
        
            <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLyqSpQzTE6M_JcleDbrVyPnE0PixKs2JE">Probability and Statistics</a> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingeight">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
                  Metallurgical
                </button>
              </h2>
            </div>
        
            <div id="collapseeight" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul style="list-style-type:none;">
                        <li><i class="bx bx-chevron-right"></i><a href="https://www.youtube.com/playlist?list=PLyqSpQzTE6M_JcleDbrVyPnE0PixKs2JE">Probability and Statistics</a> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                        <li><i class="bx bx-chevron-right"></i> </li>
                      </ul>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5" style="background-color: floralwhite; padding: 15px;">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="php-email-form mt-2">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="number" name="sid" class="form-control" id="sid" placeholder="Student ID" data-msg="Please Enter your SID">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <select id="branch" name="branch" class="form-control">
                  <option value="Computer Science" >Computer Science</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Electrical">Electrical</option>
                  <option value="Mechanical">Mechanical</option>
                  <option value="Civil">Civil</option>
                  <option value="Aeropspace">Aeropspace</option>
                  <option value="Production">Production</option>
                  <option value="Metallurgical">Metallurgical</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="teacher" id="teacher" placeholder="Teacher Name" data-rule="minlen:4" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="doubt" id="doubt" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Ask your doubt here"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="error-message"></div>
            </div>
            <div class="text-center"><button type="submit" class="get-started-btn">Send Message</button></div>
          </form>
  
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="course-item">
            <img src="material/askdoubt.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                <h4>Ask your Doubts...</h4>
              </div>
              <p>Get your doubts cleared from your respective teacher. Fill out the form now...</p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PECOVID</h3>
            <p>
              Punjab Engineering College <br>
              Chandigharh, 160012<br>
              India <br><br>
              <strong>Phone:</strong>+91 9501421773<br>
              <strong>Email:</strong> aseemmanglap@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">COVID-19</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pricing.php">Academics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="counceller_form.php">Councelling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <a href="index.html">PECOVID</a>
        <p>© All Rights reserved by PEC ACM</p>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/pecacm" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/pecacm/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/pecacm" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>