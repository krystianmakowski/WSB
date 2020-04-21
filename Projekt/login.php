<?php
	//Połączenie z bazą danych
	$link =@new mysqli("localhost","root","", "bank");
	if (!$link) {
        echo "Błąd: Nie można połączyć z MySQL." . PHP_EOL;
	    echo "Błąd: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Błąd: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	

    session_start();
	$usern = $_POST['username']; //użycie metody POST do ustawienia nazwy użytkownika jako zmienna
	$_SESSION["username"]=$usern; //zadeklarowanie zmiennej sesji i umieszczenie usern zadeklarowanego powyżej
	//echo $_SESSION["username"];

	$input_password = $_POST['password'];
	$salt = ('nepal');
	$hashed_password= crypt($input_password, $salt); //brak odszyfrowywania hasła dla funkcji crypt()

	//pobiera poprzednie hasło
		$query =  mysqli_query($link, "SELECT password FROM users WHERE username='$usern' ")or die(mysql_error());
		$row =  mysqli_fetch_row($query);
		$previous_password = $row[0];
			 

	
	if ($hashed_password==$previous_password) {
		header("Location: user_dashboard.php");
		die();
	}else{
		echo "Błędna nazwa użytkownika i/lub hasło";
	}

		
	mysqli_close($link);
				
?>