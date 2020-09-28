<?php
    session_start();

    //$today=new date();

    if((isset($_POST['edad']) && !empty($_POST['edad'])) && (isset($_POST['dateSelected']) && !empty($_POST['dateSelected']))){
        $edad=filter_input(INPUT_POST,'edad',FILTER_VALIDATE_INT);
        $dateSelected=filter_input(INPUT_POST,'dateSelected',FILTER_SANITIZE_STRING);

        //fecha del formulario, en formato de fecha
        echo $dateSelected."<br>";
        echo $edad."<br>";
        
    }

    $username=$_SESSION['username'];
    echo $username;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>
<body>
    <h1>Formulario 2</h1>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="edad">Edad</label>
        <input type="number" name="edad"><br><br>
        <label for="edad">Fecha</label>
        <input type="date" name="dateSelected"><br><br>
        <input type="submit" value="Enviar"><br><br>

        <a href="logout.php">Finalizar Sesion</a>
    </form>
</body>
</html>