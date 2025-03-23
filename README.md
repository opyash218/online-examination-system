# Online Examination System

An online examination system built using HTML, CSS, JavaScript, PHP, and MySQL, allowing users to take tests, submit answers, and get results in real time.

## Features
- User Authentication (Register/Login)
- Create & Manage Exams
- Automated Result Evaluation
- Question Bank with MCQs & Descriptive Questions
- Timer-Based Exams
- Admin Dashboard for Managing Exams & Users

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Authentication:** Session-based authentication
- **Deployment:** Apache, Nginx, or any preferred hosting service

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/opyash218/online-examination-system.git
   cd online-exam-system
   ```
2. Move files to your server directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
3. Import the database:
   - Open **phpMyAdmin**
   - Create a new database (e.g., `exam_system`)
   - Import `database.sql` file from the project folder
4. Configure database connection in `config.php`:
   ```php
   $host = 'localhost';
   $username = 'your_db_username';
   $password = 'your_db_password';
   $database = 'exam_system';
   ```
5. Start Apache and MySQL from XAMPP/WAMP.
6. Open the application in your browser:
   ```
   http://localhost/online-exam-system
   ```

## Project Structure
- `index.php` - Main landing page
- `register.php` - User registration
- `login.php` - User login
- `dashboard.php` - User dashboard
- `admin/` - Admin panel for managing exams
- `config.php` - Database connection settings
- `assets/` - CSS, JS, and images
- `database.sql` - Database schema

## Contributing
Feel free to fork this repository and submit pull requests with improvements.

## License
This project is licensed under the MIT License.

