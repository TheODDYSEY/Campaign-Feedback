# Campaign Feedback

This project is a web-based feedback collection system for a campaign. It allows users to submit their feedback, which includes their name, email, feedback text, and a rating. The feedback is stored in a MySQL database and can be viewed through a results page.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features
- Submit feedback through a web form
- Store feedback in a MySQL database
- View submitted feedback in a structured table format
- Responsive design for both form submission and feedback viewing pages

## Technologies Used
- HTML5
- CSS3
- PHP
- MySQL

## Installation
### Prerequisites
- A web server with PHP support (e.g., Apache, Nginx)
- MySQL database server

### Steps
1. Clone the repository to your web server's root directory:
   ```bash
   git clone https://github.com/TheODDYSEY/Campaign-Feedback.git
   ```

2. Import the MySQL database and table structure:
   ```sql
   CREATE DATABASE IF NOT EXISTS campaign_feedback;

   USE campaign_feedback;

   CREATE TABLE IF NOT EXISTS feedback (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(100),
       email VARCHAR(100),
       feedback TEXT,
       rating INT,
       submission_date DATETIME DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. Configure database connection settings in the PHP files:
   - `submit_feedback.php`
   - `view_feedback.php`
   
   Update the following variables with your database credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "campaign_feedback";
   ```

4. Ensure the web server has read/write permissions to the project directory.

## Usage
### Submitting Feedback
1. Open the `feedback_form.html` file in a web browser.
2. Fill out the feedback form with your name, email, feedback, and rating.
3. Click the "Submit" button to submit the feedback.

### Viewing Feedback
1. Open the `view_feedback.php` file in a web browser.
2. The feedback entries will be displayed in a table format, sorted by submission date.

## Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes.

### Steps to Contribute
1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-branch-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m 'Add some feature'
   ```
4. Push to the branch:
   ```bash
   git push origin feature-branch-name
   ```
5. Create a pull request with a description of your changes.

## License
This project is licensed under the MIT License. See the `LICENSE` file for more details.
