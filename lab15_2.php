<?php
try {
if(error_reporting(E_ERROR))
{
 throw new Exception ("File not found. <br>");
}
else
{
 $file=fopen("sapp_test.txt", "r"); 
 echo "Opened file sucessfully" . "<br>"; 
 
 }
}

catch (Exception $e)
{
 echo $e->getMessage();
}


echo "Can you see this?";
?>