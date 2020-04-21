<?php $this->load->view('user/fragment/userheader'); ?>



<!-- begin::main-content -->
<main class="main-content">

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
            <a href="#">Requests</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Pending Requests</li>
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
                  <th>Status</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0;
                foreach ($requests as $request) :  ?>
                  <?php if ($request->status == 'pending') : $i++; ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $request->category ?></td>
                      <td><?= $request->request ?></td>
                      <td><?= $request->status ?></td>
                      <td><?= $request->phone ?></td>
                      <td><?= $request->request_date ?></td>
                      <td><?= $request->location ?></td>
                      <td>
                        <a class="btn btn-success" href="<?= base_url('requests/view_details') ?>">View Details</a>
                      </td>
                    </tr>
                  <?php endif; ?>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Phone</th>
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

  </div>

</main>
<!-- end::main-content -->




<?php $this->load->view('user/fragment/userfooter'); ?>