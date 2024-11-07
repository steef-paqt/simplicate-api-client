# CustomFieldsApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                          | HTTP request                         | Description                                     
---------------------------------------------------------------------------------|--------------------------------------|-------------------------------------------------
 [**customfieldsGroupGet**](CustomFieldsApi.md#customfieldsGroupGet)             | **GET** /customfields/group          | Fetches all custom field groups                 
 [**customfieldsGroupIdDelete**](CustomFieldsApi.md#customfieldsGroupIdDelete)   | **DELETE** /customfields/group/{id}  | Deletes the customfield group for the given id  
 [**customfieldsGroupIdGet**](CustomFieldsApi.md#customfieldsGroupIdGet)         | **GET** /customfields/group/{id}     | Fetches single custom field group               
 [**customfieldsGroupIdPost**](CustomFieldsApi.md#customfieldsGroupIdPost)       | **POST** /customfields/group/{id}    | Updates an group for the given id               
 [**customfieldsGroupIdPut**](CustomFieldsApi.md#customfieldsGroupIdPut)         | **PUT** /customfields/group/{id}     | Updates an group for the given id               
 [**customfieldsModelGet**](CustomFieldsApi.md#customfieldsModelGet)             | **GET** /customfields/model          | Fetches all custom field models                 
 [**customfieldsModelIdGet**](CustomFieldsApi.md#customfieldsModelIdGet)         | **GET** /customfields/model/{id}     | Fetches all custom field models                 
 [**customfieldsOptionGet**](CustomFieldsApi.md#customfieldsOptionGet)           | **GET** /customfields/option         | Fetches all custom field options                
 [**customfieldsOptionIdDelete**](CustomFieldsApi.md#customfieldsOptionIdDelete) | **DELETE** /customfields/option/{id} | Deletes the customfield option for the given id 
 [**customfieldsOptionIdGet**](CustomFieldsApi.md#customfieldsOptionIdGet)       | **GET** /customfields/option/{id}    | Fetches single custom field option              
 [**customfieldsOptionIdPost**](CustomFieldsApi.md#customfieldsOptionIdPost)     | **POST** /customfields/option/{id}   | Creates an option                               
 [**customfieldsOptionIdPut**](CustomFieldsApi.md#customfieldsOptionIdPut)       | **PUT** /customfields/option/{id}    | Updates an option                               
 [**customfieldsTypeGet**](CustomFieldsApi.md#customfieldsTypeGet)               | **GET** /customfields/type           | Fetches all custom field types                  
 [**customfieldsTypeIdGet**](CustomFieldsApi.md#customfieldsTypeIdGet)           | **GET** /customfields/type/{id}      | Fetches single custom field type                

# **customfieldsGroupGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroups customfieldsGroupGet($offset, $limit, $sort)

Fetches all custom field groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsGroupGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsGroupGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups**](../Model/RestResultCustomFieldGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsGroupIdDelete**

> customfieldsGroupIdDelete($id)

Deletes the customfield group for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->customfieldsGroupIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **customfieldsGroupIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup customfieldsGroupIdGet($offset, $limit, $sort)

Fetches single custom field group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsGroupIdGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsGroupIdGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup**](../Model/RestResultCustomFieldGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsGroupIdPost**

> customfieldsGroupIdPost($id, $body)

Updates an group for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\CustomFieldGroup(); // \Paqtcom\Simplicate\Model\CustomFieldGroup | Organization object containing data that with the new values

try {
    $apiInstance->customfieldsGroupIdPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsGroupIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                                                  | Notes 
----------|----------------------------------------------------------------------------|--------------------------------------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id                                        |
 **body** | [**\Paqtcom\Simplicate\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md) | Organization object containing data that with the new values |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsGroupIdPut**

> customfieldsGroupIdPut($id, $body)

Updates an group for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\CustomFieldGroup(); // \Paqtcom\Simplicate\Model\CustomFieldGroup | Organization object containing data that with the new values

try {
    $apiInstance->customfieldsGroupIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                                                  | Notes 
----------|----------------------------------------------------------------------------|--------------------------------------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id                                        |
 **body** | [**\Paqtcom\Simplicate\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md) | Organization object containing data that with the new values |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsModelGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldModels customfieldsModelGet($offset, $limit, $sort)

Fetches all custom field models

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsModelGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsModelGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldModels**](../Model/RestResultCustomFieldModels.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsModelIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldModel customfieldsModelIdGet($offset, $limit, $sort)

Fetches all custom field models

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsModelIdGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsModelIdGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldModel**](../Model/RestResultCustomFieldModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsOptionGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldOptions customfieldsOptionGet($offset, $limit, $sort)

Fetches all custom field options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsOptionGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsOptionGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldOptions**](../Model/RestResultCustomFieldOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsOptionIdDelete**

> customfieldsOptionIdDelete($id)

Deletes the customfield option for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->customfieldsOptionIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsOptionIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **customfieldsOptionIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldOption customfieldsOptionIdGet($id, $offset, $limit, $sort)

Fetches single custom field option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsOptionIdGet($id, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name       | Type       | Description                      | Notes                     
------------|------------|----------------------------------|---------------------------
 **id**     | **string** | The template&#39;s id            |
 **offset** | **int**    | The offset to search from        | [optional]                
 **limit**  | **int**    | The limit of max allowed results | [optional] [default to 5] 
 **sort**   | **string** | Sort the result by column name   | [optional]                

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldOption**](../Model/RestResultCustomFieldOption.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsOptionIdPost**

> customfieldsOptionIdPost($body)

Creates an option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$body = new \Paqtcom\Simplicate\Model\CustomFieldOption(); // \Paqtcom\Simplicate\Model\CustomFieldOption | CustomFieldOption object containing data

try {
    $apiInstance->customfieldsOptionIdPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsOptionIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                              | Notes 
----------|------------------------------------------------------------------------------|------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\CustomFieldOption**](../Model/CustomFieldOption.md) | CustomFieldOption object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsOptionIdPut**

> customfieldsOptionIdPut($id, $body)

Updates an option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\CustomFieldOption(); // \Paqtcom\Simplicate\Model\CustomFieldOption | CustomFieldOption object containing data

try {
    $apiInstance->customfieldsOptionIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                              | Notes 
----------|------------------------------------------------------------------------------|------------------------------------------|-------
 **id**   | **string**                                                                   | The template&#39;s id                    |
 **body** | [**\Paqtcom\Simplicate\Model\CustomFieldOption**](../Model/CustomFieldOption.md) | CustomFieldOption object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsTypeGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldTypes customfieldsTypeGet($offset, $limit, $sort)

Fetches all custom field types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsTypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldTypes**](../Model/RestResultCustomFieldTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **customfieldsTypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldType customfieldsTypeIdGet($offset, $limit, $sort)

Fetches single custom field type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->customfieldsTypeIdGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customfieldsTypeIdGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldType**](../Model/RestResultCustomFieldType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

