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
                )
            )
        )
    );
} else {
    return array();
}
