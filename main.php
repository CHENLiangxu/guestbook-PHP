<?php
echo "hello world"

?>
<?php

// n 在int32范围内的时候

function f($n) {
return $n * ($n & 1) - ($n >> 1);
}

// n 在int32范围之外的时候（用字符串表示）
function bcf($n) {
return bcsub(bcmul($n, bcmod($n, 2)), bcdiv($n, 2));
}
echo f(6);
echo "<br/>";
$items = array(0=>1,"aa"=>2, 3, 4);
 
foreach($items as $key=>$val){
  print ($key."<br />");
  print($key == "aa" ? 5 : $val);
  print ("<br />");
}
?>