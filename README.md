# Thanjavur Trails (XAMPP Full Stack Project)

Cinematic tourism website with PHP backend + MySQL database for XAMPP.

## Project Structure

- `index.php`, `about.php`, `attractions.php`, `booking.php`, `contact.php`: Main pages
- `assets/css/style.css`: Unified cinematic UI styles
- `assets/js/main.js`: Mobile menu + reveal animation
- `config/database.php`: PDO MySQL database connection
- `actions/submit_booking.php`: Booking form backend handler
- `actions/submit_contact.php`: Contact form backend handler
- `admin/dashboard.php`: View latest bookings and contact messages
- `includes/header.php`, `includes/footer.php`, `includes/helpers.php`: Shared layout and utilities
- `data/schema.sql`: Database and seed data

## Setup In XAMPP

1. Move this folder into `C:/xampp/htdocs/`.
2. Start `Apache` and `MySQL` in XAMPP Control Panel.
3. Open `http://localhost/phpmyadmin`.
4. Import `data/schema.sql`.
5. Open `http://localhost/navbar/index.php`.

## Database Defaults

The app uses these defaults in `config/database.php`:

- host: `127.0.0.1`
- port: `3306`
- database: `thanjavur_tourism`
- username: `root`
- password: `` (empty)

If your XAMPP credentials differ, update `config/database.php`.

## Notes

- Form submissions are saved into MySQL using prepared statements.
- If database setup is missing, pages still load and show helpful error feedback.
- `admin/dashboard.php` currently has no login. Add authentication before production use.
