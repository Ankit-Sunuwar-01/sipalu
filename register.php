<?php

include "includes/db.php";

if(isset($_POST["register"])){

    $role = $_POST["role"];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if($role == "client"){

        $sql = "INSERT INTO clients(fullname,username,email,phone,address,password)
                VALUES(?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn,$sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssssss",
            $fullname,
            $username,
            $email,
            $phone,
            $address,
            $password
        );

        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Client Registered Successfully');window.location='login.php';</script>";
            exit();
        }else{
            die(mysqli_error($conn));
        }

    }else{

        $skill = $_POST["skill"];
        $experience = $_POST["experience"];
        $description = $_POST["description"];

        $sql = "INSERT INTO technicians(fullname,username,email,phone,address,skill,experience,description,password)
                VALUES(?,?,?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn,$sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssssssiss",
            $fullname,
            $username,
            $email,
            $phone,
            $address,
            $skill,
            $experience,
            $description,
            $password
        );

        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Technician Registered Successfully');window.location='login.php';</script>";
            exit();
        }else{
            die(mysqli_error($conn));
        }

    }

}

?>

<!DOCTYPE html>
<html>
        <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register | SIPALU</title>
            <link rel="stylesheet" href="css/register.css">

        </head>

        <body>
        <div class="register-container">
            <h2>Create Your Account</h2>

        <form method="POST">
        <label>Register As</label>
        <select name="role" id="role">
        <option value="client">Client</option>
        <option value="technician">Technician</option>
        </select>

        <input
        type="text"
        name="fullname"
        placeholder="Full Name"
        required>

        <input
        type="text"
        name="username"
        placeholder="Username"
        required>

        <input
        type="email"
        name="email"
        placeholder="Email Address"
        required>

        <input
        type="text"
        name="phone"
        placeholder="Phone Number"
        required>

        <input
        type="text"
        name="address"
        placeholder="Address"
        required>

        <div id="technician-fields" style="display:none;">

        <input
        type="text"
        name="skill"
        placeholder="Skill">

        <input
        type="number"
        name="experience"
        placeholder="Years of Experience">

        <textarea
        name="description"
        placeholder="Describe your experience"></textarea>

        </div>

        <input
        type="password"
        name="password"
        placeholder="Password"
        required>

        <input
        type="submit"
        name="register"
        value="Register">

        </form>

<p>

Already have an account?

<a href="login.php">Login</a>

</p>

</div>

<script>

const role=document.getElementById("role");
const tech=document.getElementById("technician-fields");

function showFields(){

    if(role.value=="technician"){
        tech.style.display="block";
    }else{
        tech.style.display="none";
    }

}

showFields();

role.addEventListener("change",showFields);

</script>

</body>
</html>