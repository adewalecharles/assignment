<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laspo student Management App</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body id="home">

    <section id="homePage">
        <header>
            <img src="img/Laspo.jpg" alt="Laspo logo">
            <h1>Lagos State Polytechnic Ikorodu</h1>
        </header>

        <div>
            <h2>Online Assignment Management system</h2>
        </div>

    
        <section id="reg_buttons">
            <a href="lecturer.php"><button>Register as a lecturer</button></a>
            <a href="student.php"><button>Register as a student</button></a>
        </section>

        <section>
            <h3>Already have an account?</h3>
            <a href="login.php"><button>Login</button></a>
        </section>
    </section>
    
</body>
</html>