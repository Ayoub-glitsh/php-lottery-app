<?php
require_once 'includes/functions.php';

$choix = [];
$tirage = [];
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    list($choix, $tirage, $message) = traiter_lottery();
}

include 'includes/header.php';
include 'includes/form.php';
include 'includes/footer.php';
