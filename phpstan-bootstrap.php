<?php

// The Zend_Service_WindowsAzure_CommandLine classes try to bootstrap the Zend_Service_Console_Command
// component when the classes are loaded (bottom of file), which phpstan will trigger when it
// autoloads the classes.  This prevents it from bootstrapping (which prevents some exceptions being thrown)
define('MICROSOFT_CONSOLE_COMMAND_HOST', 'nobootstrap');

// Use stubs so we can analyze types from unloaded extensions
if (!extension_loaded('apc')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/apc/apc.php';
}

if (!extension_loaded('gmp')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/gmp/gmp.php';
}

if (!extension_loaded('ibm_db2')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/ibm_db2/ibm_db2.php';
}

if (!extension_loaded('igbinary')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/igbinary/igbinary.php';
}

if (!extension_loaded('intl')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/intl/intl.php';
}

if (!extension_loaded('mcrypt')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/mcrypt/mcrypt.php';
}

if (!extension_loaded('memcache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/memcache/memcache.php';
}

if (!extension_loaded('memcached')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/memcached/memcached.php';
}

if (!extension_loaded('hash')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/hash/hash.php';
}
// The hash extension may emulate the mhash extension if PHP is configured with --with-mhash
// otherwise the mhash* functions/constants won't exist
if (!function_exists('mhash')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/mhash/mhash.php';
}

if (!extension_loaded('mysql')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/mysql/mysql.php';
}

if (!extension_loaded('oci8')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/oci8/oci8.php';
}

if (!extension_loaded('openssl')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/openssl/openssl.php';
} else {
    // Only defined when php/openssl compiled with MD2 support
    if (!defined('OPENSSL_ALGO_MD2')) {
        define('OPENSSL_ALGO_MD2', 4);
    }
}

if (!extension_loaded('rar')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/rar/rar.php';
}

if (!extension_loaded('sqlite')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/SQLite/SQLite.php';
}

if (!extension_loaded('sqlsrv')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/sqlsrv/sqlsrv.php';
}

if (!extension_loaded('ssh2')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/ssh2/ssh2.php';
}

if (!extension_loaded('wincache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/wincache/wincache.php';
}

if (!extension_loaded('tidy')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/tidy/tidy.php';
}

if (!extension_loaded('xcache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/xcache/xcache.php';
}

if (!extension_loaded('jobqueue_client')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/zend/zend.php';
}

if (!extension_loaded('wddx')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/wddx/wddx.php';
}

if (!extension_loaded('zendcache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/ZendCache/ZendCache.php';
}
