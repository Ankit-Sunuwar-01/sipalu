<?php
session_start();

if(!isset($_SESSION["technician_id"])){
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Technician Dashboard</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION["technician_name"]; ?></h1>

<p>This is the Technician Dashboard.</p>

<a href="../logout.php">Logout</a>

</body>
</html>