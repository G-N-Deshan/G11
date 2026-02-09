<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/login.css">
    <title>Login</title>
</head>
<body>
    <?php 
    session_start();
    $login_message = $_SESSION['login_message'] ?? '';
    unset($_SESSION['login_message']);
    ?>
    
    <div class="login-section">
        <form action="../../php/login.php" method="POST">
            <div>
                    <div class="login-header">
                        <img src="../../assets/images/key.png" alt="logo" class="login-logo">
                    <h2>G11 Vehicles</h2>
                    </div>
                    <p>Welcome back! Please login to your account</p>
                    <?php if (!empty($login_message)): ?>
                        <p style="color: #ef4444; font-weight: 600; margin: 10px 0; padding: 10px; background: #fee2e2; border-radius: 5px;">
                            <?php echo htmlspecialchars($login_message); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter your username">
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">
            <br><br>

            <button type="submit" name="login">Login</button>
            <br>

            <strong>or</strong>
            <br><br>
            Don't have an account? <a href="/G11/Html/pages/signup.php" style="text-decoration: none;">Sign Up</a>
            <br><br>
            <a href="/G11/Html/index.php" style="text-decoration: none;">Back to Home</a>

         </form>
    </div>

</body>
</html>
