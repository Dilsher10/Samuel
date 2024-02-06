<?php 
include'header.php';
?>

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
         <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-10">
                <a class="muted-link pb-2 d-inline-block hidden" href="#" onClick=history.go(-1);>
                  Back
                </a>
                <h1 class="mb-0 pb-0 display-4 fw-bold" id="title">Earnings</h1>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <div class="row g-2 justify-content-between">
                  <div class="col-6 col-md-6 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="cart" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL EARNINGS</div>
                        <div class="text-primary cta-4">$ 500,000</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-6 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="server" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL WITHDRAW</div>
                        <div class="text-primary cta-4">
                         $ 300,000
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="dollar" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL PENDING</div>
                        <div class="text-primary cta-4">
                            $ 200,000
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Proceed To Withdraw
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment</h1>
        <button type="button" class="closeBtn" data-bs-dismiss="modal" aria-label="Close"><i data-acorn-icon="close" class="text-primary"></i></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Total Earnings</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="500,000" value="$ 500,000" readonly>
            </div>
            <div class="mb-3">
               <label for="amount" class="form-label">Withdraw</label>
               <input type="text" class="form-control" id="amount" placeholder="Enter Amount">
            </div>
             <div class="mb-3">
               <label for="remaining" class="form-label">Remaining</label>
               <input type="text" class="form-control" id="remaining" placeholder="Remaining Amount">
            </div>
            <button class="btn btn-primary">Submit Request</button>
        </form>
      </div>
    </div>
  </div>
</div>

            </div>
          </div>
          <!-- Stats End -->
        </div>
      </main>
    </div>

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="icon/acorn-icons.js"></script>
    <script src="icon/acorn-icons-interface.js"></script>
    <script src="icon/acorn-icons-commerce.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>

    <!-- Template Base Scripts Start -->
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    
   <script>
  // Get the required elements
  var withdrawInput = document.getElementById('amount');
  var remainingInput = document.getElementById('remaining');

  // Add an event listener to listen for changes in the withdrawal input
  withdrawInput.addEventListener('input', function() {
    var withdrawAmount = parseFloat(withdrawInput.value);
    
    // Calculate the remaining amount
    var remainingAmount = 500000 - withdrawAmount;
    
    // Format the remaining amount with commas
    var formattedAmount = remainingAmount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    
    // Set the remaining amount in the "Remaining" field
    remainingInput.value = '$' + ' ' + formattedAmount;
  });
</script>



  </body>
</html>
