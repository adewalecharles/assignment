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
            Register as a lecturer
        </h1>
    </header>

    <form action="dbConfig/lecturerRegistration.php" method="post">
        <input type="text" name="fName" placeholder="Enter your first name">
        <input type="text" name="lName" placeholder="Enter your last name">
        <input type="text" name="idNumber" placeholder="Enter your staff id number">
        <input type="text" name="faculty" placeholder="Enter your faculty">
        <input type="text" name="username" placeholder="Choose your username">
        <input type="text" name="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Choose a password">
        <input type="submit" name="lec_register" value="Register">
    </form>
    </section>

    <footer>
        back to <a href="index.php">homepage</a> 
    </footer>
    <script src="js/lecturer.js"></script>
</body>
</html>