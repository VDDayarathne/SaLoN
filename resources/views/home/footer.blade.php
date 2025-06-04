<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Management Footer</title>
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
        
        .social-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .social-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #f59e0b, #d97706);
            transform: scale(0);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: -1;
        }
        
        .social-hover:hover::before {
            transform: scale(1);
        }
        
        .social-hover:hover {
            transform: translateY(-5px);
            color: #000000;
        }
        
        .newsletter-input {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .newsletter-input:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.2);
        }
        
        .btn-modern {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-modern:hover::before {
            left: 100%;
        }
        
        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.4);
        }
        
        .info-link-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .info-link-hover:hover {
            color: #f59e0b;
            transform: translateX(10px);
        }
        
        .info-link-hover:hover i {
            color: #f59e0b;
            transform: scale(1.2);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { 
                box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
            }
            50% { 
                box-shadow: 0 0 30px rgba(245, 158, 11, 0.6);
            }
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #ffffff, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-divider {
            background: linear-gradient(90deg, transparent, #f59e0b, transparent);
            height: 1px;
            width: 100%;
            margin: 2rem 0;
        }
        
        .footer-pattern {
            background-image: radial-gradient(circle at 25% 25%, rgba(245, 158, 11, 0.1) 0%, transparent 50%),
                              radial-gradient(circle at 75% 75%, rgba(245, 158, 11, 0.1) 0%, transparent 50%);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Modern Footer Section -->
    <section class="gradient-bg footer-pattern relative overflow-hidden">
        <!-- Social Media Section -->
        <div class="relative z-10 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-white mb-8">
                        Connect With <span class="text-gradient">Our Salon</span>
                    </h3>
                    <div class="flex justify-center space-x-6">
                        <a href="" class="social-hover w-14 h-14 bg-gray-800 rounded-full flex items-center justify-center text-white text-xl relative z-10">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="social-hover w-14 h-14 bg-gray-800 rounded-full flex items-center justify-center text-white text-xl relative z-10">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-hover w-14 h-14 bg-gray-800 rounded-full flex items-center justify-center text-white text-xl relative z-10">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="social-hover w-14 h-14 bg-gray-800 rounded-full flex items-center justify-center text-white text-xl relative z-10">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Info Section -->
        <div class="relative z-10 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <!-- About Us -->
                    <div class="floating-animation">
                        <div class="bg-gray-900 bg-opacity-50 backdrop-blur-sm rounded-2xl p-6 h-full hover:bg-opacity-70 transition-all duration-300 border border-gray-800">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-info-circle text-black text-sm"></i>
                                </div>
                                <h6 class="text-xl font-bold text-white">ABOUT US</h6>
                            </div>
                            <p class="text-gray-300 leading-relaxed">
                                Premium salon management system designed for modern beauty professionals. We provide comprehensive solutions for appointment booking, staff management, and customer care.
                            </p>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="floating-animation" style="animation-delay: 0.5s;">
                        <div class="bg-gray-900 bg-opacity-50 backdrop-blur-sm rounded-2xl p-6 h-full hover:bg-opacity-70 transition-all duration-300 border border-gray-800">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-envelope text-black text-sm"></i>
                                </div>
                                <h5 class="text-xl font-bold text-white">Newsletter</h5>
                            </div>
                            <form action="#" class="space-y-4">
                                <input 
                                    type="email" 
                                    placeholder="Enter your email"
                                    class="newsletter-input w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                >
                                <button class="btn-modern w-full bg-amber-500 hover:bg-amber-600 text-black font-semibold py-3 px-6 rounded-xl pulse-glow">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Need Help -->
                    <div class="floating-animation" style="animation-delay: 1s;">
                        <div class="bg-gray-900 bg-opacity-50 backdrop-blur-sm rounded-2xl p-6 h-full hover:bg-opacity-70 transition-all duration-300 border border-gray-800">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-question-circle text-black text-sm"></i>
                                </div>
                                <h6 class="text-xl font-bold text-white">NEED HELP</h6>
                            </div>
                            <p class="text-gray-300 leading-relaxed">
                                Our dedicated support team is here to assist you with any questions about our salon management platform. Get 24/7 professional assistance.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Us -->
                    <div class="floating-animation" style="animation-delay: 1.5s;">
                        <div class="bg-gray-900 bg-opacity-50 backdrop-blur-sm rounded-2xl p-6 h-full hover:bg-opacity-70 transition-all duration-300 border border-gray-800">
                            <div class="flex items-center mb-4">
                                <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-phone text-black text-sm"></i>
                                </div>
                                <h6 class="text-xl font-bold text-white">CONTACT US</h6>
                            </div>
                            <div class="space-y-4">
                                <a href="" class="info-link-hover flex items-center text-gray-300 hover:text-amber-500 transition-all duration-300">
                                    <i class="fa fa-map-marker-alt w-5 text-amber-500 mr-3 transition-all duration-300"></i>
                                    <span>Gb road 123 london Uk</span>
                                </a>
                                <a href="" class="info-link-hover flex items-center text-gray-300 hover:text-amber-500 transition-all duration-300">
                                    <i class="fa fa-phone w-5 text-amber-500 mr-3 transition-all duration-300"></i>
                                    <span>+01 12345678901</span>
                                </a>
                                <a href="" class="info-link-hover flex items-center text-gray-300 hover:text-amber-500 transition-all duration-300">
                                    <i class="fa fa-envelope w-5 text-amber-500 mr-3 transition-all duration-300"></i>
                                    <span>demo@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Divider -->
        <div class="section-divider"></div>

        <!-- Footer Copyright -->
        <footer class="relative z-10 py-8 bg-black bg-opacity-60 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="text-center md:text-left mb-4 md:mb-0">
                        <p class="text-gray-300">
                            &copy; <span id="displayYear" class="text-amber-500 font-semibold">2024</span> All Rights Reserved By
                            <a href="https://html.design/" class="text-amber-500 hover:text-amber-400 font-semibold hover:underline transition-colors duration-300">
                                Web Tech Knowledge
                            </a>
                        </p>
                    </div>
                    
                    <!-- Additional Footer Links -->
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors duration-300">Support</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Background Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-10 left-10 w-20 h-20 bg-amber-500 rounded-full opacity-10 animate-pulse"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white rounded-full opacity-5 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-amber-400 rounded-full opacity-10 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
    </section>

    <!-- Your existing scripts - keep these exactly as they are -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Additional footer functionality -->
    <script>
        // Set current year
        document.getElementById('displayYear').textContent = new Date().getFullYear();

        // Newsletter form enhancement
        document.querySelector('form[action="#"]').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                // Add your newsletter subscription logic here
                alert('Thank you for subscribing to our newsletter!');
                this.querySelector('input[type="email"]').value = '';
            }
        });

        // Smooth scroll for internal links
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

        // Add intersection observer for animation triggers
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe footer sections
        document.querySelectorAll('.floating-animation').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            observer.observe(el);
        });
    </script>
</body>
</html>