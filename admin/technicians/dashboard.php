<?php

session_start();
require_once "../includes/db.php";

if (!isset($_SESSION["technician_id"])) {
    header("Location: ../login.php");
    exit();
}

$sql = "SELECT * FROM service_requests ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Technician Dashboard</title>

<link rel="stylesheet" href="../css/technicians.css">

</head>

    <body>

    <header>

<h2>Technician Dashboard</h2>

<a href="../logout.php">Logout</a>

</header>

<div class="container">

<h3>Available Service Requests</h3>

<table>

        <tr>
        <th>ID</th>
        <th>Service</th>
        <th>Problem</th>
        <th>Address</th>
        <th>Status</th>
        </tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["service"]; ?></td>
        <td><?php echo $row["problem"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
        </tr>
<?php
}
?>
            </table>
         </div>
        </body>
</html>