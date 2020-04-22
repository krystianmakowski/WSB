<?php
// Użycie sesji
session_start();
// Jeśli użytkownik jest nie zalogowany, nastąpi przekierowanie do strony logowania
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bank';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Pozyskanie adresu email i hasła z bazy danych (nie przetrzymujemy w sesji)
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// Odnalezienie użytkownika po jego ID
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Twój Profil</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Jewish Bank</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Twój profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Wyloguj się</a>
			</div>
		</nav>
		<div class="content">
			<h2>Twoje Dane</h2>
			<div>
				<p>Szczegóły twojego konta:</p>
				<table>
					<tr>
						<td>Użytkownik:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Hasło:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>					
				</table>
			</div>
		</div>
	</body>
</html>