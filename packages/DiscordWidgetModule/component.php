<?php

use Quanta\Core\Component;

class DiscordWidget extends Component
{
    /**
     * The render function loads a template file with data from a Discord widget module in PHP.
     * 
     * @param quanta The `` parameter seems to be an object that has a property `moduleHandler`
     * which is used to get a module with a specific ID. In this case, it is fetching a module with the
     * ID "discordwidget".
     * @param data The `data` parameter in the `render` function is the data that will be passed to the
     * template for rendering. In this case, it seems like the `data` variable is being used to load
     * server information from the `discordwidget` module. This data will then be used in the `
     * 
     * @return The `render` function is returning the result of loading a template located at the
     * specified path (`__DIR__ . '/templates/widget.php'`) with the data array containing the result
     * of calling the `loadServer` method from the `discordwidget` module.
     */
    public function render($quanta, $data)
    {
        $module = $quanta->moduleHandler->getModuleWithID("discordwidget");
        return $quanta->loadTemplate(
            __DIR__ . '/templates/widget.php',
            [
                'data' => $module->loadServer()
            ]
        );
    }
}