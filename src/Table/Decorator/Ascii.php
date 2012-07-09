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
 * @category  Zend
 * @package   Zend_Text_Table
 */

namespace Zend\Text\Table\Decorator;

use Zend\Text\Table\Decorator\DecoratorInterface as Decorator;

/**
 * ASCII Decorator for Zend\Text\Table
 *
 * @category  Zend
 * @package   Zend_Text_Table
 */
class Ascii implements Decorator
{
    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getTopLeft()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getTopRight()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getBottomLeft()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getBottomRight()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getVertical()
    {
        return '|';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getHorizontal()
    {
        return '-';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getCross()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getVerticalRight()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getVerticalLeft()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getHorizontalDown()
    {
        return '+';
    }

    /**
     * Defined by Zend\Text\Table\Decorator\DecoratorInterface
     *
     * @return string
     */
    public function getHorizontalUp()
    {
        return '+';
    }
}
