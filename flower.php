<?php
  include("includes/session.php");
  if(empty($_GET["flowerID"])){
    header("location: search.php");
    exit();
  }

  $id = $_GET["flowerID"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
  </head>
  <body>
    <div class="topDivider">
         <?php require("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <?php
          $res = mysqli_query($link, "SELECT * FROM FLOWERS WHERE FlowerID = $id");
          while($row = mysqli_fetch_array($res)){
            $image = $row["Picture"];
            $name = $row["FlowerName"];
            $description = $row["Description"];
            $id = $row["FlowerID"];
        ?>
        <div class="info left">
          <h4><?php echo $name; ?></h4>
          <p>
            <img class="des-image" src="image_folder/<?php echo $image; ?>" alt="<?php echo $name; ?>" />
          </p>
        </div>
        <div class="info left">
          <h4>Description</h4>
          <p>
            <?php echo $description; ?>
          </p>
          <form class="" action="checkout.php" method="post">
            <input type="hidden" name="flowerID" value="<?php echo $id; ?>">
            <button type="submit" name="btn-checkout">Add to cart</button>
          </form>
        </div>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
