<?php
    function setColor($value): void
    {
        echo (isset($_GET['color'])) && ($_GET['color'] == $value) ? 'checked' : '' ;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body style="background-color: <?=(isset($_GET['color'])) ? $_GET['color'] : ''?>">
    <form action="">
        <input type="text" id="name" name="name" placeholder="Vul uw naam in" value="<?=(isset($_GET['name'])) ? $_GET['name'] : ''; ?>"><br><br>
        <input type="submit" value="Submit">
        <br><br><br>
        <div class="colorPick">
            <div class="color">
                <label for="lightblue">lightblue</label><br>
                <input type="radio" id="lightblue" name="color" onclick="changeColor('rgb(155, 155, 255)')" value='rgb(155, 155, 255)' <?php setColor('rgb(155, 155, 255)'); ?>>
            </div>
            <div class="color">
                <label for="lightred">lightred</label><br>
                <input type="radio" id="lightred" name="color" onclick="changeColor('rgb(255, 155, 155)')" value='rgb(255, 155, 155)' <?php setColor('rgb(255, 155, 155)');?>>
            </div>
            <div class="color">
                <label for="lightgreen">lightgreen</label><br>
                <input type="radio" id="lightgreen" name="color" onclick="changeColor('rgb(155, 255, 155)')" value='rgb(155, 255, 155)' <?php setColor('rgb(155, 255, 155)');?>>
            </div>
            <div class="color">
                <label for="lightgrey">lightgrey</label><br>
                <input type="radio" id="lightgrey" name="color" onclick="changeColor('rgb(211, 211, 211)')" value='rgb(211, 211, 211)' <?php setColor('rgb(211, 211, 211)');?>>
            </div>
        </div>
    </form>
</body>
</html>
