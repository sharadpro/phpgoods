<?php
$first=$_POST['first'];
//echo $first;
$second=$_POST['second'];
//echo $second;
$op=$_POST['a'];
//echo $op;

if($op=='add')
{
	$sum=$first+$second;
	echo $sum;
	
}
if($op=='sub')
{
	$sum=$first-$second;
	echo $sum;
	
}

if($op=='mul')
{
	$sum=$first*$second;
	echo $sum;
	
}
if($op=='div')
{
	$sum=$first/$second;
	echo $sum;
	
}

?>