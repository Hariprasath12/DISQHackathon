 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hevents";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql = "CREATE DATABASE Hevents";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(40)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Admin table is created created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO admin (firstname, lastname, email,password)
VALUES ('hari', 'prasath', 'hariprasath.1295@gmail.com','comeon123')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "CREATE TABLE events (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
eventname VARCHAR(30) NOT NULL,
event_time VARCHAR(20),
event_date VARCHAR(20),
organisedby VARCHAR(20),
place VARCHAR(20),
tag VARCHAR(20),
contact VARCHAR(20),
price VARCHAR(2)

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Admin table is created created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE user(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
email VARCHAR(30),
password VARCHAR(20)

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Admin table is created created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?> 