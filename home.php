<?php
session_start();

#isset = ist eine variable deklariert und nicht null
if(!isset($_SESSION['username'])) {
    header("Location: _index.php");
}


?>


<html>
<head>

</head>
<body>
<?php echo "Welcome".$_SESSION['username']; ?>
<a href="logout.php">Logout</a>
</body>

</html>