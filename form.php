<?php
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $usersubject = $_POST['usersubject'];
    $usermessage = $_POST['usermessage'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'formtest');
    if($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (username, useremail, usersubject, usermessage) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $useremail, $usersubject, $usermessage);
        
        if ($stmt->execute()) {
            echo "Message Sent Successfully.....";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>
