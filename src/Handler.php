<?php
    header('Location: ../index.php');
    include_once 'Contact.php';

    $data = $_REQUEST;

    switch ($data['type']) {
        case 'add':
            saveContact($data);
            break;
        case 'delete':
            deleteContact($data['phone']);
            break;
    }