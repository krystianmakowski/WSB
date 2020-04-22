<?php
session_start();
session_destroy();
// Przekierowanie do strony logowania:
header('Location: index.html');
?>