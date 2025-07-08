<?php require ("layouts/styleswishlist.php") ?>


 <?php 
require_once("layouts/styleswishlist.php");


$wishlist_items = [
    [
        'id' => 1,
        'name' => 'iPhone 15 Pro',
        'price' => 2250.00,
        'image' => 'https://images.unsplash.com/photo-1695619575474-9b45e37bc1e6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'stock_status' => 'In Stock',
        'stock_class' => 'stock-in'
    ],
    [
        'id' => 2,
        'name' => 'Gaming LED Monitor',
        'price' => 250.00,
        'image' => 'https://images.unsplash.com/photo-1608511271453-7b293dc27bce?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'stock_status' => 'In Stock',
        'stock_class' => 'stock-in'
    ],
    [
        'id' => 3,
        'name' => 'Wireless Headphones',
        'price' => 150.00,
        'image' => 'https://images.unsplash.com/photo-1678698611347-37fd52866744?q=80&w=797&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'stock_status' => 'In Stock',
        'stock_class' => 'stock-in'
    ],
    [
        'id' => 4,
        'name' => 'Samsung S24 Ultra',
        'price' => 850.00,
        'image' => 'https://images.unsplash.com/photo-1705585174953-9b2aa8afc174?q=80&w=732&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'stock_status' => 'In Stock',
        'stock_class' => 'stock-in'
    ],
    [
        'id' => 5,
        'name' => 'MacBook Pro',
        'price' => 1250.00,
        'image' => 'https://images.unsplash.com/photo-1646052828823-7362eb4ef7a1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'stock_status' => 'In Stock',
        'stock_class' => 'stock-in'
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? '';
    $product_id = $_POST['product_id'] ?? '';
    
    header('Content-Type: application/json');
    
    switch ($action) {
        case 'add_to_cart':
            echo json_encode([
                'success' => true,
                'message' => 'Product added to cart successfully!'
            ]);
            exit;
            
        case 'remove_from_wishlist':
            echo json_encode([
                'success' => true,
                'message' => 'Product removed from wishlist!'
            ]);
            exit;
            
        default:
            echo json_encode([
                'success' => false,
                'message' => 'Invalid action'
            ]);
            exit;
    }
}

$total_value = array_sum(array_column($wishlist_items, 'price'));
?>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="wishlist-container">
                    <div class="wishlist-header">
                        <h2 class="wishlist-title">
                            <i class="fas fa-heart text-danger me-2"></i>
                            My Wishlist
                        </h2>
                        <div class="wishlist-stats">
                            <div class="stat-item">
                                <p class="stat-value"><?php echo count($wishlist_items); ?></p>
                                <p class="stat-label">Items</p>
                            </div>
                            <div class="stat-item">
                                <p class="stat-value">$<?php echo number_format($total_value, 2); ?></p>
                                <p class="stat-label">Total Value</p>
                            </div>
                        </div>
                    </div>
                    
                    <?php if (empty($wishlist_items)): ?>
                        <div class="empty-wishlist">
                            <i class="fas fa-heart-broken"></i>
                            <h3>Your wishlist is empty</h3>
                            <p>Start adding items you love to your wishlist!</p>
                            <a href="products.php" class="btn-continue-shopping">
                                <i class="fas fa-shopping-bag me-2"></i>
                                Continue Shopping
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($wishlist_items as $item): ?>
                                        <tr id="wishlist-item-<?php echo $item['id']; ?>">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo htmlspecialchars($item['image']); ?>" 
                                                         alt="<?php echo htmlspecialchars($item['name']); ?>" 
                                                         class="product-img me-3">
                                                    <div>
                                                        <p class="product-name"><?php echo htmlspecialchars($item['name']); ?></p>
                                                        <small class="text-muted">ID: #<?php echo $item['id']; ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price">$<?php echo number_format($item['price'], 2); ?></span>
                                            </td>
                                            <td>
                                                <span class="<?php echo $item['stock_class']; ?>">
                                                    <?php echo $item['stock_status']; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn btn-add-cart" 
                                                            onclick="addToCart(<?php echo $item['id']; ?>)"
                                                            data-product-id="<?php echo $item['id']; ?>">
                                                        <i class="fas fa-cart-plus me-1"></i>
                                                        Add To Cart
                                                    </button>
                                                    <button class="btn-remove" 
                                                            onclick="removeFromWishlist(<?php echo $item['id']; ?>)"
                                                            title="Remove from wishlist">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4 text-center">
                            <a href="products.php" class="btn-continue-shopping">
                                <i class="fas fa-shopping-bag me-2"></i>
                                Continue Shopping
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>