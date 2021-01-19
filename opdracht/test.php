<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formulier"action="uitkomst.php" method="get">
        <select name="klas"> 
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
           
        </select>
       
          
</form>          
</body>
</html>