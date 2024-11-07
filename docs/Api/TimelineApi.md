# TimelineApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                      | HTTP request                         | Description                                                                                                     
-----------------------------------------------------------------------------|--------------------------------------|-----------------------------------------------------------------------------------------------------------------
 [**timelineAttachmentIdDelete**](TimelineApi.md#timelineAttachmentIdDelete) | **DELETE** /timeline/attachment/{id} | Deletes the timeline message attachment for the given id                                                        
 [**timelineAttachmentPost**](TimelineApi.md#timelineAttachmentPost)         | **POST** /timeline/attachment        | Creates a new timeline message attachment - which is the link between /timeline/message and /documents/document 
 [**timelineMessageGet**](TimelineApi.md#timelineMessageGet)                 | **GET** /timeline/message            | Fetches all messages                                                                                            
 [**timelineMessageIdDelete**](TimelineApi.md#timelineMessageIdDelete)       | **DELETE** /timeline/message/{id}    | Deletes the timeline message for the given id                                                                   
 [**timelineMessageIdGet**](TimelineApi.md#timelineMessageIdGet)             | **GET** /timeline/message/{id}       | Fetches a single time line message by id                                                                        
 [**timelineMessagePost**](TimelineApi.md#timelineMessagePost)               | **POST** /timeline/message           | Add a new timeline message                                                                                      
 [**timelineMessagetypeGet**](TimelineApi.md#timelineMessagetypeGet)         | **GET** /timeline/messagetype        | Fetches all message types                                                                                       
 [**timelineMessagetypeIdGet**](TimelineApi.md#timelineMessagetypeIdGet)     | **GET** /timeline/messagetype/{id}   | Fetches a single timeline message type by id                                                                    

# **timelineAttachmentIdDelete**

> timelineAttachmentIdDelete($id)

Deletes the timeline message attachment for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->timelineAttachmentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineAttachmentIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **timelineAttachmentPost**

> timelineAttachmentPost($body)

Creates a new timeline message attachment - which is the link between /timeline/message and /documents/document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PostAttachment(); // \Paqtcom\Simplicate\Model\PostAttachment | 

try {
    $apiInstance->timelineAttachmentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                   | Description | Notes 
----------|------------------------------------------------------------------------|-------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostAttachment**](../Model/PostAttachment.md) |             |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timelineMessageGet**

> \Paqtcom\Simplicate\Model\RestResultTimelineMessages timelineMessageGet($offset, $limit, $sort)

Fetches all messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->timelineMessageGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessageGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultTimelineMessages**](../Model/RestResultTimelineMessages.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timelineMessageIdDelete**

> timelineMessageIdDelete($id)

Deletes the timeline message for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->timelineMessageIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessageIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **timelineMessageIdGet**

> \Paqtcom\Simplicate\Model\RestResultTimelineMessage timelineMessageIdGet($id)

Fetches a single time line message by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->timelineMessageIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultTimelineMessage**](../Model/RestResultTimelineMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timelineMessagePost**

> timelineMessagePost($body)

Add a new timeline message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PostMessage(); // \Paqtcom\Simplicate\Model\PostMessage | Timeline message that needs to be added

try {
    $apiInstance->timelineMessagePost($body);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                             | Notes 
----------|------------------------------------------------------------------|-----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostMessage**](../Model/PostMessage.md) | Timeline message that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timelineMessagetypeGet**

> \Paqtcom\Simplicate\Model\RestResultTimelineMessageTypes timelineMessagetypeGet($offset, $limit, $sort)

Fetches all message types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->timelineMessagetypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessagetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultTimelineMessageTypes**](../Model/RestResultTimelineMessageTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timelineMessagetypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultTimelineMessageType timelineMessagetypeIdGet($id)

Fetches a single timeline message type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->timelineMessagetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineMessagetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultTimelineMessageType**](../Model/RestResultTimelineMessageType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

