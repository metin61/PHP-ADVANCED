<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="rood">Dit is rood</div>
<div class="blauw">blauw</div>
<div class="groen">groen</div>
<div class="geel">geel</div>
    <?php
        function schrijfKleur($kleur) {
            return $kleur;
    }
 
    ?>
 
    <style>
        .rood {
            color: <?php echo schrijfKleur ("red"); ?>;
        }
 
        .blauw {
            color: <?php echo schrijfKleur ("blue"); ?>;
        }
 
        .groen {
            color: <?php echo schrijfKleur ("green"); ?>;
        }
 
        .geel {
            color: <?php echo schrijfKleur ("yellow"); ?>;
        }
    </style>
    
</body>

</html>