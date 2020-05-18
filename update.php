<?php
include "polacz.php";
$firma = wczytaj("firma");
$wartosc = wczytaj("wartosc");
$powstanie = wczytaj("powstanie");

$sql = $baza->prepare("UPDATE firma SET wartosc=?, powstanie=? WHERE firma=?;");
if ($sql)
{
        $sql->bind_param("sss",  $firma, $wartosc, $powstanie);
        $sql->execute();
        $sql->close();
}
  else die("Błąd SQL: ". $baza->error);
$baza->close();
header ("Location: http://localhost/firma/");
?>