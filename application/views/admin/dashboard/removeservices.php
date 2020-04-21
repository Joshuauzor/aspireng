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
          <li class="breadcrumb-item active" aria-current="page">Remove services</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->
    <div class="card">
          <div class="card-body">
            <h6 class="card-title">Remove service</h6>
            <div class="row">
              <div class="col-md-8">
              <form method="POST" action="<?= base_url('admin/admin_request/removeservices') ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id" required>
                      <option value="" selected disabled>Select Category to Delete</option>
                      <?php foreach ($remove as $cat) : ?>
                        <option value="<?= $cat->id ?>"><?= $cat->category ?></option>
                      <?php endforeach; ?>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Please select category to delete
                    </small>
                  </div>
              <button type="submit" class="btn btn-primary">Remove</button>
                </form>
              </div>
            </div>
          </div>

    </div>
    
    <!-- end::main-content -->

    <?php $this->load->view('admin/fragments/footer');?>