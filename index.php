<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U Stora </title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Tao menu cap -->
    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    
    <link href="css/salomon.css" rel="stylesheet">
    
<!--datatable-->
	<script src="js/jquery-3.2.0.min.js"/></script>
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    
  </head>

  
  
  <?php
    session_start();
    include_once("connection.php"); 
  ?>	
		<div class="header-middle" style="background-color:#FF7F50"><!--header-middle-->
			<div class="container" >
				<div>
					<div class="col-sm-6" >
						<div class="logo pull-left" >
                            <a href="index.php">
                                <img src="img/logo.png" width="100" height="60"></a> 
						</div>
					</div>
					<div class="col-sm-6">
						<div >
							<ul class="nav navbar-nav" >

                                <li><a href="?page=cart">
                                <i class="fa fa-shopping-cart"></i> Cart</a></li>
                                
                                <?php 
                                    if (isset($_SESSION['us']) && $_SESSION['us'] != "") {
                                ?> 
                                        <li><a  href="?page=Update_customer">
                                        <i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us']?></a>
                                </li>
                                        <li><a href="?page=logout" >
                                    <i class="fa fa-crosshairs"></i>Logout</a></li>
                                    <?php 
                                    }
                                    else
                                    {
                                    ?>
                                <li><a href="?page=login">
                                <i class="fa fa-lock"></i>Login</a></li>
                                
                                <li><a href="?page=register">
                                <i class="fa fa-star"></i>Register</a></li>
                                <?php
                                }
                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
        
	
		<div class="header-bottom" style="background-color:#FF4500"><!--header-bottom-->
			<div class="container">
				<div class="row"> 
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>




							
								<li class="dropdown"><a href="#">Management<i class="fa fa-angle-down"></i></a>

                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?page=category_management">Category</a></li>
										<li><a href="?page=product_management">Product</a></li>
                                    </ul>
                </li> 
								<li><a href="?page=cart">Cart</a></li>

                <form class="d-flex" method="POST" action="?page=Search">
                                <input name="txtSearch" class="border border-3 border-top-0 border-start-0 border-end-0" 
                                type="text" placeholder="Search" aria-label="Search" style=" outline: none;  margin-bottom: 10px">
                                <button  class="btn btn-info" style="margin-bottom: 4px;" type="submit" name="btnSearch" > Search </button>

                            </form> 
                
							</ul>
              
						</div>
					</div>


  


</div>
					</div>
				</div>
        
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
  
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == "register"){
                include_once("Register.php");
            }
elseif($page== "login"){
                include_once("Login.php");
            }
            elseif($page=="category_management"){
                include_once("Category_Management.php");
            }
            elseif($page=="product_management"){
                include_once("Product_Management.php");
            }
            elseif($page=="add_category"){
                include_once("Add_Category.php");
                
            }
            elseif($page=="add_product"){
                include_once("Add_Product.php");
            }
            elseif($page=="update_category"){
                include_once("Update_Category.php");

            }elseif($page=="Update_customer"){
              include_once("Update_customer.php");


          }elseif($page=="logout"){
                include_once("Logout.php");
            }elseif($page=="detail"){
                include_once("Detail.php");
            }elseif($page=="cart"){
                include_once("Cart.php");

            }elseif($page =="Search"){
              include_once("search.php");
            }
            elseif($page == "Update_Product"){
              include_once("Update_Product.php");
            }

          
        }
        else{
            include("Content.php");
        }
	?>
      
      <footer >
  <div  class="container" style="background: 	#FF8C00; width: 100%; color: White ;">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-6" >
        <div >
        <a href="index.php">
                                <img src="img/logo.png" width="100" height="60"></a> 
          <p class="mb-30 footer-desc">The customer should be able to follow the customer's customer service. From the easy release of them,
             because he hates the just option and him in time, but someone will come here with the duties.</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div>
          <h4>Address</h4>
          <ul class="list-unstyled">
            <li>
              <p>+017367234</p>
            </li>
            <li>
              <p>New York
                City in New York State
                New York City comprises 5 boroughs sitting where the Hudson River meets th</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

</html>