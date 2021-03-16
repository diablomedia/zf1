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
            )
        )
    );
} else {
    return array();
}
