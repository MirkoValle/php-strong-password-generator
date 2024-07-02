<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login php</title>
</head>
<body>
    
<a href="../index.php">Home</a>

<form action="../index.php" method="GET">
    <label for="userName">Username</label>
    <input type="text" name="userName" id="userName">

    <label for="userName">Password</label>
    <input type="text" name="password" id="password">

    <button type="submit">Login</button>
</form>


</body>
</html>