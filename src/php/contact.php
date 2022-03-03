<?php
/*
 *
 * Copyright (c) 2022 Joél Friedrich
 * All Rights Reserved
 *
 */
session_start();

$contact = null;

if (isset($_POST['surname']) && isset($_POST['lastname']) && isset($_POST['tel']) && isset($_POST['email'])) {
    $contact = array(
        'Surname' => $_POST['surname'],
        'Lastname' => $_POST['lastname'],
        'Phone' => $_POST['tel'],
        'Mail' => $_POST['email'],
    );
}

$_SESSION['contact'] = json_encode($contact);

header('Location: ../app/sites/appointment.html');
