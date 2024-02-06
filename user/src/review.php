<?php 
include'header.php';
?>


      <main>
        <div class="container">
         <div class="page-title-container">
            <div class="row">
              <div class="col-12 col-md-10">
                <a class="muted-link pb-2 d-inline-block hidden" href="#" onClick=history.go(-1);>
                  Back
                </a>
                <h1 class="mb-0 pb-0 display-4 fw-bold" id="title">Reviews</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <div class="row g-2 justify-content-between">
                  
                          <?php
                          $sqlQuery = "SELECT * FROM `review_table` ";
                          $query = mysqli_query($conn,$sqlQuery);
                          while($data = mysqli_fetch_array($query)){
                              ?>
                              <div class="card mb-5" style="width:45%;">
                    <div class="card-body">
                              
                              <div class="row g-0 sh-10 mb-5">
                          <div class="col-auto">
                            <div class="rounded-circle my-3" style="background-color: #799b5a; width:83px; border-radius:50%;" >
                                                        <h3 class="text-center" style="color:#fff; font-size: 3rem; padding: 12px; margin-top: 18px; font-weight:bold;">
                                                            <?php
                                                            $name = $data['user_name'];
                                                            $firstCharacter = substr($name, 0, 1);
                                                            echo $firstCharacter;
                                                            ?>
                                                            
                                                        </h3></div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="" class="body-link"><?php echo $data['user_name'] ?></a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">
                                  <?php echo $data['user_review'] ?>
                                </div>
                                <div class="br-wrapper br-theme-cs-icon">
                                    
                                    <?php
                                                                
                                                                	if($data["user_rating"] == '5')
		{
			?>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
			<?php
		}

		if($data["user_rating"] == '4')
		{
				?>
				<i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
			<?php
		}

		if($data["user_rating"] == '3')
		{
				?>
			   <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
			<?php
		}

		if($data["user_rating"] == '2')
		{
				?>
		       <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
			<?php
		}

		if($data["user_rating"] == '1')
		{
				?>
			<i data-acorn-icon="star" data-acorn-size="15" style="color:orange;"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
                                    <i data-acorn-icon="star" data-acorn-size="15"></i>
			<?php
		}

                                                                
                                                                ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                              <?php
                              if($data['status'] == '1'){
                                  ?>
                                  <a class="btn btn-primary mt-5" style="float:right;" disabled>Verified</a>
                                  <?php
                              }
                              else{
                                  ?>
                                  <a class="btn btn-primary mt-5" style="float:right;" href="verify_review.php?review_id=<?php echo $data['review_id'] ?>">Verify Review</a>
                                  <?php
                              }
                              ?>
                          </div>
                        </div>
                        
                        
                         </div>
                  </div>
                              <?php
                          }
                          ?>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

   
   <?php 
include'footer.php';
?>