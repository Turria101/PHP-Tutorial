<?php

//phpinfo();
//exit;

// this function define we will encoding / Working with UTF-8 
mb_internal_encoding('UTF-8');
// this function tell our html the output would be UTF-8 
mb_http_output('UTF-8');


$play = ' i play lo|يس|  with my@Friend';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UTF-8</title>
</head>
<body>
<p> L:  <?= mb_strlen($play)?> </p> 
<p> capt : <?= mb_strtoupper($play)?> </p> 
</body>
</html>