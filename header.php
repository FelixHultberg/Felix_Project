<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Random1</a></li>
                <li><a href="#">Random2</a></li>
                <li><a href="#">Random3</a></li>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>
</html>