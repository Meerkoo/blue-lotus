<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: /");
        die();
    }

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check if all field are filled out
    if(empty($mail) || empty($message) || empty($phone) || empty($subject) || empty($name)) {
        echo "Vul alle velden in!";
        die();
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "Voor een geldig mail adres in!";
        die();
    }

    $headers = array(
        'From' => 'no-reply@blue-lotus.nl'
    );
    $reveiver = "nevermirco.@gmail.com";
    $body = "New message from: {$name}\n";
    $body .= "Subject: {$subject}\n\n";
    $body .= "{$message}\n\n";
    $body .= "Email: {$mail}\n";
    $body .= "Phone: {$phone}";

    if (mail($reveiver, $subject, $body, $headers)) {
        echo "Bericht is verstuurd!";
    } else {
        echo "Bericht sturen mislukt!";
    }
    die();
?>