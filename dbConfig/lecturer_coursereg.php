<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    require 'db.php';

    $course1 = $_POST["course1"];
    $course2 = $_POST["course2"];
    $course3 = $_POST["course3"];
    $course4 = $_POST["course4"];

    $sql = "INSERT INTO lecturer_coursereg( `lecturerName`, `course1`, `course2`, `course3`, `course4`) VALUES ('{$_SESSION["username"]}', '{$course1}', '{$course2}', '{$course3}', '{$course4}') ";

    $prep = $conn->prepare($sql);
    $prep->execute();

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register courses</title>

    <link rel="stylesheet" href="../css/editpage.css">
</head>
<body id="editPage">
    <form action="lecturer_coursereg.php" method="post" id="course_reg_form">
        <input type="text" name="course1" placeholder="Course Code">
        <input type="text" name="course2" placeholder="Course Code">
        <input type="text" name="course3" placeholder="Course Code">
        <input type="text" name="course4" placeholder="Course Code">
        <input type="submit" value="Register">
    </form>

    <a href="lecturerDashboard.php">
        <button>
            Back to dashboard
        </button>
    </a>

    <script src="../js/lecturer_coursereg.js" ></script>
</body>
</html>