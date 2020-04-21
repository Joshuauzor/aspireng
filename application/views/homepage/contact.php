
<!DOCTYPE html>
<html>
<head>
<title>Aspire Solutions Nig</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url("assets/css/fontawesome-all.min.css")?>" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url("assets/css/easy-responsive-tabs.css")?>" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="<?=base_url("assets/css/flexslider.css")?>" type="text/css" media="all">
<link href="<?=base_url("assets/css/style.css")?>" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
<header>
	<!-- header -->
	

	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img">
							<div class="slider_banner_info">
							
								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>

<section class="contact  py-lg-5 py-md-4 py-md-3 py-2" id="contact">
<!-- <h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Contact US</h3> -->
	<!-- contact -->
	<!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
					    allowfullscreen></iframe> -->
	<section class="wthree-row py-5 w3-contact" id="contact">
		<div class="container py-md-5">
			<h4 class="w3ls-title text-center text-uppercase pb-md-5 pb-4">contact Form</h3>
			<div class="row contact-form ">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" method="get" class="f-color">
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" id="contactusername" required>
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" id="contactemail" required>
							</div>
							<div class="form-group">
								<label for="contactcomment">Your Message</label>
								<textarea class="form-control" rows="5" id="contactcomment" required></textarea>
							</div>
							<button type="submit" class="btn btn-info btn-block">Submit</button>
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<!-- contact map grid -->
				<div class="col-lg-6  mt-lg-0 mt-5 map contact-right">
					
					<div class="address mt-3">
						<h5 class="pb-3 text-capitalize">Contact info</h5>
						<address>
							<p class="c-txt">105, Ikorodu road, Lagos, Nigeria.</p>
							<p>
								+2348112224189</p>
							<p>
								<p>
									<a href="mailto:info@example.com">Aspiresolutions@gmail.com</a>
								</p>
						</address>
					</div>
				</div>
				<!--//contact map grid ends here-->
			</div>
			<!-- //contact details container -->
		</div>
	</section>
	</section>
	<!-- //contact -->

<!-- Footer-->

<!-- /Footer-->
   <!-- bootstrap-pop-up for login and register -->
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          Aspire Solutions
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <section>
          <div class="modal-body">
            <div class="loginf_module">
              <div class="module form-module">
                <div class="toggle">
                  <i class="fa fa-times fa-pencil"></i>
                  <div class="tooltip">Register</div>
                </div>
                <div class="form">
                  <h3>Login to your account</h3>
                  <form action="<?= base_url("user/login") ?>" method="post">
                    <input type="text" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <input type="submit" value="Login">
                  </form>
                  <div class="cta">
                    <a href="#">Forgot password?</a>
                  </div>
                </div>
                <div class="form">
                  <h3>Create a new account</h3>
                  <form action="<?= base_url("user/register/user_register") ?>" method="post">
                    <input type="text" name="username" placeholder="Username" required="">
                    <input type="email" name="email" placeholder="Email address" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <input type="password" name="confirmpass" placeholder="Confirm Password" required="">
                    <!-- <input type="text" name="location" placeholder="Location" required="">
                    <select class="select2-example"> -->
                    <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="location" required>
                      <option value="" selected disabled>Select Location</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Abuja">Abuja</option>
                      <option value="Calabar">Calabar</option>
                      <option value="Onitsha">Onitsha</option>
                      <option value="Kano">Kano</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ibadan">Ibadan</option>
                      <option value="Benin">Benin</option>
                      <option value="Osun">Osun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Asaba">Asaba</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Please select location
                    </small>
                  </div>
                    <input type="text" name="phone" placeholder="Phone Number" required="">
                    <input type="submit" value="Register">
                  </form>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- //bootstrap-pop-up for login and register-->

<script  src="<?=base_url("assets/js/jquery.min.v3.js")?>"></script>
<script  src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
<script  src="<?=base_url("assets/js/move-top.js")?>"></script>
<script  src="<?=base_url("assets/js/easing.js")?>"></script>
<script  src="<?=base_url("assets/js/SmoothScroll.min.js")?>"></script>	

	
   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->


</body>
</html>