<? 
$string = "asdsb"; 
for ($i=strlen($string); $i >= 0; $i--) 
{ 
$str .= $string[$i]; 
} 

if($str == $string) 
echo "True"; 
else 
echo "False"; 
?>