<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php 
    for ($i = 1; $i <= 12; $i++) {
    ?>
    <div class="row container"   ">
        <div class="h2 col text-end"><?php echo $i ?> เป็น </div>
        <div class="h2 col text-start"><?php $i%2==0?print("เลขคู่") : print("เลขคี่")?></div>
    </div>
    <?php 
    }?>
</body>
</html>