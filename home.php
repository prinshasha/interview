<?php
  session_start();
  if(!isset($_SESSION['lid']))
  {
    echo '<script>
    alert("Please Login");
    window.location.href="index.php";
    </script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="home">
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#profile">Profile</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">

      <div class="row" id="profile">
        <div class="col-sm-3">
          <img src="images/photo.jpg" class="img-responsive center-block">
        </div>
        <div class="col-sm-9">
          <h2 class="head" style="text-align: left;">I am Prinsha</h2><br />

          <p>A bright, talented ambitious and self-motivated web developer with a strong technical background who possesses self-discipline and the ability to work with the minimum of supervision. Able to play a key role throughout a site development to ensure maximum accessibility, customer experience and usability. A good team player, who thrives on creating engaging creative solutions, is deadline oriented and has the ability to produce detailed technical specifications form client requirements.</p>
          <p>A quick learner who can absorb new ideas and can communicate clearly and effectively. Currently looking for an opportunity to join a dynamic, ambitious growing company and forge a career in a first class website designer.</p>

          <h4 class="subhead">Objective</h4>
          <p>To take up a challenging career that provides room to actualize my potential and also add value to my already excellent background and knowledge in Web Developing.</p>

          <h4 class="subhead">Professional Experience</h4>
          Web Developer<br />
          Sparkpro Creatives Pvt. Ltd.<br />
          (Oct 2015 to Nov 2016)<br />
          Bangalore<br />

        </div>
      </div>

      <hr class="hrline" />
      <div class="row" id="skills">
        <div class="col-sm-10 col-sm-offset-1">
          <h2 class="link">Skills</h2><br />

          <div class="col-sm-2">
            HTML
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="90"
              aria-valuemin="0" aria-valuemax="100" style="width:90%">
                90%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            CSS
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="90"
              aria-valuemin="0" aria-valuemax="100" style="width:90%">
                90%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            PHP
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="80"
              aria-valuemin="0" aria-valuemax="100" style="width:80%">
                80%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            MySQL
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:70%">
                70%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            Bootstrap
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="90"
              aria-valuemin="0" aria-valuemax="100" style="width:90%">
                90%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            JavaScript
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="65"
              aria-valuemin="0" aria-valuemax="100" style="width:65%">
                665%
              </div>
            </div>
          </div>

          <div class="col-sm-2">
            CodeIgniter
          </div>
          <div class="col-sm-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100" style="width:50%">
                50%
              </div>
            </div>
          </div>

        </div>  
      </div>

      <hr class="hrline" />
      <div class="row" id="portfolio">
        <h2 class="link">Portfolio</h2><br />

        <div class="col-sm-4">
          <a href="http://www.portea.com/lp/ibm/2016" target="_blank"><img src="images/work1.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.marketingvidya.co" target="_blank"><img src="images/work2.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.sparkprocreatives.com/portea_pharmacy_lp" target="_blank"><img src="images/work3.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.graceopticals.com" target="_blank"><img src="images/work4.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.rkmissionkozhikode.org" target="_blank"><img src="images/work5.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.vivekananda-ds.org" target="_blank"><img src="images/work6.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.amruthambioindia.com" target="_blank"><img src="images/work7.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.zgreeninteriors.com" target="_blank"><img src="images/work8.png" class="img-responsive"></a><br />
        </div>
        <div class="col-sm-4">
          <a href="http://www.smude.edu.in/smude/others/existing-students/online-exam-booking.html" target="_blank"><img src="images/work9.png" class="img-responsive"></a><br />
        </div>

      </div>

      <div class="row contact" id="contact">
        <h2>Contact</h2>
        <div class="col-sm-10 col-sm-offset-1">
          Mob : 7411279003, 9605036515 &nbsp;&nbsp;&nbsp;&nbsp; Email : prinsha.s1994@gmail.com <br /><br />
        </div>

      </div>


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>