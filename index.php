<?php

    session_start();

    if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION['username']=$username;
            header('Location:form2.php');
            //echo $username;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>