
                  
<?php
include_once("connection.php");
?>

    <div id="protien" class="protien_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Toy</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>                           
               <div class="col-md-3 col-sm-6">
                  <div class="protien">
                     <figure><img src="product-imgs/<?php echo $row['Pro_image']?>" width="306" height="306"/></figure>
                     <h3><?php echo  $row['Price']?>$</h3>
                     <span> <?php echo  $row['Product_Name']?>  </span>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
                        