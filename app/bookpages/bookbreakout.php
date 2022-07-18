<?php
$book = file_get_contents(__DIR__ . '/cleanedbook-builder.html');
$book = explode('--|--', $book);
$i = 0;
foreach ($book as $section) {
	$book_section = str_pad($i, 3, '0', STR_PAD_LEFT);
	$section = str_replace('<mbp:pagebreak/>', '', $section);
	file_put_contents(__DIR__ . '/bp_' . $book_section . '.htm', $section);
	$i++;
}