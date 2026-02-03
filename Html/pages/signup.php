<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/signup.css">

    <title>Sign Up</title>

    
</head>
<body>
  
    
    <div class="signup-section">
        <form action="../../php/signup.php" method="POST">
            <div>
                    <div class="signup-header">
                        <img src="../../assets/images/suv-car.png" alt="logo" class="signup-logo">
                    <h2>G11 Vehicles</h2>
                    </div>
                    <p>Create your account and start exploring vehicles</p>
                </div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <br><br>
            <button type="submit" name="signup">Sign Up</button>
            <br>

            <strong>or</strong>
            <br><br>
            Already have an account? <a href="/G11/Html/pages/login.php" style="text-decoration: none;">Login</a>
            <br><br>
            <a href="/G11/Html/index.php" style="text-decoration: none;">Back to Home</a>

         </form>
    </div>

</body>

</html>
