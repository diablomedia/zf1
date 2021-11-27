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
            )
        )
    );
} else {
    return array();
}