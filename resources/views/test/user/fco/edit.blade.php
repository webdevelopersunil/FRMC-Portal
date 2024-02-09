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
                  <h4 class="card-title">Updation by the office of FCO</h4>
                  
                  <form class="forms-sample" action="{{ route('fco.complainant.index') }}" >
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Nodel Officer</label>
                              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Officers 1</option>
                                <option>Officers 2</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Work Location</label>
                              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Location 1</option>
                                <option>Location 2</option>
                              </select>
                          </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Complaint Status</label>
                              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>With Nodal Officer</option>
                                <option>With FCO</option>
                                <option>Under FRMC deliberations for Closure/Investigation</option>
                                <option>Under Investigation</option>
                                <option value="">Fraud Not Established after FRMC Deliberation</option>
                                
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Work Centre</label>
                              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Centre 1</option>
                                <option>Centre 2</option>
                              </select>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Withdrawn – to be ignored</label>
                              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>YES</option>
                                <option>NO</option>
                              </select>
                          </div>
                        </div>
                    </div>

                    
                    <br> <br>
                    <h5 class="card-title">Updation by the office of FCO</h5>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Public</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="publicInput">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary" id="addPublic">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Public – Visible to all users</h4>
                              <ul id="public_visible">
                                  <li>Lorem ipsum dolor sit amet <a href="#" style="color:red; text-align:right;" class="removeItem">X</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputUsername1">Private</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="privateInput" >
                                  <div class="input-group-append">
                                      <button type="button" onclick class="btn btn-primary" id="addPrivate" >Add</button>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Private – Visible to only the users associated with the office of FCO</h4>
                              <ul id="private_visible" >
                                <li>Lorem ipsum dolor sit amet</li>
                              </ul>
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
</body>


<script>
    document.getElementById("addPublic").addEventListener("click", function() {

        var publicInputValue = document.getElementById("publicInput").value;
        if(publicInputValue!=''){
          var privateVisibleList = document.getElementById("public_visible");
          var newListItem = document.createElement("li");
          
          newListItem.innerHTML = publicInputValue + ' <a href="#" style="color:red; text-align:right;" class="removeItem">X</a>';
          privateVisibleList.appendChild(newListItem);
        }
    });
    // Add event listener to dynamically created "X" links
    document.getElementById("public_visible").addEventListener("click", function(event) {
        if (event.target.classList.contains("removeItem")) {
            event.preventDefault(); // Prevent the default behavior of the link
            event.target.parentElement.remove(); // Remove the list item containing the "X" link
        }
    });


    document.getElementById("addPrivate").addEventListener("click", function() {

    var publicInputValue = document.getElementById("privateInput").value;
    if(publicInputValue!=''){
      var privateVisibleList = document.getElementById("private_visible");
      var newListItem = document.createElement("li");
      
      newListItem.innerHTML = publicInputValue + ' <a href="#" style="color:red; text-align:right;" class="removeItem">X</a>';
      privateVisibleList.appendChild(newListItem);
    }
    });
    // Add event listener to dynamically created "X" links
    document.getElementById("private_visible").addEventListener("click", function(event) {
    if (event.target.classList.contains("removeItem")) {
        event.preventDefault(); // Prevent the default behavior of the link
        event.target.parentElement.remove(); // Remove the list item containing the "X" link
    }
    });

</script>

</html>
