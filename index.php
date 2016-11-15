<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
     CIS 444 - Term Project
     index.html


-->

<html lang="en">
     <head>
          <title> N&amp;H Wholesale Florist Co., Inc. </title>
          <meta charset="utf-8" />
          <!-- Link to CSS file -->
          <link rel="stylesheet" type="text/css" href="css/index.css" />
     </head>
     <body>
          <div class="topDivider">
               <?php require("nav.php"); ?>
               <!-- Header for Search bar  -->
               <div>
                    <h1 class="searchHeader"> </h1>
               </div>
               <!-- Search Bar -->
               <div class="searchContainer">
                    <form>
                         <div id="innerSearch">
                              <br />
                              <input id="searchBox" type="text" placeholder="Search Flowers..." />
                         </div>
                    </form>
               </div>
          </div>
          <!-- Middle Divider -->
          <div class="middleDivider">
               <br /><br />
               <h1 id="newInventory"> Current Inventory </h1>
               <!-- First Row of Flower Pictures -->
               <div class="Flowers">
                    <ul class="flowerRows">
                         <li>
                              <figure>
                                   <a id="forsythia" href="#forsythia"> <img src="image_folder/forsythia.jpg" alt="Forsythia Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Forsynthia Flower </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure>
                                   <a id="purpleWaxflower" href="#purpleWaxFlower"> <img src="image_folder/purpleWaxFlower.jpg" alt="Purple Wax Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Purple Wax Flower </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure>
                                   <a id="pinCushionOrange" href="#pinCushionOrange"> <img src="image_folder/pinCushionOrange.jpg" alt="Orange Pin Cushion Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Orange Pin Cushion </figcaption>
                              </figure>
                         </li>
			<li>
                              <figure>
                                   <a href="#proteaPinkIce"> <img src="image_folder/proteaPinkIce.jpg" alt="Protea Pink Ice Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Protea Pink Ice Flower </figcaption>
                              </figure>
                         </li>
                    </ul>
               </div>
               <!-- Second Row of Flower Pictures -->
               <div class="Flowers">
                    <ul class="flowerRows">

                         <li>
                              <figure>
                                   <a id="riceFlower" href="#riceFlower"> <img src="image_folder/riceFlower.jpg" alt="Rice Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Rice Flower </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure>
                                   <a href="#leptospermum_White"> <img src="image_folder/nh_whiteleptosperum.jpg" alt="Leptospermum White Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> White Leptospermum </figcaption>
                              </figure>
                         </li>
                    </ul>
               </div>
               <!-- Third Row of Flower Pictures -->
               <div class="Flowers">
                    <ul class="flowerRows">
                         <li>
                              <figure>
                                   <a href="#gunnii"> <img src="image_folder/gunnii.jpg" alt="Eucalyptus Gunni" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Gunnii </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure>
                                   <a href="#saxicola"> <img src="image_folder/saxicola.jpg" alt="Saxicola Flower" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Saxicola </figcaption>
                              </figure>
                         </li>
                         <li>
                              <figure>
                                   <a href="#silverDollar"> <img src="image_folder/nh_silverdollar4.jpg" alt="Eucalyptus Silver Dollar" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption> Silver Dollar Eucalyptus </figcaption>
                              </figure>
                         </li>
                    </ul>
               </div>
          </div>
          <div class="bottomDivider">
               <p>
                    <br/><br /><br />
               </p>
          </div>
     </body>
</html>
