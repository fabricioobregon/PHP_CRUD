<html>
<?php
$rand = rand(0,9);
echo "<title>$rand</title>";
?>
<body>
<form action="learnphp.php" method="post">

<table border="0">

<tr>
	<td>Name</td>
	<td align="center"><input type="text" name="username" size="30" /></td>
</tr>

<tr>
	<td>Address</td>
	<td align="center"><input type="text" name="streetaddress" size="30" /></td>
</tr>

<tr>
	<td>City</td>
	<td align="center"><input type="text" name="cityaddress" size="30"  /></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

</table>
</form>

<?php
echo rand() . "\n"."</br>";
echo mt_rand() . "\n"."</br>";

echo rand(5, 15)."</br>";


?>

<?php
/**
* Generate Float Random Number
*
* @param float $Min Minimal value
* @param float $Max Maximal value
* @param int $round The optional number of decimal digits to round to. default 0 means not round
* @return float Random float value
*/
function float_rand($Min, $Max, $round=0){
//validate input
if ($Min>$Max) { $min=$Max; $max=$Min; }
else { $min=$Min; $max=$Max; }
$randomfloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
if($round<0)
$randomfloat = round($randomfloat,$round);

return $randomfloat;
}

echo float_rand(0.01,5.00,2);

?>

</body>
</html>
