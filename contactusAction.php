<?php
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $name && $email && $message) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Thank You!</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body class='body-style'>
        <header class='header-style'>
            <h1>Thank You!</h1>
        </header>
        <main class='thank-you-main'>
            <p>Thank you, your message has been submitted!</p>
            <h3>Submitted Information:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>" . nl2br($message) . "</p>
            <a href='contact.html' class='button-quiz'>Return to Contact Page</a>
        </main>
    </body>
    </html>";
} else {
    header('Location: contact.html');
    exit;
}
?>
