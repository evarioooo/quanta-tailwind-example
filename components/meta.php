<?php

use \Quanta\Core\Message;
use Quanta\Core\Component;
use Quanta\Core\MessageHandler;

class Meta extends Component
{
    protected array $data = [];

    public function render($quanta, $data)
    {
        $this->data = [
            'css' => $quanta->loadAsset('public/css/layout.min.css'),
        ];
        return $quanta->loadTemplate('../templates/components/meta.php', [
            'data' => $this->data
        ]);
    }
}