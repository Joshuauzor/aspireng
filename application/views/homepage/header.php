 
<?php if($this->session->flashdata('success')):?>
<div class="alert alert-success"> <?=$this->session->flashdata('error')?></div>
<?php endif; ?>

<?php if($this->session->flashdata('error')):?>
<div class="alert alert-danger"> <?=$this->session->flashdata('error')?></div>
<?php endif; ?>

<?php if($this->session->flashdata('whops')):?>
<div class="alert alert-danger"> <?=$this->session->flashdata('whops')?></div>
<?php endif; ?>

<div class="header-w3l">
	
<nav class="navbar navbar-expand-lg navbar-inverse">
  <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url("assets/images/solu1.png")?>"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <!--  <span class="navbar-toggler-icon"></span> -->
   <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?=base_url()?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url("homepage/about")?>">About</a>
      </li>
	  <li class="nav-item">
      <a class="nav-link" href="<?=base_url("homepage/services")?>">Services</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?=base_url("homepage/gallery")?>"> Gallery </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?=base_url("homepage/contact")?>">Contact</a>
      </li>

<li class="w3">
      <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
</li>

    </ul>
 
</nav>