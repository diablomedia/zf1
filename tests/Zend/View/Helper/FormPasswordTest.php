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
 * @package    Zend_View
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

require_once 'Zend/View.php';
require_once 'Zend/View/Helper/FormPassword.php';
require_once 'Zend/Registry.php';

/**
 * Zend_View_Helper_FormPasswordTest
 *
 * Tests formPassword helper
 *
 * @category   Zend
 * @package    Zend_View
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_View
 * @group      Zend_View_Helper
 */
class Zend_View_Helper_FormPasswordTest extends PHPUnit\Framework\TestCase
{
    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp()
    {
        if (Zend_Registry::isRegistered('Zend_View_Helper_Doctype')) {
            $registry = Zend_Registry::getInstance();
            unset($registry['Zend_View_Helper_Doctype']);
        }
        $this->view = new Zend_View();
        $this->helper = new Zend_View_Helper_FormPassword();
        $this->helper->setView($this->view);
    }

    /**
     * @group ZF-1666
     */
    public function testCanDisableElement()
    {
        $html = $this->helper->formPassword(array(
            'name'    => 'foo',
            'value'   => 'bar',
            'attribs' => array('disable' => true)
        ));

        $this->assertRegexp('/<input[^>]*?(disabled="disabled")/', $html);
    }

    /**
     * @group ZF-1666
     */
    public function testDisablingElementDoesNotRenderHiddenElements()
    {
        $html = $this->helper->formPassword(array(
            'name'    => 'foo',
            'value'   => 'bar',
            'attribs' => array('disable' => true)
        ));

        $this->assertNotRegexp('/<input[^>]*?(type="hidden")/', $html);
    }

    public function testShouldRenderAsHtmlByDefault()
    {
        $test = $this->helper->formPassword('foo', 'bar');
        $this->assertNotContains(' />', $test);
    }

    public function testShouldAllowRenderingAsXhtml()
    {
        $this->view->doctype('XHTML1_STRICT');
        $test = $this->helper->formPassword('foo', 'bar');
        $this->assertContains(' />', $test);
    }

    public function testShouldNotRenderValueByDefault()
    {
        $test = $this->helper->formPassword('foo', 'bar');
        $this->assertNotContains('bar', $test);
    }

    /**
     * @group ZF-2860
     */
    public function testShouldRenderValueWhenRenderPasswordFlagPresentAndTrue()
    {
        $test = $this->helper->formPassword('foo', 'bar', array('renderPassword' => true));
        $this->assertContains('value="bar"', $test);
    }

    /**
     * @group ZF-2860
     */
    public function testRenderPasswordAttribShouldNeverBeRendered()
    {
        $test = $this->helper->formPassword('foo', 'bar', array('renderPassword' => true));
        $this->assertNotContains('renderPassword', $test);
        $test = $this->helper->formPassword('foo', 'bar', array('renderPassword' => false));
        $this->assertNotContains('renderPassword', $test);
    }
}
