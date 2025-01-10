<?php

use \Quanta\Core\Message;
use Quanta\Core\Component;
use Quanta\Core\MessageHandler;

class Contact extends Component
{
    public function render($quanta, $data)
    {
        return $quanta->loadTemplate('../templates/components/contact.php');
    }
}