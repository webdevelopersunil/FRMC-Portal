<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>


<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('includes/_navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
        @include('includes/_settings-panel')
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
        @include('includes/_sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome User</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          
          

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Complaint No#</th>
                              <th>Product</th>
                              <th>Business type</th>
                              <th>Policy holder</th>
                              <th>Premium</th>
                              <th>Status of Complaint</th>
                              <th>Date of Complaint</th>
                              <th></th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr class="odd">
                              <td class=" select-checkbox">Incs234</td>
                              <td class="sorting_1">Car insurance</td>
                              <td>Business type 1</td>
                              <td>Jesse Thomas</td>
                              <td>$1200</td>
                              <td>In progress</td>
                              <td>25/04/2020</td>
                              <td class=" details-control"></td>
                            </tr>

                            <tr>
                              <td colspan="8">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:100%;">
                                <tbody>
                                  <tr class="expanded-row">
                                    <td colspan="8" class="row-bg">
                                      <div>

                                        <div class="d-flex justify-content-between">

                                          <div class="cell-hilighted">
                                            <div class="d-flex mb-2">
                                              <div class="mr-2 min-width-cell">
                                              <p class="paragraph" style="max-width: 250px; overflow-wrap: break-word;">
                                                  Details saved in the “Public” area by the office of FCO   
                                                </p>
                                                
                                              </div>
                                              <!-- <div class="min-width-cell"> -->
                                                <!-- <p>Policy end date</p> -->
                                                <!-- <h6>24/04/2021</h6> -->
                                              <!-- </div> -->
                                            </div>
                                            <!-- <div class="d-flex">
                                              <div class="mr-2 min-width-cell">
                                                <p>Sum insured</p>
                                                <h5>$26,000</h5>
                                              </div>
                                              <div class="min-width-cell">
                                                <p>Premium</p>
                                                <h5>$1200</h5>
                                              </div>
                                            </div> -->
                                          </div>

                                          <div class="expanded-table-normal-cell">
                                            <div class="mr-2 mb-4">
                                              <p>Quote no.</p>
                                              <h6>Incs234</h6>
                                            </div>
                                            <div class="mr-2">
                                              <p>Vehicle Reg. No.</p>
                                              <h6>KL-65-A-7004</h6>
                                            </div>
                                          </div>
                                          <div class="expanded-table-normal-cell">
                                            <div class="mr-2 mb-4">
                                              <p>Policy number</p>
                                              <h6>Incsq123456</h6>
                                            </div>
                                            <div class="mr-2">
                                              <p>Policy number</p>
                                              <h6>Incsq123456</h6>
                                            </div>
                                          </div>
                                          <div class="expanded-table-normal-cell">
                                            <div class="mr-2 mb-3 d-flex">
                                              <div class="highlighted-alpha"> A</div>
                                              <div>
                                                <p>Agent / Broker</p>
                                                <h6>Abcd Enterprices</h6>
                                              </div>
                                            </div>
                                            <div class="mr-2 d-flex"> 
                                              <img src="../../images/faces/face5.jpg" alt="profile">
                                              <div>
                                                <p>Policy holder Name &amp; ID Number</p>
                                                <h6>Phillip Harris / 1234567</h6>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="expanded-table-normal-cell">
                                            <div class="mr-2 mb-4">
                                              <p>Branch</p>
                                              <h6>Koramangala, Bangalore</h6>
                                            </div>
                                          </div>
                                          <div class="expanded-table-normal-cell">
                                            <div class="mr-2 mb-4">
                                              <p>Channel</p>
                                              <h6>Online</h6>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
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
            </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>