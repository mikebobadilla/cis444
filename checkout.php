<?php
  include("includes/session.php");
  if(isset($_POST["btn-checkout"])){
    $id = $_POST["flowerID"];
    if(empty($_COOKIE["items"])){
      $cookie = array($id);
      $cookie = serialize($cookie);
      setcookie("items", $cookie, time() + 864000);
      setcookie("count", 1, time() + 864000);
    } else {
      $count = $_COOKIE["count"] + 1;
      $cookie = $_COOKIE["items"];
      $cookie = unserialize($cookie);
      array_push($cookie, $id);
      $cookie = serialize($cookie);
      setcookie("items", $cookie, time() + 864000);
      setcookie("count", $count, time() + 864000);
    }
  }

  if(isset($_COOKIE["items"])){
    $cookie = $_COOKIE["items"];
    $cookie = unserialize($cookie);
    $sql = "SELECT * FROM FLOWERS WHERE FlowerID IN (". implode(", ", $cookie) . ")";
    $res = mysqli_query($link, $sql);
  }

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
        <div class="info list">
          <table>
            <tr>
              <th>Flower Image</th>
              <th>Flower Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
            <?php
              while($row = mysqli_fetch_array($res)){
                $image = $row["Picture"];
                $name = $row["FlowerName"];
                $id = $row["FlowerID"];
                $price = $row["Price"];
            ?>
                  <tr>
                    <td><img class="checkout-img" src="image_folder/<?php echo $image; ?>" alt="<?php echo $name ?>" /></td>
                    <td><?php echo $name; ?></td>
                    <td>1</td>
                    <td><?php echo $price; ?></td>
                    <td><a onClick="deleteFlower(event, <?php echo $id; ?>)" href="#" >Delete?</a></td>
                  </tr>
                  <form id="deleteFlower<?php echo $id ?>" stlye="display:none" action="admin.php" method="post">
                    <input type="hidden" name="deleteFlower" value="<?php echo $id ?>">
                  </form>
             <?php } ?>
          </table>
        </div>
    </div>
  </body>
</html>
