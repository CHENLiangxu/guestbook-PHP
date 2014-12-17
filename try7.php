<?php
 session_start();
if (isset($_SESSION['id'])) {
	$_SESSION['id'] = $_SESSION['id'] + 1;
} else {
	$_SESSION['id'] = 0;
}
{?>
<form action="../try" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Get Your EEEE code!">
</form>
<?php
  }    
  if (!empty($_GET['act'])) {
    function GetRandStr($len) 
{ 
    $chars = array( 
      "A", "B", "C", "D", "E", "F", "G",  
        "H",  "J", "K", "L", "M", "N", "P", "Q", "R",  
        "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",  
        "3", "4", "5", "6", "7", "8", "9" 
    ); 
    $charsLen = count($chars) - 1; 
    shuffle($chars);   
    $output = ""; 
    for ($i=0; $i<$len; $i++) 
    { 
        $output .=$chars[mt_rand(0, $charsLen)]; 
    }  
    return $output;  
} 

function GetRandStr1($len) 
{ 
    $chars = array( 
      "A", "B", "C", "D", "E", "F", "G",  
        "H",  "J", "K", "L", "M", "N", "P", "Q", "R",  
        "T", "U", "V", "W", "X", "Y", "Z"
    ); 
    $charsLen = count($chars) - 1; 
    shuffle($chars);   
    $output = ""; 
    for ($i=0; $i<$len; $i++) 
    { 
        $output .=$chars[mt_rand(0, $charsLen)]; 
    }  
    return $output;  
} 
 
 $code = GetRandStr1(1);
 $code .= GetRandStr(3);
echo $code;//Your code here
$id=$_SESSION["id"].$code;
 $_SESSION[$id]=$code;

  } else {
?>
<form action=" " method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="              ">
</form>
<?php
  }

 {?>

<form action="../try" method="get">
<input type="hidden" name="act1" value="run1">
 <input type="submit" value="Use this code ">
</form>
<?php
  }
print_r($_SESSION);
if (!empty($_GET['act1'])) 
{
	$eeeejson = array(
	              "Id" => "    ",

	              "Description"=>"   ",

	              "Modele"=>"   " ,

	              "Code"=> $_SESSION['code'],
	);
echo json_encode($eeeejson);


}
else {
?>
<form action=" " method="get">
<input type="submit" value="            ">
</form>

<?php
  } 
?>






















