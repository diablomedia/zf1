<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.5', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type string\\|null\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Barcode/Object/Code128.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type string\\|null\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type string\\|null\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Font.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type int\\|string\\|null\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Phrase.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
