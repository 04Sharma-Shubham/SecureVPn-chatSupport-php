<?php
$page_title = "User Reviews";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(rgba(76, 175, 80, 0.8), rgba(76, 175, 80, 0.6)), url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-hero-title">User Reviews</h1>
                <p class="page-hero-subtitle">Real stories from people who've secured their online privacy with SecureVPN</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>User Reviews</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item animate-on-scroll">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number" data-target="4.9">0</div>
                    <div class="stat-label">Average Rating</div>
                    <div class="star-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="stat-item animate-on-scroll">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number" data-target="500000">0</div>
                    <div class="stat-label">Active Users</div>
                </div>

                <div class="stat-item animate-on-scroll">
                    <div class="stat-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="stat-number" data-target="95">0</div>
                    <div class="stat-label">Uptime (%)</div>
                </div>

                <div class="stat-item animate-on-scroll">
                    <div class="stat-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="stat-number" data-target="98">0</div>
                    <div class="stat-label">Recommendation (%)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="section filter-section" style="background: var(--gray-50); padding: 2rem 0;">
        <div class="container">
            <div class="filter-controls">
                <h3>Filter Reviews</h3>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="5">★★★★★</button>
                    <button class="filter-btn" data-filter="4">★★★★☆</button>
                    <button class="filter-btn" data-filter="basic">Basic Plan</button>
                    <button class="filter-btn" data-filter="premium">Premium Plan</button>
                    <button class="filter-btn" data-filter="family">Family Plan</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section reviews-section">
        <div class="container">
            <div class="reviews-grid" id="reviews-grid">
                <!-- Review 1 -->
                <div class="review-card animate-on-scroll" data-rating="5" data-plan="premium">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Sarah Johnson" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Sarah Johnson</h4>
                                <p class="reviewer-location">New York, NY - 30s</p>
                                <p class="review-plan">Premium Plan</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                    </div>

                    <div class="review-content">
                        <h5 class="review-title">"Finally secure online privacy!"</h5>
                        <p class="review-text">I was concerned about my online privacy and data security. SecureVPN provided fast, reliable protection with their global server network. The setup was easy and the speeds are excellent. I can now browse safely knowing my data is encrypted. The 24/7 support team is always helpful when I need assistance.</p>
                        <div class="review-tags">
                            <span class="tag">Privacy Protection</span>
                            <span class="tag">Fast Speeds</span>
                            <span class="tag">Easy Setup</span>
                        </div>
                    </div>

                    <div class="review-footer">
                        <span class="review-date">March 15, 2024</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>Helpful (24)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-card animate-on-scroll" data-rating="5" data-plan="family">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Maria Rodriguez" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Maria Rodriguez</h4>
                                <p class="reviewer-location">Los Angeles, CA - 40s</p>
                                <p class="review-plan">Family Plan</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                    </div>

                    <div class="review-content">
                        <h5 class="review-title">"Perfect protection for the whole family!"</h5>
                        <p class="review-text">As a parent, I wanted to ensure my family's online safety. SecureVPN's family plan covers all our devices with advanced security features. The parental controls help protect the kids, and the speeds are fast enough for streaming and gaming. No more worries about data breaches or unsafe websites. Highly recommend!</p>
                        <div class="review-tags">
                            <span class="tag">Family Protection</span>
                            <span class="tag">Parental Controls</span>
                            <span class="tag">Fast Streaming</span>
                        </div>
                    </div>

                    <div class="review-footer">
                        <span class="review-date">February 28, 2024</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>Helpful (18)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-card animate-on-scroll" data-rating="5" data-plan="premium">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Michael Chen" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Michael Chen</h4>
                                <p class="reviewer-location">San Francisco, CA - 50s</p>
                                <p class="review-plan">Premium Plan</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                    </div>

                    <div class="review-content">
                        <h5 class="review-title">"Business-grade security for my company"</h5>
                        <p class="review-text">As a small business owner, I needed reliable VPN protection for remote work. SecureVPN's premium plan offers enterprise-level security with fast speeds. The kill switch and leak protection give me peace of mind when handling sensitive client data. The dedicated support team understands business needs perfectly.</p>
                        <div class="review-tags">
                            <span class="tag">Business Security</span>
                            <span class="tag">Remote Work</span>
                            <span class="tag">Enterprise Features</span>
                        </div>
                    </div>

                    <div class="review-footer">
                        <span class="review-date">March 3, 2024</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>Helpful (31)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="review-card animate-on-scroll" data-rating="4" data-plan="basic">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Emma Davis" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Emma Davis</h4>
                                <p class="reviewer-location">Austin, TX - 20s</p>
                                <p class="review-plan">Basic Plan</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-text">4.0</span>
                        </div>
                    </div>

                    <div class="review-content">
                        <h5 class="review-title">"Perfect for streaming and gaming"</h5>
                        <p class="review-text">I needed a VPN for accessing geo-restricted content and protecting my gaming sessions. The basic plan offers great speeds and reliable connections. No buffering during streaming, and my ping is much more stable in online games. The interface is simple and the setup took less than 5 minutes. Excellent value for the price!</p>
                        <div class="review-tags">
                            <span class="tag">Streaming</span>
                            <span class="tag">Gaming</span>
                            <span class="tag">Value for Money</span>
                        </div>
                    </div>

                    <div class="review-footer">
                        <span class="review-date">February 20, 2024</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>Helpful (12)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="review-card animate-on-scroll" data-rating="5" data-plan="premium">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="山田健一様" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">山田健一様</h4>
                                <p class="reviewer-location">愛知県・40代</p>
                                <p class="review-plan">プレミアムプラン利用</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                    </div>
                    
                    <div class="review-content">
                        <h5 class="review-title">「オンラインセキュリティが大幅に向上！」</h5>
                        <p class="review-text">公共Wi-Fiを使う機会が多く、データ漏洩のリスクが心配でした。SecureVPNのプレミアムプランで軍事レベルの暗号化と高速接続を実現。ストリーミングもスムーズで、サポートも迅速に対応してくれます。日本国内のサーバーも多く、安定した接続が可能です。プライバシーを守るために欠かせないツールです。</p>
                        <div class="review-tags">
                            <span class="tag">オンラインセキュリティ</span>
                            <span class="tag">高速接続</span>
                            <span class="tag">ストリーミング</span>
                        </div>
                    </div>
                    
                    <div class="review-footer">
                        <span class="review-date">2024年2月10日</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>参考になった (27)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="review-card animate-on-scroll" data-rating="5" data-plan="basic">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="中村由美様" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">中村由美様</h4>
                                <p class="reviewer-location">福岡県・30代</p>
                                <p class="review-plan">ベーシックプラン利用</p>
                            </div>
                        </div>
                        <div class="review-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-text">5.0</span>
                        </div>
                    </div>
                    
                    <div class="review-content">
                        <h5 class="review-title">「家族全員のデバイスを安全に保護」</h5>
                        <p class="review-text">子供たちがオンラインゲームや動画を見る機会が増え、セキュリティが心配でした。ベーシックプランで5台まで同時接続可能で、すべてのデバイスを保護できます。子供用のフィルタリング機能も便利で、安心してインターネットを使わせられます。セットアップも簡単で、家族みんなが快適に使っています。</p>
                        <div class="review-tags">
                            <span class="tag">家族保護</span>
                            <span class="tag">複数デバイス</span>
                            <span class="tag">子供向けフィルタ</span>
                        </div>
                    </div>
                    
                    <div class="review-footer">
                        <span class="review-date">2024年1月15日</span>
                        <div class="review-helpful">
                            <button class="helpful-btn">
                                <i class="fas fa-thumbs-up"></i>
                                <span>参考になった (19)</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="load-more-section">
                <button class="btn btn-outline load-more-btn">
                    <i class="fas fa-plus"></i>
                    <span>さらに表示</span>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section" style="background: var(--gradient-primary); color: var(--white);">
        <div class="container">
            <div class="cta-content animate-on-scroll">
                <h2>Ready to secure your online privacy?</h2>
                <p>Join thousands of users who've protected their digital life with SecureVPN's advanced encryption and global network.</p>
                <div class="cta-buttons">
                    <a href="index.php#booking" class="btn btn-secondary">
                        <i class="fas fa-shield-alt"></i>
                        <span>Get Protected</span>
                    </a>
                    <a href="pricing.php" class="btn" style="background: transparent; border: 2px solid white; color: white;">
                        <i class="fas fa-tags"></i>
                        <span>View Plans</span>
                    </a>
                </div>
            </div>
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

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    text-align: center;
}

.stat-item {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-icon {
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

.stat-number {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.stat-label {
    color: var(--gray-600);
    font-weight: 500;
}

.star-rating {
    color: #ffc107;
    font-size: 1.2rem;
    margin-top: 0.5rem;
}

.filter-controls {
    text-align: center;
}

.filter-controls h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 0.5rem 1rem;
    border: 2px solid var(--primary-color);
    background: white;
    color: var(--primary-color);
    border-radius: 2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--primary-color);
    color: white;
}

.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2rem;
}

.review-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border-left: 4px solid var(--secondary-color);
}

.review-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.reviewer-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.reviewer-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--secondary-color);
}

.reviewer-name {
    color: var(--primary-color);
    margin-bottom: 0.25rem;
    font-size: 1.1rem;
}

.reviewer-location {
    color: var(--gray-600);
    font-size: 0.9rem;
    margin-bottom: 0.25rem;
}

.review-plan {
    background: var(--gray-100);
    color: var(--gray-700);
    padding: 0.25rem 0.5rem;
    border-radius: 1rem;
    font-size: 0.8rem;
    font-weight: 500;
}

.review-rating {
    text-align: right;
}

.stars {
    color: #ffc107;
    font-size: 1.1rem;
    margin-bottom: 0.25rem;
}

.rating-text {
    font-weight: 700;
    color: var(--primary-color);
}

.review-title {
    color: var(--primary-color);
    margin-bottom: 1rem;
    font-size: 1.1rem;
    line-height: 1.4;
}

.review-text {
    line-height: 1.6;
    color: var(--gray-700);
    margin-bottom: 1rem;
}

.review-tags {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.tag {
    background: var(--secondary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.8rem;
    font-weight: 500;
}

.review-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid var(--gray-200);
}

.review-date {
    color: var(--gray-500);
    font-size: 0.9rem;
}

.helpful-btn {
    background: transparent;
    border: 1px solid var(--gray-300);
    color: var(--gray-600);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}

.helpful-btn:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.load-more-section {
    text-align: center;
    margin-top: 3rem;
}

.load-more-btn {
    padding: 1rem 2rem;
    font-size: 1.1rem;
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
    flex-wrap: wrap;
}

@media (max-width: 768px) {
    .reviews-grid {
        grid-template-columns: 1fr;
    }
    
    .review-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .review-rating {
        text-align: left;
    }
    
    .filter-buttons {
        gap: 0.25rem;
    }
    
    .filter-btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
</style>

<script>
// document.addEventListener('DOMContentLoaded', function() {
//     // Filter functionality
//     const filterBtns = document.querySelectorAll('.filter-btn');
//     const reviewCards = document.querySelectorAll('.review-card');
    
//     filterBtns.forEach(btn => {
//         btn.addEventListener('click', () => {
//             // Remove active class from all buttons
//             filterBtns.forEach(b => b.classList.remove('active'));
//             // Add active class to clicked button
//             btn.classList.add('active');
            
//             const filter = btn. -->
document.addEventListener('DOMContentLoaded', function() {
    // Animate stat numbers counting up
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => {
        const target = +stat.getAttribute('data-target');
        let count = 0;
        const increment = target / 100;
        const isFloat = target % 1 !== 0;
        const interval = setInterval(() => {
            count += increment;
            if (count >= target) {
                count = target;
                clearInterval(interval);
            }
            stat.textContent = isFloat ? count.toFixed(1) : Math.floor(count);
        }, 20);
    });

    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const reviewCards = document.querySelectorAll('.review-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            reviewCards.forEach(card => {
                // Show all if filter is 'all'
                if (filter === 'all') {
                    card.style.display = 'block';
                    return;
                }

                // Check if filter is a rating number (e.g. '5' or '4')
                if (filter === '5' || filter === '4') {
                    if (card.getAttribute('data-rating') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                    return;
                }

                // Otherwise filter by plan (basic, premium, enterprise)
                if (card.getAttribute('data-plan') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Helpful button toggle (optional)
    const helpfulButtons = document.querySelectorAll('.helpful-btn');
    helpfulButtons.forEach(button => {
        button.addEventListener('click', () => {
            const span = button.querySelector('span');
            let text = span.textContent;
            // Extract the number from "参考になった (XX)"
            const match = text.match(/\$(\d+)\$/);
            let count = 0;
            if (match && match[1]) {
                count = parseInt(match[1], 10);
            }

            if (button.classList.contains('helpful-clicked')) {
                count--;
                button.classList.remove('helpful-clicked');
            } else {
                count++;
                button.classList.add('helpful-clicked');
            }
            span.textContent = `参考になった (${count})`;
        });
    });

    // Load More functionality (optional)
    const loadMoreBtn = document.querySelector('.load-more-btn');
    if (loadMoreBtn) {
        let visibleCount = 6; // Number of reviews initially visible
        const reviews = Array.from(reviewCards);

        // Initially hide reviews beyond the visible count
        reviews.forEach((card, index) => {
            if (index >= visibleCount) {
                card.style.display = 'none';
            }
        });

        // Hide load more button if all reviews are visible
        if (visibleCount >= reviews.length) {
            loadMoreBtn.style.display = 'none';
        }

        loadMoreBtn.addEventListener('click', () => {
            const currentFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
            const currentlyDisplayedReviews = Array.from(document.querySelectorAll('.review-card')).filter(card => card.style.display !== 'none');

            let reviewsToShow = [];
            if (currentFilter === 'all') {
                reviewsToShow = reviews.filter(card => card.style.display === 'none');
            } else if (currentFilter === '5' || currentFilter === '4') {
                reviewsToShow = reviews.filter(card => card.getAttribute('data-rating') === currentFilter && card.style.display === 'none');
            } else {
                reviewsToShow = reviews.filter(card => card.getAttribute('data-plan') === currentFilter && card.style.display === 'none');
            }

            for (let i = 0; i < 6 && i < reviewsToShow.length; i++) {
                reviewsToShow[i].style.display = 'block';
            }

            // Check if there are no more reviews to load under the current filter
            const remainingHiddenReviews = reviews.filter(card => card.style.display === 'none' &&
                (currentFilter === 'all' ||
                 (currentFilter === '5' || currentFilter === '4' ? card.getAttribute('data-rating') === currentFilter : card.getAttribute('data-plan') === currentFilter))
            );

            if (remainingHiddenReviews.length === 0) {
                loadMoreBtn.style.display = 'none';
            }
        });
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>