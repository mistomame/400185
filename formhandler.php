<?php
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];

$testo = "Nome: " . $nome . "\n"
       . "Email: " . $cognome . "\n";

mail('info@mistomame.zone', 'Prenotazione 6 aprile', $testo);

echo "Prenotazione effettuata"
?>
