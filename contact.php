<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

/* =========================
   Chargement du .env
========================= */
function loadEnv(string $path): void {
    if (!file_exists($path)) {
        return;
    }

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue;
        }

        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $_ENV[$key] = trim($value, "\"'");
    }
}

loadEnv(__DIR__ . '/.env');

header('Content-Type: application/json; charset=UTF-8');

// Autoriser uniquement POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "ok" => false,
        "message" => "Méthode non autorisée."
    ]);
    exit;
}

// Récupération des données
$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$subject    = trim($_POST['subject'] ?? '');
$message    = trim($_POST['message'] ?? '');

// Validation
if (
    $first_name === '' ||
    $last_name === '' ||
    $email === '' ||
    $subject === '' ||
    $message === ''
) {
    http_response_code(422);
    echo json_encode([
        "ok" => false,
        "message" => "Veuillez remplir tous les champs obligatoires."
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        "ok" => false,
        "message" => "L’adresse e-mail n’est pas valide."
    ]);
    exit;
}

try {
    $mail = new PHPMailer(true);

    /* =========================
       CONFIG SMTP HOSTINGER
    ========================= */
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER'];
    $mail->Password   = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int) $_ENV['SMTP_PORT'];

    $mail->CharSet = 'UTF-8';

    // Expéditeur / destinataire
    $mail->setFrom($_ENV['SMTP_FROM_EMAIL'], $_ENV['SMTP_FROM_NAME']);
    $mail->addAddress($_ENV['SMTP_TO_EMAIL']);
    $mail->addReplyTo($email, "$first_name $last_name");

    // Sujet
    $mail->Subject = $subject;

    // Sécurisation
    $safe_name    = htmlspecialchars("$first_name $last_name", ENT_QUOTES, 'UTF-8');
    $safe_email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safe_phone   = htmlspecialchars($phone ?: 'Non renseigné', ENT_QUOTES, 'UTF-8');
    $safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    // Contenu
    $mail->isHTML(true);
    $mail->Body = "
        <h2>Nouveau message via le site</h2>
        <p><strong>Nom :</strong> {$safe_name}</p>
        <p><strong>Email :</strong> {$safe_email}</p>
        <p><strong>Téléphone :</strong> {$safe_phone}</p>
        <hr>
        <p>{$safe_message}</p>
    ";

    $mail->AltBody = "
Nom : {$safe_name}
Email : {$safe_email}
Téléphone : {$safe_phone}

Message :
{$message}
    ";

    $mail->send();

    echo json_encode([
        "ok" => true,
        "message" => "Votre message a bien été envoyé. Nous vous répondrons rapidement."
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "ok" => false,
        "message" => "Une erreur est survenue lors de l’envoi du message. Veuillez réessayer plus tard."
    ]);
}
