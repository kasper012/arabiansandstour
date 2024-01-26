<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $calendar = $_POST['calendar'];
    $special = $_POST['special'];
    $cars = $_POST['cars'];
    $to = "info@arabiansandstour.com";
    $subject = "Abu-Dhabi City Tour";
    $message = "Name: " . $name . "
Calendar: " . $calendar . "
Email: " . $email . "
Phone: " . $phone . "
Special request: " . $special . "
Source: " . $cars;
    $headers = "From: " . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
      header('Location: /abu-dhabi-private-van.html');

    } else {
        echo "Ошибка при отправке письма.";
    }
}
?>