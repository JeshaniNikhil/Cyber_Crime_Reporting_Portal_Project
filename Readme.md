# Cyber Armor - Cyber Crime Reporting Portal

Cyber Armor is a Cyber Crime Reporting Portal developed as part of my BCA Semester 5 project at Saurashtra University. This PHP-based web application is designed to help users report cyber crimes and provides additional cybersecurity services such as web app testing, network testing, and digital forensics.

## Table of Contents
- [Features](#features)
- [Setup](#setup)
- [Database Configuration](#database-configuration)
- [Configuration Changes](#configuration-changes)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features
- **Report Types**
  - Financial Fraud Report
  - Social Media Fraud Report
  - Ransomware Attack Report
- **Cybersecurity Services**
  - Web App Testing
  - Network Testing
  - Digital Forensics Testing
- **Admin Panel**: Manage reports and monitor the status.
- **Email Notifications**: Send notifications upon report submission.

## Setup

Follow these steps to set up the project on your local environment:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/JeshaniNikhil/Cyber_Crime_Reporting_Portal_Project.git
   ```

2. **Import Database**:
   - Open **phpMyAdmin**.
   - Create a new database (e.g., `cyber_armor`).
   - Import the SQL script from the `db` folder (`db/cyber_armor.sql`).

3. **Update Configuration in `config.php`**:
   - Open the `config.php` file in the root directory and update the following settings:

     ```php
     <?php
     // Database connection details
     $dsn = 'mysql:host=localhost;dbname=cyber_crime_reporting_portal'; // The DSN for connecting to MySQL
     $username_db = 'root'; // Your database username (often 'root' for local setups)
     $password_db = ''; // Your database password (often empty for local setups)

     // Create a PDO instance to connect to the database
     $pdo = new PDO($dsn, $username_db, $password_db);

     // Application-specific configurations
     $app_password = ''; // Optional: an application-specific password if needed

     // Email configurations
     $email_for_send = ''; // Your email address used to send notifications (e.g., 'your-email@example.com')
     $password = ''; // The app password associated with your email for secure SMTP authentication
     ?>
     ```

   - **Database Credentials**:
     - Update `$username_db` and `$password_db` with your MySQL username and password. For example, in local setups with XAMPP, the default username is usually `'root'` and the password is typically empty (`''`).

   - **Application Password**:
     - If your application requires an internal password for certain actions, set it in `$app_password`. If not required, you can leave this as an empty string (`''`).

   - **Email Credentials**:
     - Set `$email_for_send` to the email address you want to use to send notifications (e.g., `"your-email@example.com"`).
     - Set `$password` to the app-specific password associated with your email provider, which is often required for secure SMTP access.

     > **Note**: If you’re using Gmail, Yahoo, or similar services, remember that most email providers require an "app password" when using SMTP with external applications. Ensure that 2FA is enabled on your email account, then generate an app password to use here.

4. **Start the Local Server**:
   - If using XAMPP, start **Apache** and **MySQL**.
   - Access the application by navigating to `http://localhost/cyber_armor` in your web browser.

## Usage
Once the setup is complete, you can use the Cyber Armor portal to:
- Submit reports for different types of cyber crimes.
- Access cybersecurity services for testing and forensic analysis.
- Administrators can log in to the admin panel to manage reports and users.
