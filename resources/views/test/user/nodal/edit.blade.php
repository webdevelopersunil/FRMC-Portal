<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
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



            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Updation by Nodal Officer</h4>
                  <p class="card-description" > Detail Page </p>

                  <form class="forms-sample" action="{{ route('nodal.complainant.index') }}" >

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Uploading Preliminary Report</label>
                                <input type="file" class="form-control" id="exampleInputUsername1" placeholder="file">
                            </div>
                        </div>
                    </div>
                    
                    <br><br>
                    
                    <h5 class="card-title">other related documents</h5>
                    
                    <div id="rowContainer">
                      <div class="row dub-row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label for="exampleInputUsername1">Document</label>
                                  <input type="file" class="form-control" id="exampleInputUsername1" placeholder="file">
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label for="exampleInputUsername1">Aditional Detail</label>
                                  <textarea name="" class="form-control" id="exampleInputUsername1" cols="30" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <label for="exampleInputUsername1">&nbsp;&nbsp;</label>
                                  <input type="button" class="form-control addRowBtn" value="Add">
                              </div>
                          </div>
                      </div>
                  </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                  </form>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->


  <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.addRowBtn').addEventListener('click', function() {
            var row = document.querySelector('.dub-row');
            var newRow = row.cloneNode(true);
            var removeBtn = document.createElement('input');
            removeBtn.setAttribute('type', 'button');
            removeBtn.setAttribute('class', 'form-control removeRowBtn');
            removeBtn.setAttribute('value', 'Remove');
            removeBtn.addEventListener('click', function() {
                newRow.remove();
            });
            newRow.appendChild(removeBtn);
            document.getElementById('rowContainer').appendChild(newRow);
        });
    });
</script>

</body>

</html>
