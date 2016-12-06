<?php
  include("includes/session.php");
  if(isset($_GET["search"])){
    $res = mysqli_query($link, "SELECT * FROM FLOWERS WHERE FlowerID = $id");

  } else {
    $res = mysqli_query($link, "SELECT * FROM FLOWERS");
  }
?>
<!DOCTYPE html>
<!-- Jason Sneddon - snedd001
Roger Delgado - delga051
Kristina Nystrom - nystr001
Zachary Go - goo06
Michael Bobadilla - bobad05
CIS 444 - Term Project
index.php
-->
<html lang="en">
     <head>
          <title> N&amp;H Wholesale Florist Co., Inc. </title>
          <meta charset="utf-8" />
          <!-- Link to CSS file -->
          <link rel="stylesheet" type="text/css" href="css/index.css" />
          <link rel="stylesheet" type="text/css" href="css/nav.css" />
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
                        <?php
                          while($row = mysqli_fetch_array($res)){
                            $image = $row["Picture"];
                            $name = $row["FlowerName"];
                            $description = $row["Description"];
                            $id = $row["FlowerID"];
                        ?>
                         <li>
                              <figure>
                                   <a id="<?php echo "flowerID_" . $id ?>" href="flower.php?flowerID=<?php echo $id ?>"> <img src="image_folder/<?php echo $image; ?>" alt="<?php echo $name; ?>" style="width: 250px; height: 250px; border: 0"></a>
                                   <figcaption><?php echo $name; ?></figcaption>
                              </figure>
                         </li>
                         <?php } ?>
               </div>

          </div>
          <div class="bottomDivider">
               <p>
                    <br/><br /><br />
               </p>
          </div>
     </body>
</html>
