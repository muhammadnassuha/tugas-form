<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?php include "layouts/header.php" ?>
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER --><!-- 
    <div id="preloader">
        <div class="loader">
            <img src="assets/images/loader.gif" alt="#" />
        </div>
    </div> -->
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start Navbar -->
    <header class="top-header">
        <?php include "layouts/navbar.php" ?>
    </header>
    <!-- End Navbar -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <?php include "layouts/banner.php"; ?>
    </div>
    <!-- End Banner -->

    <?php 

    if(isset($_GET['page']))
    {
        if($_GET['page']=="ConfirmFundaiser" && isset($_GET['id']))
        {
            include "pages/belajar/confirm_fundaiser.php";

        }elseif($_GET['page']=="Contact")
        {
            include "pages/belajar/contact.php";

        }elseif($_GET['page']== "About") 
        {
            include "pages/belajar/about.php";
        }
    }else{
        include 'home.php';
    }

    ?>
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="assets/images/footer_logo.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul> 
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Maintenance</a></li>
							  <li><a href="#">> Language Packs</a></li>
							  <li><a href="#">> LearnPress</a></li>
							  <li><a href="#">> Release Status</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Newsletter</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li><img src="assets/images/i5.png"><span>London 145<br>United Kingdom</span></li>
							   <li><img src="assets/images/i6.png"><span>demo@gmail.com</span></li>
							   <li><img src="assets/images/i7.png"><span>+12586954775</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp"></p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <?php include "layouts/footer.php"; ?>

</body>

</html>