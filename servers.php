<?php
$page_title = "Server Locations";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(rgba(76, 175, 80, 0.8), rgba(76, 175, 80, 0.6)), url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-hero-title">Server Locations</h1>
                <p class="page-hero-subtitle">Choose from our global network of high-speed VPN servers</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Server Locations</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="section search-section" style="background: var(--gray-50); padding: 2rem 0;">
        <div class="container">
            <div class="search-container">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search servers..." id="serverSearch">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="america">America</button>
                    <button class="filter-btn" data-filter="europe">Europe</button>
                    <button class="filter-btn" data-filter="asia">Asia</button>
                    <button class="filter-btn" data-filter="africa">Africa</button>
                    <button class="filter-btn" data-filter="oceania">Oceania</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Servers Grid -->
    <section class="section servers-section">
        <div class="container">
            <div class="servers-grid" id="serversGrid">
                <!-- Server 1 -->
                <div class="server-card animate-on-scroll" data-category="america">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/us.png" alt="United States">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">United States</h3>
                        <p class="server-description">High-speed servers across multiple cities</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 1000+ Mbps</span>
                            <span><i class="fas fa-server"></i> 25 servers</span>
                            <span><i class="fas fa-users"></i> Optimized</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 2 -->
                <div class="server-card animate-on-scroll" data-category="europe">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/gb.png" alt="United Kingdom">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">United Kingdom</h3>
                        <p class="server-description">London and Manchester servers</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 800+ Mbps</span>
                            <span><i class="fas fa-server"></i> 12 servers</span>
                            <span><i class="fas fa-users"></i> Popular</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 3 -->
                <div class="server-card animate-on-scroll" data-category="europe">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/de.png" alt="Germany">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Germany</h3>
                        <p class="server-description">Frankfurt and Berlin data centers</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 900+ Mbps</span>
                            <span><i class="fas fa-server"></i> 15 servers</span>
                            <span><i class="fas fa-shield-alt"></i> Secure</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 4 -->
                <div class="server-card animate-on-scroll" data-category="asia">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/jp.png" alt="Japan">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Japan</h3>
                        <p class="server-description">Tokyo servers with ultra-low latency</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 950+ Mbps</span>
                            <span><i class="fas fa-server"></i> 8 servers</span>
                            <span><i class="fas fa-rocket"></i> Fast</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 5 -->
                <div class="server-card animate-on-scroll" data-category="asia">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/sg.png" alt="Singapore">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Singapore</h3>
                        <p class="server-description">Strategic location for Asian connectivity</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 850+ Mbps</span>
                            <span><i class="fas fa-server"></i> 6 servers</span>
                            <span><i class="fas fa-globe"></i> Global</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 6 -->
                <div class="server-card animate-on-scroll" data-category="america">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/ca.png" alt="Canada">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Canada</h3>
                        <p class="server-description">Toronto and Vancouver servers</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 750+ Mbps</span>
                            <span><i class="fas fa-server"></i> 10 servers</span>
                            <span><i class="fas fa-lock"></i> Private</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 7 -->
                <div class="server-card animate-on-scroll" data-category="europe">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/nl.png" alt="Netherlands">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Netherlands</h3>
                        <p class="server-description">Amsterdam hub for European traffic</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 920+ Mbps</span>
                            <span><i class="fas fa-server"></i> 14 servers</span>
                            <span><i class="fas fa-star"></i> Premium</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 8 -->
                <div class="server-card animate-on-scroll" data-category="asia">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/au.png" alt="Australia">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Australia</h3>
                        <p class="server-description">Sydney and Melbourne servers</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 700+ Mbps</span>
                            <span><i class="fas fa-server"></i> 8 servers</span>
                            <span><i class="fas fa-sun"></i> Sunny</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>

                <!-- Server 9 -->
                <div class="server-card animate-on-scroll" data-category="america">
                    <div class="server-image">
                        <img src="https://flagcdn.com/w320/br.png" alt="Brazil">
                    </div>
                    <div class="server-content">
                        <h3 class="server-title">Brazil</h3>
                        <p class="server-description">São Paulo servers for South America</p>
                        <div class="server-meta">
                            <span><i class="fas fa-tachometer-alt"></i> 650+ Mbps</span>
                            <span><i class="fas fa-server"></i> 5 servers</span>
                            <span><i class="fas fa-music"></i> Vibrant</span>
                        </div>
                        <a href="#connect" class="btn btn-primary btn-sm">
                            <i class="fas fa-play"></i>
                            <span>Connect</span>
                        </a>
                    </div>
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

.search-section {
    background: var(--gray-50);
}

.search-container {
    max-width: 1200px;
    margin: 0 auto;
}

.search-bar {
    display: flex;
    max-width: 500px;
    margin: 0 auto 2rem;
}

.search-input {
    flex: 1;
    padding: 1rem;
    border: 2px solid var(--gray-300);
    border-radius: 2rem 0 0 2rem;
    font-size: 1rem;
}

.search-btn {
    padding: 1rem 1.5rem;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 0 2rem 2rem 0;
    cursor: pointer;
    transition: background 0.3s ease;
}

.search-btn:hover {
    background: var(--primary-dark);
}

.filter-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 0.75rem 1.5rem;
    background: white;
    border: 2px solid var(--gray-300);
    border-radius: 2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.servers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.server-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.server-card:hover {
    transform: translateY(-5px);
}

.server-image {
    height: 200px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--gray-100);
}

.server-image img {
    width: 120px;
    height: 80px;
    object-fit: cover;
    border-radius: 0.5rem;
}

.server-content {
    padding: 1.5rem;
}

.server-title {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
    font-weight: 600;
}

.server-description {
    color: var(--gray-600);
    margin-bottom: 1rem;
    line-height: 1.5;
}

.server-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
    color: var(--gray-700);
}

.server-meta span {
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .servers-grid {
        grid-template-columns: 1fr;
    }

    .search-bar {
        margin-bottom: 1rem;
    }

    .filter-buttons {
        justify-content: center;
    }

    .server-meta {
        flex-direction: column;
        gap: 0.5rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const serverCards = document.querySelectorAll('.server-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            serverCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Search functionality
    const searchInput = document.getElementById('serverSearch');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();

        serverCards.forEach(card => {
            const title = card.querySelector('.server-title').textContent.toLowerCase();
            const description = card.querySelector('.server-description').textContent.toLowerCase();

            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });

    // Connect button functionality (placeholder)
    const connectBtns = document.querySelectorAll('.server-content a');
    connectBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('VPN connection feature coming soon! This would connect you to the selected server.');
        });
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
