<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.3', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Cannot use \\-\\- on int\\<0, max\\>\\|null\\.$#',
	'identifier' => 'postDec.type',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
