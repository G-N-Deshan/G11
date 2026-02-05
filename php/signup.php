<?php   
    session_start();
    include 'db.php';

    if(isset($_POST['signup'])){
        
        $username = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $address = trim($_POST['address']);
        $phone_number = trim($_POST['phone']);
        $password = $_POST['password'];

        
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = "Invalid email format!";
            header("Location: /G11/Html/pages/signup.php");
            exit();
        }

    
        if(strlen($password) < 6){
            $_SESSION['error'] = "Password must be at least 6 characters!";
            header("Location: /G11/Html/pages/signup.php");
            exit();
        }

        
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $check_email);
        
        if(mysqli_num_rows($result) > 0){
            $_SESSION['error'] = "Email already registered!";
            header("Location: /G11/Html/pages/signup.php");
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, address, phone_number, password_hash) VALUES ('$username', '$email', '$address', '$phone_number', '$hashed_password')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Signup successful! Please login.";
            header("Location: /G11/Html/pages/login.php");
            exit();
        } else {
            $_SESSION['error'] = "Error: cannot sign up. " . mysqli_error($conn);
            header("Location: /G11/Html/pages/signup.php");
            exit();
        }

        mysqli_close($conn);

    }
?>