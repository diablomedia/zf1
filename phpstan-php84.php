<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.4', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Service_WindowsAzure_Storage_Batch\\:\\:\\$_operations because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Batch.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Service_WindowsAzure_Storage_Blob_Stream\\:\\:\\$_storageClient because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_actionRepository because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_client because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_loader because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_providerRepository because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_request because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset property Zend_Tool_Framework_Registry\\:\\:\\$_response because it might have hooks in a subclass\\.$#',
	'identifier' => 'unset.possiblyHookedProperty',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Registry.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
