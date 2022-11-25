<?php
include("../admin/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hayath</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/hayat.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./product.css">
    <script src="https://kit.fontawesome.com/5a618c164d.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"rel="stylesheet"/>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
<!-- ===========nav===================== -->
<nav class="navbar navbar-expand-lg navbar-dark "  style="background-color:#000;">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><a class="navbar-brand me-auto" href="../jewelleryproject.php">  <img src="../images/hayath logo.png" width="180px" alt="" "></a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <?php
$sql = "SELECT * FROM gold_rate";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	$id= $row["id"];
?>  
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <h6 class=" mx-auto p-2 animate__animated animate__zoomIn  animate__infinite animate__slower" style="color:white;">
              TODAY GOLD RATE :  ₹<?php echo $row['1gram_rate'];?>/GM ₹<?php echo $row['8gram_rate'];?>/8GM </h6>
    
          <a href="https://www.instagram.com/hayathgold/?hl=en"><i class="bi bi-instagram ms-4  text-white"></i></a>
         <a href="https://www.facebook.com/hayathgold/"> <i class="bi bi-facebook ms-4 text-white " ></i></a>
           <i class="bi bi-headset ms-3 text-white">+91 9645060933</i>
           <i class="bi bi-whatsapp ms-3 text-white">+91 9562092053 </i>
      
            </div>
            <?php
}
}
?>
</div>   
  </nav>
<!-- ====================================     product dispaly               ======================================= -->

<?php
$id=$_GET['sa'];
$sql="SELECT *  FROM hayathgold WHERE id='$id'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	
	?> 
 <div class="container pt-5">


      
    <div class="products ">
        <div class="row">
                <div class="col-md-5 mb-4">
                    <div class="product-img">
                  <img src="../admin/product_img/<?php echo $row['product_image'];?>" class="img-fluid">  
                </div>
            </div>

            <div class="col-md-7 my-4">
                <div id="heart-container">
                    <input type="checkbox" id="toggle">
                      <div id="twitter-heart"></div>
                    </input>
                  </div>
            <div class="product-details mx-3 text-dark">
                    <h3 class="px-5"><?php echo $row['product_name'];?> </h3>
                    <h6 class="pt-3">Product  Id: <b><?php echo $row['product_id'];?></b></h6>
                    <p class="pt-3">Free Shipping In India | Hallmarked jewellery available for sale.</p>
                    <h5 class="pt-3">Availability:  <b><?php echo $row['availability'];?></b></h5>
                    <h2 class="pt-3">RS.<?php echo $row['product_price'];?></h2>
<hr>

                         <h4 class="pt-2 text-dark">Customize this product</h4>
                         <div class="box pt-3 d-flex  ">
                          <span class="pt-2" style="font-size:17px;" >  Metal type</span>
                          <div class="boxes ">
                           
                            <p><?php echo $row['metal_type'];?></p>
                          </div>
                         </div>
                         <div class="box pt-3 d-flex  ">
                          <span class="pt-2" style="font-size:17px;" >  Metal purity</span>
                          <div class="boxes ">
                            
                            <p><?php echo $row['purity'];?></p>
                          </div>
                         </div>


                </div>
            </div>
        </div>
    </div>
 </div>

 <?php
}
}
?>


    
        <!-------------------------------     footer -------------------------->   
    
        <div class="container-fluid">
            <footer class="text-start  text-white" style="background-color:#0c475c">
            
              <div class="container-fluid mt-2 p-5 mx-auto ">
                <!--Grid row-->
                <div class="row">
                
                  <div class=" col-md-3 mb-4 mb-md-0 ">
                    <h6 class=" underline" style="font-size:16px; font-weight: 600;">Navigation</h6>
            
                    <ul class="list-unstyled mb-0 py-2 my-3">
                      <li>
                        <a href="../jewelleryproject.php" class="text-white" style="text-decoration:none;"><p>Home</a></p>
                      </li>
                      
                      <li>
                        <a href="../products.php" class="text-white " style="text-decoration:none;"><p>Products</a></p>
                      </li> 
                      <li>
                        <a href="../Brands.php" class="text-white" style="text-decoration:none"><p>Brands</a></p>
                      </li>
                      
                      <li>
                        <a href="/./gift.php" class="text-white" style="text-decoration:none"><p>Gift Card</a></p>
                      </li>
                      
                     
                    
                       <li>
                        <a href="../contact.php" class="text-white" style="text-decoration:none"><p>Contact Us</a></p>
                      </li>
                    
                       
                      
                      
                    </ul>
                  </div>
            
                
                  <div class=" col-md-3 mb-4 mb-md-0">
                    <h6 class="underline"  style="font-size:16px; font-weight: 600; ">Our Stores</h6>
            
                    <ul class="list-unstyled mb-0 py-2 my-3">
                      <li>
                        <a href="" class="text-white" style="text-decoration:none;"><p>Valanchery</a></p>
                      </li>
                      
                      <li>
                        <a href="" class="text-white " style="text-decoration:none;"><p> Changaramkulam</a></p>
                      </li>
                      
                      <li>
                        <a href="" class="text-white" style="text-decoration:none"><p>
                         Ongallur</a></p>
                      </li>
                      
                     
                    </ul>
                  </div>
                  
                 
                 
                 
                 
                 
                 
                 
                  <div class=" col-md-3 mb-4 mb-md-0">
                    <h6 class=" underline1 "  style="font-size:16px; font-weight: 600;">Products</h6>
                  
            
                    <ul class="list-unstyled mb-0 py-2 my-3">
                      <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none;"><p>Glitz Uncut Diamond Jewellery</a></p>
                      </li>
                      
                      <li>
                        <a href="../products.php" class="text-white " style="text-decoration:none;"><p> Ain Precious Jewellery</a></p>
                      </li>
                      
                      <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none"><p>Isma kids’s Jewellery</a></p>
                      </li>
                      
                      <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none"><p> Zaara Modern Jewellery</a></p>
                      </li>
                    
                       <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none"><p> Heritage Antique Jewellery</a></p>
                      </li>
                       <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none"><p> Benzer Diamond Jewellery</a></p>
                      </li>
                       <li>
                        <a href="../products.php" class="text-white" style="text-decoration:none"><p>Devo Traditional Jewellery</a></p>
                      </li>
                    
                       
                    </ul>
                  </div>
            
                <div class="col-md-3 mb-4 mb-md-0  ">
            
                    <h6 class=" underline1 "  style="font-size:16px; font-weight: 600;"> Customer Service</h6>
                  
            
                    <ul class="list-unstyled mb-0 py-2 my-3">
                    
                      
                      <li>
                        <a href="" class="text-white care " style="text-decoration:none;"><p>care.in@hayatgoldanddiamonds
                          .com</a></p>
                      </li>
                      
                      <li>
                        <a href="" class="text-white" style="text-decoration:none"><p> HAYATH Gold & Diamonds
                          V3QC+WH8, Hayath Tower,
                           Calicut Road, Valanchery, 
                           Kerala 676552</a></p>
                      </li>
                      
                     
                    </ul>
                    
                    <img src="../images/hayath logo.png"  width="200px" height="100px"  alt="logo" class=" ms-2  img-fluid ">
                  </div>
                   
                </div>
               
              </div>
              
              <div class="text-center p-4" style="background-color:#fff ;">
                <p class="col-md-8 mx-auto text-dark"> 
                  <i class="fa-brands fa-google fa-xl  mx-2"></i>
                 
            
             
                 
                  <i class="fa-brands fa-facebook  fa-xl  mx-2"></i>
            
            
            
                  <i class="fa-brands fa-twitter fa-xl  mx-2"></i>
                  
                  <i class="fa-brands fa-square-instagram fa-xl b mx-2"></i>
                </div>
            
              <!-- Copyright -->
              <div class="text-center p-4" style="background-color:#dae6d5">
              <p class="col-md-8 mx-auto text-dark"> © <b>Hayath  </b>gold and Diamonds . All Rights Reserved.
              </p>
              </div>
              <!-- Copyright -->
            </footer> 
            </div>
        
        
        
        
        
        
        
          <!-------------------------------     footer end -------------------------->   
                  <!-------------------------------------------js link-->
            <script src="../jewellery.js"></script>  
</body>
</html>