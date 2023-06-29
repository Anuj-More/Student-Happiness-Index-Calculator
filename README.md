# Student Happiness Index Calculator

The Student Happiness Index Calculator is a PHP-based web application that allows users to assess and calculate the happiness index of students based on various domains. It includes a survey form with 10 domains, each consisting of 4 questions related to that domain. The application provides both user and admin pages to gather and view survey results.

## Features

- **User Page:**
  - Users can enter their details before taking the survey.
  - The survey form includes questions related to 10 domains: academics, social life, extracurriculars, physical health, mental health, diversity and inclusion, safety and security, access to resources, career prospects, and financial stability.

- **Admin Page:**
  - Admins can view the overall calculated happiness index.
  - Admins can see the number of boys and girls who have taken the survey.
  - Admins can view the individual happiness index of boys and girls.
  - A bar graph is provided to visually represent the performance of each domain.

- **Department-wise Results:**
  - Results are also available for each department, such as computer science, electronics, information technology, etc.

## Installation

1. Clone the repository: `git clone https://github.com/your-username/student-happiness-index.git`
2. Place the project folder inside the `htdocs` directory of your XAMPP installation. The path should be something like: `C:\xampp\htdocs\student-happiness-index`.
3. Start XAMPP and ensure that Apache and MySQL services are running.
4. Create a new MySQL database using phpMyAdmin or any MySQL client of your choice.
5. Import the provided SQL file (`database.sql`) into the newly created database to set up the required tables and data.
6. Update the database connection details in the `config.php` file, located in the project's root directory. Provide the database name, username, and password as necessary.
7. Open a web browser and access the application by navigating to `http://localhost/student-happiness-index`.

Please make sure to adjust the file paths and database connection details based on your XAMPP configuration.

## License

This project is not licensed, and all rights are reserved.
