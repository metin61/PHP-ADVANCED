<!DOCTYPE html>
<html>
<body>

<?php  




function rekenUit(int $x, int $y, int $v) {
  $z = $x + $y + $v;
  return $z;
}

echo "5 + 10 + 2= " . rekenUit(5,10,2) . "<br>";
echo "7 + 13 + 3 = " . rekenUit(7,13,3) . "<br>";
echo "2 + 4 + 1 = " . rekenUit(2,4,1);


?>  


</body>
</html>
