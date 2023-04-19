<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.1', '>=')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property SoapHeader\\:\\:\\$name\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$font of function imagefontheight expects int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$font of function imagefontwidth expects int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$font of function imagestring expects int, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
