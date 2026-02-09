<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$is_logged_in = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? 'Guest';
?>

<section class="section-0">
    <nav class="navbar">
        <div>
            <a href="/G11/Html/index.php"><img src="/G11/assets/images/bird_2.jpg" alt="logo" class="nav-logo"></a>
            <button><a href="/G11/Html/index.php" class="nav-link nav-link--home">Home</a></button>
            <button><a href="/G11/Html/pages/buy.php" class="nav-link nav-link--vehicles">BUY</a></button>
            <button><a href="/G11/Html/pages/reviews.php" class="nav-link nav-link--reviews">Reviews</a></button>
            <button><a href="/G11/Html/pages/contact.php" class="nav-link nav-link--contact">Contact</a></button>
            <button><a href="/G11/Html/pages/about.php" class="nav-link nav-link--about">About</a></button>
            
            <?php if ($is_logged_in): ?>
                <button class="user-profile-btn" title="<?php echo htmlspecialchars($username); ?>">
                    <a href="/G11/Html/pages/user-profile.php" class="nav-link">
                        <i class="bi bi-person-circle"></i> <?php echo htmlspecialchars($username); ?>
                    </a>
                </button>
                <button class="logout-btn"><a href="/G11/php/logout.php" class="nav-link nav-link--logout">Logout</a></button>
            <?php else: ?>
                <button class="login-btn"><a href="/G11/Html/pages/login.php" class="nav-link nav-link--login">Login</a></button>
            <?php endif; ?>
        </div>
    </nav>
</section>

<?php include 'cart.php'; ?>
