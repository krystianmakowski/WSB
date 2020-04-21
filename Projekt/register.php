<?php
	//Połączenie z bazą danych
	$link = @new mysqli("localhost","root","", "bank");
	if (!$link) {
        echo "Błąd: Nie można połączyć z MySQL." . PHP_EOL;
	    echo "Błąd: " . new mysqli_errno() . PHP_EOL;
	    echo "Błąd: " . new mysqli_error() . PHP_EOL;
	    exit;
	}


	//sesja rozpoczęta
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$salt=('nepal');
		$hashed_password = crypt ( $password, $salt); //haschowanie hasła
		
		
	$query= "INSERT INTO users (id, fname, lname, email, username, password) VALUES ('','$fname','$lname','$email','$username','$hashed_password')";
    
	if(mysqli_query($link, $query) == TRUE)
	{
		 echo "Powodzenie";
	}
	else
	{
		echo "Błąd: " . $query . "<br>" . mysqli_error($link);
	}

    mysqli_close($link);
	
?>  