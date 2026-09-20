<?php

session_start();
require_once "../includes/db.php";

if (!isset($_SESSION["admin_id"])) {
    header("Location: ../login.php");
    exit();
}

$sql = "SELECT id, service, problem, contact, address, status, created_at
        FROM service_requests
        ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/admin.css">


<link rel="stylesheet" href="../css/style.css">

</head>

<body>

<header>

<h2>Admin Dashboard</h2>

<a href="../logout.php">Logout</a>

</header>

<div class="container">
    <div class="admin-menu">

    <a href="clients.php">Manage Clients</a>

    <a href="technicians.php">Manage Technicians</a>

    <a href="dashboard.php">Service Requests</a>

</div>

<h3>Service Requests</h3>

<table>

<tr>
    <th>ID</th>
    <th>Service</th>
    <th>Problem</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Status</th>
    <th>Created At</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>

    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["service"]; ?></td>

    <td><?php echo $row["problem"]; ?></td>

    <td><?php echo $row["contact"]; ?></td>

    <td><?php echo $row["address"]; ?></td>

    <td><?php echo $row["status"]; ?></td>

    <td><?php echo $row["created_at"]; ?></td>

</tr>

<?php

}

?>

</table>

</div>

</body>

</html>