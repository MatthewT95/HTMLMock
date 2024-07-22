<?php
// Receive JSON data
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Generate HTML
$html = 'Fake text generator';

// Send HTML response
header('Content-Type: text/html');
echo $html;
?>