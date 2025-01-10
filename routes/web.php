<?php

use Quanta\Quanta;
use Quanta\Core\CleanRoute;
use Quanta\Core\QueryParameterRoute;

$quanta = new Quanta();

/* Components */

$quanta->componentHandler->addComponent(new Layout("layout"));
$quanta->componentHandler->addComponent(new Home("home"));
$quanta->componentHandler->addComponent(new Contact("contact"));

$quanta->componentHandler->addComponent(new Header("headerComponent"));
$quanta->componentHandler->addComponent(new Meta("metaComponent"));
$quanta->componentHandler->addComponent(new Navbar("navbarComponent"));
$quanta->componentHandler->addComponent(new Footer("footerComponent"));

/* Routes */

$quanta->routeHandler->addRoute(new CleanRoute("home", ["/", "/home", "/home/"], "home"));
$quanta->routeHandler->addRoute(new CleanRoute("contact", ["/contact", "/contact", "/contact/"], "contact"));