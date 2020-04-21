<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url("assets/admin/assets/media/image/favicon.png")?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?=base_url("assets/admin/vendors/bundle.css")?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=base_url("assets/admin/assets/css/app.min.css")?>" type="text/css">
</head>
<body class="form-membership">


<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="<?=base_url("assets/admin/assets/media/image/logo.png")?>" alt="image">
        <img class="logo-dark" src="<?=base_url("assets/admin/assets/admin/assets/media/image/logo-dark.png")?>" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5>
<!-- form -->
<div class="container">
    <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
    <?php endif; ?>

    <?php if($this->session->flashdata('false')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('false')?></div>
    <?php endif; ?>

    <?php if($this->session->flashdata('invalid')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('invalid')?></div>
    <?php endif; ?>
    <!-- end of flash data -->
    
    <form action = "<?=base_url('admin/login')?>" method = "post">
        <div class="form-group">
            <input type="text" class="form-control" name ="email" placeholder="Username or email" required autofocus autocomplete="on">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="recover-password.html">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <hr>
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>

        <!-- registration part disabled because admin can only register another admin when he is logged in -->
        <!-- <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="<?=base_url("admin/register")?>" class="btn btn-outline-light btn-sm">Register now!</a>
    </form> -->
    <!-- ./ form -->

</div>
</div>
<!-- script function-->
<script>
        $(function() {
            setTimeout(() => {
                $('.alert-danger').fadeOut(2000);
            }, 3000);
        });
    </script>

<!-- Plugin scripts -->
<script src="<?=base_url("assets/admin/vendors/bundle.js")?>"></script>

<!-- App scripts -->
<script src="<?=base_url("assets/admin/assets/admin/assets/js/app.min.js")?>"></script>
</body>

<!-- Mirrored from protable.laborasyon.com/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 16:48:30 GMT -->
</html>