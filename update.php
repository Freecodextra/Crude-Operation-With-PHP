<?php
  require("header.php");
?>
<body>
    <div class="container-fluid" id="form-container">
        <div class="form-container shadow">
          <div class="register-form">
            <form method="post" action="includes/update.inc.php">
              <div class="mb-3">
                <h3>UPDATE USER</h3>
              </div>
              <input type="number" name="id" value="<?php echo $_GET['id']; ?>" style="width:35px; visibility:hidden;">
              <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="fName" value="<?php echo $_GET['fName']; ?>" class="form-control" id="fName">
              </div>
              <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lName" value="<?php echo $_GET['lName']; ?>" class="form-control" id="lName">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="<?php echo $_GET['email']; ?>" class="form-control" id="email">
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" value="<?php echo $_GET['city']; ?>" class="form-control" id="city">
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="number" name="phoneNumber" value="<?php echo $_GET['tel']; ?>" class="form-control" id="phoneNumber">
              </div>
              <button type="submit" name="update" class="btn">Update</button>
              </div>
            </form>
          </div>
        </div>
    </div>
<?php
  require("footer.php");
?>