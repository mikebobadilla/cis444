<?php
  include("includes/admin_check.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <style media="screen">
      .wrapper {
        margin: auto;
        width: 90%;
        max-width: 1000px;
        background: #163f5a;
        position: relative;
        padding: 10px;
      }

      .content {
        display: flex;
        justify-content: space-between;
      }

      .info {
        display: flex;
        flex-direction: column;
        width: 50%;
      }

      .info div {
        margin-bottom: 10px;
      }

      .left {
        align-self: flex-start;
      }

      .item {
        display: flex;
        justify-content: flex-start;
      }

      .item img {
        width: 50px;
        height: 50px;
      }
    </style>
  </head>
  <body>
    <div class="topDivider">
      <?php include("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <div class="info left">

          <h4>Flowers</h4>

          <?php
            $res = mysqli_query($link, "SELECT * FROM FLOWERS");
            while($row = mysqli_fetch_array($res)){
              $image = $row["Picture"];
              $name = $row["FlowerName"];
              $id = $row["FlowerID"];
          ?>

              <div class="item">
                <img src="image_folder/<?php echo $image; ?>" alt="<?php echo $name ?>" />
                <span>
                  <?php echo $name; ?>
                </span>
              </div>
           <?php } ?>
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
            $res = mysqli_query($link, "SELECT * FROM users");
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
                <td><?php echo $id; ?></td>
                <td><?php echo $id; ?></td>
              </tr>
          <?php } ?>
            </table>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
