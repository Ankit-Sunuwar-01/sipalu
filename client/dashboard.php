<?php
session_start();

include "../includes/db.php";

if (!isset($_SESSION["client_id"])) {
    header("Location: ../login.php");
    exit();
}

$message = "";

if (isset($_POST["book"])) {

    $client_id = $_SESSION["client_id"];
    $service = $_POST["service"];
    $problem = $_POST["problem"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];

    $sql = "INSERT INTO service_requests(client_id, service, problem, contact, address)
        VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn,$sql);

    mysqli_stmt_bind_param(
        $stmt,
        "issss",
        $client_id,
        $service,
        $problem,
        $contact,
        $address
    );

    if(mysqli_stmt_execute($stmt)){
        $message="Booking Submitted Successfully";
    }else{
        $message="Booking Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="../css/client.css">
    </head>
        <body>
        <header>
        <h2>Welcome, <?php echo $_SESSION["client_name"]; ?></h2>
        <a href="../logout.php">Logout</a>
        </header>
        <div class="container">

<?php
if ($message != "") {
    echo "<p class='success'>$message</p>";
}
?>

<h3>Book a Technician</h3>

<form method="POST">

    <label>Select Service</label>
    <select name="service" required>
    <option value="">Choose Service</option>
    <option value="Electrician">Electrician</option>
    <option value="Plumber">Plumber</option>
    <option value="Carpenter">Carpenter</option>
    <option value="Painter">Painter</option>
    <option value="AC Technician">AC Technician</option>
    <option value="CCTV Technician">CCTV Technician</option>
    <option value="Computer Repair">Computer Repair</option>
    </select>

<label>Describe Your Problem</label>

    <textarea
    name="problem"
    placeholder="Write your problem..."
    required></textarea>

    <label>Contact Number</label>
    <input
        type="text"
        name="contact"
        placeholder="Enter your contact number"
        maxlength="10"
        pattern="[0-9]{10}"
        required>

    <label>Service Address</label>

    <input
    type="text"
    name="address"
    placeholder="Enter your address"
    required>

    <input
    type="submit"
    name="book"
    value="Book Technician">

      </form>

     </div>

    </body>

</html>