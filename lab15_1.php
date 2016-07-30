<?php

for($i=-4; $i<=4; $i++)
{

  try{
   if ($i==0) { throw new Exception("Divide by Zero. <br>"); }

 echo (7/$i) . "<br>";
}

catch (Exception $e)
{
 echo $e->getMessage();
}

}

?>
