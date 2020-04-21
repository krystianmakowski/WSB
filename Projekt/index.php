<!DOCTYPE html>
<html>
<head>
  <title>Bank - demo</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>


<body>
<div class="container">
  <div class='row'>
      <div class='col-sm-12'>
      <!-- Bootstrap -->
    <form action="login.php" method="POST" role='form'>
      <div class="form-group">
            <label for="username">Użytkownik</label>
            <input type="text" class="form-control" name="username" placeholder="Podaj login" >
          </div>
      <div class="form-group">
        <label for="password">Hasło</label>
        <input type="password" class="form-control" name="password" placeholder="Podaj hasło">
      </div>
      
          <input type="submit" class="btn btn-primary" value="Zaloguj się">.
    </form>
      <br><br>  
      <text class="text-muted">Nie zarejestrowany? Zarejestruj się!</textarea>
      <br>

      <a href="newuser.php" class="btn btn-primary" role="button">Zarejestruj się</a>
  </div>
  </div>
</div>
</body>
</html>