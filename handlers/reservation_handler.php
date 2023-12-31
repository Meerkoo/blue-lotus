<?php
    include "../openingtimes.php";
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: /");
        die();
    }

    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $guest_count = $_POST['guest_count'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    // Check if all field filled
    if (empty($name) || empty($email) || empty($phone) || empty($guest_count) || empty($time) || empty($date)) {
        echo "Vul alle velden!";
        die();
    }
    // Check valid mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Vul een geldig mail adres in!";
        die();
    }

    // Check valid number
    if (!is_numeric($guest_count) || $guest_count < 1) {
        echo "Vul een geldig getal in!";
        die();
    }

    // Check guest count
    if ($guest_count > 10) {
        echo "Voor reserveringen voor grote groepen, graag reserveren via telefoon.";
        die();
    }

    // Check valid date
    $date_now = date("Y-m-d");
    if ($date < $date_now) {
        echo "Geen geldige datum!";
        die();
    }

    // Check valid time
    $date_str = date('l', strtotime($date));
    $time_start = strtolower($date_str);
    $time_end = strtolower($date_str);
    $closed = strtolower($date_str);
    $time_start .= "_start";
    $time_end .= "_end";
    $closed .= "_closed";

    if ($$closed) {
        echo "We zijn die dag gesloten!";
        die();
    }

    if ($time < $$time_start || $time > $$time_end) {
        echo "We zijn op die tijd niet geopend!";
        die();
    }


    // Mail voor klant
    include "../emails/reservationmails.php";
    $customer = $email;
    $subject = "Reservering The Blue Lotus";
    $message = $res_mail;

    //end of message 
    $headers = [
        'From' => 'The Blue Lotus <info@blue-lotus.nl>',
        'X-Sender' => 'The Blue Lotus <info@blue-lotus.nl>',
        'X-Mailer' => 'PHP/' . phpversion(),
        'X-Priority' => '1',
        'Return-Path' => 'info@blue-lotus.nl',
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/html'
        ];

    // now lets send the email. 
    if (mail($customer, $subject, $message, $headers)) {
        echo "Check uw mailbox voor de bevestiging.";
        $to = "info@blue-lotus.nl";
        $subject = "Nieuwe reservering";
        $message = $conf_mail;
        mail($to, $subject, $message, $headers);
    } else {
        echo "Reservering mislukt. Probeer opnieuw of neem telefonisch contact op.";
    }
?>