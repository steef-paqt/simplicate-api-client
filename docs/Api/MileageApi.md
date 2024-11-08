# MileageApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                             | HTTP request                     | Description                                                
--------------------------------------------------------------------|----------------------------------|------------------------------------------------------------
 [**mileageMileageGet**](MileageApi.md#mileageMileageGet)           | **GET** /mileage/mileage         | Fetches all mileages                                       
 [**mileageMileageIdDelete**](MileageApi.md#mileageMileageIdDelete) | **DELETE** /mileage/mileage/{id} | Deletes the mileage registration with the given mileage id 
 [**mileageMileageIdGet**](MileageApi.md#mileageMileageIdGet)       | **GET** /mileage/mileage/{id}    | Fetches a single mileage by mileage id                     
 [**mileageMileageIdPut**](MileageApi.md#mileageMileageIdPut)       | **PUT** /mileage/mileage/{id}    | Updates a mileage registration for the given mileage id    
 [**mileageMileagePost**](MileageApi.md#mileageMileagePost)         | **POST** /mileage/mileage        | Add a new mileage registration                             

# **mileageMileageGet**

> \Paqtcom\Simplicate\Model\RestResultMileageList mileageMileageGet($offset, $limit, $sort)

Fetches all mileages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MileageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->mileageMileageGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MileageApi->mileageMileageGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultMileageList**](../Model/RestResultMileageList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **mileageMileageIdDelete**

> mileageMileageIdDelete($id)

Deletes the mileage registration with the given mileage id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MileageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->mileageMileageIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MileageApi->mileageMileageIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **mileageMileageIdGet**

> \Paqtcom\Simplicate\Model\RestResultMileage mileageMileageIdGet($id)

Fetches a single mileage by mileage id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MileageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->mileageMileageIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MileageApi->mileageMileageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultMileage**](../Model/RestResultMileage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **mileageMileageIdPut**

> mileageMileageIdPut($id, $body)

Updates a mileage registration for the given mileage id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MileageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PutMileage(); // \Paqtcom\Simplicate\Model\PutMileage | Mileage object that needs to be updated

try {
    $apiInstance->mileageMileageIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MileageApi->mileageMileageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                             | Notes 
----------|----------------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                                     | The template&#39;s id                   |
 **body** | [**\Paqtcom\Simplicate\Model\PutMileage**](../Model/PutMileage.md) | Mileage object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **mileageMileagePost**

> mileageMileagePost($body)

Add a new mileage registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MileageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$body = new \Paqtcom\Simplicate\Model\PostMileage(); // \Paqtcom\Simplicate\Model\PostMileage | Mileage object that needs to be added

try {
    $apiInstance->mileageMileagePost($body);
} catch (Exception $e) {
    echo 'Exception when calling MileageApi->mileageMileagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                           | Notes 
----------|------------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMileage**](../Model/PostMileage.md) | Mileage object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

