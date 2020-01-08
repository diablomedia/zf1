<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

if (!isset($_SERVER['TRAVIS_PHP_VERSION'])) {
    list($phpMajor, $phpMinor) = explode('.', PHP_VERSION);
    $_SERVER['TRAVIS_PHP_VERSION'] = $phpMajor . '.' . $phpMinor;
}

$PHPUNIT = __DIR__ . '/../bin/phpunit';

if (!is_executable($PHPUNIT)) {
    echo "PHPUnit is not executable ($PHPUNIT)";
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';

$phpUnitXml = __DIR__ . '/phpunit.xml';
$handle = fopen($phpUnitXml, 'r');

$missingFiles = [];

// Basic check to be sure all files defined in phpunit.xml actually exist
// as PHPUnit will silently ignore missing files.
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        if (strpos($buffer, '<file>')) {
            $file = trim(str_replace(['<file>', '</file>'], ['', ''], $buffer));
            if (!file_exists($file)) {
                $missingFiles[] = $file;
            }
        }
    }
    fclose($handle);
} else {
    echo 'Could not read phpunit.xml file at ' . $phpUnitXml . PHP_EOL;
    exit(1);
}

if (!empty($missingFiles)) {
    echo 'There are files defined in the phpunit.xml file that do not exist: ' . PHP_EOL;
    echo "\t" . implode(PHP_EOL . "\t", $missingFiles) . PHP_EOL;
    exit(1);
}

$configuration = \PHPUnit\Util\Configuration::getInstance($phpUnitXml);
$testSuites = $configuration->getTestSuiteNames();

$result = 0;
$failedSuites = [];

foreach ($testSuites as $testSuite) {
    if ($_SERVER['TRAVIS_PHP_VERSION'] === 'hhvm' && $testSuite === 'ZFTest_Zend_CodeGenerator') {
        echo "Skipping $testSuite on HHVM" . PHP_EOL; //gets stuck on the HHVM
        continue;
    }

    echo "Executing Suite {$testSuite}" . PHP_EOL;
    if (isset($argv[1]) && $argv[1] === '--coverage') {
        system($PHPUNIT . ' --coverage-php=../build/coverage/' . escapeshellarg($testSuite . '.cov') . ' --testsuite=' . escapeshellarg($testSuite), $c_result);
    } else {
        system($PHPUNIT . ' --testsuite=' . escapeshellarg($testSuite), $c_result);
    }
    echo PHP_EOL;

    if ($c_result) {
        echo "Result of $testSuite is $c_result" . PHP_EOL;
        $result = $c_result;
        $failedSuites[] = $testSuite;
    }

    echo "Finished executing {$testSuite} Suite" . PHP_EOL . PHP_EOL;
}

echo PHP_EOL . "All done. Result: $result" . PHP_EOL;

if ($result) {
    echo 'Failed Test Suites: ' . implode(', ', $failedSuites) . PHP_EOL;
}

exit($result);
