<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Contact Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #000000 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .input-modern {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .input-modern:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.2);
            border-color: #f59e0b;
        }
        
        .input-modern:focus + .input-label {
            color: #f59e0b;
            transform: translateY(-25px) scale(0.85);
        }
        
        .input-label {
            position: absolute;
            left: 16px;
            top: 16px;
            color: #9ca3af;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
            background: rgba(31, 41, 55, 0.8);
            padding: 0 8px;
            border-radius: 4px;
        }
        
        .input-modern:not(:placeholder-shown) + .input-label,
        .input-modern:focus + .input-label {
            transform: translateY(-25px) scale(0.85);
        }
        
        .btn-modern {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }
        
        .btn-modern:hover::before {
            left: 100%;
        }
        
        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
        }
        
        .map-container {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .map-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(245, 158, 11, 0.1), rgba(0, 0, 0, 0.2));
            z-index: 1;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .map-container:hover::before {
            opacity: 1;
        }
        
        .map-container:hover {
            transform: scale(1.02);
        }
        
        .section-title {
            background: linear-gradient(135deg, #ffffff, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .contact-info-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .contact-info-item:hover {
            transform: translateX(10px);
            color: #f59e0b;
        }
        
        .contact-info-item:hover .contact-icon {
            background: #f59e0b;
            color: #000000;
            transform: rotate(360deg);
        }
        
        .contact-icon {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-floating-label {
            position: relative;
        }
        
        .message-box {
            min-height: 120px;
            resize: vertical;
        }
        
        .success-animation {
            animation: success-bounce 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        @keyframes success-bounce {
            0% { transform: scale(0); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Modern Contact Section -->
    <section class="gradient-bg relative overflow-hidden py-20">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-32 h-32 bg-amber-500 rounded-full opacity-5 animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-24 h-24 bg-white rounded-full opacity-5 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-amber-500 to-amber-600 rounded-full opacity-5 blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-amber-500 rounded-2xl mb-6 floating-animation">
                    <i class="fas fa-envelope text-black text-2xl"></i>
                </div>
                <h2 class="text-5xl font-bold section-title mb-4">
                    Contact Us
                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Get in touch with our professional salon management team. We're here to help you transform your beauty business.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="w-24 h-1 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full"></div>
                </div>
            </div>

            <!-- Contact Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
                <div class="glass-card rounded-2xl p-6 text-center hover:bg-opacity-10 transition-all duration-300">
                    <div class="contact-icon w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-amber-500"></i>
                    </div>
                    <h4 class="text-white font-semibold mb-2">Visit Our Salon</h4>
                    <p class="text-gray-300 text-sm">Gb road 123 london Uk</p>
                </div>
                
                <div class="glass-card rounded-2xl p-6 text-center hover:bg-opacity-10 transition-all duration-300">
                    <div class="contact-icon w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-amber-500"></i>
                    </div>
                    <h4 class="text-white font-semibold mb-2">Call Us Now</h4>
                    <p class="text-gray-300 text-sm">+01 12345678901</p>
                </div>
                
                <div class="glass-card rounded-2xl p-6 text-center hover:bg-opacity-10 transition-all duration-300">
                    <div class="contact-icon w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-amber-500"></i>
                    </div>
                    <h4 class="text-white font-semibold mb-2">Email Us</h4>
                    <p class="text-gray-300 text-sm">demo@gmail.com</p>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                
                <!-- Map Section -->
                <div class="order-2 lg:order-1">
                    <div class="glass-card rounded-3xl p-2 h-full">
                        <div class="map-container rounded-2xl overflow-hidden h-96 lg:h-full min-h-[400px] relative">
                            <iframe 
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" 
                                width="600" 
                                height="300" 
                                frameborder="0" 
                                style="border:0; width: 100%; height: 100%; filter: grayscale(20%) contrast(1.2);" 
                                allowfullscreen>
                            </iframe>
                            <div class="absolute bottom-4 left-4 glass-card rounded-lg p-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-amber-500 rounded-full pulse-ring"></div>
                                    <span class="text-white text-sm font-medium">We're Here!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="order-1 lg:order-2">
                    <div class="glass-card rounded-3xl p-8 h-full">
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Send us a Message</h3>
                            <p class="text-gray-300">We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.</p>
                        </div>
                        
                        <form action="#" class="space-y-6" id="contactForm">
                            <!-- Name Input -->
                            <div class="form-floating-label">
                                <input 
                                    type="text" 
                                    placeholder=" "
                                    class="input-modern w-full px-4 py-4 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-transparent focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    id="name"
                                    required
                                />
                                <label class="input-label" for="name">Your Name</label>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating-label">
                                <input 
                                    type="email" 
                                    placeholder=" "
                                    class="input-modern w-full px-4 py-4 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-transparent focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    id="email"
                                    required
                                />
                                <label class="input-label" for="email">Email Address</label>
                            </div>

                            <!-- Phone Input -->
                            <div class="form-floating-label">
                                <input 
                                    type="text" 
                                    placeholder=" "
                                    class="input-modern w-full px-4 py-4 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-transparent focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    id="phone"
                                    required
                                />
                                <label class="input-label" for="phone">Phone Number</label>
                            </div>

                            <!-- Message Input -->
                            <div class="form-floating-label">
                                <textarea 
                                    placeholder=" "
                                    class="input-modern message-box w-full px-4 py-4 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-transparent focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    id="message"
                                    rows="4"
                                    required
                                ></textarea>
                                <label class="input-label" for="message">Your Message</label>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button 
                                    type="submit"
                                    class="btn-modern w-full bg-amber-500 hover:bg-amber-600 text-black font-bold py-4 px-8 rounded-xl text-lg relative overflow-hidden group"
                                >
                                    <span class="relative z-10 flex items-center justify-center">
                                        <i class="fas fa-paper-plane mr-3"></i>
                                        SEND MESSAGE
                                    </span>
                                </button>
                            </div>

                            <!-- Success Message -->
                            <div id="successMessage" class="hidden success-animation bg-green-500 bg-opacity-20 border border-green-500 rounded-xl p-4 text-center">
                                <i class="fas fa-check-circle text-green-400 text-2xl mb-2"></i>
                                <p class="text-green-400 font-medium">Thank you! Your message has been sent successfully.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Additional Contact Methods -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold text-white mb-8">Other Ways to Reach Us</h3>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                    <div class="contact-info-item flex items-center text-gray-300 cursor-pointer">
                        <div class="contact-icon w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-clock text-amber-500"></i>
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-white">Business Hours</p>
                            <p class="text-sm">Mon - Sat: 9AM - 8PM</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item flex items-center text-gray-300 cursor-pointer">
                        <div class="contact-icon w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-calendar-alt text-amber-500"></i>
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-white">Book Appointment</p>
                            <p class="text-sm">Online 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>SENDING...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Show success message
                document.getElementById('successMessage').classList.remove('hidden');
                
                // Reset form
                this.reset();
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('successMessage').classList.add('hidden');
                }, 5000);
                
            }, 2000);
        });

        // Enhanced input animations
        document.querySelectorAll('.input-modern').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Map interaction enhancement
        const mapContainer = document.querySelector('.map-container');
        mapContainer.addEventListener('click', function() {
            // Add click effect or redirect to full map
            console.log('Map clicked - could open full-screen map');
        });

        // Smooth scroll for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>