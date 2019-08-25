<?php
session_start();

if(isset($_POST["submit_ass"])){
    require 'db.php';

    $posted_by = $_POST["posted_by"];
    $topic = $_POST["topic"];
    $post_body = $_POST["post_body"];
    $mark = $_POST["mark"];
    $post_date = $_POST["post_date"];


    $sql = "INSERT INTO assignment(`posted_by`, `topic`, `post_body`, `mark`, `post_date`) VALUES ('{$_SESSION["username"]}', '{$topic}', '{$post_body}', '{$mark}', NOW()) ";

    $prep = $conn->prepare($sql);
    $prep->execute();

    echo "<script>alert('your Assigment is updated succesfully!')</script>";
    echo "<script>window.open('lecturerDashboard.php', '_self')</script>";
}
?>