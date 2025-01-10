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

$quanta->renderComponent("layout");

?>