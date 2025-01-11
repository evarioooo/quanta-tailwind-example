<?php

use Quanta\Core\Module;
use Quanta\Quanta;
use GuzzleHttp\Client;

require_once 'component.php';

class DiscordWidgetModule extends Module
{
    private ?Quanta $quanta;
    protected $guildId;

    /**
     * The constructor function initializes the object with the provided module ID and guild ID.
     * 
     * @param moduleId The `moduleId` parameter is used to identify the module to which the object
     * belongs. It is passed to the constructor of the class to initialize the object with the
     * specified module ID.
     * @param guildId The `guildId` parameter in the constructor function is used to initialize the
     * `guildId` property of the class instance. It allows you to set the `guildId` value when creating
     * an object of this class.
     */
    public function __construct($moduleId, $guildId)
    {
        parent::__construct($moduleId);
        $this->guildId = $guildId;
    }

    /**
     * The function `loadServer` makes a GET request to retrieve JSON data from a Discord server's
     * widget endpoint.
     * 
     * @return The `loadServer()` function makes a GET request to the Discord API to retrieve
     * information about a specific guild (server) using the guild ID. It then decodes the JSON
     * response and returns it as an associative array.
     */
    public function loadServer()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://discord.com/api/v9/guilds/' . $this->guildId . '/widget.json');

        return json_decode($response->getBody(), true);
    }

    /**
     * The dispose function sets the quanta property to null.
     * 
     * @param quanta The `dispose` function in the code snippet takes a parameter named ``.
     * However, in the function body, it sets the property `->quanta` to `null`, not the parameter
     * ``. This means that the function is not using the parameter passed to it.
     */
    public function dispose($quanta)
    {
        $this->quanta = null;
    }

    /**
     * The function "load" sets the "quanta" property and adds a Discord widget component to the
     * component handler.
     * 
     * @param quanta The `load` function takes a parameter named ``. This parameter is being
     * assigned to the property `->quanta` within the function. It seems like `` is an
     * object or an instance of a class that has a `componentHandler` property. The function then
     * creates
     */
    public function load($quanta)
    {
        $this->quanta = $quanta;

        $widget = new DiscordWidget("discordwidget");
        $this->quanta->componentHandler->addComponent($widget);

    }

}
