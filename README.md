Sustainable Living Project


Purpose

The Sustainable Living project is an initiative aimed at educating individuals on sustainable practices and empowering them to act on environmental challenges. By providing a platform that promotes community engagement and learning, we aim to foster a culture of sustainability and environmental stewardship.

Mission Educate:Raise awareness about sustainability and environmental conservation through comprehensive educational materials. 

Engage: Foster community involvement by organizing activities and discussions centered around sustainable living. 

Empower: Provide tools and resources that enable individuals to implement sustainable practices in their daily lives.


Features

User Registration and Login: Users can create accounts, login, and participate in the community.

Discussion Forum: A platform for users to share ideas, ask questions, and engage in discussions about sustainability and climate .

Educational Resources: Access to articles, tutorials, and other resources on sustainable living practices.


Setup Guide

Prerequisites

XAMPP (includes Apache, MySQL, PHP, and phpMyAdmin)

A web browser


Installation and Setup

Step 1: Install XAMPP

Download XAMPP: Download XAMPP from the official website.

Download link: https://www.apachefriends.org/download.html.

Install XAMPP: Follow the installation instructions for your operating system.


Step 2: Start Apache and MySQL

Open XAMPP Control Panel: Launch the XAMPP Control Panel.

Start Services: Start the Apache and MySQL services by clicking on the "Start" buttons next to them.


Step 3: Set Up the Database

Open phpMyAdmin: In your web browser, go to http://localhost/phpmyadmin.

Create Database:

Click on "Databases" in the top menu.

Create a new database named sustainable-living.

Import Database Structure:

Click on the sustainable-living database you just created.

Go to the "Import" tab.

Choose the SQL file to set up the tables required for the project.

Click "Go" to import the database structure.


Step 4: Configure the Project

Download Project Files: Download the project files and place them in the htdocs folder of your XAMPP installation. Typically, this folder is located at C:\xampp\htdocs\ on Windows.

Configure Database Connection:

Open backend/connection.php.

Ensure the database connection parameters match your MySQL setup.


Step 5: Access the Project

Open Your Browser: Go to http://localhost/Sustainable Living/.

Sign Up Page: Navigate to the sign-up page to sign up to the platform.


Usage

Sign Up: Users can create an account by providing a username, email, and password.

Login: Users can log in with their email and password.

Discussion Forum: Users can participate in discussions, post new topics, and reply to existing posts.


Troubleshooting

Connection Issues: Ensure Apache and MySQL services are running in the XAMPP Control Panel.

Database Errors: Check the database connection parameters in connection.php.

Page Not Found: Ensure all files are placed in the correct directories under htdocs.


