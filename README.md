# Simplicate API client

This [Simplicate API Client](https://developer.simplicate.com/getting-started) code was generated with 
[Jane PHP](https://github.com/janephp/janephp) by using the 
[OpenAPI specification of the Simplicate API](https://developer.simplicate.com/swagger.json), found through the 
[Swagger docs](https://developer.simplicate.com/explore).

## Installing

Add this in your composer.json:
```json
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:steef-paqt/simplicate-api-client.git"
        }
    ],
```

And run in your terminal:
```
composer require paqtcom/simplicate-api-client
```

## Example usage:

```php
$curlClient = new \Symfony\Component\HttpClient\CurlHttpClient([
    'auth_bearer' => config('simplicate.token'),
]);
$httpClient = new \Symfony\Component\HttpClient\Psr18Client($curlClient);
$uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://{yourdomain}.simplicate.nl/api/v2/');
$plugins = [
    new \Http\Client\Common\Plugin\AddHostPlugin($uri),
    new \Http\Client\Common\Plugin\AddPathPlugin($uri),
];
$httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
$client = \Paqtcom\Simplicate\Client::create($httpClient);

// now you can run commands like:
$client->getCrmOrganization(); // Paqtcom\Simplicate\Model\RestResultOrganizations
```

## Example usage with the structured client:

```php
$curlClient = new \Symfony\Component\HttpClient\CurlHttpClient([
    'auth_bearer' => config('simplicate.token'),
]);
$httpClient = new \Symfony\Component\HttpClient\Psr18Client($curlClient);
$uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://{yourdomain}.simplicate.nl/api/v2/');
$plugins = [
    new \Http\Client\Common\Plugin\AddHostPlugin($uri),
    new \Http\Client\Common\Plugin\AddPathPlugin($uri),
];
$httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
$client = \Paqtcom\Simplicate\Client::create($httpClient);
$structuredClient = new \Paqtcom\Simplicate\StructuredClient($client);
// now you can run commands like:
$structuredClient->crm()->getCountries();     // Paqtcom\Simplicate\Model\RestResultCountries
$structuredClient->crm()->getOrganizations(); // Paqtcom\Simplicate\Model\RestResultOrganizations
$structuredClient->crm()->getOrganization('organisation:63467356236'); // Paqtcom\Simplicate\Model\RestResultOrganization
```

## Extra features on top of JanePHP generated code:

- [x] Import classes that were used in "extends" and "implements"
- [x] Fixed error: NonBodyParameterGenerator::convertParameterType(): Return value must be of type array, null returned
- [x] Code-style fixes (@PER, declare strict, ...)
- [ ] Multi-line arrays
- [ ] Add missing property's type declaration
- [ ] PHP8.x syntax like
    - [ ] match operator
    - [ ] enums
    - [ ] promoted properties
    - [ ] ...
