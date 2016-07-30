<?php

if($_POST) {
$bt=$_POST['bt'];
$bt= strtoupper($bt);

try {
switch ($bt) {
case"A": break;
case"B": break;
case"O": break;
case"AB": break;
default: echo "No such blood type."; break;
 }
}

catch (Exception $e)
{
 echo $e->getMessage();
}

}
else {
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
What is your blood type: <input type="text" name="bt" size=4>
<input type="submit" value="Check">
</form>

<?php
}
?>
