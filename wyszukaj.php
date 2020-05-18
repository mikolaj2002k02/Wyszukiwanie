<form action method="get" action="<?=$_SERVER['PHP_SELF']?>">
<input type="text" name="word" />
<input type="submit" name="submit" value="Wyszukaj" />
</form>
<?php
if (isset($_GET['submit'])){
    $conn=new  mysqli("localhost", "root", "", "firma");
    mysqli_select_db($conn,'firma') or die(mysqli_error());
    $keyword = "";
    if(isset($_GET['word'])) {
       $keyword = $_GET['word'];
    }
    print "Dane";
    $sql = "SELECT * FROM firma WHERE firma LIKE '%$keyword%' OR firma  LIKE '*$keyword*'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
        print '<br /><a href="wyszukaj.php?id='. $row['firma'] . '">'
        . $row['firma'] . ' '
        . $row['wartosc'] . ' '
        . $row['powstanie'] . '</a>';
    }
    if(mysqli_num_rows($result)==0){
    print " Nie ma takich danych!";
    }
}
else{
    print "Co chcesz wyszukać.";
}
?>