<?php
//shubham Tiwari Roll:31011120082
// Adding Database 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'wacko';

// database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $name = $_POST['name'];
    $description = $_POST['size']; 
    
    $fileName = '';
if (isset($_FILES['video']['name'])) {
    $fileName = uniqid() . '-' . $_FILES['video']['name'];
}

    $uploadDir = 'uploads/';

    $videoFile = $_FILES['video'];

    $fileName = uniqid() . '-' . $videoFile['name'];

    move_uploaded_file($videoFile['tmp_name'], $uploadDir . $fileName);

    // Store the video details in the database
    $sql = "INSERT INTO video (name, size, video) VALUES ('$name', '$description',  '$fileName')";
    if ($conn->query($sql) === TRUE) {
        echo "Video uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>