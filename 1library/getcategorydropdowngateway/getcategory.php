<?php
		require_once("../common/connection.php");
		$SQ="Select ID, CategoryName from category";
$Table=mysqli_query($CN,$SQ);
while($Row=mysqli_fetch_array($Table))
{
	$Res[]=array("Row"=>$Row);
}
echo(json_encode($Res));
?>