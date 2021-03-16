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
 * @see Zend_Cloud_Infrastructure_Factory
 */
require_once 'Zend/Cloud/Infrastructure/Factory.php';

/**
 * @see Zend_Cloud_Infrastructure_Adapter_Ec2
 */
require_once 'Zend/Cloud/Infrastructure/Adapter/Ec2.php';

/**
 * Test class for Zend_Cloud_Infrastructure_Factory
 *
 * @category   Zend
 * @package    Zend_Cloud
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Cloud
 */
class Zend_Cloud_Infrastructure_FactoryTest extends PHPUnit\Framework\TestCase
{
    public function testGetInfrastructureAdapterKey()
    {
        $this->assertIsString(Zend_Cloud_Infrastructure_Factory::INFRASTRUCTURE_ADAPTER_KEY);
    }

    public function testGetAdapterWithConfig() {
        // EC2 adapter
        $Ec2Adapter = Zend_Cloud_Infrastructure_Factory::getAdapter(
                                    new Zend_Config(Zend_Cloud_Infrastructure_Adapter_Ec2Test::getConfigArray())
                                );

        $this->assertEquals('Zend_Cloud_Infrastructure_Adapter_Ec2', get_class($Ec2Adapter));

        // Rackspace adapter
        $rackspaceAdapter = Zend_Cloud_Infrastructure_Factory::getAdapter(
                                    new Zend_Config(Zend_Cloud_Infrastructure_Adapter_RackspaceTest::getConfigArray())
                                );

        $this->assertEquals('Zend_Cloud_Infrastructure_Adapter_Rackspace', get_class($rackspaceAdapter));
    }
}
