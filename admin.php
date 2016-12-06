<?php
  include("includes/admin_check.php");
  if(isset($_POST["deleteFlower"])){
    $id = $_POST["deleteFlower"];
    $query = "DELETE FROM FLOWERS WHERE FlowerID = $id";
    $res = mysqli_query($link, $query);
  }

  if(isset($_POST["deleteUser"])){
    $id = $_POST["deleteUser"];

    $query = "DELETE FROM USERS WHERE UserID = $id";
    $res = mysqli_query($link, $query);

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
  </head>
  <body>
    <div class="topDivider">
      <?php include("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <div class="info left">

          <h4>Flowers</h4>
          <p><a href="newflower.php">Add New Flower</a></p>
          <div class="item">
          <table>
            <tr>
              <th>Flower Image</th>
              <th>Flower Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          <?php
            $res = mysqli_query($link, "SELECT * FROM FLOWERS");
            while($row = mysqli_fetch_array($res)){
              $image = $row["Picture"];
              $name = $row["FlowerName"];
              $id = $row["FlowerID"];
          ?>
                <tr>
                  <td><img src="image_folder/<?php echo $image; ?>" alt="<?php echo $name ?>" /></td>
                  <td><?php echo $name; ?></td>
                  <td><a href="editflower?id=<?php echo $id; ?>">Edit</a></td>
                  <td><a onClick="deleteFlower(event, <?php echo $id; ?>)" href="#" >Delete?</a></td>
                </tr>
                <form id="deleteFlower<?php echo $id ?>" stlye="display:none" action="admin.php" method="post">
                  <input type="hidden" name="deleteFlower" value="<?php echo $id ?>">
                </form>
           <?php } ?>
           </table>
         </div>
        </div>
        <div class="info left">

          <h4>Users</h4>
          <div class="item">
          <table>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Permission</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

          <?php
            $res = mysqli_query($link, "SELECT * FROM USERS");
            $flowers = mysqli_fetch_array($res);
            while($row = mysqli_fetch_array($res)){
              $first = $row["FirstName"];
              $last = $row["LastName"];
              $email = $row["Email"];
              $role = $row["Permissions"];
              $id = $row["UserID"];
          ?>


              <tr>
                <td><?php echo $first; ?></td>
                <td><?php echo $last; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $role; ?></td>
                <td><a href="edituser?id=<?php echo $id; ?>">Edit</a></td>
                <td><a onClick="deleteUser(event, <?php echo $id; ?>)" href="#" >Delete?</a></td>
              </tr>
              <form id="deleteUser<?php echo $id ?>" stlye="display:none" action="admin.php" method="post">
                <input type="hidden" name="deleteUser" value="<?php echo $id ?>">
              </form>
          <?php } ?>
            </table>
          </div>
        </div>

      </div>
    </div>
  </body>
  <script type="text/javascript" src="js/script.js"></script>
</html>
