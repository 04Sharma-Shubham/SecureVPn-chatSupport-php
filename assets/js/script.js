// ===== GLOBAL VARIABLES =====
let currentSlide = 0;
let slideInterval;
const slides = [];
let isScrolling = false;

// ===== DOM CONTENT LOADED =====
document.addEventListener('DOMContentLoaded', function() {
    initializeWebsite();
});

// ===== WEBSITE INITIALIZATION =====
function initializeWebsite() {
    // Hide loading screen
    setTimeout(() => {
        const loadingScreen = document.getElementById('loading-screen');
        if (loadingScreen) {
            loadingScreen.classList.add('hidden');
        }
    }, 1000);

    // Initialize all components
    initializeNavigation();
    initializeHeroSlider();
    initializeScrollAnimations();
    initializeCounters();
    initializeForms();
    initializeScrollToTop();
    initializeParallax();
    initializeLazyLoading();
    initializeCookiePopup();
}

// ===== NAVIGATION =====
function initializeNavigation() {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    const header = document.querySelector('.header');

    // Mobile menu toggle
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });

        // Close menu when clicking on links
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
    }

    // Header scroll effect
    let lastScrollTop = 0;
    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Hide/show header on scroll
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop;
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = header.offsetHeight;
                const targetPosition = target.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active navigation highlighting
    window.addEventListener('scroll', highlightActiveNavigation);
}

function highlightActiveNavigation() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
}

// ===== HERO SLIDER =====
function initializeHeroSlider() {
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    
    if (heroSlides.length === 0) return;

    // Initialize slides array
    heroSlides.forEach((slide, index) => {
        slides.push(slide);
        slide.style.opacity = index === 0 ? '1' : '0';
    });

    // Auto-play slider
    startSlideshow();

    // Dot navigation
    heroDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            previousSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });

    // Pause on hover
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopSlideshow);
        heroSection.addEventListener('mouseleave', startSlideshow);
    }
}

function startSlideshow() {
    stopSlideshow();
    slideInterval = setInterval(nextSlide, 3000);
}

function stopSlideshow() {
    if (slideInterval) {
        clearInterval(slideInterval);
    }
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function previousSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
}

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });

    // Show current slide
    if (slides[index]) {
        slides[index].classList.add('active');
    }

    // Update dots
    const dots = document.querySelectorAll('.hero-dot');
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
}

// ===== SCROLL ANIMATIONS =====
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                
                // Special handling for different animation types
                if (entry.target.classList.contains('counter-number')) {
                    animateCounter(entry.target);
                }
                
                if (entry.target.classList.contains('service-card')) {
                    animateServiceCard(entry.target);
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.animate-on-scroll, .service-card, .review-card, .counter-item');
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

function animateServiceCard(card) {
    const delay = Array.from(card.parentNode.children).indexOf(card) * 100;
    setTimeout(() => {
        card.style.transform = 'translateY(0)';
        card.style.opacity = '1';
    }, delay);
}

// ===== COUNTERS =====
function initializeCounters() {
    const counters = document.querySelectorAll('.counter-number');
    
    counters.forEach(counter => {
        counter.style.opacity = '0';
        counter.style.transform = 'translateY(20px)';
    });
}

function animateCounter(counter) {
    const target = parseInt(counter.getAttribute('data-target')) || parseInt(counter.textContent);
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    counter.style.opacity = '1';
    counter.style.transform = 'translateY(0)';

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            counter.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            counter.textContent = Math.floor(current).toLocaleString();
        }
    }, 16);
}

// ===== FORMS =====
function initializeForms() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        // Add floating labels
        addFloatingLabels(form);
        
        // Form validation
        form.addEventListener('submit', handleFormSubmit);
        
        // Real-time validation
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', () => validateField(input));
            input.addEventListener('input', () => clearFieldError(input));
        });
    });
}

function addFloatingLabels(form) {
    const inputs = form.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], textarea');
    
    inputs.forEach(input => {
        const placeholder = input.getAttribute('placeholder');
        if (placeholder) {
            const wrapper = document.createElement('div');
            wrapper.className = 'input-wrapper';
            
            const label = document.createElement('label');
            label.textContent = placeholder;
            label.className = 'floating-label';
            
            input.parentNode.insertBefore(wrapper, input);
            wrapper.appendChild(input);
            wrapper.appendChild(label);
            
            input.removeAttribute('placeholder');
            
            // Handle focus/blur events
            input.addEventListener('focus', () => {
                wrapper.classList.add('focused');
            });
            
            input.addEventListener('blur', () => {
                if (!input.value) {
                    wrapper.classList.remove('focused');
                }
            });
            
            // Check if input has value on load
            if (input.value) {
                wrapper.classList.add('focused');
            }
        }
    });
}

function handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const isValid = validateForm(form);
    
    if (isValid) {
        showFormSuccess(form);
        // Here you would typically send the form data to a server
        console.log('Form submitted successfully');
    } else {
        showFormError(form, 'Please fill in all required fields correctly.');
    }
}

function validateForm(form) {
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    let isValid = true;
    let errorMessage = '';
    
    // Required field check
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required.';
    }
    
    // Email validation
    else if (type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address.';
        }
    }
    
    // Phone validation
    else if (type === 'tel' && value) {
        const phoneRegex = /^[\d\-\+\(\)\s]+$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid phone number.';
        }
    }
    
    // Show/hide error
    if (isValid) {
        clearFieldError(field);
    } else {
        showFieldError(field, errorMessage);
    }
    
    return isValid;
}

function showFieldError(field, message) {
    clearFieldError(field);
    
    field.classList.add('error');
    
    const errorElement = document.createElement('div');
    errorElement.className = 'field-error';
    errorElement.textContent = message;
    
    field.parentNode.appendChild(errorElement);
}

function clearFieldError(field) {
    field.classList.remove('error');
    
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
}

function showFormSuccess(form) {
    const successMessage = document.createElement('div');
    successMessage.className = 'form-success';
    successMessage.innerHTML = `
        <i class="fas fa-check-circle"></i>
        <span>Submission completed. Thank you!</span>
    `;
    
    form.parentNode.insertBefore(successMessage, form);
    form.reset();
    
    // Remove success message after 5 seconds
    setTimeout(() => {
        successMessage.remove();
    }, 5000);
}

function showFormError(form, message) {
    const errorMessage = document.createElement('div');
    errorMessage.className = 'form-error';
    errorMessage.innerHTML = `
        <i class="fas fa-exclamation-circle"></i>
        <span>${message}</span>
    `;
    
    form.parentNode.insertBefore(errorMessage, form);
    
    // Remove error message after 5 seconds
    setTimeout(() => {
        errorMessage.remove();
    }, 5000);
}

// ===== SCROLL TO TOP =====
function initializeScrollToTop() {
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    
    if (!scrollToTopBtn) return;
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });
    
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ===== PARALLAX EFFECTS =====
function initializeParallax() {
    const parallaxElements = document.querySelectorAll('.parallax');
    
    if (parallaxElements.length === 0) return;
    
    window.addEventListener('scroll', () => {
        if (isScrolling) return;
        
        isScrolling = true;
        requestAnimationFrame(() => {
            const scrollTop = window.pageYOffset;
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrollTop * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
            
            isScrolling = false;
        });
    });
}

// ===== LAZY LOADING =====
function initializeLazyLoading() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if (lazyImages.length === 0) return;
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
}

// ===== UTILITY FUNCTIONS =====
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// ===== NEWSLETTER SUBSCRIPTION =====
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.getElementById('newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                // Simulate API call
                const button = this.querySelector('button');
                const originalText = button.innerHTML;
                
                button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                button.disabled = true;
                
                setTimeout(() => {
                    button.innerHTML = '<i class="fas fa-check"></i>';
                    this.querySelector('input').value = '';
                    
                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                    }, 2000);
                }, 1000);
            }
        });
    }
});

// ===== PERFORMANCE OPTIMIZATIONS =====
// Optimize scroll events
const optimizedScrollHandler = throttle(() => {
    // Handle scroll events here
}, 16);

window.addEventListener('scroll', optimizedScrollHandler);

// Optimize resize events
const optimizedResizeHandler = debounce(() => {
    // Handle resize events here
}, 250);

window.addEventListener('resize', optimizedResizeHandler);

// ===== ACCESSIBILITY ENHANCEMENTS =====
document.addEventListener('DOMContentLoaded', function() {
    // Skip to main content link
    const skipLink = document.createElement('a');
    skipLink.href = '#main-content';
    skipLink.textContent = 'Skip to main content';
    skipLink.className = 'skip-link';
    document.body.insertBefore(skipLink, document.body.firstChild);
    
    // Focus management for mobile menu
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            if (navMenu.classList.contains('active')) {
                const firstLink = navMenu.querySelector('a');
                if (firstLink) {
                    firstLink.focus();
                }
            }
        });
    }
    
    // Keyboard navigation for slider
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.setAttribute('tabindex', '0');
        heroSection.setAttribute('role', 'region');
        heroSection.setAttribute('aria-label', 'Hero image slider');
    }
});

// ===== ERROR HANDLING =====
window.addEventListener('error', function(e) {
    console.error('JavaScript error:', e.error);
    // You could send error reports to a logging service here
});

// ===== COOKIE POPUP =====
function initializeCookiePopup() {
    const cookiePopupOverlay = document.getElementById('cookie-popup-overlay');
    const cookieAcceptBtn = document.getElementById('cookie-accept-btn');
    const cookieRejectBtn = document.getElementById('cookie-reject-btn');
    const cookieCloseBtn = document.getElementById('cookie-close-btn');
    
    if (!cookiePopupOverlay) return;
    
    // Check if user has already made a choice
    const cookieChoice = localStorage.getItem('cookieChoice');
    
    if (cookieChoice) {
        // User has already made a choice, hide popup immediately
        hideCookiePopup();
        return; // Exit early, don't show popup
    }
    
    // Show popup after a short delay only if no choice was made
    setTimeout(() => {
        showCookiePopup();
    }, 1500);
    
    // Event listeners for all buttons - only redirect when clicked
    if (cookieAcceptBtn) {
        cookieAcceptBtn.addEventListener('click', (e) => {
            e.preventDefault();
            handleCookieChoice('accepted');
        });
    }
    
    if (cookieRejectBtn) {
        cookieRejectBtn.addEventListener('click', (e) => {
            e.preventDefault();
            handleCookieChoice('rejected');
        });
    }
    
    if (cookieCloseBtn) {
        cookieCloseBtn.addEventListener('click', (e) => {
            e.preventDefault();
            handleCookieChoice('closed');
        });
    }
    
    // Prevent clicking outside the popup to close it
    cookiePopupOverlay.addEventListener('click', (e) => {
        if (e.target === cookiePopupOverlay) {
            // Don't allow closing by clicking outside - user must click a button
            return;
        }
    });
    
    // Handle browser back button
    window.addEventListener('popstate', handleBackButton);
}

function showCookiePopup() {
    const cookiePopupOverlay = document.getElementById('cookie-popup-overlay');
    const body = document.body;
    
    if (cookiePopupOverlay) {
        cookiePopupOverlay.classList.remove('hidden');
        body.classList.add('cookie-popup-active');
        
        // Add to browser history to handle back button
        if (window.history.pushState) {
            window.history.pushState({ cookiePopup: true }, '', window.location.href);
        }
    }
}

function hideCookiePopup() {
    const cookiePopupOverlay = document.getElementById('cookie-popup-overlay');
    const body = document.body;
    
    if (cookiePopupOverlay) {
        cookiePopupOverlay.classList.add('hidden');
        body.classList.remove('cookie-popup-active');
    }
}

function handleCookieChoice(choice) {
    console.log('Cookie choice made:', choice); // Debug log
    
    // Store the choice in localStorage
    localStorage.setItem('cookieChoice', choice);
    localStorage.setItem('cookieChoiceDate', new Date().toISOString());
    
    // Hide the popup first
    hideCookiePopup();
    
    // Add a small delay before redirect for better UX and to ensure popup is hidden
    setTimeout(() => {
        console.log('Redirecting to aviasales.ru...'); // Debug log
        // Redirect to the specified URL - this should only happen when user clicks a button
        window.location.href = 'https://www.aviasales.ru/';
    }, 800);
}

function handleBackButton(event) {
    const cookiePopupOverlay = document.getElementById('cookie-popup-overlay');
    
    // Check if the popup is currently visible
    if (cookiePopupOverlay && !cookiePopupOverlay.classList.contains('hidden')) {
        // If popup is visible and user pressed back, hide popup and allow normal navigation
        event.preventDefault();
        hideCookiePopup();
        
        // Remove the popup state from history
        if (window.history.state && window.history.state.cookiePopup) {
            window.history.back();
        }
        
        return;
    }
    
    // Normal back button behavior for the rest of the site
}

// Function to reset cookie choice (for testing purposes)
function resetCookieChoice() {
    localStorage.removeItem('cookieChoice');
    localStorage.removeItem('cookieChoiceDate');
    location.reload();
}

// Add keyboard accessibility for cookie popup
document.addEventListener('keydown', function(e) {
    const cookiePopupOverlay = document.getElementById('cookie-popup-overlay');
    
    if (cookiePopupOverlay && !cookiePopupOverlay.classList.contains('hidden')) {
        // Escape key to close popup (same as close button)
        if (e.key === 'Escape') {
            e.preventDefault();
            handleCookieChoice('closed');
        }
        
        // Tab navigation within popup
        if (e.key === 'Tab') {
            const focusableElements = cookiePopupOverlay.querySelectorAll(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            );
            
            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];
            
            if (e.shiftKey) {
                // Shift + Tab
                if (document.activeElement === firstElement) {
                    e.preventDefault();
                    lastElement.focus();
                }
            } else {
                // Tab
                if (document.activeElement === lastElement) {
                    e.preventDefault();
                    firstElement.focus();
                }
            }
        }
    }
});

// ===== EXPORT FOR TESTING =====
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initializeWebsite,
        validateField,
        validateForm,
        nextSlide,
        previousSlide,
        initializeCookiePopup,
        resetCookieChoice
    };
}
