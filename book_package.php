<?php
session_start();

// यह मानते हुए कि आप लॉगिन के समय एक सेशन वैरिएबल 'user_id' सेट करते हैं
if (!isset($_SESSION['user_id'])) {
    // अगर यूजर लॉगिन नहीं है, तो उसे लॉगिन पेज पर रीडायरेक्ट करें
    header("Location: login.php");
    exit();
}

// अगर यूजर लॉगिन है, तो पैकेज बुक करें
$package_id = $_GET['package_id']; // पैकेज आईडी को URL से प्राप्त करें

// यहां पर अपने डेटाबेस कनेक्शन की जानकारी डालें
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// डेटाबेस से कनेक्शन स्थापित करें
$conn = new mysqli($servername, $username, $password, $dbname);

// कनेक्शन चेक करें
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id']; // सेशन से यूजर आईडी प्राप्त करें

// पैकेज बुकिंग की क्वेरी
$sql = "INSERT INTO bookings (user_id, package_id) VALUES ('$user_id', '$package_id')";

if ($conn->query($sql) === TRUE) {
    echo "पैकेज सफलतापूर्वक बुक हो गया!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
