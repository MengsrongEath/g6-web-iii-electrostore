<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .cart-container {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .cart-title {
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .product-img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
        }
        
        .product-name {
            margin: 0;
            font-weight: 500;
            color: #333;
        }
        
        .price {
            font-weight: 600;
            color: #e74c3c;
            font-size: 16px;
        }
        
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .quantity-btn {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            width: 35px;
            height: 35px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .quantity-btn:hover {
            background: #e9ecef;
        }
        
        .quantity-input {
            width: 60px;
            text-align: center;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            height: 35px;
        }
        
        .remove-btn {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .remove-btn:hover {
            background: #f8f9fa;
        }
        
        .coupon-section {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #dee2e6;
        }
        
        .coupon-input {
            height: 45px;
        }
        
        .btn-coupon, .btn-update {
            height: 45px;
            padding: 0 20px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-coupon {
            background: #007bff;
            color: white;
            border: none;
        }
        
        .btn-coupon:hover {
            background: #0056b3;
        }
        
        .btn-update {
            background: #28a745;
            color: white;
            border: none;
        }
        
        .btn-update:hover {
            background: #1e7e34;
        }
        
        .cart-summary {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 20px;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .summary-row.total {
            border-bottom: none;
            font-weight: 600;
            font-size: 18px;
            color: #333;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #dee2e6;
        }
        
        .btn-checkout {
            width: 100%;
            background: #e74c3c;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            margin-top: 20px;
            transition: all 0.3s;
        }
        
        .btn-checkout:hover {
            background: #c0392b;
        }
        
        .wishlist-container {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .wishlist-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }
        
        .wishlist-title {
            color: #333;
            font-weight: 600;
            margin: 0;
        }
        
        .wishlist-stats {
            display: flex;
            gap: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: 600;
            color: #e74c3c;
            margin: 0;
        }
        
        .stat-label {
            color: #666;
            font-size: 14px;
            margin: 0;
        }
        
        .btn-add-cart {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
            margin-right: 10px;
        }
        
        .btn-add-cart:hover {
            background: #c0392b;
            color: white;
        }
        
        .btn-success {
            background: #28a745 !important;
        }
        
        .btn-remove {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .btn-remove:hover {
            background: #c82333;
        }
        
        .action-buttons {
            display: flex;
            align-items: center;
        }
        
        .stock-in {
            color: #28a745;
            font-weight: 600;
        }
        
        .stock-out {
            color: #dc3545;
            font-weight: 600;
        }
        
        .empty-wishlist {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }
        
        .empty-wishlist i {
            font-size: 64px;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        
        .empty-wishlist h3 {
            color: #333;
            margin-bottom: 15px;
        }
        
        .btn-continue-shopping {
            background: #007bff;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .btn-continue-shopping:hover {
            background: #0056b3;
            color: white;
            text-decoration: none;
        }
        
        .navigation-tabs {
            margin-bottom: 30px;
        }
        
        .nav-tab {
            background: #f8f9fa;
            color: #666;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-weight: 500;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .nav-tab.active {
            background: #e74c3c;
            color: white;
        }
        
        .nav-tab:hover {
            background: #e9ecef;
            color: #333;
            text-decoration: none;
        }
        
        .nav-tab.active:hover {
            background: #c0392b;
            color: white;
        }
        
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }
    </style>