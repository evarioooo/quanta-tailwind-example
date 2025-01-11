<?php

use Quanta\Core\Module;
use Quanta\Quanta;
use GuzzleHttp\Client;

require_once 'component.php';

class DiscordWidgetModule extends Module
{
    private ?Quanta $quanta;
    protected $guildId;
    protected $serverId;

    public function __construct($serverId)
    {
        $this->serverId = $serverId;
    }

    public function loadServer()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://discord.com/api/v9/guilds/' . $this->serverId . '/widget.json');

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
