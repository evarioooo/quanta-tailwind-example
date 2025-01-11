<?php

use Quanta\Core\Module;
use Quanta\Quanta;
use GuzzleHttp\Client;

require_once 'component.php';

class DiscordWidgetModule extends Module
{
    private ?Quanta $quanta;
    protected $guildId;

    public function __construct($guildId)
    {
        $this->guildId = $guildId;
    }

    public function loadServer()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://discord.com/api/v9/guilds/' . $this->guildId . '/widget.json');

        return json_decode($response->getBody(), true);
    }

    public function dispose($quanta)
    {
        $this->quanta = null;
    }

    public function load($quanta)
    {
        $this->quanta = $quanta;

        $widget = new DiscordWidget("discordwidget");
        $this->quanta->componentHandler->addComponent($widget);

    }

}
