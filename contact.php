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

$first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
$last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($first_name === '' || $last_name === '' || $email === '' || $subject === '' || $message === '') {
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

$full_name = trim($first_name . ' ' . $last_name);
$clean_name = clean_header_value($full_name);
$clean_email = clean_header_value($email);
$clean_subject = clean_header_value($subject);

$safe_name = htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone = htmlspecialchars($phone !== '' ? $phone : 'Non renseigné', ENT_QUOTES, 'UTF-8');
$safe_subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$html_body = <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Nouveau message</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif; background:#f6f6f8;">
  <div style="max-width:640px; margin:24px auto; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.08);">
    <div style="padding:20px 24px; background:#0f0f14; color:#ffffff;">
      <h2 style="margin:0; font-size:20px;">Nouveau message via le site</h2>
      <p style="margin:6px 0 0; font-size:13px; opacity:0.8;">LCR DIGITAL</p>
    </div>
    <div style="padding:24px;">
      <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr>
          <td style="padding:8px 0; color:#666;">Nom</td>
          <td style="padding:8px 0; font-weight:600;">{$safe_name}</td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#666;">Email</td>
          <td style="padding:8px 0; font-weight:600;">{$safe_email}</td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#666;">Téléphone</td>
          <td style="padding:8px 0; font-weight:600;">{$safe_phone}</td>
        </tr>
        <tr>
          <td style="padding:8px 0; color:#666;">Sujet</td>
          <td style="padding:8px 0; font-weight:600;">{$safe_subject}</td>
        </tr>
      </table>
      <div style="margin-top:16px; padding:16px; background:#f3f4f8; border-radius:10px;">
        <p style="margin:0 0 8px; color:#666; font-size:13px;">Message</p>
        <div style="font-size:14px; color:#222; line-height:1.5;">{$safe_message}</div>
      </div>
    </div>
  </div>
</body>
</html>
HTML;

$headers = [];
$headers[] = 'From: ' . $from;
$headers[] = 'Reply-To: ' . $clean_email;
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/html; charset=UTF-8';

$sent = mail($to, $clean_subject, $html_body, implode("\r\n", $headers));

if (!$sent) {
    http_response_code(500);
    echo json_encode(["ok" => false, "message" => "Email send failed"]);
    exit;
}

echo json_encode(["ok" => true, "message" => "Email sent"]);
