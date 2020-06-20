<?php
if (!nick || !mail || !temat || !tresc)
{    
echo "Nie uzupełniłeś wszystkich rubryk.";
exit;  
}

$wiadomosc =
"Imie: ".$_POST['nick']."

e- mail: ".$_POST['mail']."

Tresc: ".$_POST['tresc']."  ";

$tematyka = "www.labomed.pl - ".$temat;


mail ("labomed@labomed.pl", $tematyka, $wiadomosc );
echo "Dziekujemy za wysłanie do nas wiadomości,";
echo "<ul>o treści: <ul />";
echo "Twoje imię: <strong>".$nick."</strong><ul />";
echo "Temat: <strong>".$temat."</strong><ul />";
echo "Twój adres e-mail: <strong>".$mail."</strong><ul />";
echo "Treść: <strong>".$tresc."</strong><ul />";
?>