<?php
include "polacz.php";
$pesel = wczytaj("firma");//wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM firma WHERE firma = ?;" ))
{
 $sql->bind_param( "s", $firma); 
 $sql->execute();
 $sql->close();
}
$baza->close();
header ("Location: http://localhost/firma/" );
?>