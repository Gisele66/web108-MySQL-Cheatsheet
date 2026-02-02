# MySQL Cheatsheet

# 1. How to login into MySQL from terminal:
    - sudo mysql -u root 

# 2. How to SHOW USERS:
    - SELECT user, host FROM mysql.user; 
    - Show current user - SELECT USER();

# 3. How to CREATE USERS:
    - CREATE USER 'new_user'@'localhost' IDENTIFIED BY 'StrongPassword!':

# 4. How to GRANT PRIVILEGES, Show granted privileges and remove:
    - GRANT ALL PRIVILEGES ON mydb.* TO 'new_user'@'localhost';
    - SHOW GRANTS FOR 'new_user'@'localhost';
    - REVOKE ALL PRIVILEGES ON mydb.* FROM 'new-user'@'localhost';
      FLUSH PRIVILEGES
    - DROP USER 'new_user'@'localhost'; (deletes user)

# 5. How to SHOW, DELETE & CREATE DATABASES & SELECT DATABASES;
    - SHOW DATABASES;
    - DROP DATABASE mydb;
    - CREATE DATABASE mydb;
    - USE mydb;
    - SELECT DATABASE(); (show current selected database)

# 6. How to CREATE a TABLE with Columns and their data types:
    - CREATE TABLE customers (
        customer_id INT AUTO_INCREMENT PRIMARY KEY,
        first_name  VARCHAR(50) NOT NULL,
        last_name   VARCHAR(50) NOT NULL,
        email       VARCHAR(120) UNIQUE,
        created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );


# 7. How to SHOW, DELETE & DROP Tables:
    - SHOW TABLES;
    - DELETE FROM customers;
    - DROP TABLE customers;

# 8. How to Insert ROWS & RECORDS (single and multiple):
    - INSERT INTO customers (first_name, last_name, email)
      VALUES ('Gisele', 'LaRose', 'gisele@gmail.com');

# 8.1. How to Insert Multiple Rows:
    - INSERT INTO customers (first_name, last_name, email)
      VALUES
      ('Lynn', 'Hughan', lynn@gmail.com),
      ('Summer', 'Hilborn', summer@gmail.com),
      ('Chris', 'Taylor', chris@gmail.com);

# 9. How to SELECT with the WHERE Clause:
    - SELECT * FROM customers
      WHERE last_name = 'LaRose';
    - SELECT * FROM customers (multiple conditions)
      WHERE last_name = 'LaRose' AND first_name = 'Gisele';

# 10. How to SELECT with the WHERE Clause using a range:
    - SELECT * FROM orders
      WHERE total BETWEEN 50 AND 200;

# 11. How to DELETE an individual ROW:
    - DELETE FROM customers
      WHERE customer_id = 3;
      (Always use a WHERE clause unless you truly want to delete everything)

# 12. How to UPDATE a ROW:
    - UPDATE customers
      SET first_name = 'Gisele', last_name = 'LaRose'
      WHERE customer_id = 1;

# 13. How to add a new column and modify it:
    - ALTER TABLE customers
      ADD COLUMN phone VARCHAR(20); (adds a column)
    - ALTER TABLE customers
      MODIFY COLUMN phone VARCHAR(30); (modifies the column type/size)
    - ALTER TABLE customers
      RENAME COLUMN phone TO phone_number; (renames the column)

# 14. Order by and use Distinct
    - SELECT * FROM customers
      ORDER BY last_name ASC, first_name ASC; (orders the results)
    - SELECT DISTINCT last_name
      FROM customers
      ORDER BY last_name; (distinct values from one column)


# 15. How to Concatenate Columns
    - SELECT CONCAT(first_name, ' ', last_name) AS full_name
      FROM customers;

# 16. How to Select Distinct Rows:
    - SELECT DISTINCT first_name, last_name
      FROM customers;

# 17. How to use LIKE to Search:
    - SELECT * FROM customers (search something that starts with)
      WHERE last_name LIKE 'Ch%';
    - SELECT * FROM customers (search something that contains something)
      WHERE email LIKE '%@example.com%';

# 18. How to Select using IN:
    - SELECT * FROM customers
      WHERE last_name IN ('LaRose', 'Hilborn', 'Taylor')


How to Create & Remove Index


Create Two Tables demonstrating a one to many relationship that shows a PK & FK


How to use Inner Join


How to JOIN Multiple Tables


