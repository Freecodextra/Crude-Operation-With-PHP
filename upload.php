<?php
    require('header.php');
?>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error == "largeimg") {
        echo '<div class="to shadow">
        <p class="pt-3">Large Image</p>
      </div>';
      } elseif ($error == "error") {
        echo '<div class="to shadow">
        <p class="pt-3">Image Error</p>
      </div>';
      } elseif ($error == "type") {
        echo '<div class="to shadow">
        <p class="pt-3">Invalid Image</p>
      </div>';
      }  elseif ($error == "success") {
        echo '<div class="to shadow">
        <p class="pt-3">Successfully Uploaded</p>
      </div>';
      }
    }
    
?>
    <div class="container-fluid" id="form-container">
        <div class="form-container shadow">
          <div class="register-form">
            <form method="post" action="includes/upload.inc.php?id=<?php echo $id ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <h3>UPLOAD USER IMAGE</h3>
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">Upload Image</label>
                <input type="file" name="img" class="form-control" id="img">
              </div>
              <button type="submit" name="upload" class="btn">Upload</button>
            </div>
            </form>
          </div>
        </div>
    </div>
<?php
    require('footer.php');
?>