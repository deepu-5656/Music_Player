<?php
$servername = "localhost";
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "music_player"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM songs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Songs</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Add spacing between columns */
        td, th {
            padding-left: 20px;
            padding-right: 20px;
        }

        table td {
            text-align: center;
        }
        .go-back-btn {
            width: 200px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 20px auto; /* Center the button horizontally */
            display: block;
            text-align: center;
        }

        .go-back-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List of Songs</h1>
        <table>
            <thead>
                <tr>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['artist'] . "</td>
                                <td>" . ($row['album'] ? $row['album'] : "N/A") . "</td>
                                <td>" . $row['genre'] . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No songs added yet.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.html">
            <button class="go-back-btn">Add New Song</button>
        </a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
