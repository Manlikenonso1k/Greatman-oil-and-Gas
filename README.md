# GreatMan Oil & Gas - Energy Solutions Platform

A modern, responsive web application for managing oil and gas operations with real-time fuel pricing, live station monitoring, and interactive location services.

> **Think Energy, Think GreatMan** 🌍⛽

---

## 🚀 Features

- **Live Dashboard**: Real-time monitoring of fuel pump status and gas refill operations
- **Price Ticker**: Dynamic fuel pricing display with live updates
- **Responsive Design**: Mobile-first approach optimized for all devices
- **Interactive Hero Carousel**: 5-image Ken Burns animation slider with infinite autoplay
- **Station Locator**: Find nearest fuel stations with interactive maps
- **Order Management**: Streamlined ordering system for fuel and gas
- **Admin Authentication**: Secure login with role-based access control
- **Material Design System**: Consistent, modern UI with custom color tokens

---

## 📸 Screenshots

### Desktop View
![Desktop Screenshot](public/images/Desktop%20Screenshot.jpg)
*Full desktop experience with sidebar navigation and comprehensive station information*

### Mobile View  
![Mobile Screenshot](public/images/MObileScreen%20shot.jpg)
*Optimized mobile experience with responsive layout and touch-friendly controls*

### Admin Dashboard
![Dashboard Screenshot](public/images/Dashboard%20Screenshot.jpg)
*Live lane status monitoring with real-time fuel pump and gas refill status indicators*

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| **Backend** | Laravel 13.7 (PHP 8.5+) |
| **Frontend** | Blade Templates, Alpine.js 3.x |
| **Styling** | Tailwind CSS 3.x (Material Design) |
| **Database** | SQLite (Development) |
| **Real-time Updates** | Server-sent events |

---

## 📋 Requirements

### System Requirements
- **PHP** 8.1 or higher
- **Composer** 2.0+
- **Node.js** 18+ (for frontend asset compilation)
- **SQLite** (included in PHP)
- **8GB RAM** minimum recommended

### Software Dependencies
```
- laravel/framework: ^13.0
- laravel/tinker: ^2.9
- fakerphp/faker: ^1.23
```

### Browser Support
- ✅ Chrome/Edge 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Mobile browsers (iOS Safari 13+, Chrome Android)

---

## 🔧 Installation

### 1. Clone Repository
```bash
git clone https://github.com/yourusername/greatman-energy.git
cd greatman
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

The `.env` file should include:
```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:YOUR_KEY_HERE
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

### 4. Database Setup
```bash
# Create SQLite database
touch database/database.sqlite

# Run migrations
php artisan migrate

# Seed demo data (includes sample prices & user)
php artisan db:seed
```

### 5. Install Frontend Dependencies
```bash
npm install
npm run dev
```

### 6. Start Development Server
```bash
php artisan serve
```

Application runs on: **http://127.0.0.1:8000**

---

## 👤 Demo Credentials

| Field | Value |
|-------|-------|
| **Email** | admin@demo.com |
| **Password** | demo123 |

**Login URL**: `http://127.0.0.1:8000/login`

---

## 📍 Available Routes

| Route | Purpose | Auth Required |
|-------|---------|---------------|
| `/` | Home page with hero carousel | ❌ No |
| `/login` | Admin authentication | ❌ No |
| `/dashboard` | Live monitoring dashboard | ✅ Yes |
| `/lpg-trust` | LPG trust & safety info | ❌ No |
| `/locator` | Station location finder | ❌ No |
| `/order` | Fuel ordering system | ❌ No |
| `/api/prices` | Live price data API | ❌ No |

---

## 🎨 Design System

### Color Palette
| Name | Hex | Usage |
|------|-----|-------|
| Primary | #1e2730 | Buttons, headers |
| Secondary | #4c6700 | Accents, badges |
| Error | #d32f2f | Alerts, warnings |
| Surface | #fafafa | Backgrounds |

### Typography Scale
- **Display Large**: 57px (Page titles)
- **Headline Large**: 32px (Section headers)
- **Body Medium**: 14px (Body text)
- **Label Small**: 12px (Metadata)

### Spacing System
| Size | Value |
|------|-------|
| xs | 4px |
| sm | 8px |
| md | 16px |
| lg | 24px |
| xl | 32px |
| xxl | 48px |

---

## 📊 Key Components

### Hero Slider (`resources/views/components/hero.blade.php`)
- 5-image carousel with Ken Burns fade animation
- 5-second autoplay interval with infinite loop
- Responsive progress indicators
- Mobile-friendly height scaling (72vh → 85vh)
- Alpine.js state management

### Price Ticker (`resources/views/components/price-ticker.blade.php`)
- Live fuel pricing display with marquee animation
- Real-time database integration
- Mobile optimized (label hidden on sm screens)
- Displays: Petrol, Diesel, LPG pricing

### Dashboard (`resources/views/dashboard.blade.php`)
- Fuel Pump Status cards (Lane 01 PMS, Lane 02 AGO)
- Gas Refill Status cards (Point A LPG, Point B Industrial)
- SVG progress circles with queue metrics
- Status badges (OPTIMAL/BUSY/FAST TRACK/MODERATE)
- Live update indicator with pulsing animation
- Station map overview with gradient overlay
- Sidebar navigation with route highlighting

---

## 🔐 Security Features

- ✅ Password hashing with bcrypt
- ✅ CSRF protection on all forms
- ✅ Route middleware for authentication
- ✅ SQL injection protection (Eloquent ORM)
- ✅ XSS protection with Blade escaping
- ✅ Session-based authentication
- ✅ Secure logout with token regeneration

---

## 📱 Responsive Breakpoints

```css
/* Mobile First Approach */
base:     0px     (mobile)
sm:       640px   (small devices)
md:       768px   (tablets)
lg:       1024px  (desktops)
xl:       1280px  (large screens)
```

---

## 🎯 Project Structure

```
greatman/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── DashboardController.php
│   │   │   ├── PriceController.php
│   │   │   └── Auth/LoginController.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   └── Price.php
│   └── Providers/
│       └── AppServiceProvider.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── hero.blade.php
│   │   │   └── price-ticker.blade.php
│   │   ├── pages/
│   │   │   ├── home.blade.php
│   │   │   ├── dashboard.blade.php
│   │   │   └── ...
│   │   └── auth/
│   │       └── login.blade.php
│   ├── js/
│   │   └── app.js
│   └── css/
│       └── app.css
├── routes/
│   ├── web.php
│   └── console.php
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   └── 2026_05_10_124500_create_prices_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── PriceSeeder.php
├── public/
│   ├── images/        # Product & carousel images
│   └── index.php
└── config/            # Configuration files
```

---

## 🚀 Deployment Guide

### Production Checklist
- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Configure HTTPS/SSL certificate
- [ ] Set environment variables in `.env`
- [ ] Run `php artisan migrate --force`
- [ ] Set proper file permissions: `chmod -R 775 storage/ bootstrap/cache/`
- [ ] Run `php artisan optimize`

### Recommended Hosting
- PHP 8.1+ support
- SQLite or PostgreSQL
- 512MB+ RAM
- Node.js for asset compilation

---

## 📡 API Documentation

### Get All Prices
```bash
GET /api/prices

Response:
[
  {
    "id": 1,
    "fuel_type": "Petrol",
    "price_per_unit": 617.00,
    "created_at": "2026-05-10T14:09:01Z"
  },
  {
    "id": 2,
    "fuel_type": "Diesel",
    "price_per_unit": 1150.00,
    "created_at": "2026-05-10T14:09:01Z"
  }
]
```

### Get Price by Fuel Type
```bash
GET /api/prices/Petrol

Response:
{
  "id": 1,
  "fuel_type": "Petrol",
  "price_per_unit": 617.00,
  "created_at": "2026-05-10T14:09:01Z"
}
```

---

## 🐛 Troubleshooting

### Database Connection Issues
```bash
# Reset database
php artisan migrate:refresh --seed

# Verify database file
ls -lah database/database.sqlite

# Check permissions
chmod 666 database/database.sqlite
```

### Missing Assets/Styling
```bash
# Rebuild frontend assets
npm run dev

# Clear Laravel cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Permission Errors
```bash
# Fix storage permissions
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/

# Ensure web server can write
chown -R www-data:www-data storage/
```

### Login Issues
```bash
# Create a new user via Tinker
php artisan tinker
User::create(['name' => 'Admin', 'email' => 'admin@email.com', 'password' => bcrypt('password')])
exit
```

---

## 📞 Support & Contact

For issues, feature requests, or support:
- 📧 Email: support@greatman-energy.com
- 🐛 Report bugs on GitHub Issues
- 💬 WhatsApp: [Contact via WhatsApp](https://wa.me/2348032628137)

---

## 📄 License

This project is licensed under the MIT License. See [LICENSE](LICENSE) file for details.

---

## ✨ Credits

**Built with:**
- [Laravel Framework](https://laravel.com)
- [Alpine.js](https://alpinejs.dev)
- [Tailwind CSS](https://tailwindcss.com)

---

**Last Updated**: May 10, 2026  
**Version**: 1.0.0  
**Status**: ✅ Production Ready
