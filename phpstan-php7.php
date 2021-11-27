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
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(string, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, string given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Amf/Server.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/EntryAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Reader/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Entry.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Writer/Feed/FeedAbstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Pdf_Element\|null, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Object.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Element/Reference.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Search_Lucene_Interface\|null, \'find\'\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Proxy.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Console/Command.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Service_Ebay_Finding, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Ebay/Finding/Response/Items.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(object, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Decorator.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(\$this\(Zend_Service_Twitter\), non\-empty\-string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Service/Twitter.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_Oauth_Consumer\|null, string\) given\.$#',
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
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, mixed\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(mixed, non\-empty\-string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Framework/Client/Abstract.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(string\|Zend_Tool_Project_Context_Interface\|null, string\) given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Tool/Project/Profile/Resource.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$function of function call_user_func_array expects callable\(\)\: mixed, array\(Zend_XmlRpc_Server_System, string\) given\.$#',
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
                    'message' => '#^Parameter \#2 \$value of method Zend_Feed_Pubsubhubbub_HttpResponse\:\:setHeader\(\) expects string, int\<0, max\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/HttpResponse.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$prefix of function uniqid expects string, int\<0, max\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Feed/Pubsubhubbub/Subscriber.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$key of function array_key_exists expects int\|string, int\<0, max\>\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Gdata/App/Util.php',
                ),
                array(
                    'message' => '#^Cannot access offset int\<0, max\> on array\<int, string\>\|false\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Measure/Number.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$prefix of function uniqid expects string, int\<0, max\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf.php',
                ),
                array(
                    'message' => '#^Property Zend_Pdf_StringParser\:\:\$offset \(int\) does not accept int\<0, max\>\|false\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Pdf/Parser.php',
                ),
                array(
                    'message' => '#^Parameter \#2 \$value of method Zend_Queue_Stomp_FrameInterface\:\:setHeader\(\) expects string, int\<0, max\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Activemq.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$prefix of function uniqid expects string, int\<0, max\> given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Array.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$prefix of function uniqid expects string, int\<0, max\> given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Db.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$prefix of function uniqid expects string, int\<0, max\> given\.$#',
                    'count' => 2,
                    'path' => __DIR__ . '/library/Zend/Queue/Adapter/Memcacheq.php',
                ),
                array(
                    'message' => '#^Parameter \#1 \$distance of method Zend_Search_Lucene_Search_Similarity\:\:sloppyFreq\(\) expects int, float\|int\<0, max\>\|null given\.$#',
                    'count' => 1,
                    'path' => __DIR__ . '/library/Zend/Search/Lucene/Search/Query/Phrase.php',
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
            )
        )
    );
} else {
    return array();
}
