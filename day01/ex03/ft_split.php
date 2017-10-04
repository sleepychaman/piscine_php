#!/usr/bin/php

<?php
function ft_split($array)
{
	$i = 0;
	$key = array_filter(explode(" ", $array));
	sort($key);
	return $key;
}
?>