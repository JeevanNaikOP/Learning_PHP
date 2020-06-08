<?php
if(isset($_GET["stud_name"])&&isset($_GET["stud_age"])&&isset($_GET["stud_weight"]))
{
	$name=$_GET["stud_name"];
	$age=$_GET["stud_age"];
	$weight=$_GET["stud_weight"];
if(!empty($name) && !empty($age) && !empty($weight))
{	
echo "Name:".$_GET["stud_name"];
echo "Age".$_GET["stud_age"];
echo "weight:".$_GET["stud_weight"];
}
else
{
	echo "please";
}
}

?>
