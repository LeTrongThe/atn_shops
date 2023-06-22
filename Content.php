
                  
<?php
include_once("connection.php");
?>
   
  
 <!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


</style>
</head>
<body>

<h2 style="text-align:center">Product Card</h2>

<?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>

<div class="card">
<img src="product-imgs/<?php echo $row['Pro_image']?>" width="306" height="306">
  <h1><?php echo  $row['Product_Name']?></h1>
  <p class="price"><?php echo  $row['Price']?>$</p>
  <p><button>Add to Cart</button></p>
</div>

<?php
                
              }
              ?>

</body>
</html>


