<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  


?>  

<form name="formulier"action="uitkomst.php" method="get">
        <select name="klas"> 
            <?php
            $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
                foreach ($klassen as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
           
        </select>
       
          <input type="submit" name= "submit" value="verstuur">
</form>          


</body>
</html>