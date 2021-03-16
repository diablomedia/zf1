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
 * @see Zend_Cloud_QueueService_Factory
 */
require_once 'Zend/Cloud/QueueService/Factory.php';

require_once 'Zend/Cloud/QueueService/Adapter/ZendQueue.php';

/**
 * Test class for Zend_Cloud_QueueService_Factory
 *
 * @category   Zend
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Cloud
 */
class Zend_Cloud_QueueService_FactoryTest extends PHPUnit\Framework\TestCase
{
    public function testGetQueueAdapterKey()
    {
        $this->assertIsString(Zend_Cloud_QueueService_Factory::QUEUE_ADAPTER_KEY);
    }

    public function testGetAdapterWithConfig()
    {
        // SQS adapter
        $sqsConfig = new Zend_Config_Ini(realpath(dirname(__FILE__) . '/_files/config/sqs.ini'));
        $sqsAdapter = Zend_Cloud_QueueService_Factory::getAdapter($sqsConfig);
        $this->assertEquals('Zend_Cloud_QueueService_Adapter_Sqs', get_class($sqsAdapter));

        // zend queue adapter
        $zqConfig = new Zend_Config_Ini(realpath(dirname(__FILE__) . '/_files/config/zendqueue.ini'));
        $zq = Zend_Cloud_QueueService_Factory::getAdapter($zqConfig);
        $this->assertEquals('Zend_Cloud_QueueService_Adapter_ZendQueue', get_class($zq));

        // Azure adapter
        $azureConfig = new Zend_Config_Ini(realpath(dirname(__FILE__) . '/_files/config/windowsazure.ini'));
        $azureAdapter = Zend_Cloud_QueueService_Factory::getAdapter($azureConfig);
        $this->assertEquals('Zend_Cloud_QueueService_Adapter_WindowsAzure', get_class($azureAdapter));
    }

    public function testGetAdapterWithArray()
    {
        // No need to overdo it; we'll test the array config with just one adapter.
        $zqConfig = array(Zend_Cloud_QueueService_Factory::QUEUE_ADAPTER_KEY =>
        					     'Zend_Cloud_QueueService_Adapter_ZendQueue',
                            Zend_Cloud_QueueService_Adapter_ZendQueue::ADAPTER => "Array");

        $zq = Zend_Cloud_QueueService_Factory::getAdapter($zqConfig);

        $this->assertEquals('Zend_Cloud_QueueService_Adapter_ZendQueue', get_class($zq));
    }
}
