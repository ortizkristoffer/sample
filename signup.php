<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $gender = $_POST['gender'];
    $contact_num = $_POST['contactNum'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!empty($email) && !empty($pass) && !is_numeric($email)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO form (fname, lname, gender, contactNum, address, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $first_name, $last_name, $gender, $contact_num, $address, $email, $pass);

        if ($stmt->execute()) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Registration Failed')</script>";
        }

        $stmt->close();
    } else {
        echo "<script type='text/javascript'> alert('Please complete all fields correctly')</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="signup">
        <div class="sign-up-text">
            <h1>Sign Up</h1>
            <h2>INFORMATION ASSURANCE & SECURITY</h2>
            <h2>BSIT 607</h2>
        </div>
        
        <form method="POST">
            <label for="">First Name</label>
            <input type="text" name="fname" required>
            <label for="">Last Name</label>
            <input type="text" name="lname" required>
            <label for="">Gender</label>
            <input type="text" name="gender" required>
            <label for="">Contact No.</label>
            <input type="text" name="contactNum" required>
            <label for="">Address</label>
            <input type="text" name="address" required>
            <label for="">Email</label>
            <input type="text" name="email" required>
            <label for="">Password</label>
            <input type="password" name="password" required>
            <input type="submit" value="Submit">
        </form>
        
        <p>Already have an account? <a href="index.php">Login Here</a></p>
    </div>
</body>
</html>
