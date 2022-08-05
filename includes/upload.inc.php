<?php
if (isset($_POST['upload'])) {
    include_once('db.inc.php');
    $img = $_FILES['img'];
    $imgName = $img['name'];
    $imgError = $img['error'];
    $imgSize = $img['size'];
    $imgType = $img['type'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    
    $imgTempName = $img['tmp_name'];
    $imgExt = explode('.', $imgName);
    $imgActualExt = strtolower(end($imgExt));
    $acceptedExt = array('jpg', 'jpeg', 'png');
     if (in_array($imgActualExt, $acceptedExt)) {
        if ($imgError == 0) {
            if ($imgSize < 3000000) {
                $imgNewName = "profile".$id.".".$imgActualExt;
                $imgDestination = "../images/".$imgNewName;
                move_uploaded_file($imgTempName, $imgDestination);
                $sql = "UPDATE users SET Imgstatus = 1 WHERE id= $id";
                mysqli_query($conn, $sql);
                header("Location: ../upload.php?error=success&id=".$id);
            } else {
                header("Location: ../upload.php?error=largeimg&id=".$id);
            }
            
        } else {
            header("Location: ../upload.php?error=error&id=".$id);
        }
     } else {
        header("Location: ../upload.php?error=type&id=".$id);
     }
}