<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
     Roger Delgado - delga051
     Kristina Nystrom - nystr001
     Zachary Go - goo06
     Michael Bobadilla - bobad05
     CIS 444 - Term Project
     About_Us.php

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
                         Family owned and operated since 2006.<br />
						 220 acres of beautiful flowers nestled in the inland hills of Northern San Diego County.<br />
                         We specialize in a wide variety of elegant and memorable cut flowers and greens that thrive in Southern California.<br />
                         The flower farm was purchased solely as a real-estate investment in 2003. However, upon investigating the warehouse on
						 top of the first 40-acre property we discovered the remnants of dyed Eucalyptus leaves. This peaked the owner, Kim Nystrom’s,
						 interest. She started growing baby plants in the green house as a hobby a couple of days a week. Later, she started spending
						 all daylight hours at the property. Before the rest of the family knew what was going on she created a company, hired workers,
						 and started planting. She then proceeded to purchase surrounding land thus expanding the business. With the expansion of the
						 company, Kim recruited her family members to help manage the company. <br />
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
