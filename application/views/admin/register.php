<!doctype html>
<html lang="en">

<!-- Mirrored from protable.laborasyon.com/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 16:49:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Protable - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url("assets/admin/assets/media/image/favicon.png")?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?=base_url("assets/admin/vendors/bundle.css")?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=base_url("assets/admin/assets/css/app.min.css")?>" type="text/css">
</head>
<body class="form-membership">


<div class="container">

    
<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="<?=base_url("assets/admin/assets/media/image/logo.png")?>" alt="image">
        <img class="logo-dark" src="<?=base_url("aassets/admin/ssets/media/image/logo-dark.png")?>" alt="image">
    </div>
    <!-- ./ logo -->

    <!-- Flashdata beginss -->
    <?php if($this->session->flashdata('oops')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('oops')?></div>
    <?php endif; ?>

    <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
    <?php endif; ?>

    <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?=$this->session->flashdata('success')?></div>
    <?php endif; ?>
    
    <!-- End of flashdata -->


    <h5>Create account</h5>

    <!-- form -->
    
    <form action="<?=base_url('admin/register')?>" method ="post">
        <div class="form-group">
            <input type="text" name="firstname" class="form-control" placeholder="Firstname" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="<?=base_url("admin/login")?>" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
    <!-- ./ form -->

</div>
</div>

<!-- Plugin scripts -->
<script src="<?=base_url("assets/admin/vendors/bundle.js")?>"></script>

<!-- App scripts -->
<script src="<?=base_url("assets/admin/assets/js/app.min.js")?>"></script>
</body>

<!-- Mirrored from protable.laborasyon.com/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 16:49:40 GMT -->
</html>