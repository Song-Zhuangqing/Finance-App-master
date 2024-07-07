<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expenses_db";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$type = $_POST['type'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$category = $_POST['category'];

$sql = "INSERT INTO records (type, amount, date, category) VALUES ('$type', '$amount', '$date', '$category')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
