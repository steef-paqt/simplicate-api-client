# Swagger\Client\SharedApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                    | HTTP request                 | Description                               
-----------------------------------------------------------|------------------------------|-------------------------------------------
 [**sharedItemGet**](SharedApi.md#sharedItemGet)           | **GET** /shared/item         | Fetches all shared items                  
 [**sharedItemIdDelete**](SharedApi.md#sharedItemIdDelete) | **DELETE** /shared/item/{id} | Deletes the shared item with the given id 
 [**sharedItemIdGet**](SharedApi.md#sharedItemIdGet)       | **GET** /shared/item/{id}    | Fetches a single shared item  by id       
 [**sharedItemIdPut**](SharedApi.md#sharedItemIdPut)       | **PUT** /shared/item/{id}    | Updates an existing shared item           
 [**sharedItemPost**](SharedApi.md#sharedItemPost)         | **POST** /shared/item        | Add a new shared item                     

# **sharedItemGet**

> \Swagger\Client\Model\RestResultSharedItems sharedItemGet($offset, $limit, $sort)

Fetches all shared items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->sharedItemGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedApi->sharedItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSharedItems**](../Model/RestResultSharedItems.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sharedItemIdDelete**

> sharedItemIdDelete($id)

Deletes the shared item with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->sharedItemIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SharedApi->sharedItemIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **sharedItemIdGet**

> \Swagger\Client\Model\RestResultSharedItem sharedItemIdGet($id)

Fetches a single shared item by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->sharedItemIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedApi->sharedItemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSharedItem**](../Model/RestResultSharedItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sharedItemIdPut**

> sharedItemIdPut($id, $body)

Updates an existing shared item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostSharedItem(); // \Swagger\Client\Model\PostSharedItem | Shared item object that with the data that needs to be updated

try {
    $apiInstance->sharedItemIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SharedApi->sharedItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                   | Description                                                    | Notes 
----------|------------------------------------------------------------------------|----------------------------------------------------------------|-------
 **id**   | **string**                                                             | The template&#39;s id                                          |
 **body** | [**\Swagger\Client\Model\PostSharedItem**](../Model/PostSharedItem.md) | Shared item object that with the data that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sharedItemPost**

> sharedItemPost($body)

Add a new shared item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostSharedItem(); // \Swagger\Client\Model\PostSharedItem | Item object that needs to be added

try {
    $apiInstance->sharedItemPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SharedApi->sharedItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                   | Description                        | Notes 
----------|------------------------------------------------------------------------|------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostSharedItem**](../Model/PostSharedItem.md) | Item object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

