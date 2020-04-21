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
          <li class="breadcrumb-item active" aria-current="page">Approved request</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-striped table-bordered myTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Username</th>
                  <th>phone</th>
                  <th>Status</th>
                  <th>Declined Date</th>
                  <th>Declined by</th>
                  <th>Location</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0;
                foreach ($approvedrequest as $request) :  ?>
                  <?php if ($request->status == 'approved') : $i++; ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $request->category ?></td>
                      <td><?= $request->request ?></td>
                      <td><?= $request->username ?></td>
                      <td><?= $request->phone ?></td>
                      <td><?= $request->status ?></td>
                      <td><?= $request->approved_date ?></td>
                      <td><?= $request->approved_by ?></td>
                      <td><?= $request->location ?></td>
                      <td><a class="btn btn-info" href="<?= base_url('') ?>">More</a><br><br></td>
                    </tr>
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
                  <th>Approved Date</th>
                  <th>Approved by</th>
                  <th>Location</th>
                  <th>More</th>
                </tr>
              </tfoot>
            </table>


          </div>
        </div>

      </div>
    </div>
    <?php $this->load->view('admin/fragments/footer');?>