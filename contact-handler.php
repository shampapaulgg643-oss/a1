<?php
// Voile Kingdom — contact form handler
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html');
    exit;
}
// Honeypot: bots fill hidden fields
if (!empty($_POST['website'])) {
    header('Location: contact.html?status=sent');
    exit;
}
$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = trim($_POST['email'] ?? '');
$topic   = trim(strip_tags($_POST['topic'] ?? 'General'));
$message = trim(strip_tags($_POST['message'] ?? ''));

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.html?status=error');
    exit;
}
// Prevent header injection
$name  = str_replace(["\r", "\n"], ' ', $name);
$topic = str_replace(["\r", "\n"], ' ', $topic);

$to      = 'info@voilekingdom.com';
$subject = 'Website enquiry: ' . $topic;
$body    = "Name: $name\nEmail: $email\nTopic: $topic\n\nMessage:\n$message\n";
$headers = "From: Voile Kingdom Website <no-reply@voilekingdom.com>\r\n" .
           "Reply-To: $email\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = @mail($to, $subject, $body, $headers);
header('Location: contact.html?status=' . ($sent ? 'sent' : 'error'));
exit;
