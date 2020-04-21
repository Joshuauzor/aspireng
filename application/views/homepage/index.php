<!DOCTYPE html>
<html>

<head>
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css" media="all">
  <link href="<?= base_url("assets/css/fontawesome-all.min.css") ?>" rel="stylesheet" type="text/css" media="all">
  <link href="<?= base_url("assets/css/easy-responsive-tabs.css") ?>" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="<?= base_url("assets/css/flexslider.css") ?>" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/style_common.css") ?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/style1.css") ?>" />
  <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>

<body>

  <header>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-inverse" id="inverse-header">
      <a id="navbar-brand" class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url("assets/images/solu1.png") ?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("homepage/about") ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("homepage/services") ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("homepage/gallery") ?>"> Gallery </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url("homepage/contact") ?>">Contact</a>
          </li>
          <li class="w3">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
          </li>


        </ul>

    </nav>



    <!-- //header -->
    <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success"> <?= $this->session->flashdata('success') ?></div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
      <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('whops')) : ?>
      <div class="alert alert-danger"> <?= $this->session->flashdata('whops') ?></div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('wrong')) : ?>
      <div class="alert alert-danger"> <?= $this->session->flashdata('wrong') ?></div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('false')) : ?>
      <div class="alert alert-danger"> <?= $this->session->flashdata('false') ?></div>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success"> <?= $this->session->flashdata('success') ?></div>
    <?php endif; ?>
    
    <?php if($this->session->flashdata('removed')): ?>
      <div class='alert alert-info'> <?= $this->session->flashdata('removed') ?> </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('error')): ?>
      <div class='alert alert-info'> <?= $this->session->flashdata('error') ?> </div>
    <?php endif; ?>
    <!-- banner -->
    <!-- banner-slider -->
    <div class="w3l_banner_info">
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider3">
            <li>
              <div class="slider-img">
                <div class="slider_banner_info">
                  <div class="text">
                    <h3 class="word wisteria ">Fix your equipments</h3>
                    <p>Fastest way to fix home, laundry and kitchen equipment</p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="slider-img-2">
                <div class="slider_banner_info">
                  <div class="text">
                    <h3 class="word wisteria">Maintain your equipments</h3>
                    <p>Best in maintenance of home and kitchen equipment</p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="slider-img-3">
                <div class="slider_banner_info">
                  <div class="text">
                    <h3 class="word wisteria">Welcome to Aspire Solutions Limited</h3>
                    <p>Best in quality and reliable repairs</p>
                  </div>

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
  <section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">
    <div class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">
      <div class="container">
        <div class="row">

          <?php foreach ($services as $service) : ?>
            <div class="col-md-4 col-sm-12 w3_ban1">
              <div class="card card1">
                <img style="max-width: 400px" height="200px" class="card-img-top" src="<?= base_url("assets/images/" . $service->image) ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $service->category ?></h5>
                  <p class="card-text"><?= $service->description ?></p>
                  <a href="# 
    
    " class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top:40px">Request</a>

                  <div style="padding-bottom:20px"></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- <div class="col-md-4 col-sm-12 w3_ban1">
            <div class="card">
              <img class="card-img-top" src="<?= base_url("assets/images/kitchen.jpg") ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kitchen Appliances</h5>
                <p class="card-text">Fix your Oven, Dish washer, Cooker and other kitchen equipments with the technicians you can trust</p>
                <a href="#myModal" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 w3_ban1">
            <div class="card">
              <img class="card-img-top" src="<?= base_url("assets/images/bb3.jpg") ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Electrician</h5>
                <p class="card-text"> Get the best electrician to fix your electrical appliances</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 w3_ban">
            <div class="card">
              <img class="card-img-top" src="<?= base_url("assets/images/bb4.jpg") ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Welder</h5>
                <p class="card-text">Request for an experience and reliable welder to fix your equipments</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 w3_ban text-center">
            <div class="card align-center">
              <img class="card-img-top" src="<?= base_url("assets/images/bb2.jpg") ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Plumber</h5>
                <p class="card-text">Request for the best plumber to fix your equipments</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 w3_ban1">
            <div class="card">
              <img style="max-height: 220px" ; class="card-img-top" src="<?= base_url("assets/images/borehole.jpg") ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Borehole Driller</h5>
                <p class="card-text">Get the best out of water with our experts in borehole construction</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</a>
              </div>
            </div> -->


        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- <section class="pricinglist ">
<div class="pricinglist ">
<h3 class="mb-lg-5 mb-md-4 mb-sm-3 mb-2">Our Prices OverView</h3>
<div class="container">
<div class="w3_1">
<div class="row">
<div class="col-sm-6 w3_a1">
<h4>Painter</h4> -->
  <!-- <p>Lorem Ipsum</p> -->
  <!-- </div>
<div class="col-sm-6 w3_a2">
<h4>$9.00</h4>
</div>
</div>
</div>
<div class="w3_1">
<div class="row">
<div class="col-sm-6 col-xs-6 w3_a1">
<h4>Plumbering</h4> -->
  <!-- <p>Lorem Ipsum</p> -->
  <!-- </div>
<div class="col-sm-6 col-xs-6 w3_a2">
<h4>$90.00</h4>
</div>
</div>
</div>
<div class="w3_1">
<div class="row">
<div class="col-sm-6 w3_a1">
<h4>Electrician</h4> -->
  <!-- <p>Lorem Ipsum</p> -->
  <!-- </div>
<div class="col-sm-6 w3_a2">
<h4>$120.00</h4>
</div>
</div>
</div>
<div class="w3_1">
<div class="row">
<div class="col-sm-6 w3_a1">
<h4>Weldering</h4> -->
  <!-- <p>Lorem</p> -->
  <!-- </div>
<div class="col-sm-6 w3_a2">
<h4>$80.00</h4>
</div>
</div>
</div>
<div class="w3_1">
<div class="row">
<div class=" col-sm-6 w3_a1">
<h4>Laundry</h4> -->
  <!-- <p>Lorem Ipsum</p> -->
  <!-- </div>
<div class="col-sm-6 w3_a2">
<h4>$99.00</h4>
</div>
</div>
</div>
</div>
</div>
</section> -->

  <section class="mission py-lg-5 py-md-4 py-md-3 py-2">
    <div class="mission py-lg-5 py-md-4 py-md-3 py-2">
      <div class="row">
        <div class="col-md-3 col-sm-12 w3_ms8">
          <img src="<?= base_url("assets/images/bb9.jpg") ?>" alt="xt" class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-12 w3_ms1">
          <h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Our Mission</h4>
          <p>"Our mission is to bring people together and see how we can solve real problems for our clients"</p>
        </div>
        <div class="col-md-6 col-sm-12 w3_ms3">
          <!-- Slideshow container -->
          <div class="slideshow-container">

            <!-- Full-width slides/quotes -->
            <div class="mySlides">
              <img src="<?= base_url("assets/images/test1.jpg") ?>" alt="xyt" class="img-fluid">
              <h4>Aspire solutions is the home of good technicians</h4>

            </div>

            <div class="mySlides">
              <img src="<?= base_url("assets/images/test2.jpg") ?>" alt="xyt" class="img-fluid">
              <h4>Give your product a quality maintenance"</h4>

            </div>

            <div class="mySlides">
              <img src="<?= base_url("assets/images/test3.jpg") ?>" alt="xyt" class="img-fluid">
              <h4>Aspire solution home of quality products</h4>

            </div>

            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>

        </div>
        <div class="col-md-3 col-sm-12 w3_ms7">
          <h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Our Creative</h4>
          <p>Aspire Solutions is the best in your home, kitchen and laundry equipments. We have exprienced technicians with problem solving abiity</p>
        </div>
        <div class="col-md-3 col-sm-12 w3_ms">
          <div class="row inner_stat_wthree_agileits">

            <div class="col-md-6 stats_left counter_grid2">
              <i class="far fa-edit"></i>
              <p class="counter">563</p>
              <h4>Projects</h4>
            </div>
            <div class="col-md-6 stats_left counter_grid3">
              <i class="far fa-smile"></i>
              <p class="counter">1045</p>
              <h4>Happy Clients</h4>
            </div>

          </div>
        </div>


        <div class="col-md-3 col-sm-12 w3_ms6">
        </div>
        <div class="col-md-3 col-sm-12 w3_ms4">
          <h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Our Vision</h4>
          <p>Aspire Solutions is aimed at bringing solutions to your technical problem with a well divised and lasting solution</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section class="skills py-lg-5 py-md-4 py-md-3 py-2">
    <div class="stats wthree-sub py-lg-5 py-md-4 py-md-3 py-2" id="skills">
      <div class="container">
        <h3 class="w3l-title mb-lg-4 mb-md-3 mb-sm-2 mb-2">Our Skills</h3>
        <div class="row">
          <div class="col-sm-6 stats_grid_right">
            <div class="skillbar" data-percent="78">
              <span class="skillbar-title" style="background: #f1703a;">COLD ROOM</span>
              <p class="skillbar-bar" style="background: #f88c5e;"></p>
              <span class="skill-bar-percent"></span>
            </div>
            <!-- End Skill Bar -->

            <div class="skillbar" data-percent="94">
              <span class="skillbar-title" style="background: #2980b9;">KITCHEN EQUIPMENTS</span>
              <p class="skillbar-bar" style="background: #3498db;"></p>
              <span class="skill-bar-percent"></span>
            </div>
            <!-- End Skill Bar -->

            <div class="skillbar" data-percent="76">
              <span class="skillbar-title" style="background: #a0d034;">ELECTRICIAN</span>
              <p class="skillbar-bar" style="background: #b2ec2f;"></p>
              <span class="skill-bar-percent"></span>
            </div>
            <!-- End Skill Bar -->
          </div>
          <div class="col-sm-6 stats_grid_right">
            <div class="skillbar" data-percent="78">
              <span class="skillbar-title" style="background: #f1703a;">WELDERING</span>
              <p class="skillbar-bar" style="background: #f88c5e;"></p>
              <span class="skill-bar-percent"></span>
            </div>
            <!-- End Skill Bar -->

            <div class="skillbar" data-percent="92">
              <span class="skillbar-title" style="background: #2980b9;">LAUNDRY EQUIPMENTS</span>
              <p class="skillbar-bar" style="background: #3498db;"></p>
              <span class="skill-bar-percent"></span>
            </div>
            <!-- End Skill Bar -->

            <div class="skillbar" data-percent="84">
  			  <span class="skillbar-title" style="background: #a0d034;">Maintenance</span>
  			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
  			  <span class="skill-bar-percent"></span>
  			</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Skills -->

  <!-- Contact -->
  <section class="contact py-lg-5 py-md-4 py-md-3 py-2">
    <div class="container py-lg-5 py-md-4 py-md-3 py-2">
      <div class="w3_mg">
        <h3>Aspire Solutions</h3>
        <p class=" my-lg-4 my-md-3 my-sm-2 my-2">Aspire Solutions is the best in your home, kitchen and laundry equipments. We have exprienced technicians with problem solving abiity</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#"><a href="<?= base_url("homepage/about") ?>"> Read More!!!</a>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aspire Solutions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="contact" id="contact">
                  <div class="container">
                    <h3 class="title clr">CONTACT FORM</h3>
                    <div class=" contact-form">
                      <form action="#" method="post">
                        <div class="row contact-bothside-agileinfo">
                          <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                            <input type="text" name="name" placeholder="Name" required="">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                            <input type="text" name="lastname" placeholder="Last name" required="">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                            <input type="email" name="email" placeholder="Email" required="">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                            <input type="text" name="phone" placeholder="Phone" required="">
                          </div>
                          <textarea name="message" placeholder="Message" required=""></textarea>
                          <input type="submit" value="SUBMIT">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Conatct -->
  <!-- Footer-->
  <section class="footer">
    <div class="container">
      <h3>Aspire Solutions</h3>
      <div class="wrapper">
        <ul class="social-icons icon-circle icon-zoom list-unstyled list-inline">
          <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
          <li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
      <div class="copyright">
        <p>Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> Aspire Solutions. All Rights Reserved | Powered by <a href="https://zealtech.com.ng">Zeal Technologies</a></p>

      </div>
    </div>
  </section>
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

  <script src="<?= base_url("assets/js/jquery.min.v3.js") ?>"></script>
  <script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/move-top.js") ?>"></script>
  <script src="<?= base_url("assets/js/easing.js") ?>"></script>
  <script src="<?= base_url("assets/js/SmoothScroll.min.js") ?>"></script>

  <!-- banner Slider -->
  <script src="<?= base_url("assets/js/responsiveslides.min.js") ?>"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function() {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!-- //banner Slider -->


  <script src="<?= base_url("assets/js/easy-responsive-tabs.js") ?>"></script>
  <script>
    $(document).ready(function() {
      $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function(event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
      $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
      });
    });
  </script>
  <!--//tabs-->
  <!--team-->
  <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script type="<?= base_url("assets/text/javascript") ?>" src="<?= base_url("assets/js/jquery.flexisel.js") ?>"></script>

  <!--team-->
  <script src="<?= base_url("assets/js/jquery.magnific-popup.js") ?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

    });
  </script>
  <script type="text/javascript">
    var words = document.getElementsByClassName('word');
    var wordArray = [];
    var currentWord = 0;

    words[currentWord].style.opacity = 1;
    for (var i = 0; i < words.length; i++) {
      splitLetters(words[i]);
    }

    function changeWord() {
      var cw = wordArray[currentWord];
      var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
      for (var i = 0; i < cw.length; i++) {
        animateLetterOut(cw, i);
      }

      for (var i = 0; i < nw.length; i++) {
        nw[i].className = 'letter behind';
        nw[0].parentElement.style.opacity = 1;
        animateLetterIn(nw, i);
      }

      currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
    }

    function animateLetterOut(cw, i) {
      setTimeout(function() {
        cw[i].className = 'letter out';
      }, i * 80);
    }

    function animateLetterIn(nw, i) {
      setTimeout(function() {
        nw[i].className = 'letter in';
      }, 340 + (i * 80));
    }

    function splitLetters(word) {
      var content = word.innerHTML;
      word.innerHTML = '';
      var letters = [];
      for (var i = 0; i < content.length; i++) {
        var letter = document.createElement('span');
        letter.className = 'letter';
        letter.innerHTML = content.charAt(i);
        word.appendChild(letter);
        letters.push(letter);
      }

      wordArray.push(letters);
    }

    changeWord();
    setInterval(changeWord, 4000);
  </script>

  <!-- stats -->
  <script src="<?= base_url("assets/js/jquery.waypoints.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/jquery.countup.js") ?>"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats -->
  <!-- skills -->
  <script src="<?= base_url("assets/js/skill.bars.jquery.js") ?>"></script>
  <script>
    $(document).ready(function() {

      $('.skillbar').skillBars({
        from: 0,
        speed: 4000,
        interval: 100,
        decimals: 0,
      });

    });
  </script>
  <!-- //skills -->
  <!-- sign in and signup pop up toggle script -->
  <script>
    $('.toggle').click(function() {
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
  <script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
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

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!-- //here ends scrolling icon -->
  <!-- scrolling script -->
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('[data-toggle="popover"]').popover()
    })
  </script>
  <!-- //scrolling script -->
  <!--//start-smoth-scrolling -->


</body>

</html>