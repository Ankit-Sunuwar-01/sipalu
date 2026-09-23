<?php
include "includes/db.php";
session_start();

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM clients WHERE username=?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)>0){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row["password"])){

            $_SESSION["client_id"] = $row["id"];
            $_SESSION["client_name"] = $row["fullname"];

            header("Location: client/dashboard.php");
            exit();
        }
    }

    $sql = "SELECT * FROM technicians WHERE username=?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)>0){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row["password"])){

            $_SESSION["technician_id"] = $row["id"];
            $_SESSION["technician_name"] = $row["fullname"];

            header("Location: technicians/dashboard.php");
            exit();
        }
    }

    echo "<script>alert('Invalid Username or Password');</script>";
}

$sql = "SELECT * FROM admin WHERE username=?";
$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_bind_param($stmt,"s",$username);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result)>0){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password,$row["password"])){

        $_SESSION["admin_id"] = $row["id"];
        $_SESSION["admin_username"] = $row["username"];

        header("Location: admin/dashboard.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
            </form>

        <p>Don't have an account?
        <a href="register.php">Register</a>
        </p>
        </div>

    </body>
</html>