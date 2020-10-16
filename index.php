<?php 
  $title = 'home';
  require_once 'includes/header.php';  
?>
	<div class="container-fluid" id="wrap">
	  <nav class="navbar navbar-default">
	    <div class="container">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <a class="navbar-brand" href="index.php">Voting</a></div>
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="defaultNavbar1">
<ul class="nav navbar-nav navbar-right">
          <li><a href="about.php">About</a></li>
	          <li><a href="register.php">Register</a></li>
	          <li><a href="login.php">Login</a></li>
	          <li><a href="profiles.php">Profiles</a></li>
	          <li><a href="statistics.php">Statistics</a></li>
	        </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	  <div id="carousel1" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><a href="http://localhost/evosys/register.html"><img src="images/register now.jpg" alt="First slide image" class="center-block imgfill"></a>          </div>
	      <div class="item"><a href="http://localhost/evosys/profile.php"><img src="images/ChoosingWisely-CMYK-taglineR.jpg" alt="Second slide image" class="center-block imgfill"></a>          </div>
        </div>
	    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	  <article id="art">
	    <h1>Welcome to EVoSys</h1>
	    <p>EVoSys is an online voting system, developed just for your convinience!</p>
	    <p>The system aims at simplicity of the voting process! </p>
	  </article>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/evosys/polls.html"><img src="images/election.jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Current &amp; Upcoming Elections</h3>
                <p>Check out this page to find out which are up and coming elections for you!</p>
  </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/evosys/statistics.php"><img src="images/results.jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Analyze through past statistics</h3>
                <p>Check out the statistics of past elections held so far!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/evosys/register.html"><img src="images/register.png" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Have you registered yet?</h3>
                <p>Proceed for the registeration page while the elections are still open!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/evosys/profile.php"><img src="images/Image-10 (1).jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Know your candidates</h3>
                <p>Choose your representative wisely. Find out here whether they are the right representative of your cause and society!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <footer>&copy; Copyright 2016</footer>
    </div>
<?php require_once 'includes/footer.php' ?>