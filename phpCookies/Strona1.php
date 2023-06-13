<?php 
if(isset($_POST["Colors"])){$kolor = $_POST["Colors"];} else {$kolor="";}
if(isset($_POST["ustaw"])){$ustaw = $_POST["ustaw"];} else {$ustaw="";}


        if(isset($_POST['Colors'])) {
            setcookie("acookie", $kolor . "," .  $ustaw, time() + 7200);
            
            

    }
    else {
        if(isset($_COOKIE["acookie"])){
            $pieces = explode(",", $_COOKIE["acookie"]);
            $kolor = $pieces[0];
            $ustaw = $pieces[1];
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

            <option value="Rozowy" <?php if(isset($kolor)){
                if($kolor == 'Rozowy') {
                    echo " selected";
                }
            }  ?>>Różowy</option>
            <option value="Niebieski"<?php if(isset($kolor)){
                if($kolor == 'Niebieski') {
                    echo " selected";
                }
            }  ?> >Niebieski</option>
            <option value="Jasminowy"<?php if(isset($kolor)){
                if($kolor == 'Jasminowy') {
                    echo " selected";
                }
            }  ?> >Jaśminowy</option>

        </select>
        <input type="checkbox" name="ustaw" value="ustaw" <?php if(isset($ustaw)){
                if($ustaw == 'ustaw') {
                    echo " checked";
                } 
            }
        ?>>ustaw
        <br>
    <input type="submit" value="Potwierdź">
    </form>
    <div id="text" style ='color: <?php ?>'>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    
</body>
</html>