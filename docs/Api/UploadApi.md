# Paqtcom\Simplicate\UploadApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                    | HTTP request                 | Description                                  
-----------------------------------------------------------|------------------------------|----------------------------------------------
 [**uploadChunkedIdPut**](UploadApi.md#uploadChunkedIdPut) | **PUT** /upload/chunked/{id} | Upload next chunk to specific chunked_upload 
 [**uploadChunkedPost**](UploadApi.md#uploadChunkedPost)   | **POST** /upload/chunked     | Create an upload record to upload a file     

# **uploadChunkedIdPut**

> uploadChunkedIdPut($id, $body)

Upload next chunk to specific chunked_upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PutChunked(); // \Paqtcom\Simplicate\Model\PutChunked | Next chunk for an chunked_upload

try {
    $apiInstance->uploadChunkedIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadChunkedIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                      | Notes 
----------|----------------------------------------------------------------|----------------------------------|-------
 **id**   | **string**                                                     | The template&#39;s id            |
 **body** | [**\Paqtcom\Simplicate\Model\PutChunked**](../Model/PutChunked.md) | Next chunk for an chunked_upload |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **uploadChunkedPost**

> uploadChunkedPost($body)

Create an upload record to upload a file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostChunked(); // \Paqtcom\Simplicate\Model\PostChunked | Data required to initialize an upload

try {
    $apiInstance->uploadChunkedPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadChunkedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                           | Notes 
----------|------------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostChunked**](../Model/PostChunked.md) | Data required to initialize an upload |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

