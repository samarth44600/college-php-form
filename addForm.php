<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];

echo "Hello " . $name . "<br/>";
echo "Your phone number is: " . $phoneNumber;
echo "and your email is: " . $email;

include 'db.php';

$sql = "INSERT INTO user(name, phoneNumber, email)VALUES('$name', '$phoneNumber', '$email')";

$result = mysqli_query($connection, $sql);

if ($result) {
    header('Location:index.php');
}
