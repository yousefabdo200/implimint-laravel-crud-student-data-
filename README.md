# Laravel CRUD Project - Student Attendance System

This is a simple CRUD (Create, Read, Update, Delete) project built with Laravel that allows an admin to manage student data and record their attendance for three grades.

## Getting Started

Follow these instructions to set up the project on your local machine for development and testing purposes.

### Prerequisites

1. PHP 7.4 or higher
2. Composer (https://getcomposer.org/)
3. Laravel CLI (https://laravel.com/docs/8.x/installation)

### Installation

1. Clone the repository or download the project zip file.

2. Navigate to the project directory using the terminal.

3. Install project dependencies by running:

   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file and save it as `.env`.

5. Generate a new application key:

   ```bash
   php artisan key:generate
   ```

6. Set up your database credentials in the `.env` file.

7. Run database migrations and seed the database:

   ```bash
   php artisan migrate --seed
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

9. Open your web browser and access the project at `http://localhost:8000`.

## Features

### Admin Panel

- The system has a single admin user who can access the admin panel.

- To access the admin panel, go to `/admin` and log in using the admin credentials.

### Manage Students

- Once logged in as an admin, you can view, add, edit, and delete student records.

- To manage students, go to `/admin/students`.

- You can add new students by clicking on the "Add Student" button and filling out the required information.

- To edit a student's information, click on the "Edit" button next to the student's record.

- To delete a student, click on the "Delete" button next to the student's record.

### Record Attendance

- The system allows the admin to record attendance for each student for three grades (e.g., grade1, grade2, grade3).

- To record attendance, go to `/admin/attendance`.

- Select the date and choose the grade for which you want to record the attendance.

- Mark each student's attendance status (e.g., present, absent, late) and click on the "Save Attendance" button.

## Built With

- Laravel - PHP web application framework
- MySQL - Database management system

## Contribution

Contributions are welcome! If you find any issues or have suggestions for improvement, please feel free to open an issue or create a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Thanks to the Laravel community for providing an excellent framework for web development.
- Special thanks to the creators of all the dependencies used in this project.
