#!/usr/bin/php

<?php

	if ($argc > 1)
	{
		$i = 0;
		while ($argv[++$i])
			$final .= "$argv[$i] ";
		$array = array_filter(explode(" ", $final));
		sort($array);
		$y = 0;
		while ($array[$y])
		{
			print_r("$array[$y]\n");
			$y++;
		}
	}
?>
