#!/usr/bin/php
<?php

	$array = array_filter(explode(" ", $argv[1]));
	$tmp = current($array);
	array_shift($array);
	end($array);
	$array[key($array) + 1] = $tmp;
	foreach ($array as $tmp)
		$new .= "$tmp ";
	$new = trim($new);
	print_r($new);
?>