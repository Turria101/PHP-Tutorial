<?php

include'./vendor/autoload.php';

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Zip as Adapter;
$filesystem = new Filesystem(new Adapter(__DIR__.'archive.zip'));
$contents = $filesystem->listContents();
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
    
    <ul> 
    <?php foreach ($contents as $ordercontent); ?>
     <li> <?= $contents['type'] ;?>:  <?= $contents['path'] ;?> </li> 
    </ul>
</body>
</html>