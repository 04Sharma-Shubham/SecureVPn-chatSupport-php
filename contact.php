<?php
$page_title = "Contact Us";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(rgba(76, 175, 80, 0.8), rgba(76, 175, 80, 0.6)), url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-hero-title">Contact Us</h1>
                <p class="page-hero-subtitle">Get in touch with our security experts. We're here to help you stay safe online.</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Contact Us</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section contact-form-section" id="contact-form" style="background: var(--gray-50);">
        <div class="container">
            <div class="contact-form-container">
                <div class="form-header animate-on-scroll">
                    <h2>Contact Form</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours with personalized nutrition advice.</p>
                </div>
                
                <form class="contact-form animate-on-scroll" id="main-contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" class="form-input" name="name" placeholder="John Doe" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Name</label>
                            <input type="text" class="form-input" name="preferred_name" placeholder="How you'd like to be addressed">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address <span class="required">*</span></label>
                        <input type="email" class="form-input" name="email" placeholder="john@example.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <select class="form-select" name="location">
                                <option value="">Select your location</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Inquiry Type <span class="required">*</span></label>
                            <select class="form-select" name="inquiry_type" required>
                                <option value="">Select an option</option>
                                <option value="consultation">Free Consultation Request</option>
                                <option value="meal-plan">Meal Planning Questions</option>
                                <option value="pricing">Pricing Information</option>
                                <option value="nutrition">Nutrition Advice</option>
                                <option value="corporate">Corporate Programs</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Preferred Contact Method</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="contact_method[]" value="phone">
                                <span class="checkmark"></span>
                                Phone
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="contact_method[]" value="email">
                                <span class="checkmark"></span>
                                Email
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="contact_method[]" value="online">
                                <span class="checkmark"></span>
                                Online Consultation
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Preferred Contact Time</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="contact_time" value="morning">
                                <span class="radiomark"></span>
                                Morning (9:00 AM - 12:00 PM)
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="contact_time" value="afternoon">
                                <span class="radiomark"></span>
                                Afternoon (1:00 PM - 5:00 PM)
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="contact_time" value="evening">
                                <span class="radiomark"></span>
                                Evening (5:00 PM - 7:00 PM)
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="contact_time" value="anytime">
                                <span class="radiomark"></span>
                                Anytime
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Message <span class="required">*</span></label>
                        <textarea class="form-textarea" name="message" placeholder="Please describe your question or concern in detail. Include your current diet, health goals, dietary restrictions, or any specific nutrition questions you have." rows="6" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label privacy-check">
                            <input type="checkbox" name="privacy_agreement" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="terms.php" target="_blank">Terms of Service</a> and <a href="privacy.php" target="_blank">Privacy Policy</a> <span class="required">*</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Message</span>
                    </button>
                    
                    <p class="form-note">
                        <i class="fas fa-info-circle"></i>
                        After submission, you'll receive an automatic confirmation email. We'll respond within 24 hours.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section" style="background: var(--gray-50);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Frequently Asked Questions</h2>
                <p class="section-subtitle animate-on-scroll">Check these common questions before contacting us</p>
            </div>

            <div class="faq-container">
                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Is the consultation really free?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, the initial consultation (30 minutes) is completely free. We'll listen to your situation and recommend the best service plan for you. We never pressure you to buy anything, so feel free to reach out.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Can I have an online consultation?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer online consultations using Zoom or Microsoft Teams. You can join from anywhere in the country. If you book in advance, we'll set up a dedicated meeting room for you.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>Do you offer weekend consultations?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We are open Saturdays from 10:00 AM - 5:00 PM. Sundays and holidays are our regular days off, but we can arrange special consultations if you contact us in advance. For urgent matters, please email us.</p>
                    </div>
                </div>

                <div class="faq-item animate-on-scroll">
                    <div class="faq-question">
                        <h4>How quickly will I get a response?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We respond to email inquiries within 24 hours on business days. For urgent matters, we recommend calling us directly.</p>
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

.contact-form-container {
    max-width: 800px;
    margin: 0 auto;
}

.form-header {
    text-align: center;
    margin-bottom: 3rem;
}

.form-header h2 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.contact-form {
    background: white;
    padding: 3rem;
    border-radius: 1.5rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--primary-color);
}

.required {
    color: var(--secondary-color);
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid var(--gray-200);
    border-radius: 0.5rem;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: var(--white);
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.1);
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
}

.checkbox-group,
.radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.checkbox-label,
.radio-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    font-weight: 500;
}

.checkbox-label input,
.radio-label input {
    display: none;
}

.checkmark,
.radiomark {
    width: 20px;
    height: 20px;
    border: 2px solid var(--gray-300);
    margin-right: 0.5rem;
    transition: all 0.3s ease;
}

.checkmark {
    border-radius: 4px;
}

.radiomark {
    border-radius: 50%;
}

.checkbox-label input:checked + .checkmark {
    background: var(--primary-color);
    border-color: var(--primary-color);
}

.checkbox-label input:checked + .checkmark::after {
    content: '✓';
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
}

.radio-label input:checked + .radiomark {
    border-color: var(--primary-color);
}

.radio-label input:checked + .radiomark::after {
    content: '';
    width: 8px;
    height: 8px;
    background: var(--primary-color);
    border-radius: 50%;
    margin: 4px;
    display: block;
}

.privacy-check {
    margin-bottom: 2rem;
}

.privacy-check a {
    color: var(--primary-color);
    text-decoration: none;
}

.privacy-check a:hover {
    text-decoration: underline;
}

.submit-btn {
    width: 100%;
    padding: 1.2rem;
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

.form-note {
    text-align: center;
    color: var(--gray-600);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
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

@media (max-width: 768px) {
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
        const answer = item.querySelector('.faq-answer');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all FAQ items first
            faqItems.forEach(faq => {
                faq.classList.remove('active');
                faq.querySelector('.faq-answer').style.maxHeight = '0';
            });

            // If the clicked item was not active, open it
            if (!isActive) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
