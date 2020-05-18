<?php
include "polacz.php";
$firma = wczytaj("firma");
$wartosc = wczytaj("wartosc");
$powstanie = wczytaj("powstanie");


$sql = $baza->prepare("INSERT INTO firma VALUES (?, ?, ?);");
if ($sql)
{
        $sql->bind_param("sss", $firma, $wartosc, $powstanie);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
header ("Location:http://localhost/firma/");
?>