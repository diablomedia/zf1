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
 * @package    Zend_Application
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @category   Zend
 * @package    Zend_Application
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Application
 */
class Zend_Application_Resource_DbTest extends PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        // Store original autoloaders
        $this->loaders = spl_autoload_functions();
        if (!is_array($this->loaders)) {
            // spl_autoload_functions does not return empty array when no
            // autoloaders registered...
            $this->loaders = array();
        }

        Zend_Loader_Autoloader::resetInstance();
        $this->autoloader = Zend_Loader_Autoloader::getInstance();

        $this->application = new Zend_Application('testing');

        $this->bootstrap = new ZfAppBootstrap($this->application);
    }

    public function tearDown(): void
    {
        Zend_Db_Table::setDefaultMetadataCache();

        // Restore original autoloaders
        $loaders = spl_autoload_functions();
        foreach ($loaders as $loader) {
            spl_autoload_unregister($loader);
        }

        foreach ($this->loaders as $loader) {
            spl_autoload_register($loader);
        }

        // Reset autoloader instance so it doesn't affect other tests
        Zend_Loader_Autoloader::resetInstance();
    }

    public function testAdapterIsNullByDefault()
    {
        $resource = new Zend_Application_Resource_Db();
        $this->assertNull($resource->getAdapter());
    }

    public function testDbIsNullByDefault()
    {
        $resource = new Zend_Application_Resource_Db();
        $this->assertNull($resource->getDbAdapter());
    }

    public function testParamsAreEmptyByDefault()
    {
        $resource = new Zend_Application_Resource_Db();
        $params = $resource->getParams();
        $this->assertEmpty($params);
    }

    public function testIsDefaultTableAdapter()
    {
        $resource = new Zend_Application_Resource_Db();
        $this->assertTrue($resource->isDefaultTableAdapter());
    }

    public function testPassingDatabaseConfigurationSetsObjectState()
    {
        $config = array(
            'adapter' => 'Pdo_Sqlite',
            'params'  => array(
                'dbname' => ':memory:',
            ),
            'isDefaultTableAdapter' => false,
        );
        $resource = new Zend_Application_Resource_Db($config);
        $this->assertFalse($resource->isDefaultTableAdapter());
        $this->assertEquals($config['adapter'], $resource->getAdapter());
        $this->assertEquals($config['params'], $resource->getParams());
    }

    public function testInitShouldInitializeDbAdapter()
    {
        $config = array(
            'adapter' => 'Pdo_Sqlite',
            'params'  => array(
                'dbname' => ':memory:',
            ),
            'isDefaultTableAdapter' => false,
        );
        $resource = new Zend_Application_Resource_Db($config);
        $resource->init();
        $db = $resource->getDbAdapter();
        $this->assertTrue($db instanceof Zend_Db_Adapter_Pdo_Sqlite);
    }

    /**
     * @group ZF-10033
     */
    public function testSetDefaultMetadataCache()
    {
        $cache = Zend_Cache::factory('Core', 'Black Hole', array(
            'lifetime' => 120,
            'automatic_serialization' => true
        ));

        $config = array(
            'adapter' => 'PDO_SQLite',
            'params'  => array(
                'dbname' => ':memory:',
            ),
            'defaultMetadataCache' => $cache,
        );
        $resource = new Zend_Application_Resource_Db($config);
        $resource->init();
        $this->assertTrue(Zend_Db_Table::getDefaultMetadataCache() instanceof Zend_Cache_Core);
    }

    /**
     * @group ZF-10033
     */
    public function testSetDefaultMetadataCacheFromCacheManager()
    {
        $configCache = array(
            'database' => array(
                'frontend' => array(
                    'name' => 'Core',
                    'options' => array(
                        'lifetime' => 120,
                        'automatic_serialization' => true
                    )
                ),
                'backend' => array(
                    'name' => 'Black Hole'
                )
            )
        );
        $this->bootstrap->registerPluginResource('cachemanager', $configCache);

        $config = array(
            'bootstrap' => $this->bootstrap,
            'adapter' => 'PDO_SQLite',
            'params'  => array(
                'dbname' => ':memory:',
            ),
            'defaultMetadataCache' => 'database',
        );
        $resource = new Zend_Application_Resource_Db($config);
        $resource->init();
        $this->assertTrue(Zend_Db_Table::getDefaultMetadataCache() instanceof Zend_Cache_Core);
    }

    /**
     * @group ZF-6620
     */
    public function testSetOptionFetchMode()
    {
        $config = array(
            'bootstrap' => $this->bootstrap,
            'adapter' => 'PDO_SQLite',
            'params'  => array(
                'dbname'    => ':memory:',
                'options'   => array(
                    'fetchMode' => 'obj'
                )
            ),
        );
        $resource = new Zend_Application_Resource_Db($config);
        $db = $resource->init();
        $this->assertEquals($db->getFetchMode(), Zend_Db::FETCH_OBJ);
    }

    /**
     * @group ZF-10543
     */
    public function testSetDefaultMetadataCacheThroughBootstrap()
    {
        $options = array(
            'resources' => array(
                'db'    => array(
                    'adapter'  => 'Pdo_Sqlite',
                    'params'   => array(
                        'dbname'   => ':memory:'
                     ),
                     'defaultMetadataCache' => 'default'
                ),
                'cachemanager' => array(
                    'default'  => array(
                        'backend' => array('name' => 'black-hole')
                    )
                )
            )
        );

        $this->bootstrap->setOptions($options);
        $this->bootstrap->bootstrap();
        $resource = $this->bootstrap->getResource('cachemanager');
        $this->assertEquals($resource->getCache('default'), Zend_Db_Table::getDefaultMetadataCache());
    }
}
