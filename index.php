<?php
  require("header.php");
?>
<div class="home-content">
     <div class="container-fluid">
    <div class="row">
      <div class="stat col-sm-3 shadow-sm bg-white text-success">
        <div class="bg-success">
          <i class="fa-solid fa-users text-white"></i> 
        </div>
        <?php
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Registered Users</p>
      </div>
      <div class="stat col-sm-3 shadow-sm bg-white text-primary">
        <div class="bg-primary">
          <i class="fa-solid fa-user-check text-white"></i>
        </div>
        <?php
          $sql = "SELECT * FROM users WHERE upload = 'Uploaded';";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Uploaded Users</p>
      </div>
      <div class="stat col-sm-3 shadow-sm bg-white text-warning">
        <div class="bg-warning">
          <i class="fa-solid fa-user-clock text-white"></i>
        </div>
        <?php
          $sql = "SELECT * FROM users WHERE upload = 'Pending';";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Pending Users</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
       <div class="col-md-8">
           <div class="search">
             <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" name="" id="search" class="form-control" placeholder="Search" />
    </div>
           <div class="table-data">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Upload</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM users ";
          if (isset($_POST['data'])) {
            $filter = $_POST['data'];
            $sql .= " WHERE fName LIKE '%$filter%' OR lName LIKE '%$filter%' OR city LIKE ''%$filter%'' OR  email LIKE '%$filter%'";
          }
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          if ($resultChecker > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $fName = $row['fName'];
              $lName = $row['lName'];
              $city = $row['city'];
              $tel = $row['tel'];
              $email = $row['email'];
              $upload = $row['upload'];

              echo '<tr>
              <td>'.$fName.'</td>
              <td>'.$lName.'</td>
              <td>'.$city.'</td>
              <td>'.$tel.'</td>
              <td>'.$email.'</td>
              <td>'.$upload.'</td>
              <td>•••<div class="links shadow-sm">
              <form method="get" action="includes/table.inc.php?id="'.$id.'"">
                <button type="submit" name="view" value="'.$id.'">View Details</button>
                <button type="submit" name="edit" value="'.$id.'">Edit User</button>
                <button type="submit" name="delete" value="'.$id.'">Delete User</button>
                <button type="submit" name="upload" value="'.$id.'">Upload User</button>
                <button type="submit" name="img" value="'.$id.'">Upload User Image</button>
              </div></td>
              </form>
            </tr>';
            }
          } else {
            echo '<h1 style="color:red;">No User Found</h1>';
          }

          ?>
        </tbody>
      </table>
    </div>
       </div>
    </div>
  </div>
</div>
<?php
  require("footer.php");
?>