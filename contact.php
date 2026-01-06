<?php
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["ok" => false, "message" => "Method not allowed"]);
    exit;
}

function clean_header_value($value) {
    return trim(str_replace(["\r", "\n"], '', $value));
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    http_response_code(422);
    echo json_encode(["ok" => false, "message" => "Missing required fields"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(["ok" => false, "message" => "Invalid email"]);
    exit;
}

$to = 'contact@lcr-digital.fr';
$from = 'no-reply@lcr-digital.fr';

$clean_name = clean_header_value($name);
$clean_email = clean_header_value($email);
$clean_subject = clean_header_value($subject);

$body_lines = [
    "Name: {$name}",
    "Email: {$email}",
    "Phone: " . ($phone !== '' ? $phone : 'N/A'),
    "Subject: {$subject}",
    "",
    "Message:",
    $message
];

$headers = [];
$headers[] = 'From: ' . $from;
$headers[] = 'Reply-To: ' . $clean_email;
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = mail($to, $clean_subject, implode("\r\n", $body_lines), implode("\r\n", $headers));

if (!$sent) {
    http_response_code(500);
    echo json_encode(["ok" => false, "message" => "Email send failed"]);
    exit;
}

echo json_encode(["ok" => true, "message" => "Email sent"]);
