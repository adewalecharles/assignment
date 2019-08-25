<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit your profile here</title>
    <link rel="stylesheet" href="../css/editpage.css">
</head>

<body id="editPage">

<header class="editTag">
    <h1>Edit your profile</h1>
</header>

<div>

    <form action="#">
        <input type="text" value="<?php echo $_SESSION["Fname"]; ?>">
        <input type="text" value="<?php echo $_SESSION["Lname"]; ?>">
        <input type="text" value="<?php echo $_SESSION["faculty"]; ?>">
        <input type="text" value="<?php echo $_SESSION["id"]; ?>">
        <input type="text" value="<?php echo $_SESSION["email"]; ?>">
        <input type="text" value="<?php echo $_SESSION["username"]; ?>" >
        <input type="submit" value="save changes" name="save">
    </form>

</div>

<a href="<?php if($_SESSION["type"] === "student"){
    echo "dashboard.php";
}elseif($_SESSION["type"] === "lecturer"){
    echo "lecturerDashboard.php";
} ?>" >
    <button>
        Back to dashboard
    </button> 
</a>
    
</body>
</html>