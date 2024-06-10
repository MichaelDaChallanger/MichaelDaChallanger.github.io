<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    
    $to = "ngahungkhanh417@gmail.com"; 
    $subject = "Nová správa z kontaktnej stránky";

    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    
    $email_body = "<h2>Nová správa z kontaktnej stránky</h2>";
    $email_body .= "<p><strong>Meno:</strong> {$name}</p>";
    $email_body .= "<p><strong>Email:</strong> {$email}</p>";
    $email_body .= "<p><strong>Správa:</strong><br>{$message}</p>";

    
    if (mail($to, $subject, $email_body, $headers)) {
        
        header("Location: thank_you.html");
        exit();
    } else {
       
        echo "Nastala chyba pri odosielaní vašej správy. Skúste to znova.";
    }
} else {
    
    echo "Nesprávny spôsob odoslania formulára.";
}
?>
