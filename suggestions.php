<?php 
$title = $_POST['title']; 
$description = $_POST['description']; 
$email = $_POST['email']; 


if($title and $description and $email) { 
     
    $connection = @mysql_connect('mysql.ct8.pl', 'm2913_Przemek', 'Uek123') 
    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('m2913_uekmap', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
     
    $ins = @mysql_query("INSERT INTO Sugestie SET title='$title', mail='$email', description='$description'"); 
     
    if($ins) echo "Wysłano"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 
?>