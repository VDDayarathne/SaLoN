<!DOCTYPE html>
<html>
<head>
  @include('home.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
    .hero_area { background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%); }
    .product-image-container { position: relative; overflow: hidden; border-radius: 20px; background: linear-gradient(145deg, #f8f9fa, #e9ecef); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);}
    .product-image-container:hover { transform: translateY(-10px); box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);}
    .product-image { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);}
    .product-image-container:hover .product-image { transform: scale(1.05);}
    .info-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px); border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 20px; padding: 2rem; margin-bottom: 1.5rem; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);}
    .info-card:hover { transform: translateY(-5px); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1); border-color: #f59e0b;}
    .price-highlight { background: linear-gradient(135deg, #f59e0b, #d97706); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700;}
    .category-badge { background: linear-gradient(135deg, #000000, #374151); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.5rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);}
    .quantity-indicator { background: linear-gradient(135deg, #10b981, #047857); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.5rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);}
    .description-card { background: linear-gradient(145deg, #f8f9fa, #ffffff); border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 20px; padding: 2rem; line-height: 1.8; color: #374151; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);}
    .description-card:hover { transform: translateY(-3px); box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);}
    .btn-modern { background: linear-gradient(135deg, #f59e0b, #d97706); color: #000000; padding: 1rem 2.5rem; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3); position: relative; overflow: hidden;}
    .btn-modern::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent); transition: left 0.6s;}
    .btn-modern:hover::before { left: 100%;}
    .btn-modern:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(245, 158, 11, 0.4); color: #000000; text-decoration: none;}
    .section-title { background: linear-gradient(135deg, #000000, #374151); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 2.5rem; font-weight: 700; text-align: center; margin-bottom: 3rem; position: relative;}
    .section-title::after { content: ''; position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 100px; height: 3px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 2px;}
    .floating-animation { animation: float 6s ease-in-out infinite;}
    @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); }}
    .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);}
    .fade-in.visible { opacity: 1; transform: translateY(0);}
    .icon-circle { width: 60px; height: 60px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #000000; font-size: 1.5rem; box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);}
    .icon-circle:hover { transform: rotate(360deg) scale(1.1);}
    .back-button { background: rgba(0, 0, 0, 0.9); color: white; padding: 0.75rem 1.5rem; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); margin-bottom: 2rem; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);}
    .back-button:hover { background: rgba(245, 158, 11, 0.9); color: #000000; transform: translateX(-5px); text-decoration: none;}
    .product-grid { background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); min-height: 100vh; padding: 4rem 0;}
  </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header')
  </div>

  <section class="product-grid">
    <div class="container mx-auto px-4 max-w-7xl">

      <a href="{{ url()->previous() }}" class="back-button fade-in">
        <i class="fas fa-arrow-left"></i>
        Back to Products
      </a>
      <h2 class="section-title fade-in">Product Details</h2>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        <!-- Product Image Section -->
        <div class="fade-in">
          <div class="product-image-container floating-animation p-8">
            <img 
              class="product-image w-full h-auto max-w-md mx-auto object-contain" 
              src="{{ asset('products/'.$data->image) }}" 
              alt="{{ $data->title }}"
            >
            <div class="absolute top-4 right-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
              <i class="fas fa-eye mr-1"></i>
              Premium Quality
            </div>
          </div>
        </div>

        <!-- Product Information Section -->
        <div class="space-y-6">

          <div class="info-card fade-in" style="animation-delay: 0.2s;">
            <div class="flex items-center gap-4 mb-4">
              <div class="icon-circle">
                <i class="fas fa-spa"></i>
              </div>
              <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $data->title }}</h1>
                <p class="text-2xl price-highlight">LKR {{ number_format($data->price, 2) }}</p>
              </div>
            </div>
          </div>

          <div class="info-card fade-in" style="animation-delay: 0.4s;">
            <div class="flex flex-wrap items-center gap-4 mb-4">
              <div class="icon-circle">
                <i class="fas fa-tag"></i>
              </div>
              <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Product Information</h3>
                <div class="flex flex-wrap gap-3">
                  <div class="category-badge">
                    <i class="fas fa-bookmark"></i>
                    {{ $data->category }}
                  </div>
                  <div class="quantity-indicator">
                    <i class="fas fa-box"></i>
                    {{ $data->quantity }} Available
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="fade-in" style="animation-delay: 0.6s;">
            <div class="flex items-start gap-4 mb-4">
              <div class="icon-circle">
                <i class="fas fa-info-circle"></i>
              </div>
              <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Description</h3>
              </div>
            </div>
            <div class="description-card">
              <p class="text-gray-700">{{ $data->description }}</p>
            </div>
          </div>

          <div class="flex flex-wrap gap-4 pt-6 fade-in" style="animation-delay: 0.8s;">
            <a href="{{ url('add_cart', $data->id) }}" class="btn-modern">
              <i class="fas fa-shopping-cart"></i>
              Add to Cart
            </a>
            <a href="#" class="btn-modern" style="background: linear-gradient(135deg, #10b981, #047857); box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);">
              <i class="fas fa-heart"></i>
              Add to Wishlist
            </a>
          </div>

        </div>
      </div>

      <div class="mt-16 fade-in" style="animation-delay: 1s;">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

          <div class="info-card text-center">
            <div class="icon-circle mx-auto mb-4">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Fast Delivery</h4>
            <p class="text-gray-600">Quick and secure delivery to your salon</p>
          </div>

          <div class="info-card text-center">
            <div class="icon-circle mx-auto mb-4">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">Quality Guarantee</h4>
            <p class="text-gray-600">Premium products with quality assurance</p>
          </div>

          <div class="info-card text-center">
            <div class="icon-circle mx-auto mb-4">
              <i class="fas fa-phone-alt"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">24/7 Support</h4>
            <p class="text-gray-600">Professional customer support available</p>
          </div>

        </div>
      </div>

      <div class="text-center mt-12 fade-in" style="animation-delay: 1.2s;">
        <a href="{{ url('/') }}" class="btn-modern text-lg">
          <i class="fas fa-th-large"></i>
          View All Products
        </a>
      </div>

    </div>
  </section>

  @include('home.footer')

  <script>
    // Intersection Observer for fade-in animations
    if (typeof window.fadeInObserverInitialized === "undefined") {
      window.fadeInObserverInitialized = true;
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, observerOptions);
      document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
      });
    }
  </script>
</body>
</html>
