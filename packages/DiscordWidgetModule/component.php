<?php

use Quanta\Core\Component;

class DiscordWidget extends Component
{
    public function render($quanta, $data)
    {
        $module = new DiscordWidgetModule();
        return $quanta->loadTemplate(
            __DIR__ . '/templates/widget.php',
            [
                'data' => $module->loadServer()
            ]
        );
    }
}