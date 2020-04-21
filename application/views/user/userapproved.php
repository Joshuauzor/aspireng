<?php $this->load->view('user/fragment/userheader'); ?>
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
          <li class="breadcrumb-item active" aria-current="page">Approved Request</li>
        </ol>
      </nav>
    </div>
    <!-- end::page-header -->
  <!-- table begins here -->
  <table id="myTable" class="table table-striped table-bordered">
  <thead>
    <tr>
    <th>#</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Approved by</th>
                  <th>Action</th>

    </tr>
  </thead>
  <tbody>
  <?php $i=0;
  foreach ($approvedrequest as $request): ?>
  <?php if ($request->status == 'approved'): $i++; ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $request->category?></td>
      <td><?= $request->request?></td>
      <td><?= $request->status?></td>
      <td><?= $request->request_date?></td>
      <td><?= $request->location?></td>
      <td><?= $request->approved_by?></td>
      <td><button type="submit" class="btn btn-primary button next">Clear</button></td>
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
                  <th>Date</th>
                  <th>Location</th>
                  <th>Approved by</th>
                  <th>Action</th>

    </tr>
  </tfoot>
</table>
<?php $this->load->view('user/fragment/userfooter'); ?>