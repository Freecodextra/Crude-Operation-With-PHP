<?php
  require("header.php");
?>
<body>
                <?php
                    $id = $_GET['id'];
                    if (!$id) {
                       $sql = "SELECT * FROM users";
                    } else {
                        $sql = "SELECT * FROM users WHERE id =".$id."";
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
                        $status = $row['Imgstatus'];
                        if ($status == 0) {
                            echo '<div class="container-fluid">
                            <div class="photo-card-container d-flex align-items-center justify-content-center">
                                <div class="photo-card shadow">
                            <div class="img-sec">
                            <img src="images/default.png" alt="Profile Photo">
                        </div>';
                        } else {
                            $img = "images/profile".$id."*";
                            $imgSearch = glob($img);
                            echo '<div class="container-fluid">
                        <div class="photo-card-container d-flex align-items-center justify-content-center">
                         <div class="photo-card shadow">
                            <div class="img-sec">
                            <img src="'.$imgSearch[0].'" alt="Profile Photo">
                        </div>';
                        }
                        echo '<div class="info-sec">
                        <p class="first-name">First Name: <span>'.$fName.'</span></p>
                        <p class="last-name">Last Name: <span>'.$lName.'</span></p>
                        <p class="city-name">City: <span>'.$city.'</span></p>
                        <p class="email">Email: <span>'.$email.'</span></p>
                    </div>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>';
        // <button onclick="window.print()" class="print-card-buttton">Print Card</button>
                      }
                    }
                    
                ?>
    <?php
  require("footer.php");
?>