<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - SecureVPN' : 'SecureVPN - Fast, Secure, and Private VPN Service'; ?></title>
    <meta name="description" content="SecureVPN - Fast, secure, and private VPN service. Protect your online privacy with military-grade encryption, global servers, and no-logs policy.">
    
    <!-- Favicon - Lock Icon matching the logo -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><defs><linearGradient id='grad' x1='0%25' y1='0%25' x2='100%25' y2='100%25'><stop offset='0%25' style='stop-color:%236B46C1;stop-opacity:1' /><stop offset='50%25' style='stop-color:%239F7AEA;stop-opacity:1' /><stop offset='100%25' style='stop-color:%2306B6D4;stop-opacity:1' /></linearGradient></defs><path fill='url(%23grad)' d='M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z'/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68df7606ac3c3519538e1921/1j6kea2p3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader">
            <div class="plate-icon">
                <i class="fas fa-lock"></i>
            </div>
            <div class="loading-text">SecureVPN</div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php">
                        <i class="fas fa-lock"></i>
                        <span>SecureVPN</span>
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servers.php" class="nav-link">
                                <i class="fas fa-server"></i>
                                <span>Servers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.php" class="nav-link">
                                <i class="fas fa-tags"></i>
                                <span>Pricing</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="features.php" class="nav-link">
                                <i class="fas fa-shield-alt"></i>
                                <span>Features</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fas fa-info-circle"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fas fa-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Cookie Popup -->
    <div id="cookie-popup-overlay" class="cookie-popup-overlay">
        <div class="cookie-popup-card">
            <button class="cookie-close-btn" id="cookie-close-btn">
                <i class="fas fa-times"></i>
            </button>
            <div class="cookie-popup-content">
                <div class="cookie-icon">
                    <i class="fas fa-cookie-bite"></i>
                </div>
                <h3 class="cookie-title">Cookie Notice</h3>
                <p class="cookie-text">
                    We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. 
                    By clicking "Accept All", you consent to our use of cookies.
                </p>
                <div class="cookie-buttons">
                    <button class="btn btn-primary cookie-btn" id="cookie-accept-btn">
                        <i class="fas fa-check"></i>
                        <span>Accept All</span>
                    </button>
                    <button class="btn btn-secondary cookie-btn" id="cookie-reject-btn">
                        <i class="fas fa-times"></i>
                        <span>Reject All</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
