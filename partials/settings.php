<?php

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "book_db");


$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn && $conn->connect_error) {
    echo "Connessione fallita" . $conn->connect_error;
} else{
    $result = Movie::fetchAll($conn);
    $movies = array();

    while ($row = mysqli_fetch_assoc($result)) {
    $movie = new Movie($row['image'], $row['title'], $row['original_title'], $row['nationality'], $row['date'], $row['vote']);
    $movies[] = $movie;
    }
    mysqli_close($conn);
}
