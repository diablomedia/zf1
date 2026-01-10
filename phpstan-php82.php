<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.2', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\*" between non\\-empty\\-string and 0\\.5 results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Object/Postnet.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "%%" between non\\-empty\\-string and 2 results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Object/Royalmail.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
