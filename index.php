<?php

session_start();

require_once __DIR__ . "/src/users.php";

if(isset($_GET["userName"])){$_SESSION["userName"] = $_GET["userName"];};
if(isset($_GET["password"])){$_SESSION["password"] = $_GET["password"];};

$userName = "nullo";
$password = "nullo";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>

<?php if($userName == "nullo" && $password == "nullo"){?>
    <a href='./src/login.php'>Login</a>
<?php } ?>

<a href="./src/logout.php">Logout</a>

<?php foreach ($users as $user) {
    if($_SESSION["userName"] == $user["username"] && $_SESSION["password"] == $user["password"]){
        $userName = $_SESSION["userName"];
        $password = $_SESSION["password"];
    } else{
        
    }
}?>

<?php 
if($userName == "nullo" && $password == "nullo"){
    echo "<h1>" . "Effettua il Login" . "</h1>" ;
} elseif( $userName == $user["username"] && $password == $_SESSION["password"]){
    echo "<h1>" . "Benvenut*: " . $_SESSION["userName"] . "</h1>" ;
} else{
    header('location: ./src/login.php');
}
?>

</body>
</html>