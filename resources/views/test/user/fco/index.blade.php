<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
            @include('includes/_navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
            @include('includes/_settings-panel')
      <!-- partial -->

      <!-- partial:../../partials/_sidebar.html -->
            @include('includes/_sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">FCO User</h4>
        <!-- <p class="card-description">
            Add class <code>.table-striped</code>
        </p> -->
          <!-- <div class="template-demo">
              <button onclick="window.location='{{ route('complainant.create') }}'"  type="button" class="btn btn-primary"> Register Complainant </button>
          </div> -->

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> #Index </th>
              <th> Complaint No. </th>
              <th> Date of Complaint </th>
              <th> Complaint Against </th>
              <th> Department/Section </th>
              <th> ONGC Work Centre </th>
              <th>Nodel Officer</th> 
              <th>Work Location</th> 
              <th>Complaint Status</th> 
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td> 1 </td>
                <td> CM001NO65 </td>
                <td> 02-Feb-2024 </td>
                <td> User1, User2 </td>
                <td> Department/Section 1 </td>
                <td> ONGC Centre Noida </td>
                <td> Nodel Officer </td> 
                <td> Work Location </td> 
                <td> Complaint Status </td>
                <td>
                  <a href="{{ route('fco.complainant.edit') }}">Edit</a> | View
                </td>
              </tr>            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
            

            
            
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
