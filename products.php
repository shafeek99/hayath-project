<?php
include("admin/db.php");
 
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hayath</title>
	<link rel="shortcut icon" type="image/x-icon" href="./images/hayat.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="product css/jwly.css">
    <script src="https://kit.fontawesome.com/5a618c164d.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"rel="stylesheet"/>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
  <script>
    $(document).ready(function() {
	$("#search-box").keyup(function() {
		$.ajax({
			type: "POST",
			url: "read_product.php",
			data: 'keyword=' + $(this).val(),
			beforeSend: function() {
				$("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data) {
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#search-box").css("background", "#FFF");
			}
		});
	});
});
//To select a country name
function selectCountry(val) {
	$("#search-box").val(val);
	$("#suggesstion-box").hide();
}
  </script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample1" aria-controls="navbarExample1" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse nav2" id="navbarExample1">
          <!-- Left links -->
          <ul class="navbar-nav mx-lg-auto  text-center ps-lg-0 mx-3  "  style="padding-left: 0.15rem ;font-size: 1.1rem; font-weight: 400;">
            <li class="nav-item " >
              <a class="nav-link   " href="./jewelleryproject.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="./products.php">PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Brands.php">BRANDS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gift.php">GIFT CARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">CONTACT US</a>
            </li>
          
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
  <!-- ================================================== Poster          ========================================================== -->

  <div class="container-fluid my-5  pt-2">
    <div class="row img">
      <img src="./images/cele copy.jpg"  class="image-fluid " alt="..">
    </div>
  </div>  

  <d

  <!-- ==========================================================   gallery         =========================================================== -->
  
    <div class="wrapper">
    <div class="text-center my-4 ">
  <h3>PRODUCTS</h3>
</div>
      <div class="text-center mt-4 ">
     
      <div class="form py-4 " >
  
  <form class="d-flex input-group w-auto mx-3 " action="product css/search_results.php" method="post" enctype="multipart/form-data"   autocomplete="off">
    <input
      type="text"
      id="search-box"
      name="search_result"
      class="form-control"
      placeholder="What are you looking for today?"
      aria-label="Search"
    
    />
  
   
    <button
      class="btn btn-outline"
      type="submit"
      name="submit"
      data-mdb-ripple-color="light"
    >
      Search
    </button>
    <div id="suggesstion-box"></div>
  </form>
</div>
        <div >
        
     


          <p  style="font-weight: 400;  font-size: 1.rem; color: grey; word-wrap: break-word; max-width: 600px;" class=" mx-auto pb-3 text-center   "> <small>When it comes to jewelry, everybody has their own preferred look. At <i>Hayath</i> Jewellery, we strive to provide unique choices that cater to your styles. Get ready to be blown away by our designs as you brown through different collections.
          </small> </p>
        </div>
      </div>

      <!-- filter Items -->
      <nav>
      </nav>
      <!-- filter Images -->
      <div class="gallery">
      <?php
$sql = "SELECT * FROM hayathgold";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	$id= $row["id"];
?>  

        <div class="image" "><span><a href="./product css/search_result.php?sa=<?php echo $row["id"];?>"><img src="admin/product_img/<?php echo $row['product_image'];?>" alt=""> <div class="overlay"></div><div class="text"><?php echo substr($row['product_name'], 0, 35); ?></div></a></span></div>
        <?php
}
}
?>
	

        <!-- <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold-2.jpg" alt=""> <div class="overlay"></div><div class="text">Gold Necklace</div></a></span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio0.jpg" alt=""> <div class="overlay"></div><div class="text">Glitz Diamond Necklace</div></a></span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio1.jpg" alt=""> <div class="overlay"></div><div class="text">Premium Glitz Diamond Necklace</div></a></span></div>
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio2.jpg" alt=""> <div class="overlay"></div><div class="text">Glitz Diamond Bangles</div></a></span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold3.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Earring</div></a></span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold-4.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Divine Earring</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil1.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Silver Necklace</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil2.jpg" alt=""> <div class="overlay"></div><div class="text"> Silver Bracelet</div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold-5.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Earring</div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold6.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Kids Jewellery</div></a> </span></div>
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio3.jpg" alt=""> <div class="overlay"></div><div class="text">Benzer Diamond Set</div></a> </span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio4.jpg" alt=""> <div class="overlay"></div><div class="text">Stunning Diamond Earring</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil4.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Silver collections</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil3.jpg" alt=""> <div class="overlay"></div><div class="text"> Stunning Silver Earring</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil5.jpg" alt=""> <div class="overlay"></div><div class="text">Devo Silver Ring</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil6.jpg" alt=""> <div class="overlay"></div><div class="text"> Stunning Silver Bracelet</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil7.jpg" alt=""> <div class="overlay"></div><div class="text"> Silver T Bangle</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/sil8.jpg" alt=""> <div class="overlay"></div><div class="text"> Modern Silver Chain</div></a> </span></div>
        <div class="image" data-name="Silver"><span><a href=""><img src="./product/images/silver.jpg" alt=""> <div class="overlay"></div><div class="text"> Silver Set  </div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold7.jpg" alt=""> <div class="overlay"></div><div class="text">Heritage Antique with Ruby Stone</div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold8.jpg" alt=""> <div class="overlay"></div><div class="text">
          Bangle And Bracelet With Yellow Rose And Rhodium</div></a> </span></div>
      
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold9.jpg" alt=""> <div class="overlay"></div><div class="text">2 Layer Necklace With Rose And Rhodium</div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold10.jpg" alt=""> <div class="overlay"></div><div class="text">Short necklace with fancy stone and yellow gold polish</div></a> </span></div>
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio6.jpg" alt=""> <div class="overlay"></div><div class="text">Zara Diamond Earring</div></a> </span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio7.jpg" alt=""> <div class="overlay"></div><div class="text">Ain Diamond Necklace</div></a> </span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio8.jpg" alt=""> <div class="overlay"></div><div class="text">Necklace with American Diamonds and Black Polish</div></a> </span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio9.jpg" alt=""> <div class="overlay"></div><div class="text">Necklace with American Diamonds</div></a> </span></div>
      
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio5.jpg" alt=""> <div class="overlay"></div><div class="text">Ain Diamond Set</div></a> </span></div>
        <div class="image" data-name="Diamond"><span><a href=""><img src="./product/images/dio10.jpg" alt=""> <div class="overlay"></div><div class="text">Benzer Diamond Bangle</div></a> </span></div>
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold11.jpg" alt=""> <div class="overlay"></div><div class="text">3 Layer Necklace With Rose And Rhodium</div></a> </span></div>

        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gol13.jpg" alt=""> <div class="overlay"></div><div class="text">
          Heritage Antique Necklace </div></a> </span></div>
      
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold16.jpg" alt=""> <div class="overlay"></div><div class="text">Heritage Antique Set </div></a> </span></div>
      
        <div class="image" data-name="Gold"><span><a href=""><img src="./product/images/gold15.jpg" alt=""> <div class="overlay"></div><div class="text"> Heritage Antique Bracelet</div></a> </span></div>
       -->
        
      </div>
    </div>
    <!-- fullscreen img preview box -->



<!-- ==========================================================   footer      ====================================================== -->
<div class="container-fluid">
  <footer class="text-start  text-white" style="background-color:#0c475c";>
  
    <div class="container-fluid mt-2 p-5 mx-auto ">
      <!--Grid row-->
      <div class="row">
      
        <div class=" col-md-3 mb-4 mb-md-0 ">
          <h6 class=" underline" style="font-size:16px; font-weight: 600;">Navigation</h6>
  
          <ul class="list-unstyled mb-0 py-2 my-3">
            <li>
              <a href="./jewelleryproject.php" class="text-white" style="text-decoration:none;"><p>Home</a></p>
            </li>
            
            <li>
              <a href="./products.php" class="text-white " style="text-decoration:none;"><p>Products</a></p>
            </li> 
            <li>
              <a href="./Brands.php" class="text-white" style="text-decoration:none"><p>Brands</a></p>
            </li>
            
            <li>
              <a href="./gift.php" class="text-white" style="text-decoration:none"><p>Gift Card</a></p>
            </li>
            
           
          
             <li>
              <a href="./contact.php" class="text-white" style="text-decoration:none"><p>Contact Us</a></p>
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
          <h6 class=" underline1 "  style="font-size:16px; font-weight: 600;">products</h6>
        
  
          <ul class="list-unstyled mb-0 py-2 my-3">
            <li>
              <a href="./products.php" class="text-white" style="text-decoration:none;"><p>Glitz Uncut Diamond Jewellery</a></p>
            </li>
            
            <li>
              <a href="./products.php" class="text-white " style="text-decoration:none;"><p> Ain Precious Jewellery</a></p>
            </li>
            
            <li>
              <a href="./products.php" class="text-white" style="text-decoration:none"><p>Isma kids’s Jewellery</a></p>
            </li>
            
            <li>
              <a href="./products.php" class="text-white" style="text-decoration:none"><p> Zaara Modern Jewellery</a></p>
            </li>
          
             <li>
              <a href="./products.php" class="text-white" style="text-decoration:none"><p> Heritage Antique Jewellery</a></p>
            </li>
             <li>
              <a href="./products.php" class="text-white" style="text-decoration:none"><p> Benzer Diamond Jewellery</a></p>
            </li>
             <li>
              <a href="./products.php" class="text-white" style="text-decoration:none"><p>Devo Traditional Jewellery</a></p>
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
          
          <img src="./images/hayath logo.png"  width="200px" height="100px"  alt="logo" class=" ms-2  img-fluid ">
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
<script src="./jewellery.js"></script>
</body>
</html>