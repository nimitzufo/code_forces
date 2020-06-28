<?php
$inputs = array();
$_input = true;
$count = 0;

while(($_input = trim(fgets(STDIN)))) {
	$inputs[] = $_input;
	$count++;
	if($count>1) break;
}

$first_exp = explode(' ', $inputs[0]);
$n = $first_exp[0];
$k = $first_exp[1];
unset($first_exp);

$users = explode(' ', $inputs[1]);
unset($inputs);

$rating_k = $users[$k-1];

$_count = 0;
for($i=0; $i<$n; $i++){
	if($users[$i]>0 && $users[$i] >= $rating_k) $_count++;
}

unset($n, $k, $rating_k, $users);

echo $_count;

?>
