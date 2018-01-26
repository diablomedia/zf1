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
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @see Zend_Loader
 */
require_once 'Zend/Loader.php';

/**
 * @see Zend_Db
 */
require_once 'Zend/Db.php';


/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Db
 */
abstract class Zend_Db_TestSetup extends PHPUnit\Framework\TestCase
{
    /**
     * @var Zend_Db_TestUtil_Common
     */
    protected $_util = null;

    /**
     * @var Zend_Db_Adapter_Abstract
     */
    protected $_db = null;

    protected $skipped;

    public abstract function getDriver();

    /**
     * Subclasses should call parent::setUp() before
     * doing their own logic, e.g. creating metadata.
     */
    public function setUp()
    {
        $this->skipped = false;

        if (!defined('TESTS_ZEND_DB_ADAPTER_STATIC_ENABLED')) {
            define('TESTS_ZEND_DB_ADAPTER_STATIC_ENABLED', true);
        }

        $driver = $this->getDriver();
        $DRIVER = strtoupper($driver);
        $enabledConst = "TESTS_ZEND_DB_ADAPTER_{$DRIVER}_ENABLED";
        if (!defined($enabledConst) || constant($enabledConst) != true) {
            $this->skipped = true;
            $this->markTestSkipped("{$driver} database Adapter is not enabled in TestConfiguration.php");
            return;
        }

        $ext = array(
            'Oracle' => 'oci8',
            'Db2'    => 'ibm_db2',
            'Mysqli' => 'mysqli',
            'Sqlsrv' => 'sqlsrv',
            /**
             * @todo  'Odbc'
             */
        );

        if (isset($ext[$driver]) && !extension_loaded($ext[$driver])) {
            $this->skipped = true;
            $this->markTestSkipped("extension '{$ext[$driver]}' is not loaded");
            return;
        }

        if (preg_match('/^pdo_(.*)/i', $driver, $matches)) {
            // check for PDO extension
            if (!extension_loaded('pdo')) {
                $this->skipped = true;
                $this->markTestSkipped("extension 'PDO' is not loaded");
                return;
            }

            // check the PDO driver is available
            $pdo_driver = strtolower($matches[1]);
            if (!in_array($pdo_driver, PDO::getAvailableDrivers())) {
                $this->skipped = true;
                $this->markTestSkipped("PDO driver '{$pdo_driver}' is not available");
                return;
            }
        }

        $this->_setUpTestUtil();
        $this->_setUpAdapter();
        $this->_util->setUp($this->_db);
    }

    /**
     * Get a TestUtil class for the current RDBMS brand.
     */
    protected function _setUpTestUtil()
    {
        $driver = $this->getDriver();
        $utilClass = "Zend_Db_TestUtil_{$driver}";
        Zend_Loader::loadClass($utilClass);
        $this->_util = new $utilClass();
    }

    /**
     * Open a new database connection
     */
    protected function _setUpAdapter()
    {
        $this->_db = Zend_Db::factory($this->getDriver(), $this->_util->getParams());
        try {
            $conn = $this->_db->getConnection();
        } catch (Zend_Exception $e) {
            $this->_db = null;
            $this->assertTrue($e instanceof Zend_Db_Adapter_Exception,
                'Expecting Zend_Db_Adapter_Exception, got ' . get_class($e));
            $this->markTestSkipped($e->getMessage());
        }
    }

    /**
     * Subclasses should call parent::tearDown() after
     * doing their own logic, e.g. deleting metadata.
     */
    public function tearDown()
    {
        if ($this->skipped === false) {
            $this->_util->tearDown();
            $this->_db->closeConnection();
        }
        $this->_db = null;
    }

}
