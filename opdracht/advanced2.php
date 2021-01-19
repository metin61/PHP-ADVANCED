<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
          background-color: <?php echo $_POST["kleuren"]; ?>
          

      }
      body {
         color: <?php echo $_POST["textKleur"]; ?>
          

      }
  </style>
</head>
<body>
    <?php
    

    echo "Voornaam is:<br/>".$_POST["Voornaam"];
  
    echo "<br/>Achternaam is:<br/>".$_POST["Achternaam"];
  
    echo "<br/>Klas is:<br/>".$_POST["Klas"];
  
    echo "<br/>Leeftijd is:<br/>".$_POST["Leeftijd"];
  
    echo "<br/>Adres is:<br/>".$_POST["Adres"];
    
    echo "<br/>Plaatsnaam is:<br/>".$_POST["Plaatsnaam"];
  
    echo "<br/>Geslacht is :<br/>".$_POST["geslacht"];
  
   

    ?>

    
    
</body>
</html>