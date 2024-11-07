# MergerApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                          | HTTP request                         | Description                                               
---------------------------------------------------------------------------------|--------------------------------------|-----------------------------------------------------------
 [**crmMergeorganizationPost**](MergerApi.md#crmMergeorganizationPost)           | **POST** /crm/mergeorganization      | Merge two organizations by a given source and target id   
 [**crmMergepersonPost**](MergerApi.md#crmMergepersonPost)                       | **POST** /crm/mergeperson            | Merge two people by a given source and target id          
 [**mergerCompareorganizationPost**](MergerApi.md#mergerCompareorganizationPost) | **POST** /merger/compareorganization | Compare two organizations by a given source and target id 
 [**mergerComparepersonPost**](MergerApi.md#mergerComparepersonPost)             | **POST** /merger/compareperson       | Compare two persons by a given source and target id       

# **crmMergeorganizationPost**

> \Paqtcom\Simplicate\Model\ResultMergerMerge crmMergeorganizationPost($body)

Merge two organizations by a given source and target id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MergerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostMerger(); // \Paqtcom\Simplicate\Model\PostMerger | Merge object containing the source id and target id

try {
    $result = $apiInstance->crmMergeorganizationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergerApi->crmMergeorganizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                                         | Notes 
----------|----------------------------------------------------------------|-----------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMerger**](../Model/PostMerger.md) | Merge object containing the source id and target id |

### Return type

[**\Paqtcom\Simplicate\Model\ResultMergerMerge**](../Model/ResultMergerMerge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmMergepersonPost**

> \Paqtcom\Simplicate\Model\ResultMergerMerge crmMergepersonPost($body)

Merge two people by a given source and target id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MergerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostMerger(); // \Paqtcom\Simplicate\Model\PostMerger | Merge object containing the source id and target id

try {
    $result = $apiInstance->crmMergepersonPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergerApi->crmMergepersonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                                         | Notes 
----------|----------------------------------------------------------------|-----------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMerger**](../Model/PostMerger.md) | Merge object containing the source id and target id |

### Return type

[**\Paqtcom\Simplicate\Model\ResultMergerMerge**](../Model/ResultMergerMerge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **mergerCompareorganizationPost**

> \Paqtcom\Simplicate\Model\RestResultMergerCompare mergerCompareorganizationPost($body)

Compare two organizations by a given source and target id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MergerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostMergerCompare(); // \Paqtcom\Simplicate\Model\PostMergerCompare | Compare objects containing the source id and target id

try {
    $result = $apiInstance->mergerCompareorganizationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergerApi->mergerCompareorganizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                                            | Notes 
----------|------------------------------------------------------------------------------|--------------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMergerCompare**](../Model/PostMergerCompare.md) | Compare objects containing the source id and target id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultMergerCompare**](../Model/RestResultMergerCompare.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **mergerComparepersonPost**

> \Paqtcom\Simplicate\Model\RestResultMergerCompare mergerComparepersonPost($body)

Compare two persons by a given source and target id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\MergerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostMergerCompare(); // \Paqtcom\Simplicate\Model\PostMergerCompare | Compare objects containing the source id and target id

try {
    $result = $apiInstance->mergerComparepersonPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergerApi->mergerComparepersonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                                            | Notes 
----------|------------------------------------------------------------------------------|--------------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMergerCompare**](../Model/PostMergerCompare.md) | Compare objects containing the source id and target id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultMergerCompare**](../Model/RestResultMergerCompare.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

