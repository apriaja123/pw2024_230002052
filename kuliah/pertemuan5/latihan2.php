<?php

$binatang=['😺','🐼','🙈','🐈','🐭'];
$makanan =['🥛','🧋','🍔','🥨','🍞']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <h3>daftar Binatang </h3>
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>

    <li><?php echo $binatang[$i];?>


    </li>
    <?php } ?>
    </ol>
    <h3>daftar makanan</h3>
<ol>
    <?php foreach ($makanan as $b ) : ?>
  
        <li><?= $b; ?> </li>
<?php endforeach;?>
    </ol>
</body>
</html>