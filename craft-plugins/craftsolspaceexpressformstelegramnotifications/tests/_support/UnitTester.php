<?php
/**
 * Craft Solspace Express Forms Telegram Notifications plugin for Craft CMS 3.x
 *
 * Notifications to Telegram group via bot for Craft Solspace Express Forms Telegram 
 *
 * @link      https://www.bronskiy.com
 * @copyright Copyright (c) 2020 Nikolay Bronskiy
 */

use Codeception\Actor;
use Codeception\Lib\Friend;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 *
 */
class UnitTester extends Actor
{
    use _generated\UnitTesterActions;

}
