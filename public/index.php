<?php

error_reporting(E_ALL);

require '../vendor/autoload.php';

/* layout component */
require_once '../components/layout.php';

/* pages components */
require_once '../components/home.php';
require_once '../components/contact.php';

/* partials components */
require_once '../components/header.php';
require_once '../components/meta.php';
require_once '../components/navbar.php';
require_once '../components/footer.php';

/* load routes */
require_once '../routes/web.php';

require_once("../packages/DiscordWidgetModule/DiscordWidgetModule.php");

/* add discord widget modules */
$discordModule = new DiscordWidgetModule('discordwidget', '1311801047475294271');
$quanta->addModule($discordModule);

/* add all modules */
$quanta->loadModules();

/* render layout component */
$quanta->renderComponent("layout");