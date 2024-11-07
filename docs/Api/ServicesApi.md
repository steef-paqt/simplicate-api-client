# Paqtcom\Simplicate\ServicesApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                              | HTTP request                             | Description                                   
-------------------------------------------------------------------------------------|------------------------------------------|-----------------------------------------------
 [**servicesDefaultserviceGet**](ServicesApi.md#servicesDefaultserviceGet)           | **GET** /services/defaultservice         | Fetches all default services                  
 [**servicesDefaultserviceIdDelete**](ServicesApi.md#servicesDefaultserviceIdDelete) | **DELETE** /services/defaultservice/{id} | Deletes the default service with the given id 
 [**servicesDefaultserviceIdGet**](ServicesApi.md#servicesDefaultserviceIdGet)       | **GET** /services/defaultservice/{id}    | Fetches a single default service by id        
 [**servicesDefaultserviceIdPut**](ServicesApi.md#servicesDefaultserviceIdPut)       | **PUT** /services/defaultservice/{id}    | Updates a default service for the given id    
 [**servicesDefaultservicePost**](ServicesApi.md#servicesDefaultservicePost)         | **POST** /services/defaultservice        | Add a new default service                     

# **servicesDefaultserviceGet**

> \Paqtcom\Simplicate\Model\RestResultDefaultServices servicesDefaultserviceGet($offset, $limit, $sort)

Fetches all default services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->servicesDefaultserviceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDefaultserviceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name       | Type       | Description                      | Notes                     
------------|------------|----------------------------------|---------------------------
 **offset** | **int**    | The offset to search from        | [optional]                
 **limit**  | **int**    | The limit of max allowed results | [optional] [default to 5] 
 **sort**   | **string** | Sort the result by column name   | [optional]                

### Return type

[**\Paqtcom\Simplicate\Model\RestResultDefaultServices**](../Model/RestResultDefaultServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **servicesDefaultserviceIdDelete**

> servicesDefaultserviceIdDelete($id)

Deletes the default service with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->servicesDefaultserviceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDefaultserviceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **servicesDefaultserviceIdGet**

> \Paqtcom\Simplicate\Model\RestResultDefaultService servicesDefaultserviceIdGet($id)

Fetches a single default service by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->servicesDefaultserviceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDefaultserviceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultDefaultService**](../Model/RestResultDefaultService.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **servicesDefaultserviceIdPut**

> servicesDefaultserviceIdPut($id, $body)

Updates a default service for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostDefaultService(); // \Paqtcom\Simplicate\Model\PostDefaultService | default service object that needs to be updated

try {
    $apiInstance->servicesDefaultserviceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDefaultserviceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                           | Description                                     | Notes 
----------|--------------------------------------------------------------------------------|-------------------------------------------------|-------
 **id**   | **string**                                                                     | The template&#39;s id                           |
 **body** | [**\Paqtcom\Simplicate\Model\PostDefaultService**](../Model/PostDefaultService.md) | default service object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **servicesDefaultservicePost**

> servicesDefaultservicePost($body)

Add a new default service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostDefaultService(); // \Paqtcom\Simplicate\Model\PostDefaultService | Default service object that needs to be added

try {
    $apiInstance->servicesDefaultservicePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDefaultservicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                           | Description                                   | Notes 
----------|--------------------------------------------------------------------------------|-----------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostDefaultService**](../Model/PostDefaultService.md) | Default service object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

