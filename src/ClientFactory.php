<?php

namespace Paqtcom\Simplicate;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\Psr18Client;

class ClientFactory
{
    public static function create(string $key, string $secret, string $domain): PluginClient
    {
        $options = [
            'headers' => [
                'Authentication-Key'    => $key,
                'Authentication-Secret' => $secret,
            ]
        ];
        $curlClient = new CurlHttpClient($options);
        $httpClient = new Psr18Client($curlClient);
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($domain);
        $plugins = [
            new AddHostPlugin($uri),
            new AddPathPlugin($uri),
        ];

        return new PluginClient($httpClient, $plugins);
    }
}
