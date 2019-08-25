<?php
session_start();
// header("Content-Type: application/json");

$file = $_FILES["profile_photo"];

    if(isset($file)){
    // This lines of codes gets the details of the file been uploaded
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempLocation = $file['tmp_name'];
    $uploadStatus = $file['error'];
    $fileSize = $file['size'];
    $username = $_SESSION["username"];

    $fileNameExpload = explode('.', $fileName);
    $fileExt = strtolower(end($fileNameExpload));
    $supportedFileFormat = array('jpg', 'jpeg', 'png');

    if( in_array($fileExt, $supportedFileFormat) ){
        if($uploadStatus === 0){
            if( $fileSize <= 10000000 ){
                $newFileName = uniqid('', true).".".$fileExt;
                $uploadLocation = "profile_photo/".$newFileName;

                if(move_uploaded_file($fileTempLocation, $uploadLocation)){
                    $_SESSION["success"] = "Your file has been successfully uploaded";
                    echo($_SESSION["success"]);
                    // exit();

                    require 'db.php';
                    $sql = "INSERT INTO `profile_photo`( `username`, `file_name`, `file_type`, `file_size`, `file_path`) VALUES ( '$username', '$fileName', '$fileType', '$fileSize', '$uploadLocation')";
                    $prep = $conn->prepare($sql);
                    $prep->execute();

                    if($_SESSION["type"] === "lecturer"){
                        header("Location: lecturerDashboard.php?Upload_successful");
                    }else{
                        header("Location: dashboard.php?Upload_successful");
                    }
                }
            }else{
                $_SESSION['error'] = "The file is too large";
                // exit();
                echo($_SESSION["error"]);
            }
        }else{
            $_SESSION['error'] = "There was an error uploading your file to the database";
            echo($_SESSION["error"]);
        }
    }else{
        $_SESSION['error'] = "The file you tried uploading is not supported";
        echo($_SESSION["error"]);
    }
}




?>