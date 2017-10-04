#!/usr/bin/php

<?php

	$key = 1;
	while ($key != $argc)
	{
		print_r("$argv[$key]\n");
		$key++;
	}
?>