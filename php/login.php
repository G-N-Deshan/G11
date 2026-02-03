<?php
    session_start();
    include 'db.php';

    if(isset($_POST['login'])){
        
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){

            $user = mysqli_fetch_assoc($result);

            if(password_verify($password, $user['password_hash'])){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                
                header("Location: ../Html/pages/vehicles.html?login=success");
                exit();

            } else {
                header("Location: ../Html/pages/login.html");
                exit();
            }
        } else {
            header("Location: ../Html/pages/login.html");
            exit();
        }

        mysqli_close($conn);
    }
?>