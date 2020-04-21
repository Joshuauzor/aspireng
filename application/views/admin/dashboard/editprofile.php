<?php $this->load->view('admin/fragments/header');?>

<form method="POST" action="<?= base_url('admin/home/editprofile') ?>">
<?php if($this->session->flashdata('error')): ?> 
    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?> </div>
<?php endif; ?>
<?php if($this->session->flashdata('update')): ?> 
    <div class="alert alert-success"><?= $this->session->flashdata('update') ?> </div>
<?php endif; ?>
<div class="row">
      <div class="col-md-12">
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1"
               aria-describedby="emailHelp" name="firstname" placeholder="Enter Firstname" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1"
               aria-describedby="emailHelp" name= "lastname" placeholder="Enter Lastname" required>
    </div>
    <!-- <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1"
               aria-describedby="emailHelp" name="phone" placeholder="Enter Phone number" required>
    </div> -->
    <div class="form-group">
        <!-- <label for="exampleInputEmail1">Email address</label> -->
        <input type="email" class="form-control" id="exampleInputEmail1"
               aria-describedby="emailHelp" name= "email" placeholder="Enter Email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with
            anyone else.
        </small>
    </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->load->view('admin/fragments/footer');?>