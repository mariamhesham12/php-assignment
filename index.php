<?php
foreach (range('A','Z') as $letters){
    echo $letters." ";
}

$current= 'A';
// $next= ++$current;

echo "<br>"."The current = ".$current."<br>";
echo "The next = ".++$current."<br>";



$string='https://ieee-bub.com/about.php';
$exploded=explode("/",$string);
echo end($exploded);

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
    
</body>
</html>
