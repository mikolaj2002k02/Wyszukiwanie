<html>
 <head>
  <meta charset="utf-8">
  <title>Zadanie</title>
     <body>
  <div ng-app="myApp" ng-controller="customersCtrl">
 </div>
 <h1>Firmy</h1><br/><br/>
  <table border="1">
       <tr>
    <th>Nazwa Firmy</th><th>Wartosc Firmy</th><th>Rok Powstania Firmy</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM firma ORDER BY firma"))
{
        $sql->execute();
        $sql->bind_result($firma, $wartosc, $powstanie);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$firma</td>
                        <td>$wartosc</td>
                        <td>$powstanie</td>
                   </tr>";
            
        }
        $sql->close();
 }
else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );

 $baza->close();
?>
     </table>
         <table border="2">
         <tr>
             <td> <a href="wyszukaj.php">Wyszukaj</a></td>
         </tr>
         </table>
 </body>
</html>
