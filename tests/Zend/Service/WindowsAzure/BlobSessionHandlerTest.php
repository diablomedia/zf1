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
 * @package    Zend_Service_WindowsAzure
 * @subpackage UnitTests
 * @version    $Id$
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Test helpers
 */
require_once dirname(__FILE__) . '/../../../TestHelper.php';
require_once dirname(__FILE__) . '/../../../TestConfiguration.php.dist';

/** Zend_Service_WindowsAzure_SessionHandler */
require_once 'Zend/Service/WindowsAzure/SessionHandler.php';

/** Zend_Service_WindowsAzure_Storage_Blob */
require_once 'Zend/Service/WindowsAzure/Storage/Blob.php';

/** Zend_Service_WindowsAzure_TableSessionHandlerTest */
require_once 'Zend/Service/WindowsAzure/TableSessionHandlerTest.php';

/**
 * @category   Zend
 * @package    Zend_Service_WindowsAzure
 * @subpackage UnitTests
 * @version    $Id$
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Service_WindowsAzure_BlobSessionHandlerTest extends Zend_Service_WindowsAzure_TableSessionHandlerTest
{
    public function setUp(): void
    {
        if (!TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $this->markTestSkipped('Test not enabled in TestConfiguration.php');
        }
    }

    /**
     * Test teardown
     */
    public function tearDown(): void
    {
        $storageClient = $this->createStorageInstance();
        for ($i = 1; $i <= self::$uniqId; $i++)
        {
            try { $storageClient->deleteContainer(TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_TABLENAME_PREFIX . $i); } catch (Exception $e) { }
        }
    }

    protected function createStorageInstance()
    {
        $storageClient = null;
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNONPROD) {
            $storageClient = new Zend_Service_WindowsAzure_Storage_Blob(TESTS_ZEND_SERVICE_WINDOWSAZURE_BLOB_HOST_PROD, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_ACCOUNT_PROD, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_KEY_PROD, false, Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract::retryN(10, 250));
        } else {
            $storageClient = new Zend_Service_WindowsAzure_Storage_Blob(TESTS_ZEND_SERVICE_WINDOWSAZURE_BLOB_HOST_DEV, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_ACCOUNT_DEV, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_KEY_DEV, true, Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract::retryN(10, 250));
        }

        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_USEPROXY) {
            $storageClient->setProxy(TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_USEPROXY, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_PROXY, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_PROXY_PORT, TESTS_ZEND_SERVICE_WINDOWSAZURE_STORAGE_PROXY_CREDENTIALS);
        }

        return $storageClient;
    }

    /**
     * Test open
     */
    public function testOpen()
    {
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $storageClient = $this->createStorageInstance();
            $tableName = $this->generateName();
            $sessionHandler = $this->createSessionHandler($storageClient, $tableName);
            $result = $sessionHandler->open();

            $this->assertTrue($result);


            $verifyResult = $storageClient->listContainers();
            $this->assertEquals($tableName, $verifyResult[0]->Name);
        }
    }

    /**
     * Test write
     */
    public function testWrite()
    {
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $storageClient = $this->createStorageInstance();
            $tableName = $this->generateName();
            $sessionHandler = $this->createSessionHandler($storageClient, $tableName);
            $sessionHandler->open();

            $sessionId = $this->session_id();
            $sessionData = serialize( 'PHPAzure' );
            $sessionHandler->write($sessionId, $sessionData);


            $verifyResult = $storageClient->listBlobs($tableName);
            $this->assertCount(1, $verifyResult);
        }
    }

    /**
     * Test write large
     */
    public function testWriteLarge()
    {
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $storageClient = $this->createStorageInstance();
            $tableName = $this->generateName();
            $sessionHandler = $this->createSessionHandler($storageClient, $tableName);
            $sessionHandler->open();

            $sessionId = $this->session_id();

            $sessionData = '';
            for ($i = 0; $i < 2 * Zend_Service_WindowsAzure_SessionHandler::MAX_TS_PROPERTY_SIZE; $i++) {
            	$sessionData .= 'a';
            }
            $sessionData = serialize( $sessionData );

            $sessionHandler->write($sessionId, $sessionData);


            $verifyResult = $storageClient->listBlobs($tableName);
            $this->assertCount(1, $verifyResult);
        }
    }

    /**
     * Test destroy
     */
    public function testDestroy()
    {
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $storageClient = $this->createStorageInstance();
            $tableName = $this->generateName();
            $sessionHandler = $this->createSessionHandler($storageClient, $tableName);
            $sessionHandler->open();

            $sessionId = $this->session_id();
            $sessionData = serialize( 'PHPAzure' );
            $sessionHandler->write($sessionId, $sessionData);

            $result = $sessionHandler->destroy($sessionId);
            $this->assertTrue($result);

            $verifyResult = $storageClient->listBlobs($tableName);
            $this->assertCount(0, $verifyResult);
        }
    }

    /**
     * Test gc
     */
    public function testGc()
    {
        if (TESTS_ZEND_SERVICE_WINDOWSAZURE_SESSIONHANDLER_RUNTESTS) {
            $storageClient = $this->createStorageInstance();
            $tableName = $this->generateName();
            $sessionHandler = $this->createSessionHandler($storageClient, $tableName);
            $sessionHandler->open();

            $sessionId = $this->session_id();
            $sessionData = serialize( 'PHPAzure' );
            $sessionHandler->write($sessionId, $sessionData);

            sleep(1); // let time() tick

            $result = $sessionHandler->gc(0);
            $this->assertTrue($result);

            $verifyResult = $storageClient->listBlobs($tableName);
            $this->assertCount(0, $verifyResult);
        }
    }
}
