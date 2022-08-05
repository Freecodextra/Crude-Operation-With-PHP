<?php
  require("header.php");
?>
  <?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error == "emptyfield") {
        echo '<div class="to shadow">
        <p class="pt-3">Empty Fields</p>
      </div>';
      } elseif ($error == "wrongemail") {
        echo '<div class="to shadow">
        <p class="pt-3">Wrong Email</p>
      </div>';
      } elseif ($error == "userexist") {
        echo '<div class="to shadow">
        <p class="pt-3">User Exist</p>
      </div>';
      }  elseif ($error == "success") {
        echo '<div class="to shadow">
        <p class="pt-3">Register Success</p>
      </div>';
      }
    }
  ?>
    <div class="container-fluid" id="form-container">
        <div class="form-container shadow">
          <div class="register-form">
            <form method="post" action="includes/register.inc.php">
              <div class="mb-3">
                <h3>REGISTER A NEW USER</h3>
              </div>
              <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="fName" class="form-control" id="fName">
              </div>
              <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lName" class="form-control" id="lName">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="city">
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="number" name="phoneNumber" class="form-control" id="phoneNumber">
              </div>
              <!-- <div class="mb-3">
                <label for="profileImg" class="form-label">Upload A Profile Image</label><br>
                <input type="file" name="profileImg" id="profileImg">
              </div> -->
              <button type="submit" name="register" class="btn">Register</button>
            </div>
            </form>
          </div>
        </div>
    </div>
<?php
  require("footer.php");
?>