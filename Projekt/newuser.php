<!DOCTYPE html>
<html>
<head>
	<title>Formularz rejestracji</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<!-- Bootstrap -->
		    <form action="register.php" method="POST" role='form'>
		      <div class="form-group">
		      	<label for="fname">Imię</label>
		      	<input type="text" class="form-control" name="fname" placeholder="Podaj twoje imię" >
		      </div>
		      <div class="form-group">
		      	<label for="lname">Nazwisko</label>
		      	<input type="text" class="form-control" name="lname" placeholder="Podaj twoje nazwisko" >
		      </div>
		      <div class="form-group">
		        <label for="email">Adres email</label>
		        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Podaj email">
		        <small id="emailHelp" class="form-text text-muted">Nigdy nie podzielimy się twoim adresem email z kimkolwiek.</small>
		      </div>
		      <div class="form-group">
		      	<label for="fname">Login</label>
		      	<input type="text" class="form-control" name="username" placeholder="Podaj login" >
		      </div>
		      <div class="form-group">
		        <label for="password">Hasło</label>
		        <input type="password" class="form-control" name="password" placeholder="Podaj hasło">
		        <br>
		        <!--Przycisk-->
		    	<input type="submit" class="btn btn-primary" value="Zarejestruj się">.
		      </div>
		    </form>
		    
		</div>
	</div>
</div>
</body>
</html>	