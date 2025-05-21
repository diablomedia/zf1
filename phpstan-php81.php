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

if (version_compare(PHP_VERSION, '8.4', '>=')) {
	return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
}

$ignoreErrors[] = [
	'message' => '#^Method Zend_Barcode_Object_ObjectAbstract\\:\\:setStretchText\\(\\) has Zend_Barcode_Object_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Object/ObjectAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Zend_Barcode_Object_ObjectAbstract\\:\\:setWithChecksumInText\\(\\) has Zend_Barcode_Object_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Object/ObjectAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Zend_Memory_AccessController\\:\\:__get\\(\\) has Zend_Memory_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Memory/AccessController.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Zend_Pdf_Element_Dictionary\\:\\:add\\(\\) has Zend_Pdf_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Dictionary.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Zend_Service_LiveDocx_MailMerge\\:\\:setFieldValue\\(\\) has Zend_Service_LiveDocx_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/LiveDocx/MailMerge.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Zend_Tag_ItemList\\:\\:offsetSet\\(\\) has OutOfBoundsException in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tag/ItemList.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
