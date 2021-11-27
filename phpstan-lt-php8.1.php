<?php

declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.1', '<')) {
    return array(
        'parameters' => array(
            'ignoreErrors' => array(
				array(
					'message' => '#^Access to an undefined property SoapHeader\:\:\$name\.$#',
					'count' => 1,
					'path' => __DIR__ . '/library/Zend/Service/StrikeIron/Base.php',
				),
            )
        )
    );
} else {
    return array();
}
