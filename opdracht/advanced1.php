<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form name="invoerformulier"action="advanced2.php" method="post">
          
          

          <br><label for="dikteRand">Dikte rand(px):</label><br>
          <select id="select" name="dikteRand">  
          <?php
            $dikteRand = array("5", "10", "15");
                foreach ($dikteRand as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
          </select>  <br><br>
          

          

          <br><label for="ruimteTussen">cel-padding(px):</label><br>
          <select id="select" name="ruimteTussen">  
          <?php
            $ruimteTussen = array("10", "20", "30");
                foreach ($ruimteTussen as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
          </select>  <br><br>
          

            
          
          <label for="achtergrondkleur">Achtergrond kleur:</label><br>
          
      
<form name="formulier"action="advanced2.php" method="post">
            <select id="select" name="kleuren">  
            <?php
            $kleuren = array("red", "blue", "green","brown");
                foreach ($kleuren as $value){
                    echo "<option value=" . $value . ">" . $value . "</option>";
                }
                ?>
           
        </select>

        <br><br>
        <label for="tekstkleur">Tekst kleur:</label><br>

        <form name="formulier"action="advanced2.php" method="post">
            <select id="select" name="textKleur">  
            <?php
            $textKleur = array("red", "blue", "green", "black", "brown");
                foreach ($textKleur as $Value){
                    echo "<option value=" . $Value . ">" . $Value . "</option>";
                }
                
                ?>
                
                <input type="submit" name= "submit" value="verstuur">
        </select>
        
       
          
</form>          


                 
</body>
</html>