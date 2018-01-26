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
 * @subpackage PHPUnit
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @see Zend_Test_PHPUnit_Db_Connection
 */
require_once "Zend/Test/PHPUnit/Db/Connection.php";

/**
 * Delete All Operation that can be executed on set up or tear down of a database tester.
 *
 * @uses       PHPUnit\DbUnit\Operation\Operation
 * @category   Zend
 * @package    Zend_Test
 * @subpackage PHPUnit
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Test_PHPUnit_Db_Operation_DeleteAll implements PHPUnit\DbUnit\Operation\Operation
{
    /**
     * @param PHPUnit\DbUnit\Database\Connection $connection
     * @param PHPUnit\DbUnit\DataSet\IDataSet $dataSet
     */
    public function execute(PHPUnit\DbUnit\Database\Connection $connection, PHPUnit\DbUnit\DataSet\IDataSet $dataSet)
    {
        if(!($connection instanceof Zend_Test_PHPUnit_Db_Connection)) {
            require_once "Zend/Test/PHPUnit/Db/Exception.php";
            throw new Zend_Test_PHPUnit_Db_Exception("Not a valid Zend_Test_PHPUnit_Db_Connection instance, ".get_class($connection)." given!");
        }

        foreach ($dataSet as $table) {
            try {
                $tableName = $table->getTableMetaData()->getTableName();
                $connection->getConnection()->delete($tableName);
            } catch (Exception $e) {
                throw new PHPUnit\DbUnit\Operation\Exception('DELETEALL', 'DELETE FROM '.$tableName.'', array(), $table, $e->getMessage());
            }
        }
    }
}
