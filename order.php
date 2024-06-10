<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product = $_POST['product'];
  $size = $_POST['size'];
  $quantity = $_POST['quantity'];

  $to = "ngahungkhanh417@gmail.com"; 
  $subject = "Nová objednávka";
  $body = "Produkt: $product\nVeľkosť: $size\nMnožstvo: $quantity";

  if (mail($to, $subject, $body)) {
    echo "Objednávka bola úspešne odoslaná!";
  } else {
    echo "Nastala chyba pri odosielaní objednávky.";
  }
}
?>