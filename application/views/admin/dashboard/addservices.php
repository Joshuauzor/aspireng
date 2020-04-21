<?php $this->load->view('admin/fragments/header');?>
<!-- begin::main-content -->
<div class="main-content">

  <div class="container">

    <!-- begin::page-header -->
    <div class="page-header">
      <h4>Aspire Solutions</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Manage services</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Add services</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->

        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Add services</h6>
            <div class="row">
              <div class="col-md-8">
                    <!-- Where to flashdata -->
                <form method="POST" action="<?= base_url('admin/admin_request/addservices') ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Job Category</label>
                    <input required type="text" class="form-control" name="category" value="" id="exampleFormControlInput1" placeholder="Enter job category">
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Please select the category of job
                    </small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Description</label>
                    <textarea required class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Image</label>
                    <input required type="text" class="form-control" name="image" value="" id="exampleFormControlInput1" placeholder="Enter the image name and property eg. aspire.jpg">
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>
            </div>
          </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('admin/fragments/footer');?>