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
 * @package    Zend_Loader
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

require_once 'Zend/Loader/AutoloaderFactory.php';

/**
 * @package    Zend_Loader
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Loader
 */
class Zend_Loader_AutoloaderFactoryClassMapLoaderTest extends PHPUnit\Framework\TestCase
{

    /**
     * @var array
     */
    protected $_loaders;

    /**
     * @var string
     */
    protected $_includePath;

    public function setUp()
    {
        // Store original autoloaders
        $this->_loaders = spl_autoload_functions();
        if (!is_array($this->_loaders)) {
            // spl_autoload_functions does not return empty array when no
            // autoloaders registered...
            $this->_loaders = array();
        }

        // Clear out other autoloaders to ensure those being tested are at the
        // top of the stack
        foreach ($this->_loaders as $loader) {
            spl_autoload_unregister($loader);
        }

        // Store original include_path
        $this->_includePath = get_include_path();
    }

    public function tearDown()
    {
        Zend_Loader_AutoloaderFactory::unregisterAutoloaders();
        // Restore original autoloaders
        $loaders = spl_autoload_functions();
        if (is_array($loaders)) {
            foreach ($loaders as $loader) {
                spl_autoload_unregister($loader);
            }
        }

        foreach ($this->_loaders as $loader) {
            spl_autoload_register($loader);
        }

        // Restore original include_path
        set_include_path($this->_includePath);
    }

    public function testAutoincluding()
    {
        Zend_Loader_AutoloaderFactory::factory(
            array(
                'Zend_Loader_ClassMapAutoloader' => array(
                    dirname(__FILE__) . '/_files/goodmap.php',
                ),
            )
        );
        $loader = Zend_Loader_AutoloaderFactory::getRegisteredAutoloader(
            'Zend_Loader_ClassMapAutoloader'
        );
        $map = $loader->getAutoloadMap();
        $this->assertInternalType('array', $map);
        $this->assertEquals(2, count($map));
    }
}
