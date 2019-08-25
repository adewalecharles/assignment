<?php
session_start();


if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = $_POST["email"];
    $password = $_POST["password"];
    $loginAS =$_POST["loginAS"];
    $login_btn = $_POST["login_btn"];

    if($login_btn){
        require 'db.php';

        if(isset($email) && isset($password)){
            if(trim($loginAS) == "lecturer"){
                $sql="SELECT * FROM lecturer WHERE email='$email' AND password = '$password' ";
                $prep= $conn->prepare($sql);
                $prep->execute();

                $fetch = $prep->fetch(PDO::FETCH_OBJ);
                $checkPassword = $fetch->password;
                
                if( $checkPassword !== trim($password) ){

                    $_SESSION["error"] = "The password you entered is Incorrect <br/> <a href='../login.php'>back to login page</a>";
                    header('Location: error.php');
                }else{
                    $_SESSION["Fname"] = $fetch->firstName;
                    $_SESSION["Lname"] = $fetch->lastName;
                    $_SESSION["id"] = $fetch->IDNumber;
                    $_SESSION["faculty"] = $fetch->faculty;
                    $_SESSION["username"] = $fetch->username;
                    $_SESSION["email"] = $fetch->email;
                    $_SESSION["type"] = "lecturer";


                    header('location: lecturerDashboard.php');

                }

            }elseif(trim($loginAS) == "student"){
                $sql="SELECT * FROM student WHERE email = '$email' AND password ='$password' ";
                $prep= $conn->prepare($sql);
                $prep->execute();

                $fetch = $prep->fetch(PDO::FETCH_OBJ);
                $checkPassword = $fetch->password;

                if( $checkPassword !== trim($password) ){

                    $_SESSION["error"] = "The password you entered is Incorrect <br/> <a href='../login.php'>back to login page</a> ";
                    header('Location: error.php');
                }else{
                    $_SESSION["Fname"] = $fetch->firstName;
                    $_SESSION["Lname"] = $fetch->lastName;
                    $_SESSION["id"] = $fetch->regNumber;
                    $_SESSION["faculty"] = $fetch->faculty;
                    $_SESSION["username"] = $fetch->username;
                    $_SESSION["email"] = $fetch->email;
                    $_SESSION["type"] = "student";

                    header('location: dashboard.php');

                }

            }
        }
    }
}


?>