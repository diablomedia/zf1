<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '<')) {
	return [];
}

if (version_compare(PHP_VERSION, '8.1', '>=')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Feed.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Entry/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Entry/Atom.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Feed/Reader.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Gapps/ServiceException.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, string\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression/Flate.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, string\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of function ini_set expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
