<?php
for ($i=0; $i<20; $i++)
{
 $n[$i] = rand(0,60);
}

for ($i=0; $i<20; $i++)
{
 try {
  if($n[$i] >=50)
  {
   $x = $n[$i];
   $n[$i] = rand(0,50);
   throw new Exception("\$n[" . $i . "] : " . $x .  ". Must be less than or equal to 50. Reset to " . $n[$i] . "<br>");
  }
  echo "\$n[" . $i . "] : " . $n[$i] . "<br>";
}

 catch (Exception $e) {
  echo $e->getMessage();
 }
}
?>