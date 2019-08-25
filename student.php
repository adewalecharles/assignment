<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student registration portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
</head>

<body id="studentPortal">
    <section id="studentForm">
    <header>
        <h1>
        Register as a Student
        </h1>
    </header>

    <form action="dbConfig/studentRegistration.php" method="post" id="studentRegistrationForm">
        <input type="text" name="fname" placeholder="enter your first name">
        <input type="text" name="lname" placeholder="enter your last name">
        <input type="text" name="regNumber" placeholder="enter your Registration Number">
        <input type="text" name="faculty" placeholder="enter your faculty">
        <input type="text" name="username" placeholder="Choose your username">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="choose a password">
        <input type="submit" name="student_register" value="Register">
    </form>
    </section>

    <footer>
        back to <a href="index.php">homepage</a> 
    </footer>
    
    <!-- <script src="js/student.js"></script> -->
</body>
</html>