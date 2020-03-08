<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name="Karol";
      $surname="Kowalski";

      echo "$name $surname";
      echo $name.$surname;
      echo $name,$surname;

      //heredoc

      echo <<<SHOW
      <hr>
        Imię: $name <br>
        Nazwisko: $surname
        <hr>
SHOW;
      $text=<<<SHOW
      <hr>
      Imię: $name <br>
      Nazwisko: $surname
      <hr>
SHOW;
      echo $text;

      //nowdock

      $name="Janusz";
      echo<<<'X'
      Imię: $name;
      X;
     ?>
  </body>
</html>
