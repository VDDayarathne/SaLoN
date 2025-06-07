<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #000000 0%, #1f1f1f 50%, #000000 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(245, 158, 11, 0.1) 0%, transparent 50%);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(1deg); }
            50% { transform: translateY(-20px) rotate(0deg); }
            75% { transform: translateY(-10px) rotate(-1deg); }
        }
        
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .fade-in-up.delay-1 { animation-delay: 0.2s; }
        .fade-in-up.delay-2 { animation-delay: 0.4s; }
        .fade-in-up.delay-3 { animation-delay: 0.6s; }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
        }
        
        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }
        
        .image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(245, 158, 11, 0.1) 0%, transparent 50%);
            z-index: 2;
        }
        
        .hero-image {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            filter: brightness(1.1) contrast(1.1);
        }
        
        .image-container:hover .hero-image {
            transform: scale(1.05);
        }
        
        .decorative-element {
            position: absolute;
            opacity: 0.1;
            animation: rotate 20s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .stats-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stats-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
        }
        
        .pulse-dot {
            animation: pulse-dot 2s infinite;
        }
        
        @keyframes pulse-dot {
            0%, 100% { 
                transform: scale(1);
                opacity: 1;
            }
            50% { 
                transform: scale(1.2);
                opacity: 0.7;
            }
        }
        
        @media (max-width: 768px) {
            .hero-gradient {
                min-height: auto;
                padding: 2rem 0;
            }
            
            .floating-animation {
                animation: none;
            }
        }
    </style>
</head>
<body>
    <section class="hero-gradient min-h-screen flex items-center relative">
        <!-- Decorative Elements -->
        <div class="decorative-element top-20 right-20 w-32 h-32">
            <i class="fas fa-cut text-amber-500 text-6xl"></i>
        </div>
        <div class="decorative-element bottom-20 left-20 w-24 h-24">
            <i class="fas fa-spa text-amber-500 text-4xl"></i>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="hero-content">
                            <div class="grid lg:grid-cols-2 gap-12 items-center">
                                <!-- Content Column -->
                                <div class="space-y-8">
                                    <!-- Badge -->
                                    <div class="fade-in-up inline-flex items-center space-x-2 bg-amber-500 bg-opacity-20 text-amber-400 px-4 py-2 rounded-full text-sm font-medium">
                                        <div class="w-2 h-2 bg-amber-500 rounded-full pulse-dot"></div>
                                        <span>Professional Salon Management</span>
                                    </div>
                                    
                                    <!-- Main Heading -->
                                    <div class="fade-in-up delay-1">
                                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                                            <span class="text-white font-light">Welcome To Our</span><br>
                                            <span class="text-gradient font-black" style="font-family: 'Playfair Display', serif;">
                                                Premium Salon
                                            </span>
                                        </h1>
                                    </div>
                                    
                                    <!-- Description -->
                                    <div class="fade-in-up delay-2">
                                        <p class="text-gray-300 text-lg lg:text-xl leading-relaxed max-w-2xl">
                                            Experience luxury and professionalism with our comprehensive salon management system. 
                                            From booking appointments to managing services, we provide seamless solutions that elevate 
                                            your beauty business to new heights of excellence and customer satisfaction.
                                        </p>
                                    </div>
                                    
                                    <!-- CTA Button -->
                                    <div class="fade-in-up delay-3">
                                        <a href="book-appointment" class="btn-primary inline-flex items-center space-x-3 text-black font-semibold px-8 py-4 rounded-full text-lg">
                                            <span>Book Appointment</span>
                                            <i class="fas fa-calendar-check"></i>
                                        </a>
                                    </div>
                                    
                                    <!-- Stats -->
                                    <div class="fade-in-up delay-3 grid grid-cols-3 gap-4 pt-8">
                                        <div class="stats-card p-4 rounded-xl text-center">
                                            <div class="text-2xl font-bold text-amber-500">500+</div>
                                            <div class="text-gray-400 text-sm">Happy Clients</div>
                                        </div>
                                        <div class="stats-card p-4 rounded-xl text-center">
                                            <div class="text-2xl font-bold text-amber-500">15+</div>
                                            <div class="text-gray-400 text-sm">Expert Stylists</div>
                                        </div>
                                        <div class="stats-card p-4 rounded-xl text-center">
                                            <div class="text-2xl font-bold text-amber-500">24/7</div>
                                            <div class="text-gray-400 text-sm">Online Booking</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Image Column -->
                                <div class="lg:flex justify-center items-center">
                                    <div class="image-container floating-animation relative">
                                        <img 
                                            src="images/image4.png" 
                                            alt="Professional Salon Services" 
                                            class="hero-image w-full max-w-lg h-auto object-cover rounded-2xl shadow-2xl"
                                            style="width:600px"
                                        />
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white">
            <div class="flex flex-col items-center space-y-2 animate-bounce">
                <span class="text-sm text-gray-400">Scroll Down</span>
                <i class="fas fa-chevron-down text-amber-500"></i>
            </div>
        </div>
    </section>

    

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Parallax effect for decorative elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const decorativeElements = document.querySelectorAll('.decorative-element');
            
            decorativeElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.2);
                element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
            });
        });

        // Dynamic text typing effect (optional enhancement)
        const textElement = document.querySelector('.text-gradient');
        const texts = ['Premium Salon', 'Beauty Hub', 'Style Studio'];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeEffect() {
            const currentText = texts[textIndex];
            
            if (isDeleting) {
                textElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                textElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentText.length) {
                setTimeout(() => isDeleting = true, 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }

            setTimeout(typeEffect, isDeleting ? 50 : 100);
        }

        // Start typing effect after initial load
        setTimeout(typeEffect, 3000);
    </script>
</body>
</html>