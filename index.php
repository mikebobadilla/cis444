<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
     Roger Delgado - delga051
     Kristina Nystrom - nystr001
     Zachary Go - goo06
     Michael Bobadilla - bobad05
     CIS 444 - Term Project
     search.php
-->

<html lang="en">
     <head>
          <title> N&amp;H Wholesale Florist Co., Inc.</title>
          <meta charset="utf-8" />
          <!-- Link to CSS file -->
          <link rel="stylesheet" type="text/css" href="css/search.css" />
          <link rel="stylesheet" type="text/css" href="css/nav.css" />
     </head>
     <body>
          <div class="topDivider">
               <!-- Menu bar -->
               <?php require("nav.php"); ?>
               <!-- Header for Search bar  -->
               <div>
                    <h1 class="searchHeader"> N&amp;H Wholesale Florist Inventory Search </h1>
               </div>
               <!-- Search Bar -->
               <div class="searchContainer">
                    <form>
                         <div id="innerSearch">
                              <br />
                              <input id="searchBox" type="text" placeholder="Ex:Color,Name,Type..." />
                         </div>
                    </form>
               </div>
          </div>

     </body>
</html>
