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
 * @package    Zend_Cloud_StorageService
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @see Zend_Cloud_StorageService_TestCase
 */
require_once 'Zend/Cloud/StorageService/TestCase.php';

/**
 * @see Zend_Cloud_StorageService_Adapter_FileSystem
 */
require_once 'Zend/Cloud/StorageService/Adapter/FileSystem.php';

/**
 * @category   Zend
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Cloud_StorageService_Adapter_FileSystemTest extends Zend_Cloud_StorageService_TestCase
{
    /**
     * Sets up this test case
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        // No need to wait
        $this->_waitPeriod = 0;
        $path = $this->_config->local_directory;

        // If the test directory exists, remove it and replace it
        if (file_exists($path)) {
            $this->_rmRecursive($path);
        }
        mkdir($path, 0755);
    }

    public function testGetClient()
    {
        $this->assertIsString($this->_commonStorage->getClient());
    }

    public function testNoParams()
    {
        $this->markTestSkipped('No config params needed for FileSystem');
    }

    // TODO: Create a custom test for FileSystem that checks fetchMetadata() with file system MD.
    public function testFetchMetadata()
    {
        $this->markTestIncomplete('FileSystem doesn\'t support writable metadata.');
    }

    public function testStoreMetadata()
    {
        $this->markTestSkipped('FileSystem doesn\'t support writable metadata.');
    }

    public function testDeleteMetadata()
    {
        $this->markTestSkipped('FileSystem doesn\'t support writable metadata.');
    }

    /**
     * Tears down this test case
     *
     * @return void
     */
    public function tearDown(): void
    {
        $path = $this->_config->local_directory;

        // If the test directory exists, remove it
        if (file_exists($path)) {
            $this->_rmRecursive($path);
        }

        parent::tearDown();
    }

    protected function _rmRecursive($path)
    {
        // Tidy up the path
        $path = realpath($path);

        if (!file_exists($path)) {
            return true;
        } elseif (!is_dir($path)) {
            return unlink($path);
        } else {
            foreach (scandir($path) as $item) {
                if (!($item == '.' || $item == '..')) {
                    $this->_rmRecursive($item);
                }
            }
            return rmdir($path);
        }
    }

    protected function _getConfig()
    {
        $config = new Zend_Config(array(
            Zend_Cloud_StorageService_Factory::STORAGE_ADAPTER_KEY        => 'Zend_Cloud_StorageService_Adapter_Filesystem',
            Zend_Cloud_StorageService_Adapter_FileSystem::LOCAL_DIRECTORY => dirname(__FILE__) . '/../_files/data/FileSystemTest',
        ));

        return $config;
    }
}
