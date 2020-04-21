<?php
//Połączenie z bazą danych
$link = @new mysqli("localhost","root","", "bank");
if (!$link) {
    die("Błąd połączenia: " . mysql_error());
}else{
mysqli_select_db ($link, 'bank') or die ("Nie można wybrać bazy danych.");
}


//początek sesji
session_start();
//sprawdza, czy zmienna nazwa użytkownika sesji jest obecna, czy nie
if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
	echo "Nie można zalogować";
} else{
	//zamyka połączenie z bazą danych
	mysqli_close($link);

	session_destroy();
    header("lokalizacja: index.php");
    exit();
}
?>