<?php $this->load->view('admin/fragments/header');?>

<!-- begin::page-header -->
<div class="page-header">
      <h4>Aspire Solutions</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Request</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">New request</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-striped table-bordered myTable">
              <?php if ($this->session->flashdata('declined')): ?>
                <div class="alert alert-danger"><?=$this->session->flashdata("declined")?></div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('approved')): ?>
                <div class="alert alert-success"><?=$this->session->flashdata("approved")?></div>
              <?php endif; ?>
            <thead>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Username</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0;
                foreach ($newrequest as $request) :  ?>
                  <?php if ($request->status == 'pending') : $i++; ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $request->category ?></td>
                      <td><?= $request->request ?></td>
                      <td><?= $request->username ?></td>
                      <td><?= $request->phone ?></td>
                      <td><?= $request->status ?></td>
                      <td><?= $request->request_date ?></td>
                      <td><?= $request->location ?></td>
                      <td>
                        <a class="btn btn-success" href="<?= base_url('admin/admin_request/approvedrequest/'.$request->no) ?>">Approve</a><br><br>
                        <a class="btn btn-danger" href="<?= base_url('admin/admin_request/declinedrequest/'.$request->no) ?>">Decline</a>
                      <!-- the id is gotten from the admin_request controller in the newrequest function -->
                      </td>
                    </tr>
                    <!-- remember the id is from the new -->
                  <?php endif; ?>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Username</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>


          </div>
        </div>

      </div>
    </div>
    <?php $this->load->view('admin/fragments/footer');?>