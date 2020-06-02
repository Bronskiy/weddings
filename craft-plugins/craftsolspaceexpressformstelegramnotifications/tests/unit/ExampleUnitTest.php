<?php
/**
 * Craft Solspace Express Forms Telegram Notifications plugin for Craft CMS 3.x
 *
 * Notifications to Telegram group via bot for Craft Solspace Express Forms Telegram 
 *
 * @link      https://www.bronskiy.com
 * @copyright Copyright (c) 2020 Nikolay Bronskiy
 */

namespace bronskiycraftsolpaceexpressformstelegram\craftsolspaceexpressformstelegramnotificationstests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use bronskiycraftsolpaceexpressformstelegram\craftsolspaceexpressformstelegramnotifications\CraftSolspaceExpressFormsTelegramNotifications;

/**
 * ExampleUnitTest
 *
 *
 * @author    Nikolay Bronskiy
 * @package   CraftSolspaceExpressFormsTelegramNotifications
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            CraftSolspaceExpressFormsTelegramNotifications::class,
            CraftSolspaceExpressFormsTelegramNotifications::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
