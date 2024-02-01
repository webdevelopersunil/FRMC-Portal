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
      <h4 class="card-title">Striped Table</h4>
        <!-- <p class="card-description">
            Add class <code>.table-striped</code>
        </p> -->

            <div class="template-demo">
                <button onclick="window.location='{{ route('complainant.create') }}'"  type="button" class="btn btn-primary"> Register Complainant </button>
            </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                User
              </th>
              <th>
                UID
              </th>
              <th>
                Name
              </th>
              <th>
                Email Address
              </th>
              <th>
                Address
              </th>
              <th>
                Deadline
              </th>
              <th>
                Edit - Delete
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-1">
                <img src="../../images/faces/face1.jpg" alt="image"/>
              </td>
              <td>
                234ff
              </td>
              <td>
                Herman Beck
              </td>
              <td>
                <!-- <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
                admin@gmail.com
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
              <td>
              Edit - Delete
              </td>
            </tr>

            <tr>
              <td class="py-1">
                <img src="../../images/faces/face2.jpg" alt="image"/>
              </td>
              <td>
                234ff
              </td>
              <td>
                Messsy Adam
              </td>
              <td>
                <!-- <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
                admin@gmail.com
              </td>
              <td>
                $245.30
              </td>
              <td>
                July 1, 2015
              </td>
              <td>
              Edit - Delete
              </td>
            </tr>

            <tr>
              <td class="py-1">
                <img src="../../images/faces/face3.jpg" alt="image"/>
                <img src="../../images/faces/face4.jpg" alt="image"/>
                <img src="../../images/faces/face5.jpg" alt="image"/>
                <img src="../../images/faces/face6.jpg" alt="image"/>
                <img src="../../images/faces/face7.jpg" alt="image"/>
              </td>
              <td>
                234ff
              </td>
              <td>
                John Richards
              </td>
              <td>
                <!-- <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
                welcome@gmail.com
              </td>
              <td>
                $138.00
              </td>
              <td>
                Apr 12, 2015
              </td>
              <td>
              Edit - Delete
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
