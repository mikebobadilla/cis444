<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
     CIS 444 - Term Project
     contact_us.html


-->

<html lang="en">
     <head>
          <title> N&amp;H Wholesale Florist Co., Inc. </title>
          <meta charset="utf-8" />
          <!-- Link to CSS file -->
          <link rel="stylesheet" type="text/css" href="css/contact.css" />
     </head>
     <body>
          <?php require("nav.php"); ?>
          <!-- Container for remaining page -->
          <div class="restOfPage">
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
               <!-- Title for Contact Us -->
               <div class="header">
                    <h1 id="contactUsTitle"> Contact Us </h1>
               </div>
               <!-- About Us Content -->
               <div class="content">
                    <!-- PARAGRAPH ABOUT HISTORY OF BUSINESS OR SOMETHING -->
                    <br />
                    <p id="companyInfo">
                         Location: <br />
                         N&amp;H Wholesale Florist Co., Inc. <br />
                         333 Twin Oaks Valley Rd. <br />
                         San Marcos, Ca. 92054<br />
                         (123)-456-7890<br /><br />

                         Hours of Operation: <br />
                         Monday - 7:00am to 5:00pm <br />
                         Tuesday - 7:00am to 5:00pm <br />
                         Wednesday - 7:00am to 5:00pm <br />
                         Thursday - 7:00am to 5:00pm <br />
                         Friday - 7:00am to 5:00pm <br />
                         Saturday - 9:00am to 1:00pm <br /> <br />

                         If you have any questions, don't hesisitate to call us at (123)-456-7890<br/>
                         You can also contact us via email address below.
                    </p>
                    <br /><br />
                    <div class="textBoxes">
                         <form>
                              E-Mail Address: <br />
                                   <input type="text" id="emailNameBox" placeholder="flowers@gmail.com" size="35" >
                                   <br />
                              Questions or Concerns: <br />
                                   <input type="text" id="qAndA" placeholder="Questions, Comments, or Concerns" size="800">
                                   <br/>
                              <p class="submitAndResetButtons">
                                   <label class="submit">
                                        <button type="submit" id="submitButton" value="Submit" onclick=""> Submit </button>
                                   </label>
                                   <label class="reset">
                                        <button type="reset" id="resetButton" value="Reset"> Reset </button>
                                   </label>
                              </p>
                         </form>
                    </div>
               </div>
               <!-- Footer -->
               <div class="footer">
               </div>
          </div>
     </body>
</html>
