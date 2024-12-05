<?php
$servername = "localhost";
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "music_player"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO songs (title, artist, album, genre) 
            VALUES ('$title', '$artist', '$album', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Song added successfully!'); window.location.href = 'list_songs.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
