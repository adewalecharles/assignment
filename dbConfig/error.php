<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error page</title>
    <style>
        body{
            text-align: center;
            background: rgb(184, 185, 184);
        }
        section{
            margin-top: 10%;
            font-size: 20px;
        }
        h1{
            font-size: 50px;
            background: rgb(2, 117, 2);
            width: 35%;
            padding: .3em 0;
            margin: auto;
            border-radius: 5px;
            color: white;
        }
        p{
            font-size: 30px;
        }
    </style>
</head>
<body>

    <section>
    <h1>There was an error</h1>
    <p>
        <?php
        if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
            echo $_SESSION["error"];
        }

        ?>
    </p>
    </section>
    
</body>
</html>