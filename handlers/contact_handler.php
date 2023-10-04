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

    include "../emails/contactmail.php";
    $headers = [
        'From' => 'The Blue Lotus <info@blue-lotus.nl>',
        'X-Sender' => 'The Blue Lotus <info@blue-lotus.nl>',
        'X-Mailer' => 'PHP/' . phpversion(),
        'X-Priority' => '1',
        'Return-Path' => 'info@blue-lotus.nl',
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/html;'
        ];

    $reveiver = "info@blue-lotus.nl";

    if (mail($reveiver, "Nieuw Bericht", $contact_mail, $headers)) {
        echo "Bericht is verstuurd!";
    } else {
        echo "Bericht sturen mislukt!";
    }
    die();
?>