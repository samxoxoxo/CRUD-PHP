
	<?php
		require_once("../common/connection.php");

		$SQ="Select * from post  order by id desc";
   
		global $CN;

		$Table=mysqli_query($CN,$SQ);

		
 		$SNo=1;

		while($Row=mysqli_fetch_array($Table))
		{
			$Res[]=array("Row"=>$Row);
			//print_r($Res);
			//print_r($Row);while($Row=mysqli_fetch_array($Table)){
				$ID=$Row['ID'];
			$Title=$Row['Title'];
			$CatName=$Row['CatID'];
			$StatusID=$Row['statusID'];
	$KeyName=$Row['KeywordID'];
	$description=$Row['Description'];
			
			
			$ThumbNail=$Row['Thumbnail'];
	echo("<tr>");
	echo("<td>".$SNo."</td>");
			echo("<td>".$Title."</td>");
	echo("<td>".$CatName."</td>");
	echo("<td>".$KeyName."</td>");
				echo("<td>".$ThumbNail."</td>");
				echo("<td>".$description."</td>");
				
	echo("<td>
	<a href='#' type='button' 
	class='btn btn-success btn-flat'
	onClick='Active($ID)'
	title='Active'
	tooltip='Active'
	data-original-title='Active'>
	<i class='fa fa-check'></i>
	</a>
	<a href='#' type='button' 
	class='btn btn-danger btn-flat'
	onClick='inactive($ID)'
	title='inactive'
	tooltip='inactive'
	data-original-title='inactive'>
	<i class='fa fa-close'></i>
	</a>
	<a href='#' type='button' 
	class='btn btn-info btn-flat'
	onClick='EditRecord($ID)'
	title='editRecord'
	tooltip='editRecord'
	data-original-title='editRecord'>
	<i class='fa fa-pencil'></i>
	</a>
	<a href='#' type='button' 
	class='btn btn-danger btn-flat'
	onClick='DeleteRecord($ID)'
	title='deleteRecord'
	tooltip='deleteRecord'
	data-original-title='deleteRecord'>
	<i class='fa fa-trash-o'></i>
	</a>
	</td>");
			echo("<td>".$StatusID."</td>");
	echo("</tr>");
	$SNo++;
			echo($Row["CategoryName"]);
			
		}

?>
