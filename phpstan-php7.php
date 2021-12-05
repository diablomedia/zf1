<?php

declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '<')) {
    return array(
        'parameters' => array(
            'ignoreErrors' => array(
                array(
                    'message' => '#Class GdImage not found\.#',
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Instanceof between resource and GdImage will always evaluate to false\.#',
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => "#^Cannot access offset string on array\|false\.$#",
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php'
                ),
                array(
			        'message' => '#^Parameter \#2 \$passphrase of function openssl_pkey_get_private expects string, string\|null given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
                ),
                array(
                    'message' => '#^Property Zend_Barcode_Renderer_Image\:\:\$_resource \(resource\) does not accept resource\|false\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$link of function mysqli_num_fields expects mysqli_result, resource given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Parse/Resource/MysqliResult.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$str of function ucwords expects string, string\|null given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Amf/Parse/TypeLoader.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{string, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/EntryAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, mixed} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Entry.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Feed/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{Zend_Pdf_Element\|null, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Object.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Reference.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{Zend_Search_Lucene_Interface\|null, \'find\'} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Proxy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{Zend_Service_Ebay_Finding, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Ebay/Finding/Response/Items.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{object, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Decorator.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{\$this\(Zend_Service_Twitter\), non\-empty\-string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{Zend_Oauth_Consumer\|null, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/NoRetry.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/RetryPolicy/RetryN.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, mixed} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{mixed, non\-empty\-string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{string\|Zend_Tool_Project_Context_Interface\|null, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array{Zend_XmlRpc_Server_System, string} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/XmlRpc/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Mobile/Push/Test/ApnsProxy.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int, float given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$length of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Value/TraitsInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\<int, string\>\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Fuzzy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\<int, array\<int, int\|string\>\>\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Preprocessing/Term.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/QueryLexer.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function count expects array\|Countable, array\<SimpleXMLElement\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Feed.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Entry/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Entry/Atom.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/Gapps/ServiceException.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, string\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression/Flate.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, string\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$newvalue of function ini_set expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Cannot access offset int\<0, max\> on array\<int, string\>\|false\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Property Zend_Pdf_StringParser\:\:\$offset \(int\) does not accept int\<0, max\>\|false\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Parser.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedAccessSignature.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKey.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Credentials/SharedKeyLite.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$start of function substr expects int, int\<0, max\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Table.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function base64_decode expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$str of function explode expects string, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/Rackspace.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$str of function fwrite expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function urlencode expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/AuthSub.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtolower expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingSocket.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function str_split expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strrev expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtoupper expects string, int given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Memory/Manager.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function iconv_strlen expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/CidFont.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function iconv_strlen expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Font/Simple.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Memcacheq.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function ltrim expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Docblock.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Analysis/TokenFilter/StopWords.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \$str of function iconv expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Document/Html.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtolower expects string, string\|true\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Argv.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtolower expects string, string\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Env.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function trim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/Prompt.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function rtrim expects string, string\|false\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/StdIn.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function base64_encode expects string, string\|false given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Service/LiveDocx/MailMerge.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtolower expects string, string\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Files.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function base64_encode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function rawurlencode expects string, int\<min, \-1\>\|int\<1, max\> given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/Rackspace/Servers.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function base64_encode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function strtolower expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$str of function explode expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function addslashes expects string, string\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntityQuery.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function rtrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Console.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function ltrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Context/Zf/TestLibraryFile.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$str of function ltrim expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Provider/Project.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func expects callable\(\)\: mixed, non\-empty\-string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func expects callable\(\)\: mixed, array{\$this\(Zend_Gdata_App_Base\), non\-empty\-string} given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Base.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func expects callable\(\)\: mixed, array{\$this\(Zend_Gdata_App_BaseMediaSource\), non\-empty\-string} given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/BaseMediaSource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func expects callable\(\)\: mixed, array{\$this\(Zend_Gdata_Query\), non\-empty\-string} given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/Query.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func expects callable\(\)\: mixed, array{\(int\|string\), \'observe\'} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/XmlRpc/Server/Fault.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$input of function str_repeat expects string, int\|string given\.$#',
			        'count' => 3,
			        'path' => __DIR__ . '/library/Zend/CodeGenerator/Php/Property/DefaultValue.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$data of function utf8_decode expects string, string\|false given\.$#',
			        'count' => 5,
			        'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Management/Client.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$data of function unpack expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Png.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$data of function unpack expects string, string\|false given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Pdf/Resource/Image/Tiff.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$arr1 of function array_merge expects array, array\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$arr1 of function array_merge expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \.\.\.\$args of function array_merge expects array, SimpleXMLElement given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \.\.\.\$args of function array_merge expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
                ),
                array(
                    'message' => '#^Parameter \#3 \.\.\.\$args of function array_merge expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$search of function array_key_exists expects array, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$search of function array_key_exists expects array, array\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command/ParameterSource/ConfigFile.php',
                ),
                array(
			        'message' => '#^Parameter \#1 \$micro_seconds of function usleep expects int, float given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Service/Delicious.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$object of function method_exists expects object\|string, Zend_Oauth_Consumer\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$object of function method_exists expects object\|string, Zend_Tool_Framework_Provider_Interface\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Provider/Signature.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$object of function method_exists expects object\|string, string\|Zend_Tool_Project_Context_Interface\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fclose expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fwrite expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fwrite expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/LoggingHttpClientAdapterSocket.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fclose expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fread expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/MediaFileSource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fwrite expects resource, resource\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Gdata/HttpAdapterStreamingProxy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function feof expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fread expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fwrite expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function feof expects resource, resource\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fflush expects resource, resource\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function flock expects resource, resource\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fread expects resource, resource\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fseek expects resource, resource\|null given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function ftell expects resource, resource\|null given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$fp of function fwrite expects resource, resource\|null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
			        'message' => '#^Parameter \#2 \$needle of function strpos expects int\|string, string\|false given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$im of function imagecolorallocate expects resource, resource\|false given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$im of function imagefilledrectangle expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#4 \$col of function imagefilledpolygon expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#4 \$col of function imagepolygon expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#6 \$col of function imagefilledrectangle expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#6 \$col of function imagettftext expects int, int\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$socket of function stream_set_blocking expects resource, resource\|false given\.$#',
                    'count' => 5,
                    'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$source of function stream_get_contents expects resource, resource\|false given\.$#',
                    'count' => 4,
                    'path' => __DIR__ . '/library/Zend/Cloud/Infrastructure/Adapter/AbstractAdapter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$arr1 of function array_diff expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/FileSystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$file of function file_put_contents expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Cloud/StorageService/Adapter/WindowsAzure.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$time of function strtotime expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$argument of class ReflectionClass constructor expects class\-string\<T of object\>\|T of object, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$argument of class ReflectionClass constructor expects class\-string\<T of object\>\|T of object, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/Gapps.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$argument of class ReflectionClass constructor expects class\-string\<T of object\>\|T of object, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/TableEntity.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$argument of class ReflectionClass constructor expects class\-string\<T of object\>\|T of object, string given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Config.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$get_as_float of function microtime expects bool, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/MediaMimeStream.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$var of function sizeof expects array\|Countable, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$hexadecimal_number of function hexdec expects string, float\|int\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$left_operand of function bcadd expects string, int\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$left_operand of function bcmul expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$left_operand of function bcsub expects string, int\|string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$base of function bcpow expects string, int given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$prefix of function http_build_query expects string, null given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/System/Provider/Manifest.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$array_arg of function ksort expects array, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/ElementFactory.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$array_arg of function current expects array\|object, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$array_arg of function next expects array\|object, array\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/Storage/Blob/Stream.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$number of function base_convert expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$number of function base_convert expects string, int given\.$#',
                    'count' => 3,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$number of function base_convert expects string, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/Writer.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$mode of function chmod expects int, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$mode of function mkdir expects int, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/PackageScaffolder/PackageScaffolderAbstract.php',
                ),
                array(
                    'message' => '#^Property Zend_Gdata_HttpClient\:\:\$_authSubPrivateKeyId \(resource\|null\) does not accept resource\|false\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/HttpClient.php',
                ),
                array(
                    'message' => '#^Cannot access offset int on array\<int, string\>\|false\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$mode of function stream_set_blocking expects bool, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$mode of function stream_set_blocking expects bool, int given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
                ),
                array(
                    'message' => '#^Parameter \#4 \$timeout of function stream_socket_client expects float, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Mobile/Push/Apns.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$x of function fmod expects float, float\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Canvas/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$ascii of function chr expects int, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Name.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$ascii of function chr expects int, float given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$ascii of function chr expects int, float\|int\<min, 127\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Serializer/Adapter/PythonPickle.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$num of function array_fill expects int, float given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Pdf/Filter/Compression.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$read_streams of function stream_select expects array\<resource\>, array\<int, resource\|false\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Stomp/Client/Connection.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$filter of method ReflectionClass\<object\>\:\:getMethods\(\) expects int, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$input of function array_splice expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Class.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$input of function array_splice expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$input of function array_splice is passed by reference, so it expects variables only\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Function.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$input of function array_splice expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$input of function array_slice expects array, array\<int, string\>\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Reflection/Method.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$multiplier of function str_repeat expects int, float given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Index/SegmentInfo.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$dir_handle of function closedir expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$dir_handle of function readdir expects resource, resource\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/Directory/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$what of function class_implements expects object\|string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Serializer.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$exception_handler of function set_exception_handler expects \(callable\(Throwable\)\: void\)\|null, array{\'Zend_Service…\', \'phpstdex\'} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$parameters of function call_user_func_array expects array\<int, mixed\>, array\<int\|string, mixed\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$baseDirectory of method Phar\:\:buildFromIterator\(\) expects string, string\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/WindowsAzure/CommandLine/Package.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$node of method DOMDocument\:\:importNode\(\) expects DOMNode, DOMElement\|false given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/FileParser/Xml.php',
                ),
                array(
                    'message' => '#Function imagefilledpolygon invoked with 3 parameters, 4 required\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#3 \$num_points of function imagefilledpolygon expects int, int\|false given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Function imagepolygon invoked with 3 parameters, 4 required\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
                    'message' => '#Parameter \#3 \$num_points of function imagepolygon expects int, int\|false given\.#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Barcode/Renderer/Image.php',
                ),
                array(
			        'message' => '#^Parameter \#3 \$length of function fwrite expects int<0, max>, int given\.$#',
			        'count' => 1,
			        'path' => __DIR__ . '/library/Zend/Search/Lucene/Storage/File/Filesystem.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\{object, mixed\} given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
                ),
            )
        )
    );
} else {
    return array();
}
