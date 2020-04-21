<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

</head>
<body>

<?php
	//Połączenie z bazą MySQL
	$link = @ new mysqli("localhost","root","", "bank");
	if (!$link) {
	    echo "Błąd: Nie można połączyć z MySQL." . PHP_EOL;
	    echo "Błąd: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Błąd: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	session_start();
	$login_status;
	if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
		//sesja nie rozpoczęta, użytkownik nie może być zalogowany
		$login_status = "Could not log in";
	} else{
		//sesja rozpoczęta, użytkownik zalogownay
		$username=$_SESSION["username"];//sesja dla danego użytkownika
		$query= mysqli_query($link, "SELECT fname FROM users WHERE username = '$username' ") or die(mysql_error()); //wyodrębnia nazwę użytkownika powiązanego z bieżącą nazwą użytkownika sesji

        
        // aby wyświetlić wiersz bazy danych jako ciąg znaków, a nie jako identyfikator zasobu [mysql_fetch_row ()]. 
		$row = mysqli_fetch_row($query);
		$fname=$row[0]; // echo $row[0] wyświetla imię.

		mysqli_close($link);
		$login_status = "Logged in succesfully";
	}
?>

<script type="text/javascript">alert('<?php echo"$login_status";?>')</script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
			 <?php if ($login_status == "Could not log in"):?>
			 	<h1> Nieautoryzowany </h1>
			 	<h2> Nie jesteś zalogowany </h2>

	      		<a href="index.php" class="btn btn-primary" role="button">Zaloguj się</a>
			 <?php else: ?>


			 	<h1>Hello, <?php echo "$fname";?>!</h1>
				
	      		<a href="logout.php" class="btn btn-primary" role="button">Wyloguj się</a>

	      		<h2 style="letter-spacing: 4px;">This is letters spaced at 4px</h2>



			 <?php endif; ?>
			</div>
		</div>
	</div>
</div>


</body>

</html>