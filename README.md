# Lotus App HCL Web Integration

This project aims to create a web application for Lotus App HCL. Initially, the app was built using Java and integrated with a mail server, but we have now moved all functionalities to a web-based UI.

## Installation Instructions

1. **Install Apache:**
   - Ensure you have Apache installed on your system. You can install it using the following command:
     ```bash
     sudo apt-get install apache2
     ```

2. **Install MySQL:**
   - Install MySQL to manage your database. Use the following command:
     ```bash
     sudo apt-get install mysql-server
     ```

   - After installation, create a database called `hcl_webapp` and three tables for `demande_achat`, `demande_conge`, and `bon_reception`. Here are the SQL commands to create the database and tables:
     ```sql
     -- Create database
     CREATE DATABASE hcl_webapp;

     -- Use the database
     USE hcl_webapp;

     -- Create table for demande_achat
     CREATE TABLE demande_achat (
         id INT AUTO_INCREMENT PRIMARY KEY,
         product_name VARCHAR(100),
         quantity INT,
         price DECIMAL(10, 2),
         request_date DATE,
         status VARCHAR(50)
     );

     -- Create table for demande_conge
     CREATE TABLE demande_conge (
         id INT AUTO_INCREMENT PRIMARY KEY,
         employee_name VARCHAR(100),
         start_date DATE,
         end_date DATE,
         reason TEXT,
         status VARCHAR(50)
     );

     -- Create table for bon_reception
     CREATE TABLE bon_reception (
         id INT AUTO_INCREMENT PRIMARY KEY,
         supplier_name VARCHAR(100),
         delivery_date DATE,
         items_received TEXT,
         quantity INT,
         status VARCHAR(50)
     );
     ```

3. **Install PHP:**
   - PHP is required for server-side scripting. Install it using:
     ```bash
     sudo apt-get install php libapache2-mod-php php-mysql
     ```

4. **Create the HTML and CSS Template:**
   - Develop your web application's frontend using HTML and CSS. Create your templates and ensure they are stored in the appropriate directory.

## Additional Steps

- Configure Apache to serve your web application.
- Integrate PHP scripts with your MySQL database to handle backend operations.

---

Feel free to expand on each step with more details specific to your project's requirements.
