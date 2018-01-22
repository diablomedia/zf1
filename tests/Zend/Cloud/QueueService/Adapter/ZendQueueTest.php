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
 * @package    Zend_Cloud_Queue
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @see Zend_Cloud_QueueServiceTestCase
 */
require_once 'Zend/Cloud/QueueService/TestCase.php';

/**
 * @see Zend_Cloud_QueueeService_Adapter_ZendQueue
 */
require_once 'Zend/Cloud/QueueService/Adapter/ZendQueue.php';

/**
 * @category   Zend
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Cloud_QueueService_Adapter_ZendQueueTest
    extends Zend_Cloud_QueueService_TestCase
{
    /**
     * Period to wait for propagation in seconds
     * Should be set by adapter
     *
     * @var int
     */
    protected $_waitPeriod = 0;
	protected $_clientType = 'Zend_Queue';

    public function testPeekMessages()
    {
        $this->markTestSkipped('ZendQueue does not currently support peeking messages');
    }

    protected function _getConfig()
    {
        $config = new Zend_Config(array(
            Zend_Cloud_QueueService_Factory::QUEUE_ADAPTER_KEY => 'Zend_Cloud_QueueService_Adapter_ZendQueue',
            Zend_Cloud_QueueService_Adapter_ZendQueue::ADAPTER => 'Array'
        ));

        return $config;
    }

}
