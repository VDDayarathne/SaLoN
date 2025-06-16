<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

SaLoN - Laravel-based Salon Management System

SaLoN is a web-based salon management system built using the Laravel framework. It provides a modern solution for booking appointments, managing services, staff schedules, and customer interactions. This application is tailored for beauty salons, spas, and wellness centers to streamline their daily operations.

🚀 Features

✅ User Registration & Login (with role-based access)
💇 Customer Appointment Booking System
🗕️ Admin Appointment Approval & Conflict Handling
❌ Appointment Cancellation (User Side)
🧑‍💼 Staff Management
💬 Customer Feedback System
💵 Service Listings with Pricing
📊 Dashboard with Key Metrics
📱 Responsive UI for all devices

🛠️ Tech Stack
Backend: Laravel 12

Frontend: Blade

Database: MySQL

Authentication: Laravel Breeze / Fortify / Sanctum

Other: Tailwind CSS


🛆 Installation

Clone the Repository

git clone https://github.com/VDDayarathne/SaLoN.git
cd salon

Install Dependencies

composer install
npm install && npm run dev

Environment Configuration

cp .env.example .env
php artisan key:generate

Database Setup

Configure your .env file with correct DB credentials.

Run migrations:

php artisan migrate

Seed (Optional)

php artisan db:seed

Run the Application

php artisan serve

🔐 Credentials (For Testing)

Role

Email

Password

Admin

admin@example.com

password

Customer

customer@example.com


📸 Screenshots

![Screenshot 2025-06-17 003835](https://github.com/user-attachments/assets/9ed87f24-b451-4b18-a63a-e9a0c17b878e)
![Screenshot 2025-06-17 003900](https://github.com/user-attachments/assets/c748ca31-7105-4171-b4cc-5539ab7ddd95)
![Screenshot 2025-06-17 000414](https://github.com/user-attachments/assets/c1be8e18-b80c-4599-80d8-fd046a2f8bb4)
![Screenshot 2025-06-17 000256](https://github.com/user-attachments/assets/a5c88f03-3d46-4734-8244-610a235ed63d)
![Screenshot 2025-06-17 000348](https://github.com/user-attachments/assets/ab62ff6d-84a1-4d4a-8391-4a38cac18a5a)
![Screenshot 2025-06-17 003520](https://github.com/user-attachments/assets/1870c909-b23b-4cbc-964b-09e817aa4b86)
![Screenshot 2025-06-17 003426](https://github.com/user-attachments/assets/5cb62654-d627-4cee-a327-107639e50847)
![Screenshot 2025-06-17 003025](https://github.com/user-attachments/assets/ff019a4b-c36d-43db-9550-05fe299d434a)
![Screenshot 2025-06-17 003012](https://github.com/user-attachments/assets/0e7a3f08-697d-4e2b-bfc3-35af9393b57b)
![Screenshot 2025-06-17 002825](https://github.com/user-attachments/assets/466dfc43-e970-464f-b001-9d7f59164b5d)
![Screenshot 2025-06-17 003755](https://github.com/user-attachments/assets/2e31d705-2c77-43bc-9314-6f4e71fb1148)
![Screenshot 2025-06-17 003729](https://github.com/user-attachments/assets/93060b2a-c460-437d-99c0-3c844941a6e2)
![Screenshot 2025-06-17 003658](https://github.com/user-attachments/assets/ec0ec8b9-465e-4337-9985-2b4fcc63be13)


📂 Project Structure

app/ - Main application code

routes/web.php - Web routes

resources/views/ - Blade templates

public/ - Public assets

database/migrations/ - DB schema

config/ - Configuration files

🤝 Contributing

Feel free to fork this repo and contribute via pull requests. For major changes, please open an issue first to discuss what you'd like to change.
