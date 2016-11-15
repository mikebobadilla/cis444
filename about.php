<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
	Roger Delgado - delga051
     CIS 444 - Term Project
     About_Us.html

-->

<html lang="en">
     <head>
          <title> N&amp;H Wholesale Florist Co., Inc. </title>
          <meta charset="utf-8" />
          <!-- Link to CSS file -->
          <link rel="stylesheet" type="text/css" href="css/about.css" />
     </head>
     <body>
      <?php require("nav.php"); ?>
          <!-- Container for remaining page -->
          <div class="restOfPage">
               <!-- Side Bar for Popular Flowers -->
               <div class="sidebar">
                    <br /><br />
                    <!-- POPULAR PRODUCTS TITLE -->
                    <h1 id="popularProductsTitle"> Popular Products </h1>
                    <!-- LIST OF 3 POPULAR FLOWER PICTURES -->
                    <ul class="bestSellers">
                         <li>
                              <figure id="firstPopular">
                                   <img src="image_folder/forsythia.jpg" alt="Forsythia Flower" style="width: 200px; height: 200px; border: 0">
                                   <figcaption> <br/> Forsynthia Flower </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure id="secondPopular">
                                   <img src="image_folder/purpleWaxFlower.jpg" alt="Purple Wax Flower" style="width: 200px; height: 200px; border: 0">
                                   <figcaption> <br/> Purple Wax Flower </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure id="thirdPopular">
                                   <img src="image_folder/pinCushionOrange.jpg" alt="Orange Pin Cushion Flower" style="width: 200px; height: 200px; border: 0">
                                   <figcaption> <br/> Orange Pin Cushion </figcaption>
                              </figure>
                         </li>
                    </ul>
               </div>
               <!-- Title for About Us -->
               <div class="header">
                    <h1 class="aboutUsTitle">  About Us: <br /> N&amp;H Wholesale Florist Co., Inc.<br /></h1>
               </div>
               <!-- About Us Content -->
               <div class="content">


                    <!-- PARAGRAPH ABOUT HISTORY OF BUSINESS OR SOMETHING -->

			<h1 class="aboutUsTitle">
			28520 Twin Oaks Valley Rd. Vista CA 92084<br />
			</h1>
                    <p id="history">

                         Started in 1990...........<br />
                         .    <br />
                         .    <br />
                         .    <br />
                         .    <br />
                         .    <br />
                         The end.
			<br/>
                    </p>
<!-- PICTURE OF FLOWER FARM OR OWNERS -->
                    <figure id="farmPic"> <br /> <br/>
                        <img src="image_folder/flowershop.png" alt="Our Farm" style="width: 800px; height: 450px; border: 0">
                    </figure>
               </div>
               <div id= "payment">
                    <h1> Payments </h1>
                    <img id="visaCard" src="image_folder/visa.jpg" alt="Credit Cards">
                    <img id="MasterCard" src="image_folder/MasterCard.jpg" alt="Credit Cards">
                    <img id="AmericanExpress" src="image_folder/AmericanExpress.jpg" alt="Credit Cards">
                    <img id="DiscoverCard" src="image_folder/Discover.jpg" alt="Credit Cards">
               </div>
               <!-- Footer -->
               <div class="footer">
               </div>
          </div>
     </body>
</html>
