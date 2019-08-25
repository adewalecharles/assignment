<?php
session_start();
// header("Content-Type: application/json");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    if(isset($_POST["set_deadline"])){
        $lecturer_comment = $_POST["deadline_comment"];
        $username = $_SESSION["username"];
        if (isset($lecturer_comment)) {
            require 'db.php';
            $sql = "INSERT INTO `deadline`( `lecturerName`, `date`) VALUES ( '$username', '$lecturer_comment')";
            $prep = $conn->prepare($sql);
            $prep->execute();
            
            echo "Deadline Set";
            header("Location: lecturerDashboard.php?dateline_set");
        }
        
    }

if(isset($_POST["submit"])){

    $file = $_FILES["file"];
    // $img = $_POST["img"]

   
    // This lines of codes gets the details of the file been uploaded
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempLocation = $file['tmp_name'];
    $uploadStatus = $file['error'];
    $fileSize = $file['size'];
    $username = $_SESSION["username"];

    $fileNameExpload = explode('.', $fileName);
    $fileExt = strtolower(end($fileNameExpload));
    $supportedFileFormat = array('jpg', 'jpeg', 'png', 'pdf', 'txt', 'docx', 'pptx');

    if( in_array($fileExt, $supportedFileFormat) ){
        if($uploadStatus === 0){
            if( $fileSize <= 10000000 ){
                $newFileName = uniqid('', true).".".$fileExt;
                $uploadLocation = "lecturer_uploads/".$newFileName;

                if(move_uploaded_file($fileTempLocation, $uploadLocation)){
                    $_SESSION["success"] = "Your file has been successfully uploaded";
                    echo($_SESSION["success"]);
                    // exit();

                    require 'db.php';
                    $sql = "INSERT INTO `lecturer_upload`( `lecturerName`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES ( '$username', '$fileName', '$fileType', '$fileSize', '$uploadLocation', CURRENT_TIMESTAMP)";
                    $prep = $conn->prepare($sql);
                    $prep->execute();

                    header("Location: lecturerDashboard.php?file_upload_sucessful");
                   
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


}


?>