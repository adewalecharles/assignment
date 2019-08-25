<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    require 'db.php';

    $course1 = $_POST["course1"];
    $course2 = $_POST["course2"];
    $course3 = $_POST["course3"];
    $course4 = $_POST["course4"];
    $course5 = $_POST["course5"];
    $course6 = $_POST["course6"];
    $course7 = $_POST["course7"];
    $course8 = $_POST["course8"];
    $course9 = $_POST["course9"];
    $course10 = $_POST["course10"];

    $sql = "INSERT INTO coursereg(`studentName`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`, `course7`, `course8`, `course9`, `course10`) VALUES ('{$_SESSION["username"]}', '{$course1}', '{$course2}', '{$course3}', '{$course4}', '{$course5}', '{$course6}', '{$course7}', '{$course8}', '{$course9}', '{$course10}') ";

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
    <form action="coursereg.php" method="post" id="course_reg_form">
        <input type="text" name="course1" placeholder="Course Code">
        <input type="text" name="course2" placeholder="Course Code">
        <input type="text" name="course3" placeholder="Course Code">
        <input type="text" name="course4" placeholder="Course Code">
        <input type="text" name="course5" placeholder="Course Code">
        <input type="text" name="course6" placeholder="Course Code">
        <input type="text" name="course7" placeholder="Course Code">
        <input type="text" name="course8" placeholder="Course Code">
        <input type="text" name="course9" placeholder="Course Code">
        <input type="text" name="course10" placeholder="Course Code">
        <input type="submit" value="Register">
    </form>

    <a href="dashboard.php">
        <button>
            Back to dashboard
        </button>
    </a>

    <script src="../js/coursereg.js" ></script>
</body>
</html>