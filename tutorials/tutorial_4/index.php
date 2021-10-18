<?php
session_start();
$user = isset($_SESSION['user']);
?>
<!doctype html>
<html>

<head>
    <title>UserLogin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrap">

        <?php if ($user) { ?>
            <h1>Welcome</h1>
            <p><span>Hello!</span>
                <b><?php echo $_SESSION['id'] ?></b>
            </p>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <h1>Please login</h1>
            <form action="login.php" method="post">
                <label for="id">User ID</label>
                <input type="text" name="id" id="id">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Login">
            </form>
        <?php } ?>
    </div>
</body>

</html>