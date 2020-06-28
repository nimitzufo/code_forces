<?php
while($str = fgets(STDIN)){
	$array[] = explode(' ', trim($str));
} 
if(!isset($array)) {
	$array[] = explode(' ', '2 4');
}
$out = 0;
for($i=1; $i<sizeof($array); $i++) {
	$sum = $array[$i][0] + $array[$i][1] + $array[$i][2];
	if($sum>1) {
		$out++;
	}	
}	
echo $out;
?>
