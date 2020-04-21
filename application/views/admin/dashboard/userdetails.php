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
            <a href="#">User details</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Total users</li>
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
              <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Phone</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0;
                foreach ($user_details as $details) :   $i++;?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $details->username ?></td>
                      <td><?= $details->email  ?></td>
                      <td><?= $details->location  ?></td>
                      <td><?= $details->phone  ?></td>
                      <td><a class="btn btn-info" href="<?= base_url('') ?>">More</a><br><br></td>
                    </tr>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Phone</th>
                  <th>More</th>
                </tr>
              </tfoot>
            </table>


          </div>
        </div>

      </div>
    </div>
    <?php $this->load->view('admin/fragments/footer');?>