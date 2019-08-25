
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login dashboard</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body id="login_page">
    
    <section id="login">
        <h1>login to begin</h1>

        <form action="dbConfig/loginSetUp.php" method="post">
            <input type="text" name="email" placeholder="Enter your email or username">
            <input type="password" name="password" placeholder="Enter your password">
            <select name="loginAS" id="loginAS">
                <option value="student">student</option>
                <option value="lecturer">lecturer</option>
            </select>
            <!-- <label for="">Login as</label>
            <input type="checkbox" value="student"><span>Student</span> 
            <input type="checkbox" value="lecturer"><span>lecturer</span> -->
            <input type="submit" name="login_btn" value="submit">
        </form>
    </section>

    <footer>
        back to <a href="index.php">homepage</a> 
    </footer>
</body>
</html>