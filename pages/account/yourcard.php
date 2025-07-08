 
 <?php require ("layouts/stylesyourcard.php") ?>

 <?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$products = [
    1 => ['name' => 'Wireless Headphones', 'price' => 250.00, 'image' => 'https://images.unsplash.com/photo-1678698611347-37fd52866744?q=80&w=797&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    2 => ['name' => 'Samsung S24 Ultra', 'price' => 850.00, 'image' => 'https://images.unsplash.com/photo-1705585174953-9b2aa8afc174?q=80&w=732&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    3 => ['name' => 'Gaming LED Monitor', 'price' => 1250.00, 'image' => 'https://images.unsplash.com/photo-1608511271453-7b293dc27bce?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D']
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    switch ($_POST['action']) {
        case 'update_quantity':
            $productId = (int)$_POST['product_id'];
            $change = (int)$_POST['change'];
            
            if (!isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId] = 0;
            }
            
            $_SESSION['cart'][$productId] += $change;
            
            if ($_SESSION['cart'][$productId] <= 0) {
                unset($_SESSION['cart'][$productId]);
            }
            
            echo json_encode(['success' => true, 'cart' => $_SESSION['cart']]);
            exit;
            
        case 'remove_item':
            $productId = (int)$_POST['product_id'];
            unset($_SESSION['cart'][$productId]);
            echo json_encode(['success' => true, 'cart' => $_SESSION['cart']]);
            exit;
            
        case 'apply_coupon':
            $couponCode = $_POST['coupon_code'];
            $discount = 0;
            
            // Sample coupon codes
            $validCoupons = [
                'SAVE20' => 20,
                'SAVE10' => 10,
                'WELCOME' => 15
            ];
            
            if (isset($validCoupons[$couponCode])) {
                $_SESSION['discount'] = $validCoupons[$couponCode];
                echo json_encode(['success' => true, 'discount' => $validCoupons[$couponCode], 'message' => 'Coupon applied successfully!']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid coupon code']);
            }
            exit;
            
        case 'get_cart_totals':
            $totals = calculateCartTotals();
            echo json_encode($totals);
            exit;
    }
}

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [1 => 1, 2 => 1, 3 => 1];
}

if (!isset($_SESSION['discount'])) {
    $_SESSION['discount'] = 20; 
}

function calculateCartTotals() {
    global $products;
    
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $productId => $quantity) {
        if (isset($products[$productId])) {
            $subtotal += $products[$productId]['price'] * $quantity;
        }
    }
    
    $discountPercent = isset($_SESSION['discount']) ? $_SESSION['discount'] : 0;
    $discountAmount = ($subtotal * $discountPercent) / 100;
    $total = $subtotal - $discountAmount;
    
    return [
        'subtotal' => $subtotal,
        'discount_percent' => $discountPercent,
        'discount_amount' => $discountAmount,
        'shipping' => 0,
        'total' => $total
    ];
}

$totals = calculateCartTotals();
?>
 
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-container">
                    <div class="cart-header">
                        <h2 class="cart-title">Shopping Cart</h2>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Products</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <?php foreach ($_SESSION['cart'] as $productId => $quantity): ?>
                                    <?php if (isset($products[$productId])): ?>
                                        <tr data-price="<?php echo $products[$productId]['price']; ?>" data-id="<?php echo $productId; ?>">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo $products[$productId]['image']; ?>" 
                                                         alt="<?php echo $products[$productId]['name']; ?>" class="product-img me-3">
                                                    <p class="product-name"><?php echo $products[$productId]['name']; ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price">$<?php echo number_format($products[$productId]['price'], 2); ?></span>
                                            </td>
                                            <td>
                                                <div class="quantity-controls">
                                                    <button class="quantity-btn" onclick="updateQuantity(<?php echo $productId; ?>, -1)">-</button>
                                                    <input type="text" class="quantity-input" value="<?php echo $quantity; ?>" readonly>
                                                    <button class="quantity-btn" onclick="updateQuantity(<?php echo $productId; ?>, 1)">+</button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price subtotal">$<?php echo number_format($products[$productId]['price'] * $quantity, 2); ?></span>
                                            </td>
                                            <td>
                                                <button class="remove-btn" onclick="removeItem(<?php echo $productId; ?>)">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="coupon-section">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="coupon-code" class="form-label">Coupon Code</label>
                                <input type="text" class="form-control coupon-input" id="coupon-code" placeholder="Enter coupon code">
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <button class="btn btn-coupon me-2" onclick="applyCoupon()">Apply Coupon Code</button>
                                <button class="btn btn-update" onclick="updateCart()">Update Cart</button>
                            </div>
                        </div>
                        <div id="coupon-message"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="cart-summary">
                    <div class="summary-row">
                        <span>Subtotal:</span>
                        <span id="subtotal-amount">$<?php echo number_format($totals['subtotal'], 2); ?></span>
                    </div>
                    <div class="summary-row">
                        <span>Discount:</span>
                        <span id="discount-amount"><?php echo $totals['discount_percent']; ?>%</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping:</span>
                        <span id="shipping-amount">Free</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total:</span>
                        <span id="total-amount">$<?php echo number_format($totals['total'], 2); ?></span>
                    </div>
                    <button class="btn btn-checkout" onclick="proceedToCheckout()">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>