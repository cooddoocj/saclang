<?php

$data = json_decode(file_get_contents('data.txt'), true);

foreach ($data as $key => $value) {
	echo "<p><a href='data/01/$key'>$value</a></p>";
}