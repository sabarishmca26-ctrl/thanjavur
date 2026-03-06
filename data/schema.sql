CREATE DATABASE IF NOT EXISTS thanjavur_tourism;
USE thanjavur_tourism;

CREATE TABLE IF NOT EXISTS attractions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    category VARCHAR(80) NOT NULL,
    short_description VARCHAR(280) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS bookings (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(120) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    tour_date DATE NOT NULL,
    people_count INT UNSIGNED NOT NULL,
    package_name VARCHAR(120) NOT NULL,
    notes TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(180) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO attractions (name, category, short_description) VALUES
('Brihadeeswarar Temple', 'UNESCO Heritage', 'Granite marvel known for towering vimana and Chola-era murals.'),
('Thanjavur Royal Palace', 'History', 'Palace complex with museums, durbar hall, and royal collections.'),
('Saraswathi Mahal Library', 'Literature', 'Rare manuscripts and archives from Nayak and Maratha periods.'),
('Gangaikonda Cholapuram', 'Architecture', 'Iconic temple town with rich inscriptions and imperial remains.'),
('Poompuhar Art Gallery', 'Craft', 'Traditional sculptures, bronze casting works, and craft displays.');
