<?php
/**
 * This file is part of the sfImageTransformExtraPlugin unit tests package.
 * (c) 2010 Christian Schaefer <caefer@ical.ly>>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    sfImageTransformExtraPluginUnitTests
 * @author     Christian Schaefer <caefer@ical.ly>
 * @version    SVN: $Id$
 */

/* require Table class */
require_once(dirname(__FILE__).'/TestTable.php');

/**
 * Mocked Doctrine record to use in tests
 *
 * @package    sfImageTransformExtraPluginUnitTests
 * @subpackage Record
 * @author     Christian Schaefer <caefer@ical.ly>
 */
class TestRecord extends Doctrine_Record
{
  public function getId()
  {
    return 1;
  }

  public function getFile()
  {
    return 'caefer.jpg';
  }
}
