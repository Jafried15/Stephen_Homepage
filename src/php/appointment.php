<?php
/*
 *
 * Copyright (c) 2022 Joél Friedrich
 * All Rights Reserved
 *
 */
session_start();

$appointment = null;

if (isset($_POST['method']) && isset($_POST['date1']) && isset($_POST['time1']) && isset($_POST['date2']) && isset($_POST['time2'])) {
    $appointment = array(
        'Method' => $_POST['method'],
        'Date 1' => $_POST['date1'],
        'Time 1' => $_POST['time1'],
        'Date 2' => $_POST['date2'],
        'Time 2' => $_POST['time2'],
    );
}

$contact = json_decode($_SESSION['contact']);

$to = 'info@team-wanitschek.de';
$subject = "Terminanfrage";

$message = "Kontakt: " . $contact;
$message .= "Termin: " . $appointment;

$success = mail($to, $subject, $message);

if ($success) {
    header('Location: ../app/sites/thanks.html');
} else {
    echo error_get_last()['message'];
}

