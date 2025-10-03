               <?php
$page_title = "Home";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-slider">
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1551808525-51a94da548ce?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>
        </div>

        <div class="hero-content">
            <h1 class="hero-title">Secure Your Online Privacy</h1>
            <p class="hero-subtitle">Fast, Secure VPN Service with Global Servers and Military-Grade Encryption</p>
            <div class="hero-cta">
                <button id="connect-btn" class="btn btn-primary connect-btn">
                    <i class="fas fa-play"></i>
                    <span>Connect</span>
                </button>
                <a href="#servers" class="btn btn-secondary">
                    <i class="fas fa-server"></i>
                    <span>View Servers</span>
                </a>
            </div>
        </div>

        <div class="hero-nav">
            <span class="hero-dot active"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
            <span class="hero-dot"></span>
        </div>
    </section>

    <!-- Server Locations Section -->
    <section class="section servers" id="servers">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Global Server Network</h2>
                <p class="section-subtitle animate-on-scroll">Connect to our worldwide network of high-speed VPN servers</p>
            </div>

            <div class="servers-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/us.png" alt="United States Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>United States</h3>
                    <p>High-speed servers across multiple cities with 1000+ Mbps speed, 25 optimized servers, and 10ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/gb.png" alt="United Kingdom Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>United Kingdom</h3>
                    <p>London and Manchester servers offering 800+ Mbps speed with 12 popular servers and 15ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/de.png" alt="Germany Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>Germany</h3>
                    <p>Frankfurt and Berlin data centers providing 900+ Mbps speed with 15 secure servers and 12ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/jp.png" alt="Japan Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>Japan</h3>
                    <p>Tokyo servers with ultra-low latency, 950+ Mbps speed, 8 fast servers, and 8ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/ca.png" alt="Canada Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>Canada</h3>
                    <p>Toronto and Vancouver servers delivering 750+ Mbps speed with 10 private servers and 20ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <img src="https://flagcdn.com/w80/au.png" alt="Australia Flag" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                    </div>
                    <h3>Australia</h3>
                    <p>Sydney and Melbourne servers with 700+ Mbps speed and 8 sunny servers and 25ms latency.</p>
                    <button class="btn btn-primary connect-btn" data-connected="false">
                        <i class="fas fa-play"></i>
                        <span>Connect</span>
                    </button>
                </div>
            </div>
    </section>

    <!-- Third-Party VPN Apps Section -->
    <section class="section third-party-vpns" id="third-party">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Popular Third-Party VPN Apps</h2>
                <p class="section-subtitle animate-on-scroll">Explore other great VPN options for enhanced security</p>
            </div>

            <div class="third-party-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>NordVPN</h3>
                    <p>Leading VPN with advanced security features, fast speeds, and a strict no-logs policy. Perfect for streaming and torrenting.</p>
                    <a href="https://nordvpn.com/download/" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i>
                        <span>Download Now</span>
                    </a>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Proton VPN</h3>
                    <p>Privacy-focused VPN by ProtonMail creators, with free tier, no-logs policy, and secure core servers.</p>
                    <a href="https://protonvpn.com/" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i>
                        <span>Download Now</span>
                    </a>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-fish"></i>
                    </div>
                    <h3>Surfshark</h3>
                    <p>Affordable VPN with unlimited devices, strong encryption, and a user-friendly interface. Great for families and multi-device users.</p>
                    <a href="https://surfshark.com/download" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i>
                        <span>Download Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="section about" id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">About SecureVPN</h2>
                <p class="section-subtitle animate-on-scroll">Your trusted partner for online privacy and security</p>
            </div>

            <div class="about-content">
                <div class="about-text animate-on-scroll">
                    <h3>Why Choose SecureVPN?</h3>
                    <p>We are a team of cybersecurity experts dedicated to protecting your online privacy. Our advanced VPN technology ensures your data is encrypted and secure from hackers, ISPs, and surveillance.</p>
                    <p>More than just a VPN, we provide comprehensive online security solutions that make browsing safe and private.</p>

                    <ul class="about-features">
                        <li><i class="fas fa-check-circle"></i>Military-grade encryption</li>
                        <li><i class="fas fa-check-circle"></i>No-logs policy</li>
                        <li><i class="fas fa-check-circle"></i>Global server network</li>
                        <li><i class="fas fa-check-circle"></i>24/7 customer support</li>
                    </ul>

                    <a href="features.php" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i>
                        <span>Learn More</span>
                    </a>
                </div>

                <div class="about-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="SecureVPN online security">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">VPN Features</h2>
                <p class="section-subtitle animate-on-scroll">Advanced security features to protect your online privacy</p>
            </div>

            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Military-Grade Encryption</h3>
                    <p>256-bit AES encryption protects your data from hackers, ISPs, and government surveillance. Your connection is completely secure.</p>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h3>No-Logs Policy</h3>
                    <p>We never track, store, or share your online activity. Your privacy is our top priority with our strict no-logs guarantee.</p>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Lightning Fast Speed</h3>
                    <p>Optimized servers ensure minimal speed loss. Stream, download, and browse at high speeds with unlimited bandwidth.</p>
                </div>

                <div class="service-card animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our expert support team is available around the clock. Get help with setup, troubleshooting, and any questions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="section partners" id="partners">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Supported Protocols</h2>
                <p class="section-subtitle animate-on-scroll">Industry-leading VPN protocols for maximum security and speed</p>
            </div>

            <div class="partners-grid">
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">OpenVPN</div>
                </div>
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">WireGuard</div>
                </div>
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">IKEv2</div>
                </div>
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">SSTP</div>
                </div>
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">L2TP/IPsec</div>
                </div>
                <div class="partner-logo animate-on-scroll">
                    <div style="width: 120px; height: 120px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">PPTP</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section reviews" id="reviews">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">What Our Users Say</h2>
                <p class="section-subtitle animate-on-scroll">Real stories from people who've secured their online privacy with SecureVPN</p>
            </div>

            <div class="reviews-grid">
                <div class="review-card animate-on-scroll">
                    <div class="review-header">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Sarah Johnson" class="review-avatar">
                        <div class="review-info">
                            <h4>Sarah Johnson</h4>
                            <div class="review-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="review-text">SecureVPN completely changed how I approach online privacy. The fast servers and military-grade encryption keep me safe while streaming. My connection is secure and I feel protected online!</p>
                </div>

                <div class="review-card animate-on-scroll">
                    <div class="review-header">
                        <img src="https://imgs.search.brave.com/tmWWgy23pamxFGnP6JKMihxeCD_A07ucnnsUvHz987A/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9mcmVl/Y291bnRyeS5jb20v/Y2RuL3Nob3AvY29s/bGVjdGlvbnMvTWVu/c19BY3RpdmVfQmFu/bmVyLmpwZz92PTE3/NDA2ODgxMTYmd2lk/dGg9NDYw" alt="Mike Chen" class="review-avatar">
                        <div class="review-info">
                            <h4>Mike Chen</h4>
                            <div class="review-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="review-text">As a busy professional, I needed secure online access. SecureVPN's fast servers are perfect. The easy setup saved me time and improved my online security.</p>
                </div>

                <div class="review-card animate-on-scroll">
                    <div class="review-header">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Emma Rodriguez" class="review-avatar">
                        <div class="review-info">
                            <h4>Emma Rodriguez</h4>
                            <div class="review-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="review-text">The secure VPN service is incredible. They support all my devices and protocols. My family uses it for streaming and we've all become more secure online.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="reviews.php" class="btn btn-primary">
                    <i class="fas fa-comments"></i>
                    <span>Read All Reviews</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Counters Section -->
    <!-- <section class="section counters" id="counters">
        <div class="container">
            <div class="counters-grid">
                <div class="counter-item animate-on-scroll">
                    <span class="counter-number">2,500</span>
                    <p class="counter-label">Recipes Created</p>
                </div>
                <div class="counter-item animate-on-scroll">
                    <span class="counter-number">15,000</span>
                    <p class="counter-label">Happy Users</p>
                </div>
                <div class="counter-item animate-on-scroll">
                    <span class="counter-number">50</span>
                    <p class="counter-label">Nutrition Experts</p>
                </div>
                <div class="counter-item animate-on-scroll">
                    <span class="counter-number">95%</span>
                    <p class="counter-label">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Book Consultancy Section -->
    <section class="section booking" id="booking">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Start Your Secure Journey</h2>
                <p class="section-subtitle animate-on-scroll">Get your VPN subscription and protect your online privacy today</p>
            </div>

            <form class="booking-form animate-on-scroll" id="booking-form">
                <div class="form-group">
                    <label class="form-label">Full Name <span style="color: var(--secondary-color);">*</span></label>
                    <input type="text" class="form-input" placeholder="John Doe" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address <span style="color: var(--secondary-color);">*</span></label>
                    <input type="email" class="form-input" placeholder="john@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Phone Number <span style="color: var(--secondary-color);">*</span></label>
                    <input type="tel" class="form-input" placeholder="Your phone number" required>
                </div>

                <div class="form-group">
                    <label class="form-label">VPN Plan</label>
                    <select class="form-select" required>
                        <option value="">Select your plan</option>
                        <option value="basic">Basic Plan - $5.99/month</option>
                        <option value="premium">Premium Plan - $9.99/month</option>
                        <option value="family">Family Plan - $14.99/month</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Preferred Protocol</label>
                    <select class="form-select">
                        <option value="">Select protocol</option>
                        <option value="openvpn">OpenVPN</option>
                        <option value="wireguard">WireGuard</option>
                        <option value="ikev2">IKEv2</option>
                        <option value="auto">Auto-select</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Tell us about your needs</label>
                    <textarea class="form-textarea" placeholder="Any specific security requirements, number of devices, or questions you'd like to ask..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.2rem; padding: 1rem;">
                    <i class="fas fa-shield-alt"></i>
                    <span>Get My VPN Subscription</span>
                </button>

                <p style="text-align: center; margin-top: 1rem; color: var(--gray-600); font-size: 0.9rem;">
                    <i class="fas fa-lock"></i>
                    Your information is kept confidential and used only to provide VPN service setup.
                </p>
            </form>
        </div>
    </section>
</main>

<style>
.servers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.third-party-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.service-card {
    background: white;
    padding: 2.5rem;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    text-align: center;
}

.service-card:hover {
    transform: translateY(-5px);
}

.service-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-card h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
    font-size: 1.25rem;
    font-weight: 600;
}

.service-card p {
    color: var(--gray-600);
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.connect-btn {
    width: 100%;
    transition: all 0.3s ease;
}

.connect-btn.connected {
    background: #4caf50 !important;
}

.connect-btn.connected i {
    color: white;
}

@media (max-width: 768px) {
    .servers-grid {
        grid-template-columns: 1fr;
    }

    .third-party-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const connectBtns = document.querySelectorAll('.connect-btn');
    let currentConnectedBtn = null;
    let latencyInterval = null;

    function updateLatency() {
        if (currentConnectedBtn) {
            const card = currentConnectedBtn.closest('.service-card');
            const desc = card.querySelector('p');
            const randomLatency = Math.floor(Math.random() * 46) + 5; // 5-50ms
            desc.textContent = `Connected - Latency: ${randomLatency}ms - Strength: Excellent`;
        }
    }

    connectBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const card = this.closest('.service-card');
            const desc = card.querySelector('p');
            const originalDesc = desc.getAttribute('data-original') || desc.textContent;
            if (!desc.getAttribute('data-original')) {
                desc.setAttribute('data-original', originalDesc);
            }

            const isConnected = this.getAttribute('data-connected') === 'true';
            if (isConnected) {
                // Disconnect this one
                this.setAttribute('data-connected', 'false');
                this.innerHTML = '<i class="fas fa-play"></i><span>Connect</span>';
                this.classList.remove('connected');
                desc.textContent = originalDesc;
                currentConnectedBtn = null;
                if (latencyInterval) {
                    clearInterval(latencyInterval);
                    latencyInterval = null;
                }
            } else {
                // Disconnect previous if any
                if (currentConnectedBtn && currentConnectedBtn !== this) {
                    const prevCard = currentConnectedBtn.closest('.service-card');
                    const prevDesc = prevCard.querySelector('p');
                    const prevOriginal = prevDesc.getAttribute('data-original');
                    currentConnectedBtn.setAttribute('data-connected', 'false');
                    currentConnectedBtn.innerHTML = '<i class="fas fa-play"></i><span>Connect</span>';
                    currentConnectedBtn.classList.remove('connected');
                    prevDesc.textContent = prevOriginal;
                }

                // Connect this one
                this.setAttribute('data-connected', 'true');
                this.innerHTML = '<i class="fas fa-check"></i><span>Connected</span>';
                this.classList.add('connected');
                // Show latency and strength
                updateLatency();
                currentConnectedBtn = this;

                // Start updating latency every second
                if (latencyInterval) clearInterval(latencyInterval);
                latencyInterval = setInterval(updateLatency, 1000);
            }
        });
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
