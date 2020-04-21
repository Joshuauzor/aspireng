<?php $this->load->view('user/fragment/userheader'); ?>



<!-- begin::main-content -->
<div class="main-content">

  <div class="container">

    <!-- begin::page-header -->
    <div class="page-header">
      <h4>Aspire Solutions</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">User</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Authentication</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Delete Account</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->
    <?php if($this->session->flashdata('wrong')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('wrong') ?> </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('invalid')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('invalid') ?> </div>
    <?php endif; ?>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Delete Account</h6>
            <div class="row">
              <div class="col-md-8">
                <form method="POST" action="<?= base_url('user/home/deleteaccount') ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Email</label>
                    <input required type="text" class="form-control" name="email" value="" id="exampleFormControlInput1" placeholder="Enter Email">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Enter Password</label>
                    <input required type="password" class="form-control" name="password" value="" id="exampleFormControlInput1">
                  </div>
                  <small id="emailHelp" class="form-text text-muted">Remember if you delete account we will lose track of all your information and request
                    </small>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>

    </div>
    <!-- end::main-content -->

 <?php $this->load->view('user/fragment/userfooter'); ?>