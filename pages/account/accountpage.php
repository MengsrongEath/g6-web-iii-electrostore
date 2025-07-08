
<?php require ("layouts/stylesaccout.php") ?>

<div class="container my-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Account</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4">
            <div class="account-sidebar">
                <div class="nav flex-column nav-pills" id="account-nav">
                    <a class="nav-link active" href="#" data-section="details">
                        <i class="fas fa-user me-2"></i> My details
                    </a>
                    <a class="nav-link" href="#" data-section="address">
                        <i class="fas fa-map-marker-alt me-2"></i> My address book
                    </a>
                    <a class="nav-link" href="#" data-section="orders">
                        <i class="fas fa-shopping-bag me-2"></i> My orders
                    </a>
                    <a class="nav-link" href="#" data-section="newsletters">
                        <i class="fas fa-envelope me-2"></i> My newsletters
                    </a>
                    <a class="nav-link" href="#" data-section="settings">
                        <i class="fas fa-cog me-2"></i> Account settings
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8">
            <div class="account-content">
                <!-- My Details Section -->
                <div id="details-section" class="content-section active">
                    <h2 class="section-title mb-4">My details</h2>
                    
                    <!-- Personal Information Section -->
                    <div class="info-section">
                        <h4 class="mb-3">Personal Information</h4>
                        <p class="info-text mb-4">
                            Assertively utilize adaptive customer service for future-proof platforms. 
                            Completely drive optimal markets.
                        </p>
                        
                        <form id="personal-info-form">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="Mateusz" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Second Name</label>
                                    <input type="text" class="form-control" id="lastName" value="Wierzbicki" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="birthDate" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" id="birthDate" value="1990-01-01">
                                </div>
                                <div class="col-md-6">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" value="123456789" required>
                                    <div class="form-text">Keep 9-digit format with no spaces and dashes.</div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger btn-save">
                                <i class="fas fa-save me-2"></i> Save
                            </button>
                        </form>
                    </div>
                    
                    <!-- Section Divider -->
                    <div class="section-divider my-4"></div>
                    
                    <!-- Email Address Section -->
                    <div class="info-section">
                        <h4 class="mb-3">E-mail address</h4>
                        <p class="info-text mb-4">
                            Assertively utilize adaptive customer service for future-proof platforms. 
                            Completely drive optimal markets.
                        </p>
                        
                        <form id="email-form">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="emailAddress" class="form-label">E-mail Address</label>
                                    <input type="email" class="form-control" id="emailAddress" value="email@example.pl" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger btn-save">
                                <i class="fas fa-save me-2"></i> Save
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Address Book Section -->
                <div id="address-section" class="content-section">
                    <h2 class="section-title mb-4">My address book</h2>
                    
                    <div class="info-section">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Saved Addresses</h4>
                            <button class="btn btn-outline-danger" id="add-address-btn">
                                <i class="fas fa-plus me-2"></i> Add New Address
                            </button>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="address-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Home Address</h6>
                                            <p class="card-text">
                                                123 Main Street<br>
                                                Warsaw, 00-001<br>
                                                Poland
                                            </p>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Section -->
                <div id="orders-section" class="content-section">
                    <h2 class="section-title mb-4">My orders</h2>
                    
                    <div class="info-section">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#12345</td>
                                        <td>2024-01-15</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>$299.99</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                            <button class="btn btn-sm btn-outline-secondary">Reorder</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#12346</td>
                                        <td>2024-01-20</td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                        <td>$149.99</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Newsletters Section -->
                <div id="newsletters-section" class="content-section">
                    <h2 class="section-title mb-4">My newsletters</h2>
                    
                    <div class="info-section">
                        <h4 class="mb-3">Newsletter Preferences</h4>
                        <p class="info-text mb-4">
                            Stay updated with the latest deals and product announcements.
                        </p>
                        
                        <form id="newsletter-form">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter-deals" checked>
                                    <label class="form-check-label" for="newsletter-deals">
                                        Weekly deals and promotions
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter-products">
                                    <label class="form-check-label" for="newsletter-products">
                                        New product announcements
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter-updates">
                                    <label class="form-check-label" for="newsletter-updates">
                                        Account updates and notifications
                                    </label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger btn-save">
                                <i class="fas fa-save me-2"></i> Save Preferences
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Settings Section -->
                <div id="settings-section" class="content-section">
                    <h2 class="section-title mb-4">Account settings</h2>
                    
                    <div class="info-section">
                        <h4 class="mb-3">Change Password</h4>
                        <p class="info-text mb-4">
                            Keep your account secure by using a strong password.
                        </p>
                        
                        <form id="password-form">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="currentPassword" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="currentPassword" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="newPassword" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="newPassword" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger btn-save">
                                <i class="fas fa-save me-2"></i> Change Password
                            </button>
                        </form>
                    </div>
                    
                    <div class="section-divider my-4"></div>
                    
                    <div class="info-section">
                        <h4 class="mb-3">Account Actions</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-outline-warning w-100 mb-2">
                                    <i class="fas fa-download me-2"></i> Download My Data
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-outline-danger w-100 mb-2">
                                    <i class="fas fa-trash me-2"></i> Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>