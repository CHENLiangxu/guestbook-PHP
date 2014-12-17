<?php
$a = array(
	"a"=>1,
	"b"=>2,
);
$b = array(12,5,879,5,687,8,51,3,467,9,941,3,89,79,94,61,31,65);
print_r($a);
print_r( array_count_values($b));

$a1=array(6=>"Cat1",4=>"Dog1",2=>"Horse");
$a2=array(3=>"Horse",4=>"Dog",5=>"Fish");
print_r(array_diff_key($a1,$a2));
$d = 
?>