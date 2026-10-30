🎬 Movie Database Management System
Overview

A web-based Movie Database Management System developed to manage movie and actor records efficiently.

The application allows users to search, insert and delete movies and actors through a simple, user-friendly interface. It uses HTML, CSS and JavaScript for the front end, PHP for server-side processing, and SQL for database management.

Features
Search Movies: Search for movies using their titles.
Search Actors: Find actors using their names.
Insert Movies: Add new movies with a title, genre, price and associated Actor ID.
Insert Actors: Add new actors to the database.
Delete Movies: Remove movie records using their titles.
Delete Actors: Remove actor records using their unique Actor ID.
Form Validation: JavaScript validation to help prevent empty form submissions.
Responsive UI: Clean and user-friendly interface.
Technologies Used
HTML5 – Structures the web application.
CSS3 – Provides styling and responsive layouts.
JavaScript – Handles client-side form validation.
PHP – Processes form submissions and communicates with the database.
SQL / MySQL – Stores and manages movie and actor information.
Database Operations

The application uses SQL queries through PHP to perform database operations.

SQL Command	Function
SELECT	Search for movies and actors
INSERT	Add new movies and actors
DELETE	Remove movies and actors
Project Structure
text
Movie-Database/
│
├── index.html
├── dbicw.css
├── dbicw.js
│
├── search_movie_example.php
├── search_actor_example.php
│
├── delete_movie_example.php
├── delete_actor_example.php
│
├── insert_actor_example.php
└── insert_movie_example.php

Installation and Setup
Requirements
PHP
MySQL
Apache web server
XAMPP or another local development environment
Setup Instructions
Clone the repository:
bash
git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git

Place the project folder inside your XAMPP htdocs directory.
Start Apache and MySQL using the XAMPP Control Panel.
Create the required MySQL database and tables.
Configure the database connection details in the PHP files.
Open the application in your browser:
text
http://localhost/Movie-Database/

Future Improvements
Add functionality to update existing movie and actor records.
Introduce advanced movie searches and genre filters.
Implement user authentication and access control.
Improve database security using prepared SQL statements.
Add confirmation messages for database operations.
Introduce a dashboard displaying database statistics.
Author

Nderon Beqiri

License

This project was developed for educational and personal development purposes.
