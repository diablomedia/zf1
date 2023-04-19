<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '<')) {
	return [];
}

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$result of function mysqli_num_fields expects mysqli_result, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Parse/Resource/MysqliResult.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function ucwords expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Parse/TypeLoader.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{string, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function base64_decode expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$needle of function strpos expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, int\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Amf/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Amf/Value/TraitsInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between resource and GdImage will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, non\\-falsy\\-string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagecolorallocate expects GdImage, GdImage\\|false given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagecolorallocate expects GdImage, resource given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagedestroy expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagefilledpolygon expects GdImage, resource given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagefilledrectangle expects GdImage, GdImage\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagefilledrectangle expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagepolygon expects GdImage, resource given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagestring expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesx expects GdImage, GdImage\\|resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesx expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesy expects GdImage, GdImage\\|resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagesy expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$image of function imagettftext expects GdImage, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$num_points_or_color of function imagefilledpolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$num_points_or_color of function imagepolygon expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$color of function imagefilledpolygon expects int\\|null, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$color of function imagepolygon expects int\\|null, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$color of function imagefilledrectangle expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$color of function imagettftext expects int, int\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Barcode_Renderer_Image\\:\\:\\$_resource \\(resource\\) does not accept GdImage\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function stream_get_contents expects resource, resource\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function stream_set_blocking expects resource, resource\\|false given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/Rackspace.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_diff expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/FileSystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function file_put_contents expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$data of function fwrite expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function str_repeat expects string, int\\|string given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/CodeGenerator/Php/Property/DefaultValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Reader/EntryAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method DOMNode\\:\\:getAttribute\\(\\)\\.$#',
	'count' => 11,
	'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Writer/Entry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Feed/Writer/Feed/FeedAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Analytics/Extension/Property.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrClass of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$majorProtocolVersion of static method Zend_Gdata_App\\:\\:importString\\(\\) expects int\\|null, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$minorProtocolVersion of static method Zend_Gdata_App\\:\\:importString\\(\\) expects int\\|null, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_App_Base\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_App_BaseMediaSource\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/App/BaseMediaSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/LoggingHttpClientAdapterSocket.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$datetime of function strtotime expects string, int\\<min, \\-1\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function urlencode expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/AuthSub.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrClass of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/Gapps.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingSocket.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$private_key of function openssl_sign expects array\\|OpenSSLAsymmetricKey\\|OpenSSLCertificate\\|string, resource given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Gdata_HttpClient\\:\\:\\$_authSubPrivateKeyId \\(resource\\|null\\) does not accept OpenSSLAsymmetricKey\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$as_float of function microtime expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Gdata/MediaMimeStream.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Gdata_Query\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Gdata/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int\\<0, max\\> on array\\<int, string\\>\\|false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$hex_string of function hexdec expects string, float\\|int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function str_split expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strrev expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtoupper expects string, int given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function sizeof expects array\\|Countable, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Measure/Number.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Memory/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$enable of function stream_set_blocking expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$timeout of function stream_socket_client expects float\\|null, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Mobile/Push/Test/ApnsProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$arrays of function array_merge expects array, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function array_key_exists expects array, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$from_encoding of function mb_convert_encoding expects array\\|string\\|null, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num1 of function fmod expects float, float\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Canvas/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$codepoint of function chr expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Name.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Pdf_Element\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Object.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/Reference.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$codepoint of function chr expects int, float\\|int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Element/String.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function ksort expects array, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset float does not exist on array\\{\\}\\|array\\{int\\<0, 255\\>\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset int\\<0, max\\> does not exist on array\\{\\}\\|array\\{int\\<0, 255\\>\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$codepoint of function chr expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$count of function array_fill expects int, float given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Zend_Pdf_StringParser\\:\\:\\$offset \\(int\\) does not accept int\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function iconv_strlen expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/CidFont.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function iconv_strlen expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/Simple.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function unpack expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Png.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function unpack expects string, string\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Tiff.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Adapter/Memcacheq.php',
];
$ignoreErrors[] = [
	'message' => '#^Class ZendAPI_Queue does not have a constructor and must be instantiated without any parameters\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Queue/Adapter/PlatformJobQueue.php',
];
$ignoreErrors[] = [
	'message' => '#^Class ZendAPI_Job does not have a constructor and must be instantiated without any parameters\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Message/PlatformJob.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$read of function stream_select expects TRead of array\\<resource\\>\\|null, array\\<int, resource\\|false\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$enable of function stream_set_blocking expects bool, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filter of method ReflectionClass\\<object\\>\\:\\:getMethods\\(\\) expects int\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function ltrim expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Docblock.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_splice is passed by reference, so it expects variables only\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_slice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_splice expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method ReflectionType\\:\\:isBuiltin\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Reflection/Parameter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function base_convert expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Analysis/TokenFilter/StopWords.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$node of method Zend_Search_Lucene_Document_Html\\:\\:_highlightTextNode\\(\\) expects DOMText, DOMNode given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Document/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$string of function iconv expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Document/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function base_convert expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function base_convert expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$times of function str_repeat expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function base_convert expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Search_Lucene_Interface\\|null, \'find\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Proxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<int, string\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Fuzzy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<int, array\\<int, int\\<0, max\\>\\|string\\>\\>\\|false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Term.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/QueryLexer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$dir_handle of function closedir expects resource\\|null, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$dir_handle of function readdir expects resource\\|null, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fflush expects resource, resource\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function flock expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fseek expects resource, resource\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function ftell expects resource, resource\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fwrite expects resource, resource\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function fwrite expects int\\<0, max\\>\\|null, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object_or_class of function class_implements expects object\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$codepoint of function chr expects int, float\\|int\\<min, 127\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function bcpow expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num1 of function bcadd expects string, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num1 of function bcmul expects string, int\\<0, 255\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function set_error_handler expects \\(callable\\(int, string, string, int\\)\\: bool\\)\\|null, array\\{\\$this\\(Zend_Service_Audioscrobbler\\), \'_errorHandler\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Audioscrobbler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{object, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function set_exception_handler expects \\(callable\\(Throwable\\)\\: void\\)\\|null, array\\{\'Zend_Service…\', \'phpstdex\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, string\\|true\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Argv.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function array_key_exists expects array, array\\|false given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/ConfigFile.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Env.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function trim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Prompt.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function rtrim expects string, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/StdIn.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$microseconds of function usleep expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Delicious.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/library/Zend/Service/LiveDocx/MailMerge.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, string\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Files.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function rawurlencode expects string, int\\<min, \\-1\\>\\|int\\<1, max\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/SqlAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{object, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Decorator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{\\$this\\(Zend_Service_Twitter\\), non\\-falsy\\-string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_Oauth_Consumer\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object_or_class of function method_exists expects object\\|string, Zend_Oauth_Consumer\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$baseDirectory of method Phar\\:\\:buildFromIterator\\(\\) expects string\\|null, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, SimpleXMLElement given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<int, string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$permissions of function chmod expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$permissions of function mkdir expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedAccessSignature.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKeyLite.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function base64_encode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function utf8_decode expects string, string\\|false given\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<SimpleXMLElement\\>\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/NoRetry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/RetryN.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, array\\<string\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<int, \\(SimpleXMLElement\\|null\\)\\>\\|SimpleXMLElement\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function current expects array\\|object, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function next expects array\\|object, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<int, \\(SimpleXMLElement\\|null\\)\\>\\|SimpleXMLElement\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Queue.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrClass of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function addslashes expects string, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntityQuery.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, mixed\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{mixed, non\\-falsy\\-string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function rtrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Console.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object_or_class of function method_exists expects object\\|string, Zend_Tool_Framework_Provider_Interface\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Provider/Signature.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/Provider/Signature.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between int\\|string and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Config.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrClass of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Config.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$numeric_prefix of function http_build_query expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Manifest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+" between int\\|string and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Repository.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function ltrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Zf/TestLibraryFile.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{string\\|Zend_Tool_Project_Context_Interface\\|null, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object_or_class of function method_exists expects object\\|string, string\\|Zend_Tool_Project_Context_Interface\\|null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
];
$ignoreErrors[] = [
	'message' => '#^Function get_magic_quotes_gpc not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/DbAdapter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function ltrim expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Zend_XmlRpc_Server_System, string\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/XmlRpc/Server.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{\\(int\\|string\\), \'observe\'\\} given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/library/Zend/XmlRpc/Server/Fault.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
