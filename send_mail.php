<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire de l'email
    $to = "nicolabak05@gmail.com"; // Votre adresse email

    // Sujet de l'email
    $subject = "Nouveau message du formulaire de contact";

    // Corps de l'email
    $body = "Nom: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='success'>Merci, votre message a bien été envoyé.</p>";
    } else {
        echo "<p class='error'>Désolé, une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
