<?php

declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '>=')) {
    return array(
        'parameters' => array(
            'ignoreErrors' => array(
                array(
                    'message' => '#Function get_magic_quotes_gpc not found\.#',
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/DbAdapter.php',
                ),
                array(
                    'message' => '#Call to an undefined method ReflectionType::isBuiltin\(\)\.#',
                    'path' => __DIR__ . '/library/Zend/Reflection/Parameter.php',
                ),
                array(
                    'message' => '#Class ZendAPI_Queue does not have a constructor and must be instantiated without any parameters\.#',
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/PlatformJobQueue.php',
                ),
                array(
                    'message' => '#Class ZendAPI_Job does not have a constructor and must be instantiated without any parameters\.#',
                    'path' => __DIR__ . '/library/Zend/Queue/Message/PlatformJob.php',
                ),
                array(
                    'message' => '#Parameter \#3 \$from_encoding of function mb_convert_encoding expects array\|string\|null, string\|false given\.#',
                    'path' => __DIR__ . '/library/Zend/Pdf.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$codepoint of function chr expects int, float\|int given\.#',
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/String.php',
                ),
                array(
                    'message' => '#Instanceof between resource and GdImage will always evaluate to false\.#',
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Property Zend_Barcode_Renderer_Image::\$_resource \(resource\) does not accept GdImage\|false\.#',
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagecolorallocate expects GdImage, resource given\.#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagesx expects GdImage, resource given\.#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagesy expects GdImage, resource given\.#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagefilledrectangle expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagedestroy expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagefilledpolygon expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagepolygon expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagestring expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#1 \$image of function imagettftext expects GdImage, resource given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$result of function mysqli_num_fields expects mysqli_result, resource given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Parse/Resource/MysqliResult.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$string of function ucwords expects string, string\|null given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Amf/Parse/TypeLoader.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(string, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/EntryAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Entry.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Feed/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Pdf_Element\|null, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Object.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Reference.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Search_Lucene_Interface\|null, \'find\'\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Proxy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Service_Ebay_Finding, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Ebay/Finding/Response/Items.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(object, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Decorator.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(\$this\(Zend_Service_Twitter\), non\-empty\-string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Oauth_Consumer\|null, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/NoRetry.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/RetryN.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, non\-empty\-string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(string\|Zend_Tool_Project_Context_Interface\|null, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_XmlRpc_Server_System, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/XmlRpc/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int|null, int\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int|null, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int|null, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Mobile/Push/Test/ApnsProxy.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int|null, float given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int|null, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Value/TraitsInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\<int, string\>\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Fuzzy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\<int, array\<int, int\|string\>\>\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Term.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/QueryLexer.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$value of function count expects array\|Countable, array\<SimpleXMLElement\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Feed.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Entry/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Entry/Atom.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/Gapps/ServiceException.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, string\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression/Flate.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, string\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of function ini_set expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of method Zend_Feed_Pubsubhubbub_HttpResponse\:\:setHeader\(\) expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/HttpResponse.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$key of function array_key_exists expects int\|string, int\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
                ),
                array(
                    'message' => '#^Cannot access offset int on array\<int, string\>\|false\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Property Zend_Pdf_StringParser\:\:\$offset \(int\) does not accept int\|false\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Parser.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of method Zend_Queue_Stomp_FrameInterface\:\:setHeader\(\) expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Activemq.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$distance of method Zend_Search_Lucene_Search_Similarity\:\:sloppyFreq\(\) expects int, float\|int\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Phrase.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedAccessSignature.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKey.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKeyLite.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function base64_decode expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$string of function explode expects string, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/Rackspace.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$stream of function fwrite expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function urlencode expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/AuthSub.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtolower expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingSocket.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function str_split expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strrev expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtoupper expects string, int given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Memory/Manager.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function iconv_strlen expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/CidFont.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function iconv_strlen expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/Simple.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Memcacheq.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function ltrim expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Docblock.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Analysis/TokenFilter/StopWords.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$string of function iconv expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Document/Html.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtolower expects string, string\|true\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Argv.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtolower expects string, string\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Env.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Prompt.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function rtrim expects string, string\|false\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/StdIn.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function base64_encode expects string, string\|false given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Service/LiveDocx/MailMerge.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtolower expects string, string\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Files.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function base64_encode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function rawurlencode expects string, int\<min, \-1\>\|int\<1, max\> given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function base64_encode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function strtolower expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$string of function explode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function addslashes expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntityQuery.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function rtrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Console.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function ltrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Zf/TestLibraryFile.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$string of function ltrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/Project.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func expects callable\(\)\: mixed, non\-empty\-string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func expects callable\(\)\: mixed, array\(\$this\(Zend_Gdata_App_Base\), non\-empty\-string\) given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func expects callable\(\)\: mixed, array\(\$this\(Zend_Gdata_App_BaseMediaSource\), non\-empty\-string\) given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/BaseMediaSource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func expects callable\(\)\: mixed, array\(\$this\(Zend_Gdata_Query\), non\-empty\-string\) given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/Query.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$callback of function call_user_func expects callable\(\)\: mixed, array\(\(int\|string\), \'observe\'\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/XmlRpc/Server/Fault.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$string of function str_repeat expects string, int\|string given\.$#',
			        'count' => 3,
			        'path' => __DIR__ . '/library/Zend/CodeGenerator/Php/Property/DefaultValue.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$string of function utf8_decode expects string, string\|false given\.$#',
			        'count' => 5,
			        'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$string of function unpack expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Png.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$string of function unpack expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Tiff.php',
                ),
            )
        )
    );
} else {
    return array();
}
