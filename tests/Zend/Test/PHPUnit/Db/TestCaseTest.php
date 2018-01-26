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
 * @package    Zend_Test
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

require_once "Zend/Test/PHPUnit/DatabaseTestCase.php";
require_once "Zend/Test/PHPUnit/Db/Connection.php";
require_once "Zend/Db/Adapter/Abstract.php";
require_once "Zend/Db/Adapter/Pdo/Sqlite.php";
require_once "Zend/Db/Table.php";
require_once "Zend/Db/Table/Rowset.php";
require_once "Zend/Test/DbAdapter.php";

/**
 * @category   Zend
 * @package    Zend_Test
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Test
 */
class Zend_Test_PHPUnit_Db_TestCaseTest extends Zend_Test_PHPUnit_DatabaseTestCase
{
    /**
     * Contains a Database Connection
     *
     * @var PHPUnit\DbUnit\Database\Connection
     */
    protected $_connectionMock = null;

    /**
     * Returns the test database connection.
     *
     * @return PHPUnit\DbUnit\Database\Connection
     */
    protected function getConnection()
    {
        if($this->_connectionMock == null) {
            $this->_connectionMock = $this->getMockBuilder('Zend_Test_PHPUnit_Db_Connection')
                ->setConstructorArgs([new Zend_Test_DbAdapter(), "schema"])
                ->getMock();
        }
        return $this->_connectionMock;
    }

    /**
     * Returns the test dataset.
     *
     * @return PHPUnit\DbUnit\DataSet\IDataSet
     */
    protected function getDataSet()
    {
        return new PHPUnit\DbUnit\DataSet\CompositeDataSet(array());
    }

    public function testDatabaseTesterIsInitialized()
    {
        $this->assertTrue($this->databaseTester instanceof PHPUnit\DbUnit\Tester);
    }

    public function testDatabaseTesterNestsDefaultConnection()
    {
        $this->assertTrue($this->databaseTester->getConnection() instanceof PHPUnit\DbUnit\Database\Connection);
    }

    public function testCheckZendDbConnectionConvenienceMethodReturnType()
    {
        $mock = $this->getMockBuilder('Zend_Db_Adapter_Pdo_Sqlite')
            ->setMethods(['delete'])
            ->setMockClassName('Zend_Db_Adapter_Mock')
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertTrue($this->createZendDbConnection($mock, "test") instanceof Zend_Test_PHPUnit_Db_Connection);
    }

    public function testCreateDbTableDataSetConvenienceMethodReturnType()
    {
        $tableMock = $this->getMockBuilder('Zend_Db_Table')
            ->disableOriginalConstructor()
            ->getMock();
        $tableDataSet = $this->createDbTableDataSet(array($tableMock));
        $this->assertTrue($tableDataSet instanceof Zend_Test_PHPUnit_Db_DataSet_DbTableDataSet);
    }

    public function testCreateDbTableConvenienceMethodReturnType()
    {
        $mock = $this->getMockBuilder('Zend_Db_Table')
            ->disableOriginalConstructor()
            ->getMock();
        $table = $this->createDbTable($mock);
        $this->assertTrue($table instanceof Zend_Test_PHPUnit_Db_DataSet_DbTable);
    }

    public function testCreateDbRowsetConvenienceMethodReturnType()
    {
        $mock = $this->getMockBuilder('Zend_Db_Table_Rowset')
            ->setConstructorArgs([[]])
            ->getMock();
        $mock->expects($this->once())->method('toArray')->will($this->returnValue(array("foo" => 1, "bar" => 1)));

        $rowset = $this->createDbRowset($mock, "fooTable");

        $this->assertTrue($rowset instanceof Zend_Test_PHPUnit_Db_DataSet_DbRowset);
    }

    public function testGetAdapterConvenienceMethod()
    {
        $this->_connectionMock->expects($this->once())
                              ->method('getConnection');
        $this->getAdapter();
    }
}
