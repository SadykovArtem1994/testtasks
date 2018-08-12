<?php
header('Content-Type: text/html; charset=utf-8');
$pay1day=400;
$alldayprice=$_POST[days]*$pay1day;
if($_POST[country] == 'It'){
	echo "Италия"
$sum=($alldayprice*0.1)+$alldayprice;
}
if($_POST[country] == 'Turk')
{echo "Турция"
	$sum=$alldayprice;
}
if($_POST[country] == 'Spain')
{echo "Испания"
	$sum=($alldayprice*0.15)+$alldayprice;
}
if(isset($_POST['discount']) &&$_POST['discount'] == 'Yes')
{$sum=$sum-($sum*0.05);}
echo"Стоимость путевки = $sum";
?>
