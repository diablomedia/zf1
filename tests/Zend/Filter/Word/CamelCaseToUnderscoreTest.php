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
 * @package    Zend_Filter
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

require_once 'Zend/Filter/Word/CamelCaseToUnderscore.php';

/**
 * Test class for Zend_Filter_Word_CamelCaseToUnderscore.
 *
 * @category   Zend
 * @package    Zend_Filter
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Filter
 */
class Zend_Filter_Word_CamelCaseToUnderscoreTest extends PHPUnit\Framework\TestCase
{
    public function testFilterSeparatesCamelCasedWordsWithUnderscores()
    {
        $string   = 'CamelCasedWords';
        $filter   = new Zend_Filter_Word_CamelCaseToUnderscore();
        $filtered = $filter->filter($string);

        $this->assertNotEquals($string, $filtered);
        $this->assertEquals('Camel_Cased_Words', $filtered);
    }

    public function testFilterSeperatingNumbersToUnterscore()
    {
        $string = 'PaTitle';
        $filter   = new Zend_Filter_Word_CamelCaseToUnderscore();
        $filtered = $filter->filter($string);

        $this->assertNotEquals($string, $filtered);
        $this->assertEquals('Pa_Title', $filtered);

        $string = 'Pa2Title';
        $filter   = new Zend_Filter_Word_CamelCaseToUnderscore();
        $filtered = $filter->filter($string);

        $this->assertNotEquals($string, $filtered);
        $this->assertEquals('Pa2_Title', $filtered);

        $string = 'Pa2aTitle';
        $filter   = new Zend_Filter_Word_CamelCaseToUnderscore();
        $filtered = $filter->filter($string);

        $this->assertNotEquals($string, $filtered);
        $this->assertEquals('Pa2a_Title', $filtered);
    }
}
