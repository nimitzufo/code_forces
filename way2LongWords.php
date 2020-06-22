<?php
fscanf(STDIN, '%d', $n);
while(fscanf(STDIN, '%s', $s)) {
	$l = strlen($s);
	if ($l > 10) {
		echo substr($s, 0, 1),($l-2),substr($s,-1),PHP_EOL;
	} else { echo $s,PHP_EOL;}
}
?>
