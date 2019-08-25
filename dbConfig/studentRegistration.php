<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    require 'db.php';

    $userFname      = $_POST['fname'];
    $userLname      = $_POST['lname'];
    $userRegNumber  = $_POST['regNumber'];
    $userFaculty    = $_POST['faculty'];
    $userName       = $_POST['username'];
    $email          = $_POST['email'];
    $userPassword   = $_POST['password'];
    $register       = $_POST['student_register'];


    $get = $conn->prepare("SELECT regNumber FROM student WHERE regNumber = :regNO ");
    $get->bindParam(':regNO', $userRegNumber);
    $get->execute();

    if( empty($userFname) || empty($userLname) || empty($userPassword) || empty($userRegNumber)){
        $_SESSION["error"] = "You Submitted an empty field <br/> <a href='../student.php'>back to registration page</a>";
        header('Location: error.php');
    }elseif($get->rowCount() > 0 ){
        $_SESSION["error"] = "A student with this REGISTRATION NUMBER already exist! <br/> <a href='../student.php'>back to registration page</a>";
        header('location: error.php');
    }else{
        $sql = "insert into student(`firstName`, `lastName`, `regNumber`, `faculty`, `username`, `email`, `password`) values ('{$userFname}', '$userLname', '{$userRegNumber}', '{$userFaculty}', '{$userName}', '{$email}', '{$userPassword}')";
        $prep = $conn->prepare($sql);
        $prep->execute();

        header('location: success.php');
    }
    
}
    


?>