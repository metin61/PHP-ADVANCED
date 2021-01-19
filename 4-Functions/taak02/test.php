<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function rekenUit($getal1, $getal2,$getal3) {

	$heleNaam = $getal1 . " " . $getal2 . " " . $getal3;
  
	return "als ik de getallen $heleNaam bij elkaar optel, krijg ik 20.";

}



$resultaat = rekenUit(9, 5, 6);

echo $resultaat;


?>
</body>
</html>