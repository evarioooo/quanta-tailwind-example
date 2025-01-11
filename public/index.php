<?php

error_reporting(E_ALL);

require '../vendor/autoload.php';
require_once '../components/layout.php';
require_once '../components/home.php';
require_once '../components/contact.php';

require_once '../components/header.php';
require_once '../components/meta.php';
require_once '../components/navbar.php';
require_once '../components/footer.php';

require_once '../routes/web.php';

require_once("../packages/DiscordWidgetModule/DiscordWidgetModule.php");

$discordModule = new DiscordWidgetModule('discordwidget', '1311801047475294271');
$quanta->addModule($discordModule);
$quanta->loadModules();

$quanta->renderComponent("layout");