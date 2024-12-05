# Music Player Web Application
This is a simple web application that allows users to add and view songs. The project consists of two main pages:

Add Song Page: A form where users can input song details (title, artist, album, and genre).
List Songs Page: A page displaying all the added songs in a tabular format.
The project uses HTML, CSS, PHP, and MySQL to manage song data.

## Features
Add Song: Users can submit details of a song (Title, Artist, Album, Genre) via a form.
List Songs: All added songs are displayed in a table format, including song title, artist name, album (if provided), and genre.
Responsive Layout: The design is responsive and works well on both desktop and mobile devices.
Database Integration: Song details are stored in a MySQL database.
Project Structure
bash
Copy code
/music-player-web
│
├── index.html           # Add Song page (form to submit song details)
├── list_songs.php       # List Songs page (displays all added songs)
├── add_song.php         # PHP script to handle form submission and insert data into the database
├── styles.css           # CSS file for styling the pages
├── README.md            # This README file
Prerequisites
Before running the application, ensure you have the following installed:

PHP (Version 7 or higher)
MySQL or MariaDB
A web server (e.g., Apache, Nginx, XAMPP, or similar)
A text editor (e.g., VSCode, Sublime Text)
Database Setup
To set up the MySQL database, run the following SQL commands:

sql
Copy code
CREATE DATABASE music_player;
USE music_player;

CREATE TABLE songs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    album VARCHAR(255),
    genre VARCHAR(50) NOT NULL
);
How to Run the Project
Set up your local server (e.g., XAMPP, MAMP, LAMP, or any PHP-enabled server).
Create a database: Use the SQL queries above to create the music_player database and the songs table.
Place the project files: Copy the project files (index.html, list_songs.php, add_song.php, styles.css) to the root directory of your local server (usually htdocs for XAMPP).
Start your server: Ensure that your local server (e.g., Apache) is running.
Access the application:
Visit http://localhost/index.html in your web browser to view the Add Song page.
After adding a song, you can view the song list by clicking the "Go Back to Add Song" button or directly visiting http://localhost/list_songs.php.
File Descriptions
1. index.html
This is the Add Song Page, where users can add song details such as:

Song Title
Artist Name
Album Name (Optional)
Genre (dropdown list)
When the user submits the form, the data is sent to add_song.php for processing.

2. list_songs.php
This page displays all the songs that have been added to the database in a tabular format. It retrieves the song data from the songs table and displays:

Song Title
Artist Name
Album Name
Genre
A "Go Back to Add Song" button is also included to redirect users to the Add Song page.

3. add_song.php
This PHP script processes the form submission from index.html and inserts the song data into the MySQL database. After successfully inserting the data, it redirects the user to the list_songs.php page.

4. styles.css
This file contains the styles used for both the Add Song page and List Songs page. It provides a simple and clean layout for the form and table, including:

Centered buttons
Table styling with alternating row colors
Padding and spacing for readability
Enhancements
Here are a few suggestions for potential improvements:

Form Validation: Add client-side and server-side validation to ensure that the data entered is correct.
User Authentication: Add login/logout functionality so users can track their added songs.
Audio Playback: Implement audio playback functionality to listen to the added songs.
Search and Filter: Allow users to search and filter songs by title, artist, or genre.
Advanced Styling: Improve the UI with a modern framework like Bootstrap or Tailwind CSS for better design.
License
This project is open-source and available under the MIT License.

Conclusion
This is a simple web application that lets users add and view songs using PHP and MySQL. It provides a foundation for building a more feature-rich music player web app. You can extend it by adding more features like user management, song playback, and advanced search options.











