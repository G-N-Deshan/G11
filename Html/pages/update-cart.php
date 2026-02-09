<?php
session_start();
include '../../php/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: /G11/Html/pages/login.php");
    exit();
}
if (!isset($_POST['cart_id']) || !isset($_POST['action'])) {
    header("Location: /G11/Html/pages/cart.php");
    exit();
}
$cart_id = intval($_POST['cart_id']);
$action = $_POST['action'];
$user_id = $_SESSION['user_id'];
$verify_query = "SELECT * FROM cart_items WHERE id = $cart_id AND user_id = $user_id";
$verify_result = mysqli_query($conn, $verify_query);

if (mysqli_num_rows($verify_result) == 0) {
    $_SESSION['cart_error'] = 'Cart item not found';
    header("Location: /G11/Html/pages/cart.php");
    exit();
}

$cart_item = mysqli_fetch_assoc($verify_result);

switch ($action) {
    case 'increase':
        $update_query = "UPDATE cart_items SET quantity = quantity + 1, updated_at = NOW() WHERE id = $cart_id";
        mysqli_query($conn, $update_query);
        $_SESSION['cart_success'] = 'Quantity increased';
        break;
    
    case 'decrease':
        if ($cart_item['quantity'] > 1) {
            $update_query = "UPDATE cart_items SET quantity = quantity - 1, updated_at = NOW() WHERE id = $cart_id";
            mysqli_query($conn, $update_query);
            $_SESSION['cart_success'] = 'Quantity decreased';
        } else {
            $delete_query = "DELETE FROM cart_items WHERE id = $cart_id";
            mysqli_query($conn, $delete_query);
            $_SESSION['cart_success'] = 'Item removed from cart';
        }
        break;
    
    case 'remove':
        $delete_query = "DELETE FROM cart_items WHERE id = $cart_id";
        mysqli_query($conn, $delete_query);
        $_SESSION['cart_success'] = 'Item removed from cart';
        break;
    
    default:
        $_SESSION['cart_error'] = 'Invalid action';
        break;
}

mysqli_close($conn);
header("Location: /G11/Html/pages/cart.php");
exit();
?>
