<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.1', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$font of function imagefontheight expects GdFont\\|int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$font of function imagefontwidth expects GdFont\\|int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$font of function imagestring expects GdFont\\|int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$version of class DOMDocument constructor expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Feed/Atom.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$version of class DOMDocument constructor expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Element.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$version of class DOMDocument constructor expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Rss.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
