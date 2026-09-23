<?php

session_start();
require_once "../includes/db.php";

if (!isset($_SESSION["admin_id"])) {
    header("Location: ../login.php");
    exit();
}

$sql = "SELECT id, fullname, username, email, created_at
        FROM clients
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Clients</title>

<link rel="stylesheet" href="../css/style.css">

</head>

<body>

<header>

    <h2>Manage Clients</h2>

    <a href="../logout.php">Logout</a>

</header>

<div class="container">

    <div class="admin-menu">

        <a href="dashboard.php">Service Requests</a>

        <a href="clients.php">Manage Clients</a>

        <a href="technicians.php">Manage Technicians</a>

    </div>

    <h3>Registered Clients</h3>

    <table>

        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Registered Date</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["fullname"]; ?></td>

            <td><?php echo $row["username"]; ?></td>

            <td><?php echo $row["email"]; ?></td>

            <td><?php echo $row["created_at"]; ?></td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>

</html>