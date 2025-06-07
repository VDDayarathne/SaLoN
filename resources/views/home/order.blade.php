<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Appointments - Salon Management</title>
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
        
        .page-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 2rem auto;
            max-width: 1200px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: white;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(245, 158, 11, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        
        .status-pending {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            color: #1f2937;
        }
        
        .status-processing {
            background: linear-gradient(135deg, #60a5fa, #3b82f6);
            color: white;
        }
        
        .status-completed {
            background: linear-gradient(135deg, #34d399, #10b981);
            color: white;
        }
        
        .status-cancelled {
            background: linear-gradient(135deg, #f87171, #ef4444);
            color: white;
        }
        
        .order-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .order-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #f59e0b, #d97706);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .order-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .order-card:hover::before {
            opacity: 1;
        }
        
        .service-image {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .service-image:hover {
            transform: scale(1.05);
        }
        
        .service-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .price-tag {
            background: linear-gradient(135deg, #1f2937, #374151);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 16px;
            margin: 2rem;
        }
        
        .empty-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 3rem;
            color: #9ca3af;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(245, 158, 11, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.4);
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .stagger-animation {
            animation: staggerFadeIn 0.6s ease-out;
        }
        
        @keyframes staggerFadeIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @media (max-width: 768px) {
            .page-container {
                margin: 1rem;
                border-radius: 16px;
            }
            
            .order-card {
                padding: 1rem;
            }
            
            .service-image img {
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header -->
        @include('home.header')
        
        <div class="page-container fade-in">
            <!-- Page Header -->
            <div class="page-header">
                <div class="relative z-10">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">
                        <i class="fas fa-calendar-check mr-3 text-amber-400"></i>
                        My Appointments
                    </h1>
                    <p class="text-gray-300 text-lg">Track your salon services and appointments</p>
                </div>
            </div>

            <!-- Orders Content -->
            <div class="p-6 md:p-8">
                <!-- Check if orders exist -->
                <!-- @if($order && count($order) > 0) -->
                <div class="space-y-6">
                    <!-- Sample Order Card 1 -->
                    <div class="order-card stagger-animation">
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-center">
                            <!-- Service Image -->
                            <div class="lg:col-span-1">
                                <div class="service-image">
                                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Hair Styling Service" />
                                </div>
                            </div>
                            
                            <!-- Service Details -->
                            <div class="lg:col-span-2 space-y-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Premium Hair Styling & Cut
                                    </h3>
                                    <p class="text-gray-600 mb-3">
                                        Professional hair styling with premium products and expert techniques
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fas fa-calendar mr-1"></i> Dec 15, 2024</span>
                                        <span><i class="fas fa-clock mr-1"></i> 2:30 PM</span>
                                    </div>
                                </div>
                                
                                <!-- Status Badge -->
                                <div>
                                    <span class="status-badge status-completed">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        Completed
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Price -->
                            <div class="lg:col-span-1 text-center lg:text-right">
                                <div class="price-tag">
                                    <i class="fas fa-dollar-sign mr-1"></i>
                                    $85.00
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Order Card 2 -->
                    <div class="order-card stagger-animation" style="animation-delay: 0.1s;">
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-center">
                            <!-- Service Image -->
                            <div class="lg:col-span-1">
                                <div class="service-image">
                                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Facial Treatment" />
                                </div>
                            </div>
                            
                            <!-- Service Details -->
                            <div class="lg:col-span-2 space-y-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Luxury Facial Treatment
                                    </h3>
                                    <p class="text-gray-600 mb-3">
                                        Rejuvenating facial with organic products and relaxing massage
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fas fa-calendar mr-1"></i> Dec 20, 2024</span>
                                        <span><i class="fas fa-clock mr-1"></i> 11:00 AM</span>
                                    </div>
                                </div>
                                
                                <!-- Status Badge -->
                                <div>
                                    <span class="status-badge status-processing">
                                        <i class="fas fa-spinner mr-2"></i>
                                        Processing
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Price -->
                            <div class="lg:col-span-1 text-center lg:text-right">
                                <div class="price-tag">
                                    <i class="fas fa-dollar-sign mr-1"></i>
                                    $120.00
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Order Card 3 -->
                    <div class="order-card stagger-animation" style="animation-delay: 0.2s;">
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-center">
                            <!-- Service Image -->
                            <div class="lg:col-span-1">
                                <div class="service-image">
                                    <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Manicure Service" />
                                </div>
                            </div>
                            
                            <!-- Service Details -->
                            <div class="lg:col-span-2 space-y-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        Deluxe Manicure & Pedicure
                                    </h3>
                                    <p class="text-gray-600 mb-3">
                                        Full nail care service with gel polish and hand massage
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fas fa-calendar mr-1"></i> Dec 25, 2024</span>
                                        <span><i class="fas fa-clock mr-1"></i> 3:45 PM</span>
                                    </div>
                                </div>
                                
                                <!-- Status Badge -->
                                <div>
                                    <span class="status-badge status-pending">
                                        <i class="fas fa-clock mr-2"></i>
                                        Pending
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Price -->
                            <div class="lg:col-span-1 text-center lg:text-right">
                                <div class="price-tag">
                                    <i class="fas fa-dollar-sign mr-1"></i>
                                    $65.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Your Laravel Loop Implementation -->
                <!-- 
                @foreach ($order as $order)
                    <div class="order-card stagger-animation">
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-center">
                            <div class="lg:col-span-1">
                                <div class="service-image">
                                    <img src="products/{{$order->product->image}}" alt="{{$order->product->title}}" />
                                </div>
                            </div>
                            
                            <div class="lg:col-span-2 space-y-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        {{$order->product->title}}
                                    </h3>
                                    <p class="text-gray-600 mb-3">
                                        Professional service description here
                                    </p>
                                </div>
                                
                                <div>
                                    <span class="status-badge 
                                        @if($order->status == 'pending') status-pending
                                        @elseif($order->status == 'processing') status-processing
                                        @elseif($order->status == 'completed') status-completed
                                        @else status-cancelled
                                        @endif">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        {{ucfirst($order->status)}}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="lg:col-span-1 text-center lg:text-right">
                                <div class="price-tag">
                                    <i class="fas fa-dollar-sign mr-1"></i>
                                    {{$order->product->price}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                -->

                <!-- @else -->
                <!-- Empty State -->
                <!--
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-calendar-times"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">No Appointments Yet</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        You haven't booked any salon services yet. Browse our services and book your first appointment!
                    </p>
                    <a href="/services" class="btn-primary">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Book Appointment
                    </a>
                </div>
                -->
                <!-- @endif -->
            </div>
        </div>
        
        <!-- footer -->
        @include('home.footer')
    </div>

    <script>
        // Add stagger animation delay to cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.stagger-animation');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';
    </script>
</body>
</html>