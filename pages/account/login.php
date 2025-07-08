<?php require ("layouts/stylelogin.php") ?>

<?php

require_once("layouts/stylelogin.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $country_code = $_POST['country_code'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $login_method = $_POST['login_method'] ?? '';
    
    if ($login_method === 'phone') {

        echo "<script>alert('Phone login: " . htmlspecialchars($country_code) . " " . htmlspecialchars($phone_number) . "');</script>";
    } elseif ($login_method === 'google') {

        echo "<script>alert('Google login selected');</script>";
    } elseif ($login_method === 'apple') {

        echo "<script>alert('Apple login selected');</script>";
    } elseif ($login_method === 'email') {

        echo "<script>alert('Email login selected');</script>";
    } elseif ($login_method === 'facebook') {

        echo "<script>alert('Facebook login selected');</script>";
    }
}


$countries = [
    'Cambodia (+855)' => '+855',
    'Thailand (+66)' => '+66',
    'Vietnam (+84)' => '+84',
    'United States (+1)' => '+1',
    'United Kingdom (+44)' => '+44',
    'Australia (+61)' => '+61',
    'Canada (+1)' => '+1',
    'Japan (+81)' => '+81',
    'South Korea (+82)' => '+82',
    'Singapore (+65)' => '+65',
    'Malaysia (+60)' => '+60',
    'Indonesia (+62)' => '+62',
    'Philippines (+63)' => '+63',
    'India (+91)' => '+91',
    'China (+86)' => '+86'
];

$default_country = 'Cambodia (+855)';
?>


   <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <button class="close-btn" onclick="window.history.back();">
                    <i class="fa fa-times"></i>
                </button>
                <h5>Log in or sign up</h5>
                <div></div>
            </div>
            
            <div class="login-body">
                <h4>Welcome to Electo</h4>
                
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="phoneForm">
                    <input type="hidden" name="login_method" value="phone">
                    
                    <div class="form-group">
                        <label class="form-label">Country code</label>
                        <div class="dropdown-custom">
                            <button type="button" class="dropdown-toggle-custom" id="countryDropdown">
                                <span id="selectedCountry"><?php echo $default_country; ?></span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu-custom" id="countryMenu">
                                <?php foreach ($countries as $country => $code): ?>
                                    <div class="dropdown-item-custom" data-country="<?php echo htmlspecialchars($country); ?>">
                                        <?php echo htmlspecialchars($country); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <input type="hidden" name="country_code" id="countryCodeInput" value="<?php echo $default_country; ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Phone number</label>
                        <input type="tel" name="phone_number" class="form-control-custom" placeholder="Phone number" required>
                    </div>
                    
                    <div class="privacy-text">
                        We'll call or text you to confirm your number. Standard message and data rates apply. 
                        <a href="#">Privacy Policy</a>
                    </div>
                    
                    <button type="submit" class="btn-primary-custom">
                        Continue
                    </button>
                </form>
                
                <div class="divider">or</div>
                
                <div>
                
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="display: inline-block; width: 100%;">
                        <input type="hidden" name="login_method" value="google">
                        <button type="submit" class="btn-secondary-custom">
                            <i class="fa fa-google"></i>
                            Continue with Google
                        </button>
                    </form>
                    
        
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="display: inline-block; width: 100%;">
                        <input type="hidden" name="login_method" value="apple">
                        <button type="submit" class="btn-secondary-custom">
                            <i class="fa fa-apple"></i>
                            Continue with Apple
                        </button>
                    </form>
                    
        
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="display: inline-block; width: 100%;">
                        <input type="hidden" name="login_method" value="email">
                        <button type="submit" class="btn-secondary-custom">
                            <i class="fa fa-envelope"></i>
                            Continue with email
                        </button>
                    </form>
                    
        
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="display: inline-block; width: 100%;">
                        <input type="hidden" name="login_method" value="facebook">
                        <button type="submit" class="btn-secondary-custom">
                            <i class="fa fa-facebook"></i>
                            Continue with Facebook
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        const dropdownToggle = document.getElementById('countryDropdown');
        const dropdownMenu = document.getElementById('countryMenu');
        const selectedCountry = document.getElementById('selectedCountry');
        const countryCodeInput = document.getElementById('countryCodeInput');
        const dropdownItems = document.querySelectorAll('.dropdown-item-custom');

        dropdownToggle.addEventListener('click', function(e) {
            e.preventDefault();
            dropdownMenu.classList.toggle('show');
        });


        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const country = this.getAttribute('data-country');
                selectedCountry.textContent = country;
                countryCodeInput.value = country;
                dropdownMenu.classList.remove('show');
            });
        });

        document.addEventListener('click', function(e) {
            if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>