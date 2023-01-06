<?php

namespace OwnAdmin\TeamSpeak3;

use Exception;
use TeamSpeak3;
use TeamSpeak3_Adapter_Abstract;
use TeamSpeak3_Node_Abstract;
use TeamSpeak3_Node_Host;
use TeamSpeak3_Node_Server;

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
     * @return TeamSpeak3_Adapter_Abstract
     * @return TeamSpeak3_Node_Abstract
     * @return TeamSpeak3_Node_Host
     * @return TeamSpeak3_Node_Server
     * @throws Exception
     */
    public static function connect($uri): TeamSpeak3_Node_Server
    {
        return TeamSpeak3::factory($uri);
    }
}