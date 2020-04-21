<?php $this->load->view('admin/fragments/header'); ?>

                <?php if ($this->session->flashdata('added')) : ?>
                  <div class="alert alert-success"><?= $this->session->flashdata('added') ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('removed')) : ?>
                  <div class="alert alert-danger"><?= $this->session->flashdata('removed') ?></div>
                <?php endif; ?>
<!-- begin::main-content -->

<div class="card card-body">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative mr-3 text-center">
                                        <div id="circle-1" class="circle"></div>
                                        <div class="position-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                            <h4 class="mb-0">65%</h4>
                                            <span class="font-size-11 text-uppercase text-muted">accurate</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Time taken to respond to last request</p>
                                        <p class="text-muted mb-1">
                                            <small>Time taken to respond to last request.</small>
                                        </p>
                                        <h3 class="mb-0">7m:32s
                                            <small>/ average: 10m:0s</small>
                                        </h3>
                                    </div>
								</div>
</div>
<div class="row">
	
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Request Rate</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-percent"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">0.19%</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 1.2%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart1"></canvas>
                                </div>
                            </div>
						</div>
						
                        <div class="col-md-4">
                        <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total User</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-1">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary"><?= count($totalusers);?></div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-primary m-r-5"></i> 23% increase in Last week
                                        </p>
                                    </div>
                                </div>
							</div>
						</div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Total Request</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?=count($totalrequest)?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 2.1%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- end:: main-content -->
<?php $this->load->view('admin/fragments/footer'); ?>
