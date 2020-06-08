<?php
    include_once("db.inc.php");

    $name    = $_POST['input_1'];
    $email   = $_POST['input_2'];
    $subject = $_POST['input_3'];
    $message = $_POST['input_4'];

    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("location:../contact.php");
