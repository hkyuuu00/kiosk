<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>logout</title>
    </head>

    <body>
    <?php
    session_start(); 

    if (isset($_SESSION['admin'])) { 
        unset($_SESSION['admin']); 
    }

    header('Location: ./login.php');
    ?>
    </body>
</html>