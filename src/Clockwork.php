<?php

namespace Blackpoints\Clockwork\Mezzio;

use Clockwork\Support\Vanilla\Clockwork as VanillaClockwork;

class Clockwork extends VanillaClockwork
{
    public function __construct($config = [])
    {
        /**
         *  Use custom config which use getenv instead of $_ENV,
         *  the latter does not retrieve correctly the environment variables
         */
        $config = array_merge(include __DIR__ . '/config.php', $config);
        parent::__construct($config);
    }

    public function getWebHost()
    {
        return $this->config['web']['host'];
    }

    public function getApiPath()
    {
        return $this->config['api'];
    }

    public function isWebEnabled()
    {
        return $this->config['web']['enable'];
    }

    public function isEnabled()
    {
        return $this->config['enable'];
    }

    public function getAuthenticationAPI()
    {
        return $this->config['authentication_api'];
    }

    public function isAuthenticationEnabled()
    {
        return $this->config['authentication'];
    }
}
