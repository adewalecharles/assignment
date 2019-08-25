<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    require 'db.php';

    $userFname      = $_POST['fName'];
    $userLname      = $_POST['lName'];
    $userIDNumber  = $_POST['idNumber'];
    $userFaculty    = $_POST['faculty'];
    $userName       = $_POST['username'];
    $email          = $_POST['email'];
    $userPassword   = $_POST['password'];
    $register       = $_POST['lec_register'];


    $get = $conn->prepare("SELECT IDNumber FROM lecturer WHERE IDNumber = :idNO");
    $get->bindParam(':idNO', $userIDNumber);
    $get->execute();

    
    if( empty($userFname) || empty($userLname) || empty($userPassword) || empty($userIDNumber)){
        $_SESSION["error"] = "You Submitted an empty field <br/> <a href='../lecturer.php'>back to registration page</a>";
        header('Location: error.php');
    }elseif($get->rowCount() > 0){
        $_SESSION["error"] = "A lecturer with this registration details already exits! <br/> <a href='../lecturer.php'>back to registration page</a>";
        header('location: error.php');
    }else{
        $sql = "insert into lecturer(`firstName`, `lastName`, `IDNumber`, `faculty`, `username`, `email`, `password`) values ('{$userFname}', '$userLname', '{$userIDNumber}', '{$userFaculty}', '{$userName}', '{$email}', '{$userPassword}')";
        $prep = $conn->prepare($sql);
        $prep->execute();

        header('location: success.php');
    }
    
}
    


?>