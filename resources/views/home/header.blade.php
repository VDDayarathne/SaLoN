<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Management Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(0, 0, 0, 0.95);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .nav-link-hover {
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-link-hover::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #f59e0b, #d97706);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
        }
        
        .nav-link-hover:hover::after,
        .nav-link-hover.active::after {
            width: 100%;
        }
        
        .nav-link-hover:hover {
            color: #f59e0b;
            transform: translateY(-2px);
        }
        
        .logo-gradient {
            background: linear-gradient(135deg, #ffffff, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
        }
        
        .cart-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        .hamburger {
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hamburger span {
            display: block;
            width: 25px;
            height: 3px;
            background: white;
            margin: 5px 0;
            transition: 0.3s;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        
        .search-expand {
            width: 0;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }
        
        .search-expand.active {
            width: 200px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.html" class="flex items-center space-x-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-lg flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-cut text-black text-lg"></i>
                        </div>
                        <span class="text-2xl font-bold logo-gradient tracking-wider">
                            SaLoN
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:block">
                    <div class="flex items-center space-x-8">
                        <a href="{{ url('/') }}" class="nav-link-hover active text-white font-medium py-2 px-1">
                            Home
                        </a>
                        <a href="shop.html" class="nav-link-hover text-gray-300 hover:text-white font-medium py-2 px-1">
                            Services
                        </a>
                        <a href="why.html" class="nav-link-hover text-gray-300 hover:text-white font-medium py-2 px-1">
                            Why Us
                        </a>
                        <a href="testimonial.html" class="nav-link-hover text-gray-300 hover:text-white font-medium py-2 px-1">
                            Reviews
                        </a>
                        <a href="contact.html" class="nav-link-hover text-gray-300 hover:text-white font-medium py-2 px-1">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- User Options -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="flex items-center">
                        <input type="text" class="search-expand bg-gray-800 text-white px-4 py-2 rounded-l-full border-none outline-none placeholder-gray-400" placeholder="Search services...">
                        <button class="btn-modern bg-amber-500 hover:bg-amber-600 text-black px-4 py-2 rounded-r-full transition-all duration-300" onclick="toggleSearch()">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>

                    <!-- Auth Section - Replace this comment with your Laravel auth logic -->
                    <!-- @if (Route::has('login')) -->
                    <!-- @auth -->
                    <div class="hidden lg:flex items-center space-x-4 text-sm">
                        <!-- Logged in state -->
                        <a href="{{ url('myorders') }}" class="nav-link-hover text-gray-300 hover:text-white font-medium flex items-center space-x-1">
                            <i class="fas fa-history"></i>
                            <span>My Orders</span>
                        </a>
                        
                        <a href="{{ url('mycart') }}" class="nav-link-hover text-gray-300 hover:text-white font-medium flex items-center space-x-2 relative">
                            <i class="fa fa-shopping-bag text-lg"></i>
                            <span class="cart-badge bg-amber-500 text-black text-xs font-bold px-2 py-1 rounded-full min-w-[20px] text-center">
                                [{{ $count }}]
                            </span>
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="btn-modern bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full font-medium">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </div>
                    
                    @else
                    <!-- Guest state - uncomment and use when not logged in -->
                    
                    <div class="hidden lg:flex items-center space-x-3">
                        <a href="{{ url('/login')}}" class="btn-modern bg-transparent border-2 border-amber-500 text-amber-500 hover:bg-amber-500 hover:text-black px-6 py-2 rounded-full font-medium flex items-center space-x-2">
                            <i class="fa fa-user"></i>
                            <span>Login</span>
                        </a>
                        
                        <a href="{{ url('/register')}}" class="btn-modern bg-amber-500 hover:bg-amber-600 text-black px-6 py-2 rounded-full font-medium flex items-center space-x-2">
                            <i class="fa fa-vcard"></i>
                            <span>Register</span>
                        </a>
                    </div>
                    
                     @endauth
                     @endif

                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button class="hamburger" onclick="toggleMobileMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div class="mobile-menu lg:hidden fixed top-20 right-0 w-80 h-screen bg-black bg-opacity-95 backdrop-blur-lg">
            <div class="p-6 space-y-6">
                <!-- Mobile Navigation Links -->
                <div class="space-y-4">
                    <a href="{{ url('/') }}" class="block text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                        <i class="fas fa-home mr-3"></i>Home
                    </a>
                    <a href="shop.html" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fas fa-cut mr-3"></i>Services
                    </a>
                    <a href="why.html" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fas fa-star mr-3"></i>Why Us
                    </a>
                    <a href="testimonial.html" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fas fa-comments mr-3"></i>Reviews
                    </a>
                    <a href="contact.html" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fas fa-envelope mr-3"></i>Contact
                    </a>
                </div>

                <!-- Mobile User Options -->
                <div class="border-t border-gray-700 pt-6 space-y-4">
                    <!-- Mobile Auth Section -->
                    <a href="{{ url('myorders') }}" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fas fa-history mr-3"></i>My Orders
                    </a>
                    
                    <a href="{{ url('mycart') }}" class="block text-gray-300 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 hover:text-white transition-colors">
                        <i class="fa fa-shopping-bag mr-3"></i>Cart [{{ $count }}]
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left text-red-400 font-medium py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                            <i class="fas fa-sign-out-alt mr-3"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Demo content to show sticky header -->
    <div class="pt-20">
        <div class="bg-gradient-to-r from-black to-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold mb-4 text-gray-400">Premium Salon Management</h1>
               
            </div>
        </div>
        
        
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.querySelector('.mobile-menu');
            const hamburger = document.querySelector('.hamburger');
            
            menu.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        function toggleSearch() {
            const searchInput = document.querySelector('.search-expand');
            searchInput.classList.toggle('active');
            
            if (searchInput.classList.contains('active')) {
                setTimeout(() => searchInput.focus(), 300);
            }
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.querySelector('.mobile-menu');
            const hamburger = document.querySelector('.hamburger');
            
            if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
                menu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 0) {
                header.style.background = 'rgba(0, 0, 0, 0.98)';
            } else {
                header.style.background = 'rgba(0, 0, 0, 0.95)';
            }
        });
    </script>
</body>
</html>