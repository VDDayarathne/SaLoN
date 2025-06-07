<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Services Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* --- Custom styles from paste.txt --- */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .service-card { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
        .service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.1)); opacity: 0; transition: opacity 0.4s ease; z-index: 1; }
        .service-card:hover::before { opacity: 1; }
        .service-card:hover { transform: translateY(-12px); box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3); }
        .service-image { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
        .service-image::after { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(0, 0, 0, 0.4), transparent); opacity: 0; transition: opacity 0.3s ease; }
        .service-card:hover .service-image::after { opacity: 1; }
        .service-card:hover .service-image img { transform: scale(1.1); }
        .price-tag { background: linear-gradient(135deg, #f59e0b, #d97706); position: relative; overflow: hidden; }
        .price-tag::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent); transition: left 0.6s; }
        .service-card:hover .price-tag::before { left: 100%; }
        .btn-modern { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
        .btn-modern::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s; }
        .btn-modern:hover::before { left: 100%; }
        .btn-modern:hover { transform: translateY(-2px); }
        .section-title { background: linear-gradient(135deg, #000000, #374151); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .floating-icon { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
        .fade-in { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.8s ease forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .stagger-animation { animation-delay: calc(var(--stagger) * 0.1s); }
        .view-all-btn { background: linear-gradient(135deg, #000000, #374151); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
        .view-all-btn::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, #f59e0b, #d97706); opacity: 0; transition: opacity 0.4s ease; }
        .view-all-btn:hover::before { opacity: 1; }
        .view-all-btn:hover { transform: translateY(-3px); box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4); }
        .view-all-btn span { position: relative; z-index: 2; }
    </style>
</head>
<body class="bg-gray-50">
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 fade-in">
                <div class="flex items-center justify-center mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-1 h-12 bg-gradient-to-b from-amber-400 to-amber-600 rounded-full"></div>
                        <i class="fas fa-spa text-4xl text-amber-500 floating-icon"></i>
                        <div class="w-1 h-12 bg-gradient-to-b from-amber-400 to-amber-600 rounded-full"></div>
                    </div>
                </div>
                <h2 class="text-5xl font-bold section-title mb-4">
                    Premium Services
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Discover our luxurious salon treatments designed to enhance your natural beauty
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-400 to-amber-600 mx-auto mt-6 rounded-full"></div>
            </div>
            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($product as $products)
                <div class="service-card bg-white rounded-2xl shadow-lg hover:shadow-2xl border border-gray-100 fade-in stagger-animation" 
                     style="--stagger: {{ $loop->index }}">
                    <!-- Service Image -->
                    <div class="service-image relative h-64 rounded-t-2xl overflow-hidden">
                        <img src="products/{{ $products->image }}" 
                             alt="{{ $products->title }}" 
                             class="w-full h-full object-cover transition-transform duration-500">
                        <!-- Overlay Icons -->
                        <div class="absolute top-4 right-4 space-y-2 opacity-0 transform translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
                            <div class="w-10 h-10 bg-black bg-opacity-70 rounded-full flex items-center justify-center">
                                <i class="fas fa-heart text-white text-sm"></i>
                            </div>
                        </div>
                        <!-- Service Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-black bg-opacity-80 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Premium
                            </span>
                        </div>
                    </div>
                    <!-- Service Details -->
                    <div class="p-6 relative z-10">
                        <!-- Service Title -->
                        <h6 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                            {{ $products->title }}
                        </h6>
                        <!-- Rating Stars -->
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-1">
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <i class="fas fa-star text-amber-400 text-sm"></i>
                                <i class="fas fa-star text-gray-300 text-sm"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(4.8)</span>
                        </div>
                        <!-- Price -->
                        <div class="price-tag rounded-xl p-4 mb-6 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-black font-bold text-2xl">LKR {{ $products->price }}</span>
                            </div>
                            <p class="text-black text-sm opacity-80 mt-1">Starting from</p>
                        </div>
                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <a href="{{ url('product_details', $products->id) }}" 
                               class="btn-modern w-full bg-gray-900 hover:bg-black text-white py-3 px-6 rounded-xl font-medium text-center block transition-all duration-300">
                                <i class="fas fa-info-circle mr-2"></i>
                                View Details
                            </a>
                            <a href="{{ url('add_cart', $products->id) }}" 
                               class="btn-modern w-full bg-amber-500 hover:bg-amber-600 text-black py-3 px-6 rounded-xl font-medium text-center block transition-all duration-300">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Book Service
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- View All Button -->
            <div class="text-center mt-16 fade-in">
                <a href="" class="view-all-btn inline-flex items-center space-x-3 text-white px-12 py-4 rounded-2xl font-semibold text-lg transition-all duration-400">
                    <span>View All Services</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Demo Additional Content -->
    <div class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Why Choose Our Salon?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-black text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Expert Stylists</h4>
                    <p class="text-gray-300">Certified professionals with years of experience</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-black text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Premium Products</h4>
                    <p class="text-gray-300">Only the finest organic and professional products</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-black text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Flexible Hours</h4>
                    <p class="text-gray-300">Open 7 days a week to fit your schedule</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Intersection Observer for fade-in animations
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
        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
        // Add hover sound effect (optional)
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-12px) scale(1.02)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1)';
            });
        });
        document.querySelector('.view-all-btn').addEventListener('click', (e) => {
            e.preventDefault();
           
            console.log('Navigate to all services page');
        });
    </script>
</body>
</html>
