<?php
	echo 'hello';
	$a="sample";
	echo 'my $a';
	echo "<br> my $a<br>";
	$a=array(
		"a"=>3,
		"b"=>2,
		"c"=>1
	);
	foreach($a as $k=>$v)
	{
		echo $k ." is ".$v. "<br>"; 
	}
	echo '<pre>';
	print_r($a);
	echo '<br>';
	var_dump($a);
	ksort($a);
	echo '<pre>';
	print_r($a);
	echo '<pre>';
	echo $_SERVER['SCRIPT_NAME'];
?>