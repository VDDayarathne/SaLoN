<!DOCTYPE html>
<html>
<head>
  <!-- @include('home.css') -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      min-height: 100vh;
    }
    /* ... (rest of your CSS from paste.txt) ... */
    .card-shadow { box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);}
    .glass-card { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.95); border: 1px solid rgba(255, 255, 255, 0.2);}
    .table-row { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);}
    .table-row:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);}
    .product-image { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 12px; overflow: hidden;}
    .product-image:hover { transform: scale(1.05);}
    .btn-modern { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden;}
    .btn-modern::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.5s;}
    .btn-modern:hover::before { left: 100%;}
    .btn-modern:hover { transform: translateY(-2px);}
    .btn-danger:hover { box-shadow: 0 10px 25px rgba(239, 68, 68, 0.3);}
    .btn-primary:hover { box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);}
    .btn-success:hover { box-shadow: 0 10px 25px rgba(34, 197, 94, 0.3);}
    .total-card { background: linear-gradient(135deg, #1f2937 0%, #111827 100%); border-radius: 16px; padding: 2rem; text-align: center; color: white; position: relative; overflow: hidden;}
    .total-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, #f59e0b, #d97706);}
    .form-modern { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);}
    .input-modern { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); border: 2px solid #e5e7eb; border-radius: 12px; padding: 12px 16px; font-size: 16px; width: 100%;}
    .input-modern:focus { border-color: #f59e0b; box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1); outline: none;}
    .label-modern { font-weight: 600; color: #374151; margin-bottom: 8px; display: block;}
    .fade-in { animation: fadeIn 0.6s ease-out forwards; opacity: 0; transform: translateY(20px);}
    .fade-in:nth-child(1) { animation-delay: 0.1s; }
    .fade-in:nth-child(2) { animation-delay: 0.2s; }
    .fade-in:nth-child(3) { animation-delay: 0.3s; }
    .fade-in:nth-child(4) { animation-delay: 0.4s; }
    @keyframes fadeIn { to { opacity: 1; transform: translateY(0); } }
    .empty-cart { text-align: center; padding: 4rem 2rem; color: #6b7280;}
    .checkout-section { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); border-radius: 20px; padding: 2rem; margin-top: 2rem;}
  </style>
</head>

<body>
  <div class="hero_area">
  @include('home.header') 
  </div>

  <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      
      <!-- Page Header -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Your Salon Cart</h1>
        <p class="text-xl text-gray-600">Review your selected services and complete your booking</p>
        <div class="w-24 h-1 bg-gradient-to-r from-amber-400 to-amber-600 mx-auto mt-4 rounded-full"></div>
      </div>

      <!-- Cart Table Section -->
      <div class="glass-card rounded-2xl overflow-hidden mb-8 fade-in">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gradient-to-r from-gray-900 to-black">
              <tr>
                <th class="px-6 py-4 text-left text-white font-semibold text-lg">Service</th>
                <th class="px-6 py-4 text-center text-white font-semibold text-lg">Price</th>
                <th class="px-6 py-4 text-center text-white font-semibold text-lg">Image</th>
                <th class="px-6 py-4 text-center text-white font-semibold text-lg">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              
              <?php $value = 0; ?>
              
              @foreach ($cart as $cart)
              <tr class="table-row fade-in hover:bg-gray-50">
                <td class="px-6 py-6">
                  <div class="flex items-center">
                    <div class="w-3 h-3 bg-amber-400 rounded-full mr-3"></div>
                    <span class="text-lg font-medium text-gray-900">{{$cart->product->title}}</span>
                  </div>
                </td>
                
                <td class="px-6 py-6 text-center">
                  <span class="text-xl font-bold text-gray-900">
                    Rs. {{number_format($cart->product->price, 2)}}
                  </span>
                </td>
                
                <td class="px-6 py-6 text-center">
                  <div class="flex justify-center">
                    <div class="product-image w-24 h-24 bg-gray-100 rounded-xl overflow-hidden">
                      <img 
                        class="w-full h-full object-cover" 
                        src="/products/{{ $cart->product->image }}"
                        alt="{{$cart->product->title}}"
                      >
                    </div>
                  </div>
                </td>
                
                <td class="px-6 py-6 text-center">
                  <a 
                    href="{{url('delete_cart',$cart->id)}}" 
                    class="btn-modern bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-xl font-medium inline-flex items-center space-x-2 transition-all duration-300"
                  >
                    <i class="fas fa-trash-alt"></i>
                    <span>Remove</span>
                  </a>
                </td>
              </tr>
              <?php $value = $value + $cart->product->price; ?>
              @endforeach
              
              <!-- Empty Cart State -->
              @if($cart instanceof \Illuminate\Support\Collection ? $cart->isEmpty() : !$cart)
              <tr>
                <td colspan="4" class="empty-cart">
                  <div class="py-12">
                    <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-600 mb-2">Your cart is empty</h3>
                    <p class="text-gray-500">Add some services to get started</p>
                  </div>
                </td>
              </tr>
              @endif
              
            </tbody>
          </table>
        </div>
      </div>

      <!-- Total Value Section -->
      <div class="total-card fade-in mb-8">
        <div class="flex items-center justify-center space-x-4">
          <i class="fas fa-calculator text-3xl text-amber-400"></i>
          <div>
            <p class="text-gray-300 text-lg">Total Amount</p>
            <h2 class="text-4xl font-bold">Rs. {{number_format($value, 2)}}</h2>
          </div>
        </div>
      </div>

      <!-- Checkout Form Section -->
      <div class="checkout-section fade-in">
        <div class="form-modern max-w-2xl mx-auto">
          <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Complete Your Booking</h2>
            <p class="text-gray-600">Please provide your details to confirm the appointment</p>
          </div>

          <form action="{{ url('confirm_order') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="label-modern">
                  <i class="fas fa-user mr-2 text-amber-500"></i>
                  Client Name
                </label>
                <input 
                  type="text" 
                  name="name" 
                  value="{{ Auth::user()->name }}" 
                  class="input-modern"
                  required
                >
              </div>

              <div>
                <label class="label-modern">
                  <i class="fas fa-phone mr-2 text-amber-500"></i>
                  Phone Number
                </label>
                <input 
                  type="text" 
                  name="phone" 
                  value="{{ Auth::user()->phone }}" 
                  class="input-modern"
                  required
                >
              </div>
            </div>

            <div>
              <label class="label-modern">
                <i class="fas fa-map-marker-alt mr-2 text-amber-500"></i>
                Address
              </label>
              <textarea 
                name="address" 
                rows="4" 
                class="input-modern resize-none"
                placeholder="Enter your complete address"
                required
              >{{ Auth::user()->address }}</textarea>
            </div>

            <!-- Payment Options -->
            <div class="border-t pt-8">
              <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">
                <i class="fas fa-credit-card mr-2 text-amber-500"></i>
                Choose Payment Method
              </h3>
              
              <div class="grid md:grid-cols-2 gap-4">
                <button 
                  type="submit" 
                  class="btn-modern btn-primary bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-semibold text-lg flex items-center justify-center space-x-3"
                >
                  <i class="fas fa-money-bill-wave text-xl"></i>
                  <span>Cash on Service</span>
                </button>
                
                <a 
                  href="{{ url('stripe') }}" 
                  class="btn-modern btn-success bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-semibold text-lg flex items-center justify-center space-x-3 no-underline"
                >
                  <i class="fas fa-credit-card text-xl"></i>
                  <span>Pay with Card</span>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Security Notice -->
      <div class="text-center mt-8 text-gray-500">
        <div class="flex items-center justify-center space-x-2">
          <i class="fas fa-shield-alt text-green-500"></i>
          <span>Your information is secure and encrypted</span>
        </div>
      </div>

    </div>
  </div>

  <br><br><br>

  <!-- @include('home.footer') -->

  <script>
    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Add loading states to buttons
    document.querySelectorAll('form button, form a').forEach(button => {
      button.addEventListener('click', function() {
        if (this.tagName === 'BUTTON') {
          this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
          this.disabled = true;
        }
      });
    });

    // Add confirmation for remove buttons
    document.querySelectorAll('a[href*="delete_cart"]').forEach(link => {
      link.addEventListener('click', function(e) {
        if (!confirm('Are you sure you want to remove this service from your cart?')) {
          e.preventDefault();
        }
      });
    });

    // Auto-focus first input
    document.addEventListener('DOMContentLoaded', function() {
      const firstInput = document.querySelector('input[name="name"]');
      if (firstInput) {
        firstInput.focus();
      }
    });
  </script>

</body>
</html>
