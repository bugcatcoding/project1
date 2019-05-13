<?php
    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username;
        echo $password;
    }
    echo "lololo";
    echo "wowowowowowow"
    echo "mijiij";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="post">
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit">

    </form>
</body>
</html>