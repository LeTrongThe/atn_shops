  
<?php
include_once("connection.php");
?>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
                            
				            <!--Một sản phẩm -->
                            
                
                    <div class="col-md-4 pb-2" id="itemss" >
                    <div class="card">
                        <img style="height:300px; margin-top: 50px;"             
                        src="product-imgs/<?=$row['Pro_image']?>"
                        class="card-img-top"
                        alt="Product" style="margin: auto;
                        width: 300px;"
                        />
                        
                        <div class="card-body">
                        <a href="?page=detail&&id=<?php echo $row["Product_ID"];?>" class="text-decoration-none">
                        <h5 class="card-title"><?=$row['Product_Name']?></h5></a>

                        <h6 class="card-subtitle mb-2 text-muted"><span></span><?=$row['Price']?>$</h6>

                        <a href="?page=cart&&id=<?php echo $row["Product_ID"];?>" class="btn btn-primary">Add to Cart</a>
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
    </div> <!-- End main content area -->
    
   <!-- End brands area -->
 <!-- End product widget area -->
    
   
  