<?php
session_start();
include '../../php/db.php';

if (!isset($_SESSION['user_id'])) {
    $current_url = $_SERVER['REQUEST_URI'] ?? '/G11/Html/pages/shop-offers.php';
    $_SESSION['redirect_after_login'] = $current_url;
    $_SESSION['login_message'] = 'Please login to add items to cart';
    header("Location: /G11/Html/pages/login.php");
    exit();
}

if (!isset($_GET['product_id']) || empty($_GET['product_id'])) {
    header("Location: /G11/Html/pages/buy.php");
    exit();
}

$product_id = intval($_GET['product_id']);
$user_id = $_SESSION['user_id'];

$product_check = "SELECT id FROM products WHERE id = $product_id";
$result = mysqli_query($conn, $product_check);

if (mysqli_num_rows($result) == 0) {
    $_SESSION['cart_error'] = 'Product not found';
    header("Location: " . ($_SERVER['HTTP_REFERER'] ?? '/G11/Html/pages/buy.php'));
    exit();
}


$cart_check = "SELECT * FROM cart_items WHERE user_id = $user_id AND product_id = $product_id";
$cart_result = mysqli_query($conn, $cart_check);

if (mysqli_num_rows($cart_result) > 0) {
    $update_query = "UPDATE cart_items SET quantity = quantity + 1, updated_at = NOW() WHERE user_id = $user_id AND product_id = $product_id";
    mysqli_query($conn, $update_query);
    $_SESSION['cart_success'] = 'Item quantity updated in cart!';
} else {
    $insert_query = "INSERT INTO cart_items (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
    mysqli_query($conn, $insert_query);
    $_SESSION['cart_success'] = 'Item added to cart successfully!';
}

mysqli_close($conn);

$redirect_url = $_SERVER['HTTP_REFERER'] ?? '/G11/Html/pages/cart.php';
if (strpos($redirect_url, 'login.php') !== false || strpos($redirect_url, 'add-to-cart.php') !== false) {
    $redirect_url = '/G11/Html/pages/cart.php';
}
header("Location: $redirect_url");
exit();
?>