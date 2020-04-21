<?php $this->load->view('admin/fragments/header');?>
<?php if($this->session->flashdata('error')): ?> 
    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?> </div>
<?php endif; ?>
<?php if($this->session->flashdata('update')): ?> 
    <div class="alert alert-success"><?= $this->session->flashdata('update') ?> </div>
<?php endif; ?>
<?php if($this->session->flashdata('opps')): ?> 
    <div class="alert alert-success"><?= $this->session->flashdata('opps') ?> </div>
<?php endif; ?>
<!-- begin::main-content -->
<main class="main-content">
<div class="container">

    <div class="row-md-6">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body text-center">
                    <figure class="avatar avatar-lg m-b-20">
                        <img src="<?=base_url('assets/admin/assets/media/image/user/avatar.jpg')?>" class="rounded-circle" alt="...">
                    </figure>
                    <h5 class="mb-1"><?= $this->session->aspireAdmin->firstname.' ' .$this->session->aspireAdmin->lastname ?></h5>
                    <p class="text-muted small">Administrator</p>
                    <p>Aspire Solutions is aimed at bringing solutions to your technical problem with a well divised and lasting solution</p>
                    <a href="<?=base_url('admin/home/editprofile')?>" class="btn btn-outline-primary">
                        <i data-feather="edit-2" class="mr-2"></i> Edit Profile
                    </a>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-4 text-info">
<h4 class="font-weight-bold"><?=count($requests)?></h4> 
                            <span>Request</span>
                        </div>
                        <div class="col-4 text-success">
                            <h4 class="font-weight-bold">10.596</h4>
                            <span>Followers</span>
                        </div>
                        <div class="col-4 text-warning">
                            <h4 class="font-weight-bold">7.896</h4>
                            <span>Likes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between align-items-center">
                        Information
                        <a href="<?=base_url('admin/home/editprofile')?>" class="btn btn-outline-light btn-sm">
                            <i data-feather="edit-2" class="mr-2"></i> Edit
                        </a>
                    </h6>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">First name:</div>
                        <div class="col-6"><?=$this->session->aspireAdmin->firstname?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Lastname:</div>
                        <div class="col-6"><?=$this->session->aspireAdmin->lastname?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Email:</div>
                        <div class="col-6"><?=$this->session->aspireAdmin->email?></div>
                    </div>
                    <!-- <div class="row mb-2">
                        <div class="col-6 text-muted">Email:</div>
                        <div class="col-6">#</div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/fragments/footer');?>