<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form name="invoerformulier"action="advanced2.php" method="post">
          
          <br><label for="voornaam">voornaam:</label><br>
          <input type="text" id= voornaam name= "Voornaam"><br><br>
          

       
          <label for="achternaam">achternaam:</label><br>
          <input type="text" id= achternaam name= "Achternaam"><br><br>
          

          <label for="klas">klas:</label><br>
          <input type="text" id= klas name= "Klas"><br><br>
          

          <label for="leeftijd">leeftijd:</label><br>
          <input type="text" id= leeftijd name= "Leeftijd"><br><br>
          

          <label for="adres">adres:</label><br>
          <input type="text" id= adres name= "Adres"><br><br>
          

          <label for="plaatsnaam">plaatsnaam:</label><br>
          <input type="text" id= plaatsnaam name= "Plaatsnaam"><br><br>
         


          <label for="geslacht">Geslacht:</label>  <br><br>
          <label for="man">man:</label>
          <input type="radio" value="man" id= "man" name= "geslacht">
          <label for="vrouw">vrouw:</label>
          <input type="radio" value="vrouw" id= "vrouw" name= "geslacht"><br><br><br>
          
          
          
          <label for="achtergrondkleur">Achtergrond kleur:</label><br>
          
      
<form name="formulier"action="advanced2.php" method="post">
            <select id="select" name="kleuren">  
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
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