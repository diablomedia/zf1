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
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @see Zend_Cloud_DocumentService_Factory
 */
require_once 'Zend/Cloud/DocumentService/Factory.php';

/**
 * Test class for Zend_Cloud_DocumentService_Factory
 *
 * @category   Zend
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Cloud
 */
class Zend_Cloud_DocumentService_FactoryTest extends PHPUnit\Framework\TestCase
{
    public function testGetDocumentAdapterKey()
    {
        $this->assertIsString(Zend_Cloud_DocumentService_Factory::DOCUMENT_ADAPTER_KEY);
    }

    public function testGetAdapterWithConfig() {
        // SimpleDB adapter
        $simpleDbAdapter = Zend_Cloud_DocumentService_Factory::getAdapter(
                                    new Zend_Config(Zend_Cloud_DocumentService_Adapter_SimpleDbTest::getConfigArray())
                                );

        $this->assertEquals('Zend_Cloud_DocumentService_Adapter_SimpleDb', get_class($simpleDbAdapter));
        // Azure adapter
        $azureAdapter = Zend_Cloud_DocumentService_Factory::getAdapter(
                                    new Zend_Config(Zend_Cloud_DocumentService_Adapter_WindowsAzureTest::getConfigArray())
                                );

        $this->assertEquals('Zend_Cloud_DocumentService_Adapter_WindowsAzure', get_class($azureAdapter));
    }
}
