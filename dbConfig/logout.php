<?php

session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout messagee</title>

    <style>
        body{
            text-align: center;
            background: rgb(184, 185, 184);
        }
        section{
           font-size: 20px;
            margin: 10% auto auto;
        }
        h1{
            font-size: 50px;
            background: rgb(2, 117, 2);
            width: 50%;
            padding: .3em 0;
            margin: auto auto 1em;
            border-radius: 5px;
            color: white;
        }
        a{
            color: green;
            background: rgb(226, 148, 3);
            padding: .1em .5em;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <section>
        <h1>You have been logged out</h1>

        <a href="../index.php">Go back to homepage</a>
    </section>
</body>
</html>