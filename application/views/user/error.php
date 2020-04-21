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
<body class="error-page bg-white">

<div>
    <h4 class="mb-0 text-muted font-weight-normal">Upps! Page not found!</h4>
    <div>
        <span class="error-page-item font-weight-bold">4</span>
        <span class="error-page-item font-weight-bold">0</span>
        <span class="error-page-item font-weight-bold">4</span>
    </div>
    <a href="<?=base_url('user/home')?>" class="btn btn-outline-light btn-lg">Go Home</a>
</div>

<!-- Plugin scripts -->
<script src="<?=base_url("assets/admin/vendors/bundle.js")?>"></script>

<!-- App scripts -->
<script src="<?=base_url("assets/admin/assets/js/app.min.js")?>"></script>
</body>

</html>