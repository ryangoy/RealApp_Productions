<?php
require('../includes/config.inc.php');
//hello, world
?>

<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/mainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Real App Productions</title>
    <link rel="shortcut icon" href="http://www.realappproductions.com/images/RA_Logo.png">
    <meta name="description" content="Free Project Starting Medium">
	<meta name="keywords" content="Start your own, project, service, realapp, company">
	<meta name="author" content="Ryan Goy">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/myStyler.css" rel="stylesheet">
	<!-- InstanceEndEditable -->
    <link href='http://fonts.googleapis.com/css?family=Oswald|Roboto' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  
  </head>
  <body>
  
  	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                
                	
                    
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- InstanceBeginEditable name="homeButtonLocation" -->
                <a class="navbar-brand" href="http://www.realappproductions.com"><img src="images/homeButton2.png" height="45px" alt="Real App Productions"></a>
                <!-- InstanceEndEditable -->
                
            </div>
            <div class="collapse navbar-collapse">
            	<ul class="nav navbar-nav">
                	<!-- InstanceBeginEditable name="navbar" -->
                	<li>
                    	<a href="/projects">Projects</a>
                    </li>
                    <li>
                        <a href="/services">Services</a>
                    </li>
                    <li>
                        <a href="/media">Media</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/support">Support us</a>
                    </li> 
                    <li>
                        <a href="/login">Sign In</a>
                    </li>
                    <li>
                        <?php
                        echo session_status();
                        if(isset($_SESSION['user_id']))
                        {
                            echo '<a href="/login/register.php">Register</a>';
                        }
                        else{
                            echo '<a href="/login/logout.php">Logout</a>';
                        }

                        ?>
                    </li>


                    <!-- InstanceEndEditable -->
                </ul>
            </div>
    	</div>
    </div>
    
    <!-- InstanceBeginEditable name="body" -->
   

   	<div id="home-page">
    <br><br>
    	
    	<section class="jumbotron pBackground">
    		<div class="container centered">
            	
                
                <div class="side-block smallSizeBox">
                	<h1 class="mission-statement side-block" style="font-size:70px;">Engage in your community</h1>
                	<p >Start your own community company, individual service, and more for free.
                    </p>
                	<p class="centered">
                		<a class="btn btn-primary btn-lg" role="button" href="form_submission">Get Started.</a><br>
                       
                	</p>
                </div>
                
                <div class="side-block margin50" style="vertical-align:top">
    				<img  src="/images/RA_Logo.png" width="250px" alt="RealApp Logo">
                </div>
                
                
            
			</div>
		</section>
        
        
        
        <section id="intro" class="centered">
        	<div class="container midSizeBox inlineBox">
            	<div class="page-header">
            		<h3 class="myPageHeader">What do we do?</h3>
                    <p class="text">
                    Real App Productions is a free of charge medium for you to create or join a local company (e.g. T-shirt design and retail) or a service (e.g. giving surf lessons).
                    </p><br>
                    
                </div>
                <a href="https://twitter.com/RealAppProducts" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @RealAppProducts</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            </div>
            <div class="container midSizeBox inlineBox" style="text-align:left;">
            	<h3 style="font-style:italic;">How do I join a project or request a service?</h3>
                    <ol>
                    	<li>Determine which <a href="http://www.realappproductions.com/projects">project</a>/<a href="http://www.realappproductions.com/services">service</a> you would like to participate in or receive</li><br>
                        <li><a href="http://www.realappproductions.com/form_submission">join/request</a></li>
                    </ol>
               	<h3 style="font-style:italic;">How do I create a company or a service?</h3>
                    <ol>
                    	<li>Determine a need in your community</li><br>
                        <li>Figure out the logistics of your project (number of people needed, input cost, purpose, etc.)</li><br>
                        <li>Pitch your project to the Real App staff through a <a href="http://www.realappproductions.com/form_submission">form</a></li>
                    </ol>
                    
                    
            </div>
            
            
        </section>
        <hr>
        <section id="macaron">
        	<div class="container">
            	<div class="page-header">
            		<h1 class="myPageHeader">Real App Productions <br><small>putting the pro in productions since 2013.</small></h1>
                    <p class="text">
                    We love making a difference in our community. Don't you do too(at least for the sake of college apps)? Whether you want to start sewing and selling macaron stuffed animals or start your own tutor business, we're here to help. 
                    </p>
                    <img src="images/macaron.png" alt="Macaron Picture">
                </div>
            </div>
            
        </section>
        <hr>
        <section id="employees">
        	<div class="container">
            	
                <div class="employeesMessage">
                	<h3 class="myPageHeader">The RealApp team <br><small>Our staff is mostly hardworking but sometimes just simply awesome. </small></h3><br>*Bios to come               
                </div>
                <div class="sectionInnerHome">
                	<div class="employeeIcon">
                		<img class="img-circle" style="width:200px;" src="images/about/ryanPic.jpg" alt="Ryan Goy">
                    	<h2>Ryan</h2>
                        Co-Founder
                	</div>
                	<div class="employeeIcon">
                		<img class="img-circle" style="width:200px;" src="images/about/zackPic.jpg" alt="Zack Herbst">
                    	<h2>Zack</h2>
                        Co-Founder
                	</div>
                    <div class="employeeIcon">
                		<img class="img-circle" style="width:200px;" src="images/about/gregPic.jpg" alt="Greg Sumen">
                    	<h2>Greg</h2>
                        Chadwick Publicity Manager
                	</div>
                </div>
            </div>
        </section>
   	</div>
    
    
	<!-- InstanceEndEditable -->
    <footer>
    	<div class="sectionInnerHome">
        	<div class="footer-section">
            	<div class="footer-title">What is RealApp?</div>
               	<br><br>
                <p>Real App Productions is a web-based pseudo-company that specializes in connecting communities though online interactions. We do this through providing free connections to freelancers (and groups) with ideas they want to implement.</p>
            </div>
            <div class="footer-section">
            	<div class="footer-title">Contact Us!</div>
               	<p style="text-align:center;"> <br><br>
                <a href="http://www.realappproductions.com/form_submission">submission form </a><br><br>
     			email support@realappproductions.com <br><br><br><br>
                </p>
            </div>
            <div class="footer-section">
            	<div class="footer-title">More</div>
               	<p style="text-align:center;"><br><br>
                Job opportunities <br><br>
                Locate us <br><br>
                Blog <br><br>
                </p>
            </div>
        </div>
        <div style="text-align:center; color:#DCDCDC;">
        	Capywright © 2103 The Fellows of RealApp Productions
            <br>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://www.realappproductions.com/js/bootstrap.js"></script>

  </body>
<!-- InstanceEnd --></html>