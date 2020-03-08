<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Plik główny</h3>
    <?php
      include './3_1_file.php';
      include_once './3_1_file.php';
      require_once './3_1_file.php';
      ?>
    <h3>Koniec pliku głównego</h3>
  </body>
</html>
