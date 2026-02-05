<?php
session_start();
include '../../php/db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = '/G11/Html/pages/cart.php';
    $_SESSION['login_message'] = 'Please login to view your cart';
    header("Location: /G11/Html/pages/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Get cart items with product details
$query = "SELECT c.*, p.name, p.price, p.image_url, p.stock 
          FROM cart_items c 
          INNER JOIN products p ON c.product_id = p.id 
          WHERE c.user_id = $user_id 
          ORDER BY c.added_at DESC";

$result = mysqli_query($conn, $query);
$cart_items = [];
$total = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $cart_items[] = $row;
    $total += $row['price'] * $row['quantity'];
}

// Display success message if exists
$success_message = $_SESSION['cart_success'] ?? '';
unset($_SESSION['cart_success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - G11</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Css/navbar.css">
    <link rel="stylesheet" href="../../Css/footer.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .cart-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
        }

        .cart-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .cart-header h1 {
            font-size: 2.5rem;
            color: #0f172a;
            margin: 0;
        }

        .cart-empty {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
        }

        .cart-empty i {
            font-size: 5rem;
            color: #cbd5e1;
            margin-bottom: 1rem;
        }

        .cart-empty h2 {
            color: #475569;
            margin-bottom: 1rem;
        }

        .cart-empty a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.75rem 2rem;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .cart-empty a:hover {
            background: #1e40af;
            transform: translateY(-2px);
        }

        .cart-items {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
            margin-bottom: 2rem;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
            gap: 1.5rem;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 0.5rem;
            background: #f8fafc;
            padding: 0.5rem;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }

        .cart-item-price {
            font-size: 1.1rem;
            color: #2563eb;
            font-weight: 700;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .qty-btn {
            background: #e2e8f0;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .qty-btn:hover {
            background: #cbd5e1;
        }

        .qty-value {
            min-width: 40px;
            text-align: center;
            font-weight: 600;
        }

        .remove-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .remove-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        .cart-summary {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .summary-total {
            border-top: 2px solid #e2e8f0;
            padding-top: 1rem;
            margin-top: 1rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
        }

        .checkout-btn {
            width: 100%;
            padding: 1rem;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .checkout-btn:hover {
            background: #1e40af;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
        }

        .continue-shopping {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #64748b;
            text-decoration: none;
        }

        .continue-shopping:hover {
            color: #2563eb;
        }

        .success-message {
            background: #dcfce7;
            color: #166534;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            text-align: center;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <?php include '../navbar.php'; ?>

    <div class="cart-container">
        <div class="cart-header">
            <h1><i class="bi bi-cart3"></i> Your Shopping Cart</h1>
        </div>

        <?php if (!empty($success_message)): ?>
            <div class="success-message">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>

        <?php if (empty($cart_items)): ?>
            <div class="cart-empty">
                <i class="bi bi-cart-x"></i>
                <h2>Your cart is empty</h2>
                <p>Start shopping to add items to your cart!</p>
                <a href="/G11/Html/pages/buy.php">Browse Products</a>
            </div>
        <?php else: ?>
            <div class="cart-items">
                <?php foreach ($cart_items as $item): ?>
                    <div class="cart-item">
                        <img src="<?php echo htmlspecialchars($item['image_url']); ?>" 
                             alt="<?php echo htmlspecialchars($item['name']); ?>" 
                             class="cart-item-image">
                        
                        <div class="cart-item-details">
                            <div class="cart-item-name"><?php echo htmlspecialchars($item['name']); ?></div>
                            <div class="cart-item-price">Rs. <?php echo number_format($item['price'], 2); ?></div>
                        </div>

                        <div class="cart-item-quantity">
                            <form method="POST" action="update-cart.php" style="display: inline;">
                                <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                <input type="hidden" name="action" value="decrease">
                                <button type="submit" class="qty-btn">-</button>
                            </form>
                            
                            <span class="qty-value"><?php echo $item['quantity']; ?></span>
                            
                            <form method="POST" action="update-cart.php" style="display: inline;">
                                <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                <input type="hidden" name="action" value="increase">
                                <button type="submit" class="qty-btn">+</button>
                            </form>
                        </div>

                        <form method="POST" action="update-cart.php" style="display: inline;">
                            <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                            <input type="hidden" name="action" value="remove">
                            <button type="submit" class="remove-btn">
                                <i class="bi bi-trash"></i> Remove
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="cart-summary">
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span>Rs. <?php echo number_format($total, 2); ?></span>
                </div>
                <div class="summary-row summary-total">
                    <span>Total:</span>
                    <span>Rs. <?php echo number_format($total, 2); ?></span>
                </div>
                <button class="checkout-btn">
                    <i class="bi bi-credit-card"></i> Proceed to Checkout
                </button>
                <a href="/G11/Html/pages/buy.php" class="continue-shopping">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php 
    include '../footer.php'; 
    mysqli_close($conn);
    ?>
</body>
</html>
