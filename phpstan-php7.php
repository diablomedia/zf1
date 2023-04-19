<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '>=')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$link of function mysqli_num_fields expects mysqli_result, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Parse/Resource/MysqliResult.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ucwords expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Parse/TypeLoader.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{string, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function base64_decode expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$needle of function strpos expects int\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Value/TraitsInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Class GdImage not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Function imagefilledpolygon invoked with 3 parameters, 4 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Function imagepolygon invoked with 3 parameters, 4 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between resource and GdImage will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$im of function imagecolorallocate expects resource, resource\\|false given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$im of function imagefilledrectangle expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$num_points of function imagefilledpolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$num_points of function imagepolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$col of function imagefilledpolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$col of function imagepolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$col of function imagefilledrectangle expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$col of function imagettftext expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Barcode_Renderer_Image\\:\\:\\$_resource \\(resource\\) does not accept resource\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$socket of function stream_set_blocking expects resource, resource\\|false given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$source of function stream_get_contents expects resource, resource\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$str of function explode expects string, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/Rackspace.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_diff expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/FileSystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$file of function file_put_contents expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$str of function fwrite expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function str_repeat expects string, int\\|string given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/CodeGenerator/Php/Property/DefaultValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Feed.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Entry/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Entry/Atom.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on array\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Feed/Reader.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Reader/EntryAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Writer/Entry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Writer/Feed/FeedAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$argument of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/LoggingHttpClientAdapterSocket.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function urlencode expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/AuthSub.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$argument of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Gapps.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Gapps/ServiceException.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fwrite expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingSocket.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$passphrase of function openssl_pkey_get_private expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Gdata_HttpClient\\:\\:\\$_authSubPrivateKeyId \\(resource\\|null\\) does not accept resource\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$get_as_float of function microtime expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/MediaMimeStream.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int\\<0, max\\> on array\\<int, string\\>\\|false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$hexadecimal_number of function hexdec expects string, float\\|int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function str_split expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strrev expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtoupper expects string, int given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function sizeof expects array\\|Countable, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Memory/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function stream_set_blocking expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$timeout of function stream_socket_client expects float, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Test/ApnsProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_merge expects array, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$search of function array_key_exists expects array, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$x of function fmod expects float, float\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Canvas/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$ascii of function chr expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Name.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Pdf_Element\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Object.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Reference.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array_arg of function ksort expects array, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$ascii of function chr expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$num of function array_fill expects int, float given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, string\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression/Flate.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Pdf_StringParser\\:\\:\\$offset \\(int\\) does not accept int\\<0, max\\>\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function iconv_strlen expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/CidFont.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function iconv_strlen expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/Simple.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$data of function unpack expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Png.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$data of function unpack expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Tiff.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Adapter/Memcacheq.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function feof expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function stream_set_blocking expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filter of method ReflectionClass\\<object\\>\\:\\:getMethods\\(\\) expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ltrim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Docblock.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_splice is passed by reference, so it expects variables only\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_slice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Analysis/TokenFilter/StopWords.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$str of function iconv expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Document/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$number of function base_convert expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$multiplier of function str_repeat expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$number of function base_convert expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Search_Lucene_Interface\\|null, \'find\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Proxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<int, string\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Fuzzy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/QueryLexer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$dir_handle of function closedir expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$dir_handle of function readdir expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, string\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function feof expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fflush expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function flock expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fread expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fseek expects resource, resource\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function ftell expects resource, resource\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fp of function fwrite expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newvalue of function ini_set expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function fwrite expects int\\<0, max\\>, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$what of function class_implements expects object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$ascii of function chr expects int, float\\|int\\<min, 127\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$base of function bcpow expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$left_operand of function bcadd expects string, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$exception_handler of function set_exception_handler expects \\(callable\\(Throwable\\)\\: void\\)\\|null, array\\{\'Zend_Service…\', \'phpstdex\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{object, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$parameters of function call_user_func_array expects array\\<int, mixed\\>, array\\<int\\|string, mixed\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, string\\|true\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Argv.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$search of function array_key_exists expects array, array\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/ConfigFile.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Env.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Prompt.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function rtrim expects string, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/StdIn.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$micro_seconds of function usleep expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Delicious.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Service/LiveDocx/MailMerge.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Files.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function rawurlencode expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{object, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Decorator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Oauth_Consumer\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function method_exists expects object\\|string, Zend_Oauth_Consumer\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$baseDirectory of method Phar\\:\\:buildFromIterator\\(\\) expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, SimpleXMLElement given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$args of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function chmod expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function mkdir expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedAccessSignature.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKeyLite.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of function utf8_decode expects string, string\\|false given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/NoRetry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/RetryN.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array_arg of function current expects array\\|object, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array_arg of function next expects array\\|object, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$argument of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$str of function explode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function addslashes expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntityQuery.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function rtrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Console.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function method_exists expects object\\|string, Zend_Tool_Framework_Provider_Interface\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Provider/Signature.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$argument of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Config.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$prefix of function http_build_query expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Manifest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ltrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Zf/TestLibraryFile.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$node of method DOMDocument\\:\\:importNode\\(\\) expects DOMNode, DOMElement\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/FileParser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{string\\|Zend_Tool_Project_Context_Interface\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function method_exists expects object\\|string, string\\|Zend_Tool_Project_Context_Interface\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ltrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_XmlRpc_Server_System, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/XmlRpc/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\(int\\|string\\), \'observe\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/XmlRpc/Server/Fault.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/DbAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between int\\|string\\|false and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Repository.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between int\\|string\\|false and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Config.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, non\\-falsy\\-string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<int, \\(SimpleXMLElement\\|null\\)\\>\\|SimpleXMLElement\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Queue.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<int, \\(SimpleXMLElement\\|null\\)\\>\\|SimpleXMLElement\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/SqlAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<SimpleXMLElement\\>\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<int, array\\<int, int\\<0, max\\>\\|string\\>\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Term.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Service_Twitter\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function set_error_handler expects \\(callable\\(int, string, string, int, array\\)\\: bool\\)\\|null, array\\{\\$this\\(Zend_Service_Audioscrobbler\\), \'_errorHandler\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Audioscrobbler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$left_operand of function bcmul expects string, int\\<0, 255\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$number of function base_convert expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$number of function base_convert expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$body of method Zend_Queue_Stomp_Frame\\:\\:setBody\\(\\) expects string\\|null, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Frame.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$read_streams of function stream_select expects TRead of array\\<resource\\>\\|null, array\\<int, resource\\|false\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int\\<0, max\\> on array\\<int, int\\<0, 255\\>\\>\\|false\\.$#',
	'count' => 12,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$ascii of function chr expects int, float\\|int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/String.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_Query\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_App_BaseMediaSource\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App/BaseMediaSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_App_Base\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, non\\-falsy\\-string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$time of function strtotime expects string, int\\<min, \\-1\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$majorProtocolVersion of static method Zend_Gdata_App\\:\\:importString\\(\\) expects int\\|null, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$minorProtocolVersion of static method Zend_Gdata_App\\:\\:importString\\(\\) expects int\\|null, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$str of function explode expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Analytics/Extension/Property.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Console/Getopt.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$im of function imagesx expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$supportWidth of method Zend_Barcode_Renderer_RendererAbstract\\:\\:_adjustPosition\\(\\) expects float, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$supportHeight of method Zend_Barcode_Renderer_RendererAbstract\\:\\:_adjustPosition\\(\\) expects float, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$im of function imagesy expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
