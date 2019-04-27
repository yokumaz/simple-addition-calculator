<?php
if(isset($_POST['calc']) && $_POST['calc2'] != ""){
	$firstnumber = $_POST['calc'];
	$secondnumber = $_POST['calc2'];
	$total = $firstnumber + $secondnumber;
	echo "<br/><center>The total is : $total</center>";
}else{
	echo "<br/><center>";
	echo "Please enter something to calculate</center>";
}
?>

