<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php 
    $mul = 2;
    for ($i = 1; $i <= 12; $i++) {
    ?>
    <div class="row">
        <div class="h2 col text-end "><?php print($mul." x ". $i." = ")?></div>
        <div class="h2 col text-start"><?php print($i*$mul)?></div>
    </div>
    <?php 
    }?>
</body>
</html>