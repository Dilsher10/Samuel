<?php
session_start();
?>

<?php 
include 'header.php';

$sqlQuery = "SELECT * FROM `address_book` WHERE token = '" . $_SESSION['token'] . "'";
$query = mysqli_query($conn, $sqlQuery);
$data = mysqli_fetch_array($query);

?>


<style>
    :root {
	 --card-line-height: 1.2em;
	 --card-padding: 1em;
	 --card-radius: 0.5em;
	 --color-green: #558309;
	 --color-gray: #e2ebf6;
	 --color-dark-gray: #c4d1e1;
	 --radio-border-width: 2px;
	 --radio-size: 1.5em;
}

 .grid {
	 display: grid;
	 grid-gap: var(--card-padding);
	 margin: 0 auto;
	 max-width: 60em;
	 padding: 0;
}
 @media (min-width: 42em) {
	 .grid {
		 grid-template-columns: repeat(3, 1fr);
	}
}
 .card {
	 background-color: #fff;
	 border-radius: var(--card-radius);
	 position: relative;
}
 .card:hover {
	 box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
}
 .radio {
	 font-size: inherit;
	 margin: 0;
	 position: absolute;
	 right: calc(var(--card-padding) + var(--radio-border-width));
	 top: 8px;
}
 @supports (-webkit-appearance: none) or (-moz-appearance: none) {
	 .radio {
		 -webkit-appearance: none;
		 -moz-appearance: none;
		 background: #fff;
		 border: var(--radio-border-width) solid var(--color-gray);
		 border-radius: 50%;
		 cursor: pointer;
		 height: var(--radio-size);
		 outline: none;
		 transition: background 0.2s ease-out, border-color 0.2s ease-out;
		 width: var(--radio-size);
	}
	 .radio::after {
		 border: var(--radio-border-width) solid #fff;
		 border-top: 0;
		 border-left: 0;
		 content: "";
		 display: block;
		 height: 0.75rem;
		 left: 25%;
		 position: absolute;
		 top: 50%;
		 transform: rotate(45deg) translate(-50%, -50%);
		 width: 0.375rem;
	}
	 .radio:checked {
		 background: var(--color-green);
		 border-color: var(--color-green);
	}
	 .card:hover .radio {
		 border-color: var(--color-dark-gray);
	}
	 .card:hover .radio:checked {
		 border-color: var(--color-green);
	}
}
 .plan-details {
	 border: var(--radio-border-width) solid var(--color-gray);
	 border-radius: var(--card-radius);
	 cursor: pointer;
	 display: flex;
	 flex-direction: column;
	 padding: 6px;
	 transition: border-color 0.2s ease-out;
}
 .card:hover .plan-details {
	 border-color: var(--color-dark-gray);
}
 .radio:checked ~ .plan-details {
	 border-color: var(--color-green);
}
 .radio:focus ~ .plan-details {
	 box-shadow: 0 0 0 2px var(--color-dark-gray);
}
 .radio:disabled ~ .plan-details {
	 color: var(--color-dark-gray);
	 cursor: default;
}
 .radio:disabled ~ .plan-details .plan-type {
	 color: var(--color-dark-gray);
}
 .card:hover .radio:disabled ~ .plan-details {
	 border-color: var(--color-gray);
	 box-shadow: none;
}
 .card:hover .radio:disabled {
	 border-color: var(--color-gray);
}
 .plan-type {
	 color: var(--color-green);
	 font-size: 1.5rem;
	 font-weight: bold;
	 line-height: 1em;
}
 .plan-cost {
	 font-size: 2.5rem;
	 font-weight: bold;
	 padding: 0.5rem 0;
}
 .slash {
	 font-weight: normal;
}
 .plan-cycle {
	 font-size: 2rem;
	 font-variant: none;
	 border-bottom: none;
	 cursor: inherit;
	 text-decoration: none;
}
 .hidden-visually {
	 border: 0;
	 clip: rect(0, 0, 0, 0);
	 height: 1px;
	 margin: -1px;
	 overflow: hidden;
	 padding: 0;
	 position: absolute;
	 white-space: nowrap;
	 width: 1px;
}
</style>
  
  
  <?php
  if(isset($_SESSION['status'])){
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert">
<strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
</div>
    <?php
    
    unset($_SESSION['status']);
}
  ?>
  
  
  <main>
      <div class="container">
        <form method="post" action="insert.php">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Add New Address</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <div class="col col-md-auto d-flex align-items-end justify-content-end">
                <button name="save_address" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                  <i data-acorn-icon="send"></i>
                  <span>Publish</span>
                </button>
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-12">
              <!-- Product Info Start -->
              <div class="mb-5">
                <h2 class="small-title">ADDRESS INFO</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Name*</label>
                            <input type="text" name="name" class="form-control mb-5" value="<?= $data['name'];?>" placeholder="Enter full name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required/>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Address*</label>
                            <input type="text" name="address" class="form-control mb-5" value="<?= $data['address'];?>" placeholder="House no/building/street/area" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required/>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Mobile Number*</label>
                            <input class="form-control mb-5" type="tel" name="phone" value="<?= $data['phone'];?>" placeholder="Enter mobile number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Landmark (Optional)</label>
                            <input type="text" name="landmark" class="form-control mb-5" value="<?= $data['landmark'];?>" placeholder="Eg beside train station" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'/>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Province*</label>
                            <input type="text" name="province" class="form-control mb-5" value="<?= $data['province'];?>" placeholder="Enter your province" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'/>
                        </div>
                         <div class="col-6">
                            <label class="form-label">City*</label>
                            <input type="text" name="city" class="form-control mb-5" value="<?= $data['city'];?>" placeholder="Enter your city" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'/>
                        </div>
                         <div class="col-6">
                            <label class="form-label">State*</label>
                            <input type="text" name="state" class="form-control mb-5" value="<?= $data['state'];?>" placeholder="Enter your state" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'/>
                        </div>
                        <input type="hidden" value="<?=$_SESSION['token']; ?>" name="token">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
        </form>
  </div>
  </div>
  </main>
  
  
  <?php include 'footer.php'; ?>