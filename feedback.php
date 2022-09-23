<!DOCTYPE html>
<html lang="en">

<head>
  <title>Feedback</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
<style>
.w{
font-size:35px;
}

</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 d-none d-lg-block">
           <a href="contact.php" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>+91 7355568297</a> 
            <a href="mailto:kamlapurisurendra1419@gmail.com" class="small mr-3"><span class="icon-envelope-o mr-2"></span> itsurendra1419@gmail.com</a> 
          </div>
          <div class="col-lg-4 text-right">
            <!--<a href="register.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>-->
			<a href="feedback.php" class="small btn btn-primary px-4 py-2 rounded-0 active"><span class="icon-star"></span>Feedback</a>
            <a href="login.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-key"></span> Log In</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
				<li>
                   <a href="about.php" class="nav-link text-left">About Us</a>
                </li>
                <li>
                  <a href="admissions.php" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="courses.php" class="nav-link text-left">Courses</a>
                </li>
				<li>
                  <a href="gallery.php" class="nav-link text-left">Gallery</a>
                </li>
				
                <li>
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://www.facebook.com/surendra.kamlapuri.1/" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://twitter.com/?lang=en" target="_blank"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/smartboy__sk/" target="_blank"><span class="icon-instagram"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Feedback</h2>
              <p>Rate This Institute/Tell other what you think.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Feedback</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
		<form action="codes/feedbackcode.php" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
			
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">Message</label>
                         <textarea name="msg" class="form-control form-control-lg" rows="3" required></textarea>
                        </div>
						
						<input type="hidden" name="star" required id="txts"/>
                    <div style="padding-top: 6%;text-align: center;color: gray;padding-left:120px;">
                        <span class="icon-star w" data="1" id="img1"></span>
                        <span class="icon-star w" data="2" id="img2"></span>
                        <span class="icon-star w" data="3" id="img3"></span>
                        <span class="icon-star w" data="4" id="img4"></span>
                        <span class="icon-star w" data="5" id="img5"></span>
                    </div>
					<div class="col-md-12 form-group">
                            <input type="file" name="profile" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Submit Feedback" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
			</form>
            

          
        </div>
    </div>

    
<!--comman-->
   

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>The Institute focuses on inculcating the best in its student by providing an enviorment in which the students 
			discover and realize their potential with a view to empowering them to be responsible citizens and leders of the 
			nations and the global society of tomorrow.</p>  
        
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Quick Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Useful Links</span></h3>
              <ul class="list-unstyled">
                  <li><a href="admissions.php">Admission Enquery</a></li>
                  <li><a href="admissions.php">Admission Guidenence</a></li>
                  <li><a href="admissions.php">Fees Details</a></li>
                  <li><a href="admissions.php">Registration</a></li>
                  <li><a href="feedback.php">Give Feedback</a></li>
                  <li><a href="login.php">Login</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact Us</span></h3>
              <ul class="list-unstyled">
                  <li class="l1" ><span class="icon-map"></span>     Mahanagar Lucknow</li>
                <li class="l1" ><span class="icon-phone"></span>    +91 7355568297</li>
                <li class="l1" ><span class="icon-userid"></span>     itsurendra1419@gmail.com</li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Institute Management Developed & Designed By <a href="index,php" target="_blank" >Academics Team</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>
  <script>
$(document).ready(function(){
            $(".w").click(function(){
                var d=$(this).attr("data");
                $("#txts").val(d);
                for(var i=1;i<=5;i++)
                {
                    if(i<=d)
                    {
                        $("#img"+i).css("color","orange");

                    }
                    else
                    {
                        $("#img"+i).css("color","white");
                    }
                }
            })
        })

</script>

</body>

</html>