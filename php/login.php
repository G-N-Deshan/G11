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
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                
               $redirect_url = $_SESSION['redirect_after_login'] ?? '/G11/Html/pages/buy.php';
                unset($_SESSION['redirect_after_login']); 

               if (strpos($redirect_url, 'add-to-cart.php') !== false) {
                    header("Location: $redirect_url");
                } else {
                    $separator = (strpos($redirect_url, '?') !== false) ? '&' : '?';
                    header("Location: {$redirect_url}{$separator}login=success");
                }
                exit();

            } else {
                header("Location: /G11/Html/pages/login.php");
                exit();
            }
        } else {
            header("Location: /G11/Html/pages/login.php");
            exit();
        }

        mysqli_close($conn);
    }
?>