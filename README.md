# web-task2
Smart Methods – Web Task

Description:
This project is a simple web application built using HTML + PHP + MySQL.
The system allows the user to:
1. Insert data (name + age)
2. Store the data in a MySQL database
3. Display all stored users in a table
4. Toggle the status value (0 / 1) for each user

The project is hosted on (InfinityFree).

Project Files

File Description 
indexx.html Main form page for entering name and age 
in.php Handles form submission and inserts data into the database
index.php Displays all users in a table + Toggle button 
toggle.php Updates the status value for a specific user
htaccess Server configuration (auto‑generated) 

Database Structure:

Database Name:
“if0_42403521_database”
Table Name:user

Column Type Description 
 id  INT (Auto Increment) (Primary key )
 name  VARCHAR(255) User name 
 age  INT  User age 
status  INT  Toggle value (0 or 1) 

Live Demo

Form Page  
https://razan.ifree.page/indexx.html
Users Table  
https://razan.ifree.page/index.php

How It Works:
1. Insert Data  
User enters name + age → data is sent to in.php→ stored in MySQL.

2. Display Data  
index.php fetches all rows from the database and displays them in a table.

3. Toggle Status  
When clicking Toggle, toggle.php:
- Reads current status
- Switches it (0 → 1 or 1 → 0)
- Updates the database
- Redirects back to index.php

Technologies Used:
- HTML  
- PHP  
- MySQL  
- InfinityFree Hosting  


Developer:
Razan Ayed AlZiyadi
