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
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Make Request</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->

        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Make Request</h6>
            <div class="row">
              <div class="col-md-8">
                <?php if ($this->session->flashdata('success')) : ?>
                  <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')) : ?>
                  <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                <?php endif; ?>
               

                <form method="POST" action="<?= base_url('user/requests/make') ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Request Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id" required>
                      <option value="" selected disabled>Select Category</option>
                      <?php foreach ($categories as $cat) : ?>
                        <option value="<?= $cat->id ?>"><?= $cat->category ?></option>
                      <?php endforeach; ?>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Please select the category of request
                    </small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Request Description</label>
                    <textarea required class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Location</label>
                    <input required type="text" class="form-control" name="location" value="" id="exampleFormControlInput1" placeholder="Enter the location of job">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>

    </div>
    <!-- end::main-content -->

 <?php $this->load->view('user/fragment/userfooter'); ?>