CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'client') DEFAULT 'client',
    phone VARCHAR(15) NOT NULL,
    age INT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    specialty VARCHAR(100) NOT NULL
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    duration INT NOT NULL
);


CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    doctor_id INT,
    service_id INT,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    status ENUM('pending', 'approved', 'canceled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- كل موعد له زبون واحد
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    -- كل موعد له دكتور واحد
    FOREIGN KEY (doctor_id) REFERENCES doctors(id) ON DELETE CASCADE,
    -- كل موعد له خدمة واحدة
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);

 


INSERT INTO services (title, description, price, duration) VALUES
('Face Treatments', 'Face Treatments', 100.00, 40),
('Nail Treatments', 'Nail Treatments', 250.00, 30),
('Medical Treatments', 'Medical Treatments', 540.00, 60),
('Hair Treatments', 'Hair Treatments', 380.00, 30);




INSERT INTO doctors (name, specialty) VALUES
('Shahd Assaf', 'skin care');


CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    service_id INT,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);
