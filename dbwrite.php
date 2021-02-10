
<?php



$host = "localhost";                 // host = localhost because database hosted on the same server where PHP files are hosted
$dbname = "id15860293_datadb";              // Database name
$username = "id15860293_datauser";        // Database username
$password = "OksO@F4tPuTFUZ-[";            // Database password


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to mysql database. ";
}


// Get date and time variables
// date_default_timezone_set('Asia/Kolkata');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
// $d = date("Y-m-d");
// $t = date("H:i:s");

// If values send by NodeMCU are not empty then insert into MySQL database table

if (!empty($_POST['voltage']) && !empty($_POST['current']) && !empty($_POST['temperature']) && !empty($_POST['power'])   ) {

    $val = $_POST['voltage'];
    $val2 = $_POST['current'];
    $val3 = $_POST['temperature'];
    $val4 = $_POST['power'];
    $val5 = $_POST['luminance'];
    


    // Update your tablename here
    $sql = "INSERT INTO curve (voltage,current,power,luminance,temperature) VALUES ('" . $val . "','" . $val2 . "','" . $val4 . "', '" . $val5 . "', '" . $val3 . "' )";



    if ($conn->query($sql) === TRUE) {
        echo "Values inserted in MySQL database table.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Close MySQL connection
$conn->close();



?>