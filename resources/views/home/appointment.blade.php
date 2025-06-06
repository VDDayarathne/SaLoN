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
    .info-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px); border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 20px; padding: 2rem; margin-bottom: 1.5rem; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);}
    .info-card:hover { transform: translateY(-5px); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1); border-color: #f59e0b;}
    .section-title { background: linear-gradient(135deg, #000000, #374151); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 2.5rem; font-weight: 700; text-align: center; margin-bottom: 3rem; position: relative;}
    .section-title::after { content: ''; position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 100px; height: 3px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 2px;}
    .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);}
    .fade-in.visible { opacity: 1; transform: translateY(0);}
    .btn-modern { background: linear-gradient(135deg, #f59e0b, #d97706); color: #000000; padding: 1rem 2.5rem; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3); position: relative; overflow: hidden;}
    .btn-modern:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(245, 158, 11, 0.4);}
    .appointment-badge { background: linear-gradient(135deg, #10b981, #047857); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.5rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);}
    .back-button { background: rgba(0, 0, 0, 0.9); color: white; padding: 0.75rem 1.5rem; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); margin-bottom: 2rem; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);}
    .back-button:hover { background: rgba(245, 158, 11, 0.9); color: #000000; transform: translateX(-5px); text-decoration: none;}
    .product-grid { background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); min-height: 100vh; padding: 4rem 0;}
  </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header', ['count' => $count ?? 0])
  </div>

  <section class="product-grid">
    <div class="container mx-auto px-4 max-w-3xl">

      <a href="{{ url()->previous() }}" class="back-button fade-in mb-8">
        <i class="fas fa-arrow-left"></i>
        Back
      </a>

      <h2 class="section-title fade-in">Book Appointment</h2>
      <div class="info-card fade-in">
        <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
          @csrf
          <div>
            <label for="appointment_date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="appointment_date" id="appointment_date" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
            <input type="time" name="start_time" id="start_time" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
            <input type="time" name="end_time" id="end_time" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
          <button type="submit" class="btn-modern w-full justify-center">
            <i class="fas fa-calendar-plus"></i>
            Book Now
          </button>
        </form>
      </div>

      <h2 class="section-title fade-in" style="margin-top:3rem;">My Appointments</h2>
      <div class="space-y-4">
        @forelse($appointments ?? [] as $appointment)
          <div class="info-card fade-in flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
              <span class="font-semibold text-blue-700">
                {{ $appointment->service ?? 'Service' }}
              </span>
              <span class="mx-2 text-gray-500">|</span>
              <span class="text-gray-700">
                {{ \Carbon\Carbon::parse($appointment->date ?? $appointment->appointment_date)->format('d M Y') }}
                at {{ $appointment->time ?? $appointment->start_time }}
              </span>
              <span class="mx-2 text-gray-500">|</span>
              <span class="appointment-badge">
                <i class="fas fa-clock mr-1"></i>
                {{ ucfirst($appointment->status ?? 'upcoming') }}
              </span>
            </div>
            <form action="{{ route('cancel.appointment', $appointment->id) }}" method="POST" class="mt-3 md:mt-0" onsubmit="return confirm('Cancel this appointment?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modern bg-red-600 hover:bg-red-700 text-white" style="padding:0.5rem 1.5rem;">
                  <i class="fas fa-times-circle mr-1"></i>
                  Cancel
                </button>
            </form>
          </div>
        @empty
          <div class="info-card fade-in text-gray-500 text-center">No appointments yet.</div>
        @endforelse
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
