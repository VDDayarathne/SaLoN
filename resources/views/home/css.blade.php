<!-- Basic Meta Tags -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- SEO Meta Tags for Salon -->
<meta name="keywords" content="salon management, beauty salon, hair salon, spa, appointments, beauty services" />
<meta name="description" content="Professional salon management system - Book appointments, manage services, and track your beauty journey" />
<meta name="author" content="SaLoN Management System" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

<title>SaLoN - Premium Beauty Management</title>

<!-- Modern Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Tailwind CSS for Modern Styling -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          'sans': ['Inter', 'system-ui', 'sans-serif'],
          'serif': ['Playfair Display', 'serif'],
        },
        colors: {
          'salon': {
            'black': '#000000',
            'charcoal': '#1f2937',
            'gray': '#6b7280',
            'light-gray': '#f3f4f6',
            'gold': '#f59e0b',
            'dark-gold': '#d97706',
          }
        },
        animation: {
          'fade-in': 'fadeIn 0.6s ease-out',
          'slide-up': 'slideUp 0.6s ease-out',
          'slide-in': 'slideIn 0.6s ease-out',
          'bounce-gentle': 'bounceGentle 2s infinite',
          'pulse-soft': 'pulseSoft 2s infinite',
        },
        keyframes: {
          fadeIn: {
            '0%': { opacity: '0', transform: 'translateY(20px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          },
          slideUp: {
            '0%': { opacity: '0', transform: 'translateY(30px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          },
          slideIn: {
            '0%': { opacity: '0', transform: 'translateX(-30px)' },
            '100%': { opacity: '1', transform: 'translateX(0)' },
          },
          bounceGentle: {
            '0%, 100%': { transform: 'translateY(0)' },
            '50%': { transform: 'translateY(-10px)' },
          },
          pulseSoft: {
            '0%, 100%': { transform: 'scale(1)' },
            '50%': { transform: 'scale(1.05)' },
          }
        }
      }
    }
  }
</script>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<!-- Owl Carousel (Your existing slider) -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- Your Existing Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.css') }}" />

<!-- Custom Modern Salon Styles -->
<style>
/* Modern Salon Theme Variables */
:root {
  --salon-black: #000000;
  --salon-charcoal: #1f2937;
  --salon-gray: #6b7280;
  --salon-light-gray: #f3f4f6;
  --salon-gold: #f59e0b;
  --salon-dark-gold: #d97706;
  --salon-white: #ffffff;
}

/* Global Styles */
* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  line-height: 1.6;
  color: var(--salon-charcoal);
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  scroll-behavior: smooth;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
  font-family: 'Playfair Display', serif;
  font-weight: 600;
  line-height: 1.2;
  color: var(--salon-black);
}

/* Glass Effect Utility */
.glass-effect {
  backdrop-filter: blur(10px);
  background: rgba(0, 0, 0, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Modern Button Styles */
.btn-modern {
  display: inline-flex;
  align-items: center;
  padding: 12px 24px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
  border: none;
  cursor: pointer;
}

.btn-primary-modern {
  background: linear-gradient(135deg, var(--salon-gold), var(--salon-dark-gold));
  color: var(--salon-black);
  box-shadow: 0 4px 6px -1px rgba(245, 158, 11, 0.25);
}

.btn-primary-modern:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.4);
  color: var(--salon-black);
}

.btn-secondary-modern {
  background: transparent;
  color: var(--salon-charcoal);
  border: 2px solid var(--salon-gold);
}

.btn-secondary-modern:hover {
  background: var(--salon-gold);
  color: var(--salon-black);
  transform: translateY(-2px);
}

/* Card Styles */
.card-modern {
  background: var(--salon-white);
  border-radius: 20px;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  border: 1px solid rgba(0, 0, 0, 0.05);
  overflow: hidden;
}

.card-modern:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

/* Form Styles */
.form-modern {
  background: var(--salon-white);
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  padding: 16px 20px;
  transition: all 0.3s ease;
  font-size: 16px;
  width: 100%;
}

.form-modern:focus {
  outline: none;
  border-color: var(--salon-gold);
  box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
  background: var(--salon-white);
}

/* Status Badges */
.status-badge {
  display: inline-flex;
  align-items: center;
  padding: 8px 16px;
  border-radius: 50px;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.status-pending {
  background: linear-gradient(135deg, #fbbf24, #f59e0b);
  color: #1f2937;
}

.status-completed {
  background: linear-gradient(135deg, #34d399, #10b981);
  color: white;
}

.status-processing {
  background: linear-gradient(135deg, #60a5fa, #3b82f6);
  color: white;
}

/* Navigation Enhancements */
.nav-modern {
  transition: all 0.3s ease;
  position: relative;
}

.nav-modern::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 50%;
  width: 0;
  height: 2px;
  background: var(--salon-gold);
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.nav-modern:hover::after,
.nav-modern.active::after {
  width: 100%;
}

/* Table Enhancements */
.table-modern {
  background: var(--salon-white);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.table-modern th {
  background: linear-gradient(135deg, var(--salon-charcoal), var(--salon-black));
  color: var(--salon-white);
  padding: 20px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.table-modern td {
  padding: 20px;
  border-bottom: 1px solid #e5e7eb;
  transition: background 0.3s ease;
}

.table-modern tbody tr:hover td {
  background: #f9fafb;
}

/* Animation Classes */
.animate-fade-in {
  animation: fadeIn 0.6s ease-out;
}

.animate-slide-up {
  animation: slideUp 0.6s ease-out;
}

.animate-slide-in {
  animation: slideIn 0.6s ease-out;
}

/* Responsive Design */
@media (max-width: 768px) {
  .btn-modern {
    padding: 10px 20px;
    font-size: 14px;
  }
  
  .card-modern {
    border-radius: 16px;
  }
  
  .table-modern th,
  .table-modern td {
    padding: 12px;
    font-size: 14px;
  }
}

/* Scrollbar Styling */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: var(--salon-gold);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: var(--salon-dark-gold);
}

/* Loading Animation */
.loading-spinner {
  border: 3px solid #f3f3f3;
  border-top: 3px solid var(--salon-gold);
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 1s linear infinite;
  margin: 20px auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Override Bootstrap with modern styles */
.navbar-brand {
  font-family: 'Playfair Display', serif !important;
  font-weight: 700 !important;
  font-size: 1.8rem !important;
}

.nav-link {
  font-weight: 500 !important;
  transition: all 0.3s ease !important;
}

.btn {
  font-weight: 600 !important;
  border-radius: 50px !important;
  transition: all 0.3s ease !important;
}

/* Ensure compatibility with existing styles */
.hero_area {
  background: var(--salon-white);
}

.header_section {
  background: transparent;
}
</style>

<!-- Your Existing Custom Styles (These will override the above when needed) -->
<link href="{{asset ('css/style.css') }}" rel="stylesheet" />

<!-- Responsive Styles -->
<link href="{{asset ('css/responsive.css') }}" rel="stylesheet" />

<!-- Preload Critical Resources -->
<link rel="preload" href="{{asset ('css/bootstrap.css') }}" as="style">
<link rel="preload" href="{{asset ('css/style.css') }}" as="style">

<!-- Additional Modern Enhancements -->
<script>
// Add smooth scrolling and modern interactions
document.addEventListener('DOMContentLoaded', function() {
  // Add loading animation
  document.body.style.opacity = '0';
  document.body.style.transition = 'opacity 0.5s ease-in-out';
  
  setTimeout(() => {
    document.body.style.opacity = '1';
  }, 100);
});
</script>