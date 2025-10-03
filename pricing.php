<?php
$page_title = "VPN Plans";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(rgba(76, 175, 80, 0.8), rgba(76, 175, 80, 0.6)), url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-hero-title">VPN Plans</h1>
                <p class="page-hero-subtitle">Flexible pricing plans tailored to your security needs and online activities</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>VPN Plans</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="section pricing-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Plan Options</h2>
                <p class="section-subtitle animate-on-scroll">7-day free trial. Choose the perfect plan for your security needs</p>
            </div>
            
            <div class="pricing-grid">
                <!-- Basic Plan -->
                <div class="pricing-card animate-on-scroll">
                    <div class="pricing-header">
                        <div class="plan-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="plan-name">Basic Plan</h3>
                        <p class="plan-description">Perfect for individuals looking to secure their online activities</p>
                    </div>

                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">5.99</span>
                        <span class="period">/month</span>
                    </div>

                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>1 device connection</li>
                        <li><i class="fas fa-check"></i>10 server locations</li>
                        <li><i class="fas fa-check"></i>OpenVPN protocol</li>
                        <li><i class="fas fa-check"></i>Email support</li>
                        <li><i class="fas fa-check"></i>Basic speed (up to 50 Mbps)</li>
                        <li class="not-included"><i class="fas fa-times"></i>Multiple protocols</li>
                        <li class="not-included"><i class="fas fa-times"></i>24/7 live chat</li>
                        <li class="not-included"><i class="fas fa-times"></i>Advanced features</li>
                    </ul>

                    <div class="pricing-footer">
                        <a href="#booking" class="btn btn-outline">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Choose This Plan</span>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan (Most Popular) -->
                <div class="pricing-card popular animate-on-scroll">
                    <div class="popular-badge">
                        <i class="fas fa-crown"></i>
                        <span>Most Popular</span>
                    </div>

                    <div class="pricing-header">
                        <div class="plan-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="plan-name">Premium Plan</h3>
                        <p class="plan-description">Advanced security for power users and families</p>
                    </div>

                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">9.99</span>
                        <span class="period">/month</span>
                    </div>

                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>5 device connections</li>
                        <li><i class="fas fa-check"></i>50+ server locations</li>
                        <li><i class="fas fa-check"></i>All protocols (OpenVPN, WireGuard, IKEv2)</li>
                        <li><i class="fas fa-check"></i>24/7 live chat support</li>
                        <li><i class="fas fa-check"></i>High-speed (unlimited)</li>
                        <li><i class="fas fa-check"></i>Kill switch & leak protection</li>
                        <li><i class="fas fa-check"></i>Ad blocker included</li>
                        <li><i class="fas fa-check"></i>Priority customer support</li>
                    </ul>

                    <div class="pricing-footer">
                        <a href="#booking" class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Choose This Plan</span>
                        </a>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card animate-on-scroll">
                    <div class="pricing-header">
                        <div class="plan-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="plan-name">Family Plan</h3>
                        <p class="plan-description">Complete protection for the whole family</p>
                    </div>

                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">14.99</span>
                        <span class="period">/month</span>
                    </div>

                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>10 device connections</li>
                        <li><i class="fas fa-check"></i>100+ server locations worldwide</li>
                        <li><i class="fas fa-check"></i>All protocols & advanced features</li>
                        <li><i class="fas fa-check"></i>24/7 priority support</li>
                        <li><i class="fas fa-check"></i>Ultra-fast speeds</li>
                        <li><i class="fas fa-check"></i>Advanced security suite</li>
                        <li><i class="fas fa-check"></i>Parental controls</li>
                        <li><i class="fas fa-check"></i>Dedicated account manager</li>
                    </ul>

                    <div class="pricing-footer">
                        <a href="#booking" class="btn btn-outline">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Choose This Plan</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="pricing-note animate-on-scroll">
                <div class="note-content">
                    <i class="fas fa-info-circle"></i>
                    <div>
                        <h4>7-Day Free Trial</h4>
                        <p>If you're unsure which plan is right for you, start with our 7-day free trial. We'll help you choose the perfect plan for your security needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="section additional-services" style="background: var(--gray-50);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Add-On Features</h2>
                <p class="section-subtitle animate-on-scroll">Optional features to enhance your VPN experience</p>
            </div>

            <div class="services-grid">
                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Optimization</h3>
                    <p>Enhanced mobile app with battery optimization and auto-connect</p>
                    <div class="service-price">$2.99/month</div>
                </div>

                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Advanced Security</h3>
                    <p>Additional malware protection and phishing detection</p>
                    <div class="service-price">$4.99/month</div>
                </div>

                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Dedicated IP</h3>
                    <p>Get your own dedicated IP address for better compatibility</p>
                    <div class="service-price">$3.99/month</div>
                </div>

                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud Backup</h3>
                    <p>Secure cloud storage for your VPN configurations</p>
                    <div class="service-price">$1.99/month</div>
                </div>

                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Priority Support</h3>
                    <p>24/7 phone support with dedicated technical experts</p>
                    <div class="service-price">$5.99/month</div>
                </div>

                <div class="service-item animate-on-scroll">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Server Boost</h3>
                    <p>Access to premium high-speed servers with lower latency</p>
                    <div class="service-price">$3.49/month</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Frequently Asked Questions</h2>
                <p class="section-subtitle animate-on-scroll">Answers to common questions about our VPN plans</p>
            </div>

            <div class="faq-container">
                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>What payment methods do you accept?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We accept credit cards (Visa, MasterCard, American Express), PayPal, cryptocurrency, and bank transfers. Monthly subscriptions are automatically billed.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Can I cancel or get a refund?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can cancel your subscription at any time. We offer a 30-day money-back guarantee. Refunds are processed within 5-7 business days.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Can I change my plan?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you can upgrade or downgrade your plan at any time. Changes take effect immediately, and billing adjusts accordingly. No hidden fees.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Do you offer services internationally?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our VPN service is available worldwide. We have servers in over 100 countries and accept payments from users in most countries.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Do you offer family or group discounts?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our Family Plan offers significant savings for multiple devices. We also offer business plans with volume discounts for organizations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="section booking-section" id="booking" style="background: var(--gradient-primary); color: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll" style="color: var(--white);">Choose Your Plan</h2>
                <p class="section-subtitle animate-on-scroll" style="color: rgba(255,255,255,0.9);">Start with a 7-day free trial to find your perfect VPN solution</p>
            </div>

            <form class="booking-form animate-on-scroll" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" style="color: var(--white);">Full Name <span style="color: var(--secondary-color);">*</span></label>
                        <input type="text" class="form-input" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style="color: var(--white);">Email Address <span style="color: var(--secondary-color);">*</span></label>
                        <input type="email" class="form-input" placeholder="john@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" style="color: var(--white);">Phone Number (Optional)</label>
                        <input type="tel" class="form-input" placeholder="+1 (555) 659-78965">
                    </div>

                    <div class="form-group">
                        <label class="form-label" style="color: var(--white);">Preferred Plan <span style="color: var(--secondary-color);">*</span></label>
                        <select class="form-select" required>
                            <option value="">Select a plan</option>
                            <option value="trial">7-Day Free Trial</option>
                            <option value="basic">Basic Plan ($5.99/month)</option>
                            <option value="premium">Premium Plan ($9.99/month)</option>
                            <option value="family">Family Plan ($14.99/month)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" style="color: var(--white);">Special Requirements or Questions</label>
                    <textarea class="form-textarea" placeholder="Tell us about your VPN needs, preferred server locations, or any specific requirements..." rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-secondary" style="width: 100%; font-size: 1.2rem; padding: 1rem;">
                    <i class="fas fa-paper-plane"></i>
                    <span>Start Your Free Trial</span>
                </button>

                <p style="text-align: center; margin-top: 1rem; color: rgba(255,255,255,0.8); font-size: 0.9rem;">
                    <i class="fas fa-shield-alt"></i>
                    Your information is encrypted and secure. No logs policy.
                </p>
            </form>
        </div>
    </section>
</main>

<style>
.page-hero {
    padding: 8rem 0 4rem;
    color: white;
    text-align: center;
}

.page-hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 900;
    margin-bottom: 1rem;
}

.page-hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1rem;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.pricing-card {
    background: white;
    border-radius: 1.5rem;
    padding: 2rem;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    border: 2px solid transparent;
}

.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
}

.pricing-card.popular {
    border-color: var(--secondary-color);
    transform: scale(1.05);
}

.pricing-card.popular:hover {
    transform: scale(1.05) translateY(-10px);
}

.popular-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--gradient-secondary);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 2rem;
    font-weight: 600;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.pricing-header {
    text-align: center;
    margin-bottom: 2rem;
}

.plan-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 2rem;
    color: white;
}

.pricing-card.popular .plan-icon {
    background: var(--gradient-secondary);
}

.plan-name {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.plan-description {
    color: var(--gray-600);
    line-height: 1.5;
}

.pricing-price {
    text-align: center;
    margin-bottom: 2rem;
    padding: 1.5rem 0;
    border-top: 1px solid var(--gray-200);
    border-bottom: 1px solid var(--gray-200);
}

.currency {
    font-size: 1.5rem;
    color: var(--gray-600);
    vertical-align: top;
}

.amount {
    font-size: 3rem;
    font-weight: 900;
    color: var(--primary-color);
}

.period {
    font-size: 1rem;
    color: var(--gray-600);
}

.pricing-features {
    list-style: none;
    margin-bottom: 2rem;
}

.pricing-features li {
    display: flex;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--gray-100);
}

.pricing-features li:last-child {
    border-bottom: none;
}

.pricing-features i {
    margin-right: 0.75rem;
    width: 20px;
    text-align: center;
}

.pricing-features .fa-check {
    color: #4caf50;
}

.pricing-features .fa-times {
    color: var(--gray-400);
}

.pricing-features .not-included {
    color: var(--gray-400);
}

.btn-outline {
    background: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
}

.btn-outline:hover {
    background: var(--primary-color);
    color: white;
}

.pricing-note {
    background: var(--gray-100);
    border-radius: 1rem;
    padding: 2rem;
    margin-top: 3rem;
}

.note-content {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.note-content i {
    color: var(--primary-color);
    font-size: 1.5rem;
    margin-top: 0.25rem;
}

.note-content h4 {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.service-item {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-item .service-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient-secondary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.5rem;
    color: white;
}

.service-item h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.service-price {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-top: 1rem;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    border-radius: 1rem;
    margin-bottom: 1rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
}

.faq-question {
    padding: 1.5rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--gray-50);
    transition: background 0.3s ease;
}

.faq-question:hover {
    background: var(--gray-100);
}

.faq-question h4 {
    color: var(--primary-color);
    margin: 0;
}

.faq-question i {
    color: var(--gray-600);
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 1.5rem;
    max-height: 200px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

@media (max-width: 768px) {
    .pricing-grid {
        grid-template-columns: 1fr;
    }
    
    .pricing-card.popular {
        transform: none;
    }
    
    .pricing-card.popular:hover {
        transform: translateY(-10px);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all FAQ items
            faqItems.forEach(faq => faq.classList.remove('active'));
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
