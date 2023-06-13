<?php 
$kolor ="";
if(isset($_POST['kolor'])) {
    $kolor = $_POST['kolor'];
    setcookie("kolor", $kolor, time() + 7200);
}
else {
    if(isset($_COOKIE['kolor'])){
        $kolor = $_COOKIE['kolor'];
    }
}
$kolor ="";
if(isset($_POST['kolor'])) {
    $kolor = $_POST['kolor'];
    setcookie("kolor", $kolor, time() + 7200);
}
else {
    if(isset($_COOKIE['kolor'])){
        $kolor = $_COOKIE['kolor'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="Strona1.php">
        <select name="Colors" id="Colors2">
            <option value="Wybierz">Wybierz</option>

            <option value="Rozowy" <?php echo $kolor=='Rozowy'?'selected':'';?>>Różowy</option>
            <option value="Niebieski" <?php echo $kolor=='Niebieski'?'selected':'';?> >Niebieski</option>
            <option value="Jasminowy" <?php echo $kolor=='Jasminowy'?'selected':'';?>>Jaśminowy</option>

        </select>
        <input type="checkbox" name="ustaw" value="ustaw" >ustaw
        <br>
    <input type="submit" value="Potwierdź">
    </form>
</body>
</html>