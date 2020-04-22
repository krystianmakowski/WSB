<?php
// Połączenie z bazą danych
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bank';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Błąd połączenia z bazą MySQL: ' . mysqli_connect_error());
}
// Teraz sprawdzamy, czy dane zostały przesłane, funkcja isset () sprawdzi, czy dane istnieją.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	exit('Proszę uzupełnij formularz rejestracji!');
}
// Upewniamy się ze przeslane dane nie sa wartosciami pustymi.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	exit('Proszę uzupełnij formularz rejestracji!');
}
// Walidacja adresu email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email nie jest prawdiłowy!');
}
// Walidacja nazwy użytkownika
if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    exit('Nazwa użytkownika nie jest prawidłowa!');
}
// Walidacja hasła
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Hasło musi posiadać od 5 do 20 znaków!');
}
// Musimy sprawdzić, czy istnieje konto o tej nazwie użytkownika.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Parametryzowanie zapytań, hashowanie hasła
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Wynik zapisany, możemy sprawdzić czy konto istnieje w bazie.
	if ($stmt->num_rows > 0) {
		echo 'Podana nazwa użytkownika już istnieje, podaj inną!';
	} else {
        // Dodawanie użytkownika
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
		// Nie chcemy ujawniać haseł w naszej bazie danych, więc haszujemy hasło i używamy password_verify, gdy użytkownik się zaloguje.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();                       
			echo 'Rejestracja przebiegła pomyślnie, możesz się teraz zalogować!';
			header('Location: index.html');           
}
else {
	// Coś jest nie tak z danymi sql, sprawdź, czy konto zawiera wszystkie 3 pola.
	echo 'Nie można wykonać zapytania!';
}
	}
	$stmt->close();
}
else {
	// Coś jest nie tak z danymi sql, sprawdź, czy konto zawiera wszystkie 3 pola.
	echo 'Nie można wykonać zapytania!';
}
$con->close();
?>