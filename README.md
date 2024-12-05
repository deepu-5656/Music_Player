# Music Player Web Application
This is a simple web application that allows users to add and view songs. The project consists of two main pages:

**Add Song Page:** A form where users can input song details (title, artist, album, and genre).  
**List Songs Page:** A page displaying all the added songs in a tabular format.

The project uses HTML, CSS, PHP, and MySQL to manage song data.

## Features
- **Add Song:** Users can submit details of a song (Title, Artist, Album, Genre) via a form.  
- **List Songs:** All added songs are displayed in a table format, including song title, artist name, album (if provided), and genre.  
- **Responsive Layout:** The design is responsive and works well on both desktop and mobile devices.  
- **Database Integration:** Song details are stored in a MySQL database.

## Project Structure

music_player  
* index.html           # Add Song page (form to submit song details)  
* list_songs.php       # List Songs page (displays all added songs)  
* add_song.php         # PHP script to handle form submission and insert data into the database  
* styles.css           # CSS file for styling the pages  
* README.md            # This README file

## Prerequisites  
Before starting the project, you need to ensure that the following software is installed on your computer:

- PHP (Version 7 or higher)  
- MySQL (or MariaDB)  
- A web server (Apache, which is included in XAMPP)  
- A text editor (VSCode, Sublime Text, Notepad++, etc.)

### Step 1: Install XAMPP
If you don’t have XAMPP installed, you can download and install it by following these steps:

1. Go to the XAMPP download page.  
2. Choose the version suitable for your operating system (Windows, macOS, or Linux) and download the installer.  
3. Run the installer and follow the setup instructions.  
4. Once installed, launch the XAMPP Control Panel.

### Step 2: Start Apache and MySQL Services  
1. Open the XAMPP Control Panel.  
2. Start the Apache service (this is the web server) by clicking on the "Start" button next to Apache.  
3. Start the MySQL service (this is the database server) by clicking on the "Start" button next to MySQL.  
4. Both services should now be running. You can verify this by visiting http://localhost in your browser. If everything is set up correctly, you should see the XAMPP welcome page.

### Step 3: Create the MySQL Database
1. Open your web browser and go to http://localhost/phpmyadmin/ to access the MySQL administration panel.
2. In the phpMyAdmin interface, click on the Databases tab.
3. In the “Create database” section, enter the name of the database, such as music_player, and click the "Create" button.
4. Now, click on the newly created music_player database to open it.
5. **Create the Songs Table:**

- In the SQL tab of phpMyAdmin, enter the following SQL code to create the table that will store the song details:

   ```
   CREATE TABLE songs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        artist VARCHAR(255) NOT NULL,
        album VARCHAR(255),
        genre VARCHAR(50) NOT NULL
   );
   ```

- Click the Go button to execute the query.  

This will create a table called songs with the following columns:  
- **id:** Auto-increment primary key for the song (unique identifier)  
- **title:** The title of the song  
- **artist:** The artist of the song  
- **album:** The album name (optional)  
- **genre:** The genre of the song (required)  

### Step 4: Place the Project Files in the Correct Directory  
1. Open the XAMPP Control Panel and find the Apache module.
2. Click on the Explore button next to Apache to open the folder where XAMPP is installed.
3. Inside the XAMPP folder, navigate to the htdocs directory. This is the folder where all your web projects should reside. The default path will likely be something like:
    ```
        C:\xampp\htdocs\
    ```
5. Copy the entire project folder (which contains index.html, list_songs.php, add_song.php, styles.css, and the README.md) into the htdocs directory.

   * For example, you can place the project in:  
   ```
       C:\xampp\htdocs\music_player
   ```

### Step 5: Modify Database Connection in PHP Files

In the add_song.php and list_songs.php files, the database connection is established using the following PHP code:

```
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password (empty in XAMPP)
$dbname = "music_player"; // Name of the database
```
Ensure the following:  
- **localhost:** This is the correct host for the local MySQL server.
- **root:** This is the default MySQL username in XAMPP.
- **"":** The default password is empty in XAMPP.
- **music_player:** This should match the name of the database you created earlier.

No further changes are needed unless you’ve modified your MySQL username/password.

### Step 6: Access the Application
1. Open your web browser and visit the Add Song Page by navigating to:


    http://localhost/music-player-web/index.html


   - This page allows users to input the song title, artist, album (optional), and genre, then submit the form.  
2. After adding a song, the data will be stored in the MySQL database. To view the list of added songs, visit the List Songs Page by navigating to:


    http://localhost/music-player-web/list_songs.php

   - This page will display all songs added to the database in a table format, including the song title, artist, album (if provided), and genre.
   - There is also a "Go Back to Add Song" button at the top of the page to return to the Add Song page.

### Step 7: Testing the Application

Once the server is running and the project files are correctly placed in the htdocs directory, you can test the project by performing the following:  
1. Add Songs:
   - Go to the Add Song Page (index.html).
   - Fill in the form and click "Add Song" to add a song.
   - After adding a song, you will be redirected to the List Songs Page.
2. View Songs:
   - Visit the List Songs Page (list_songs.php) to view all added songs.
   - The songs are displayed in a table, and you can go back to the Add Song page by clicking the "Go Back to Add Song" button.

### Step 8: Shutting Down the Server

When you're done, you can stop the server by going back to the XAMPP Control Panel and clicking the "Stop" button next to Apache and MySQL.

This will shut down the local server and stop the web application.

## Troubleshooting
- **Error: “Connection failed”:** If you see a connection error in the browser, make sure the Apache and MySQL services are running in the **XAMPP Control Panel.**  
- **Database issues:** Double-check that the music_player database exists and that the songs table has been created correctly.

## Conclusion  
With these steps, you can easily run the Music Player Web Application on your local machine using XAMPP. This application provides a basic framework for adding and viewing songs in a simple PHP-based web app with a MySQL backend. You can expand it further by adding additional features such as song playback, user authentication, or more advanced song management functionality.



![Screenshot 2024-12-05 131421](https://github.com/user-attachments/assets/38d80ed7-ae12-43dd-9498-1dd7c3603d7b)
![Screenshot 2024-12-05 131212](https://github.com/user-attachments/assets/15ce14a3-5018-48bf-b1e1-e16f93b53b94)
![Screenshot 2024-12-05 131158](https://github.com/user-attachments/assets/3294d462-bb56-4fe6-b8ed-7aa35809eb4a)
