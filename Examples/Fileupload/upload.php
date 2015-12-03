<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
     echo '<script type="text/javascript">alert("File already Exists"); </script>';
    $uploadOk = 0;
}
if ($_FILES["fileupload"]["size"] > 500000) {
     echo '<script type="text/javascript">alert("Sorry,File was too large"); </script>';
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<script type="text/javascript">alert("jpg,jpeg,png,gif formats are only allowed"); </script>';
    $uploadOk = 0;
}
if ($uploadOk == 0) {
     echo '<script type="text/javascript">alert("Sorry your file was not uploaded"); </script>';
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
    } else {
         echo '<script type="text/javascript">alert("Sorry,An error was occured"); </script>';
    }
}
?>