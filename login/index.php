<!DOCTYPE html>
<html>
<head>
    <title> LOGIN </title>
    <link rel="stylesheet" type="text/css" herf="styleslogin.css">
</head>
<body>
    <form action="login.php" method="psot">
        <h2>LOGIN</h2>
        <?php if(isset($_GET["error"])) { ?>
            <p class="error"> <?php echo $_GET["error"]; ?> </p>
        <?php } ?>
        <lable> User Name </lable>
        <input type="text" name="uname" placeholder="User Name"><br>
        <lable>Password</lable>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>