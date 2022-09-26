<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="PeticioBotiga.php" method="POST">
        <label>Escriu el teu nom : </label>
        <input type="text" name="user"></input>
        <br>

    <?php
        $productes = file('productes.txt');
        foreach($productes as $producte)
        {
            $producte = trim($producte);
            echo "<label for = '$producte'>".$producte."</label>";
            echo "<input type='checkbox' name=$producte></input><br>";
        }
    ?>
        <br>
        <br>
        <hr>
        <input type="submit" value="Boton">
    <form>
</body>
</html>