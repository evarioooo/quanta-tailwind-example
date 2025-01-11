<?php

use Quanta\Core\Module;
use Quanta\Quanta;
use GuzzleHttp\Client;

require_once 'component.php';

class DiscordWidgetModule extends Module
{
    private ?Quanta $quanta;
    protected $guildId;

    public function __construct()
    {
        //
    }

    public function loadServer()
    {
        $serverId = '1311801047475294271';
        $client = new Client();

        $response = $client->request('GET', 'https://discord.com/api/v9/guilds/' . $serverId . '/widget.json');

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