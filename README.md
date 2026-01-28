This project is an HR User Management System built with PHP and MySQL. It facilitates user registration and authentication, alongside an administrative interface for managing user permissions and account statuses
HR User Management System
A lightweight, PHP-based web application for managing human resources user accounts. This system allows for user registration, secure login sessions, and administrative control over user access levels.

🚀 Features
User Authentication: Includes functional Login and Sign Up pages for users.

Session Management: Utilizes PHP sessions to track user IDs, names, and access levels across the application.

Admin Dashboard: A dedicated interface for administrators to view all registered users and update their permission levels (e.g., Level 1, Level 2) or deactivate accounts.

Database Integration: Connects to a MySQL database (hr_db) to store user credentials and profile information.

📂 File Structure
db_connect.php: Handles the connection to the MySQL database and initializes user sessions.

index.php: The landing/login page where users authenticate their credentials.

signup.php: Allows new users to create accounts with a default "user" level.

indexe.php: The administrative portal for managing user levels and statuses.

create.php: A bridge file that requires the admin index for management tasks.

includes/: Contains reusable UI components like header.php and footer.php.
