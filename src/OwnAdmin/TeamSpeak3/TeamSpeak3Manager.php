<?php

namespace OwnAdmin\TeamSpeak3;

use Exception;
use PlanetTeamSpeak\TeamSpeak3Framework\Node\Server;
use PlanetTeamSpeak\TeamSpeak3Framework\TeamSpeak3;

class TeamSpeak3Manager
{
    protected array $defaults = [
        'host' => '127.0.0.1',
        'query_username' => 'serveradmin',
        'query_password' => '',
        'query_port' => 10011,
        'server_port' => 9987,
        'nickname' => 'ownadmin'
    ];

    public function __construct(array $config = [])
    {
        $this->defaults = array_merge(
            $config,
            $this->defaults
        );
    }

    /**
     * @return Server
     * @throws Exception
     */
    public static function connect($uri)
    {
        return TeamSpeak3::factory($uri);
    }
}
