<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if the necessary POST variables are set
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if (!empty($email) && !empty($password)) {
        // Check if the connection is successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM form WHERE email = ? LIMIT 1");
        
        // Check if prepare() succeeded
        if ($stmt === false) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Directly compare plain text passwords
            if ($password === $user_data['password']) {
                $_SESSION['user_id'] = $user_data['id'];
                $_SESSION['user_email'] = $user_data['email'];
                
                // Redirect to a protected page, for example
                header("Location: courses.php");
                echo "<script type='text/javascript'> alert('Login successful!');</script>";
                
                
                die;
            } else {
                echo "<script type='text/javascript'> alert('Incorrect password!');</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('User not found!');</script>";
        }

        $stmt->close();
    } else {
        echo "<script type='text/javascript'> alert('Please complete all fields');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="login">
        <div class="login-text">
            <h1>LOGIN</h1>
            <h2>INFORMATION ASSURANCE & SECURITY</h2>
            <h2>BSIT 607</h2>
        </div>
       
        <form method="POST">
            <label for="email"></label>
            <input type="text" name="email" required placeholder="Username">
            <label for="password"></label>
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up Here</a></p>
    </div>
</body>
</html>
