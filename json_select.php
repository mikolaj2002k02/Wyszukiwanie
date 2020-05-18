<?php
        include "polacz.php"; //wzór pliku we wpisie "Pełny panel administracyjny MySQLi"
        if ($sql = $baza->prepare( "SELECT DISTINCT firma FROM firma ORDER BY firma "))
        {
                $sql->execute(); //wykonaj SQL
                $sql->bind_result($firma,$wartosc);
                while ($sql->fetch())
                 $N[] = array(
                     "firma" => $firma,
                   ); //dla każdego nazwiska tworzy 2 pary, nazwiska przekonwertowane do UTF
                
                $sql->close();
        }
        $baza->close();
        echo json_encode($N, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
