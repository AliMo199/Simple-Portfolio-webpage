# Registration and Portfolio Project

This project consists of PHP and HTML files for user registration and a portfolio website. It allows users to register with their name, email, and password, and then displays a portfolio page with information about the user.

## Files Included

1. **registration.php**: This file contains HTML and PHP code for user registration. Users can input their name, email, and password. Validation checks are performed to ensure that all fields are filled, the email is in the correct format, and the password is at least 8 characters long. The registration data is stored in a MySQL database.

2. **index.html**: This file is the main page of the portfolio website. It displays information about the user, including a profile picture, a brief description, skills, and contact information.

3. **CSS/master.css**: This file contains CSS styles for styling the HTML elements in the portfolio page.

4. **Images/**: This directory contains image files used in the portfolio page, such as the user's profile picture and favicon.

## Usage

1. To register, open `registration.php` in a web browser. Fill in the required fields (name, email, password) and submit the form. If there are any errors in the input data, appropriate error messages will be displayed.

2. After successful registration, users can view their portfolio by opening `index.html` in a web browser. The portfolio page will display the user's profile picture, description, skills, and contact information.

## Dependencies

- This project requires a web server with PHP support and a MySQL database to store registration data.

- CSS styles are applied using the `master.css` file, so make sure it is linked properly in the HTML files.

- The portfolio page uses images stored in the `Images/` directory. Ensure that these image files are accessible from the HTML files.
