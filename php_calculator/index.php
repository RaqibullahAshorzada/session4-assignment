<table align="center" border='1' width="100%">
<?php
// session4 Assignment 
$number = 10;
for($multiplicator = 2; $multiplicator <= 10; $multiplicator++)
{
    echo "<tr>";
    for($value=1; $value <= $number ; $value++) { 
        $table = ($multiplicator * $value);
        echo "<td>$value x $multiplicator = $table </td>";
    }
    echo"<tr/>";
}


echo"</table>";


?>