# Swagger\Client\SalesApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                               | HTTP request                               | Description                                                 
--------------------------------------------------------------------------------------|--------------------------------------------|-------------------------------------------------------------
 [**salesConverttoprojectIdGet**](SalesApi.md#salesConverttoprojectIdGet)             | **GET** /sales/converttoproject/{id}       | Shows if the provided sale id can be converted to a project 
 [**salesDocumentGet**](SalesApi.md#salesDocumentGet)                                 | **GET** /sales/document                    | Fetches all available documents for sales                   
 [**salesDocumentIdDelete**](SalesApi.md#salesDocumentIdDelete)                       | **DELETE** /sales/document/{id}            | Deletes the document with the given id                      
 [**salesDocumentIdGet**](SalesApi.md#salesDocumentIdGet)                             | **GET** /sales/document/{id}               | Fetches a single document for sales by its id               
 [**salesDocumentPost**](SalesApi.md#salesDocumentPost)                               | **POST** /sales/document                   | create a document                                           
 [**salesDocumentPut**](SalesApi.md#salesDocumentPut)                                 | **PUT** /sales/document                    | update a document                                           
 [**salesDocumenttypeGet**](SalesApi.md#salesDocumenttypeGet)                         | **GET** /sales/documenttype                | Fetches all available document types for Sales              
 [**salesDocumenttypeIdGet**](SalesApi.md#salesDocumenttypeIdGet)                     | **GET** /sales/documenttype/{id}           | Fetches a single document type for Sales by its id          
 [**salesQuoteGet**](SalesApi.md#salesQuoteGet)                                       | **GET** /sales/quote                       | Fetches all available quote templates for sales             
 [**salesQuoteIdDelete**](SalesApi.md#salesQuoteIdDelete)                             | **DELETE** /sales/quote/{id}               | Deletes the quote template with the given id                
 [**salesQuoteIdGet**](SalesApi.md#salesQuoteIdGet)                                   | **GET** /sales/quote/{id}                  | Fetches a single quote template for sales by its id         
 [**salesQuoteIdPut**](SalesApi.md#salesQuoteIdPut)                                   | **PUT** /sales/quote/{id}                  | update a quote template                                     
 [**salesQuotePost**](SalesApi.md#salesQuotePost)                                     | **POST** /sales/quote                      | create a quote template                                     
 [**salesQuoteemailIdPut**](SalesApi.md#salesQuoteemailIdPut)                         | **PUT** /sales/quoteemail/{id}             | append only a single email to the emails collection quote   
 [**salesQuotestatusGet**](SalesApi.md#salesQuotestatusGet)                           | **GET** /sales/quotestatus                 | Fetches all quote statuses                                  
 [**salesQuotestatusIdGet**](SalesApi.md#salesQuotestatusIdGet)                       | **GET** /sales/quotestatus/{id}            | Fetches a single quote status for quotes by its id          
 [**salesQuotetemplateGet**](SalesApi.md#salesQuotetemplateGet)                       | **GET** /sales/quotetemplate               | Fetches all available quote templates for sales             
 [**salesQuotetemplateIdDelete**](SalesApi.md#salesQuotetemplateIdDelete)             | **DELETE** /sales/quotetemplate/{id}       | Deletes the quote template with the given id                
 [**salesQuotetemplateIdGet**](SalesApi.md#salesQuotetemplateIdGet)                   | **GET** /sales/quotetemplate/{id}          | Fetches a single quote template for sales by its id         
 [**salesQuotetemplateIdPut**](SalesApi.md#salesQuotetemplateIdPut)                   | **PUT** /sales/quotetemplate/{id}          | update a quote template                                     
 [**salesQuotetemplatePost**](SalesApi.md#salesQuotetemplatePost)                     | **POST** /sales/quotetemplate              | create a quote template                                     
 [**salesRevenuegroupGet**](SalesApi.md#salesRevenuegroupGet)                         | **GET** /sales/revenuegroup                | Fetches all revenue groups                                  
 [**salesRevenuegroupIdGet**](SalesApi.md#salesRevenuegroupIdGet)                     | **GET** /sales/revenuegroup/{id}           | Fetches a single revenue group by id                        
 [**salesSalesGet**](SalesApi.md#salesSalesGet)                                       | **GET** /sales/sales                       | Fetches all sales                                           
 [**salesSalesIdDuplicatePost**](SalesApi.md#salesSalesIdDuplicatePost)               | **POST** /sales/sales/{id}/duplicate       | Duplicates a sales deal on base of the id                   
 [**salesSalesIdGet**](SalesApi.md#salesSalesIdGet)                                   | **GET** /sales/sales/{id}                  | Fetches a single sales by id                                
 [**salesSalesIdPut**](SalesApi.md#salesSalesIdPut)                                   | **PUT** /sales/sales/{id}                  | Updates a sales for the given id                            
 [**salesSalesPost**](SalesApi.md#salesSalesPost)                                     | **POST** /sales/sales                      | Add a new sales                                             
 [**salesSalescustomfieldgroupsGet**](SalesApi.md#salesSalescustomfieldgroupsGet)     | **GET** /sales/salescustomfieldgroups      | Fetches all custom field groups available for sales         
 [**salesSalescustomfieldgroupsIdGet**](SalesApi.md#salesSalescustomfieldgroupsIdGet) | **GET** /sales/salescustomfieldgroups/{id} | Fetches a single custom field group available for project   
 [**salesSalescustomfieldsGet**](SalesApi.md#salesSalescustomfieldsGet)               | **GET** /sales/salescustomfields           | Fetches all custom fields available for sales               
 [**salesSalescustomfieldsIdGet**](SalesApi.md#salesSalescustomfieldsIdGet)           | **GET** /sales/salescustomfields/{id}      | Fetches a single custom field available for sales           
 [**salesSalesfiltersGet**](SalesApi.md#salesSalesfiltersGet)                         | **GET** /sales/salesfilters                | Fetches all filters available for sales                     
 [**salesSalesfiltersIdGet**](SalesApi.md#salesSalesfiltersIdGet)                     | **GET** /sales/salesfilters/{id}           | Fetches a single filter available for sales                 
 [**salesSalesprogressGet**](SalesApi.md#salesSalesprogressGet)                       | **GET** /sales/salesprogress               | Fetches all sales progresses                                
 [**salesSalesprogressIdGet**](SalesApi.md#salesSalesprogressIdGet)                   | **GET** /sales/salesprogress/{id}          | Fetches a single sales progress by id                       
 [**salesSalesreasonGet**](SalesApi.md#salesSalesreasonGet)                           | **GET** /sales/salesreason                 | Fetches all sales reasons                                   
 [**salesSalesreasonIdGet**](SalesApi.md#salesSalesreasonIdGet)                       | **GET** /sales/salesreason/{id}            | Fetches a single sales reason by id                         
 [**salesSalessourceGet**](SalesApi.md#salesSalessourceGet)                           | **GET** /sales/salessource                 | Fetches all sales source                                    
 [**salesSalessourceIdGet**](SalesApi.md#salesSalessourceIdGet)                       | **GET** /sales/salessource/{id}            | Fetches a single sales source by id                         
 [**salesSalesstatusGet**](SalesApi.md#salesSalesstatusGet)                           | **GET** /sales/salesstatus                 | Fetches all sales statusses                                 
 [**salesSalesstatusIdGet**](SalesApi.md#salesSalesstatusIdGet)                       | **GET** /sales/salesstatus/{id}            | Fetches a single sales status by id                         
 [**salesServiceGet**](SalesApi.md#salesServiceGet)                                   | **GET** /sales/service                     | Fetches all services                                        
 [**salesServiceIdDelete**](SalesApi.md#salesServiceIdDelete)                         | **DELETE** /sales/service/{id}             | Deletes the service with the given id                       
 [**salesServiceIdDuplicatePost**](SalesApi.md#salesServiceIdDuplicatePost)           | **POST** /sales/service/{id}/duplicate     | Duplicates a service on base of the id                      
 [**salesServiceIdGet**](SalesApi.md#salesServiceIdGet)                               | **GET** /sales/service/{id}                | Fetches a single service by id                              
 [**salesServiceIdPut**](SalesApi.md#salesServiceIdPut)                               | **PUT** /sales/service/{id}                | Updates a service for the given id                          
 [**salesServicePost**](SalesApi.md#salesServicePost)                                 | **POST** /sales/service                    | Add a new service                                           

# **salesConverttoprojectIdGet**

> \Swagger\Client\Model\RestResultSale salesConverttoprojectIdGet($id)

Shows if the provided sale id can be converted to a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesConverttoprojectIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesConverttoprojectIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSale**](../Model/RestResultSale.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentGet**

> \Swagger\Client\Model\RestResultDocuments salesDocumentGet($offset, $limit, $sort)

Fetches all available documents for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumentGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultDocuments**](../Model/RestResultDocuments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentIdDelete**

> salesDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->salesDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentIdGet**

> \Swagger\Client\Model\RestResultDocument salesDocumentIdGet($id)

Fetches a single document for sales by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultDocument**](../Model/RestResultDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentPost**

> salesDocumentPost($body)

create a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostDocument(); // \Swagger\Client\Model\PostDocument | Document object containing data

try {
    $apiInstance->salesDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                     | Notes 
----------|--------------------------------------------------------------------|---------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostDocument**](../Model/PostDocument.md) | Document object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentPut**

> salesDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutDocument(); // \Swagger\Client\Model\PutDocument | Document object containing data

try {
    $apiInstance->salesDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumentPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                     | Notes 
----------|------------------------------------------------------------------|---------------------------------|-------
 **body** | [**\Swagger\Client\Model\PutDocument**](../Model/PutDocument.md) | Document object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumenttypeGet**

> \Swagger\Client\Model\RestResultDocumentTypes salesDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for Sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultDocumentTypes**](../Model/RestResultDocumentTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumenttypeIdGet**

> \Swagger\Client\Model\RestResultDocumentType salesDocumenttypeIdGet($id)

Fetches a single document type for Sales by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultDocumentType**](../Model/RestResultDocumentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteGet**

> \Swagger\Client\Model\RestResultQuotes salesQuoteGet($offset, $limit, $sort)

Fetches all available quote templates for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesQuoteGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuoteGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultQuotes**](../Model/RestResultQuotes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteIdDelete**

> salesQuoteIdDelete($id)

Deletes the quote template with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->salesQuoteIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteIdGet**

> \Swagger\Client\Model\RestResultQuote salesQuoteIdGet($id)

Fetches a single quote template for sales by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesQuoteIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultQuote**](../Model/RestResultQuote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteIdPut**

> salesQuoteIdPut($id, $body)

update a quote template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostQuote(); // \Swagger\Client\Model\PostQuote | Quote template object containing data

try {
    $apiInstance->salesQuoteIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                           | Notes 
----------|--------------------------------------------------------------|---------------------------------------|-------
 **id**   | **string**                                                   | The template&#39;s id                 |
 **body** | [**\Swagger\Client\Model\PostQuote**](../Model/PostQuote.md) | Quote template object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotePost**

> salesQuotePost($body)

create a quote template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostQuote(); // \Swagger\Client\Model\PostQuote | Quote template object containing data

try {
    $apiInstance->salesQuotePost($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                           | Notes 
----------|--------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostQuote**](../Model/PostQuote.md) | Quote template object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteemailIdPut**

> salesQuoteemailIdPut($id, $body)

append only a single email to the emails collection quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PutQuoteEmail(); // \Swagger\Client\Model\PutQuoteEmail | Document object containing data

try {
    $apiInstance->salesQuoteemailIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuoteemailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                     | Notes 
----------|----------------------------------------------------------------------|---------------------------------|-------
 **id**   | **string**                                                           | The template&#39;s id           |
 **body** | [**\Swagger\Client\Model\PutQuoteEmail**](../Model/PutQuoteEmail.md) | Document object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotestatusGet**

> \Swagger\Client\Model\RestResultQuoteStatuses salesQuotestatusGet()

Fetches all quote statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->salesQuotestatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotestatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RestResultQuoteStatuses**](../Model/RestResultQuoteStatuses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotestatusIdGet**

> \Swagger\Client\Model\RestResultQuoteStatus salesQuotestatusIdGet($id)

Fetches a single quote status for quotes by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesQuotestatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotestatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultQuoteStatus**](../Model/RestResultQuoteStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotetemplateGet**

> \Swagger\Client\Model\RestResultQuoteTemplates salesQuotetemplateGet($offset, $limit, $sort)

Fetches all available quote templates for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesQuotetemplateGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotetemplateGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultQuoteTemplates**](../Model/RestResultQuoteTemplates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotetemplateIdDelete**

> salesQuotetemplateIdDelete($id)

Deletes the quote template with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->salesQuotetemplateIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotetemplateIdDelete: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotetemplateIdGet**

> \Swagger\Client\Model\RestResultQuoteTemplate salesQuotetemplateIdGet($id)

Fetches a single quote template for sales by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesQuotetemplateIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotetemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultQuoteTemplate**](../Model/RestResultQuoteTemplate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotetemplateIdPut**

> salesQuotetemplateIdPut($id, $body)

update a quote template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostQuoteTemplate(); // \Swagger\Client\Model\PostQuoteTemplate | Quote template object containing data

try {
    $apiInstance->salesQuotetemplateIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotetemplateIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                           | Notes 
----------|------------------------------------------------------------------------------|---------------------------------------|-------
 **id**   | **string**                                                                   | The template&#39;s id                 |
 **body** | [**\Swagger\Client\Model\PostQuoteTemplate**](../Model/PostQuoteTemplate.md) | Quote template object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotetemplatePost**

> salesQuotetemplatePost($body)

create a quote template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostQuoteTemplate(); // \Swagger\Client\Model\PostQuoteTemplate | Quote template object containing data

try {
    $apiInstance->salesQuotetemplatePost($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesQuotetemplatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                           | Notes 
----------|------------------------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostQuoteTemplate**](../Model/PostQuoteTemplate.md) | Quote template object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRevenuegroupGet**

> \Swagger\Client\Model\RestResultRevenueGroups salesRevenuegroupGet($offset, $limit, $sort)

Fetches all revenue groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesRevenuegroupGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesRevenuegroupGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultRevenueGroups**](../Model/RestResultRevenueGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRevenuegroupIdGet**

> \Swagger\Client\Model\RestResultRevenueGroup salesRevenuegroupIdGet($id)

Fetches a single revenue group by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesRevenuegroupIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesRevenuegroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultRevenueGroup**](../Model/RestResultRevenueGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesGet**

> \Swagger\Client\Model\RestResultSales salesSalesGet($offset, $limit, $sort)

Fetches all sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalesGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSales**](../Model/RestResultSales.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesIdDuplicatePost**

> salesSalesIdDuplicatePost($id, $body)

Duplicates a sales deal on base of the id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostDuplicateSales(); // \Swagger\Client\Model\PostDuplicateSales | Optional parameters to overwrite

try {
    $apiInstance->salesSalesIdDuplicatePost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                           | Description                      | Notes      
----------|--------------------------------------------------------------------------------|----------------------------------|------------
 **id**   | **string**                                                                     | The template&#39;s id            |
 **body** | [**\Swagger\Client\Model\PostDuplicateSales**](../Model/PostDuplicateSales.md) | Optional parameters to overwrite | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesIdGet**

> \Swagger\Client\Model\RestResultSale salesSalesIdGet($id)

Fetches a single sales by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSale**](../Model/RestResultSale.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesIdPut**

> salesSalesIdPut($id, $body)

Updates a sales for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostSales(); // \Swagger\Client\Model\PostSales | project object that needs to be updated

try {
    $apiInstance->salesSalesIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                             | Notes 
----------|--------------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                                   | The template&#39;s id                   |
 **body** | [**\Swagger\Client\Model\PostSales**](../Model/PostSales.md) | project object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesPost**

> salesSalesPost($body)

Add a new sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostSales(); // \Swagger\Client\Model\PostSales | Sales object that needs to be added

try {
    $apiInstance->salesSalesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                         | Notes 
----------|--------------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostSales**](../Model/PostSales.md) | Sales object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalescustomfieldgroupsGet**

> \Swagger\Client\Model\RestResultCustomFieldGroups salesSalescustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalescustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalescustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultCustomFieldGroups**](../Model/RestResultCustomFieldGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalescustomfieldgroupsIdGet**

> \Swagger\Client\Model\RestResultCustomFieldGroup salesSalescustomfieldgroupsIdGet($id)

Fetches a single custom field group available for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalescustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalescustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultCustomFieldGroup**](../Model/RestResultCustomFieldGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalescustomfieldsGet**

> \Swagger\Client\Model\RestResultCustomFields salesSalescustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalescustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalescustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultCustomFields**](../Model/RestResultCustomFields.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalescustomfieldsIdGet**

> \Swagger\Client\Model\RestResultCustomField salesSalescustomfieldsIdGet($id)

Fetches a single custom field available for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalescustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalescustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultCustomField**](../Model/RestResultCustomField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesfiltersGet**

> \Swagger\Client\Model\RestResultFilters salesSalesfiltersGet($offset, $limit, $sort)

Fetches all filters available for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalesfiltersGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesfiltersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultFilters**](../Model/RestResultFilters.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesfiltersIdGet**

> \Swagger\Client\Model\RestResultFilter salesSalesfiltersIdGet($id)

Fetches a single filter available for sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalesfiltersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesfiltersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultFilter**](../Model/RestResultFilter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesprogressGet**

> \Swagger\Client\Model\RestResultSalesProgresses salesSalesprogressGet($offset, $limit, $sort)

Fetches all sales progresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalesprogressGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesprogressGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSalesProgresses**](../Model/RestResultSalesProgresses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesprogressIdGet**

> \Swagger\Client\Model\RestResultSalesProgress salesSalesprogressIdGet($id)

Fetches a single sales progress by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalesprogressIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesprogressIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSalesProgress**](../Model/RestResultSalesProgress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesreasonGet**

> \Swagger\Client\Model\RestResultSalesReasons salesSalesreasonGet($offset, $limit, $sort, $select)

Fetches all sales reasons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->salesSalesreasonGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesreasonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name       | Type       | Description                           | Notes                     
------------|------------|---------------------------------------|---------------------------
 **offset** | **int**    | The offset to search from             | [optional]                
 **limit**  | **int**    | The limit of max allowed results      | [optional] [default to 5] 
 **sort**   | **string** | Sort the result by column name        | [optional]                
 **select** | **string** | Select only specific fields to return | [optional]                

### Return type

[**\Swagger\Client\Model\RestResultSalesReasons**](../Model/RestResultSalesReasons.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesreasonIdGet**

> \Swagger\Client\Model\RestResultSalesReason salesSalesreasonIdGet($id)

Fetches a single sales reason by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalesreasonIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesreasonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSalesReason**](../Model/RestResultSalesReason.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalessourceGet**

> \Swagger\Client\Model\RestResultSalesSources salesSalessourceGet($offset, $limit, $sort)

Fetches all sales source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalessourceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalessourceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSalesSources**](../Model/RestResultSalesSources.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalessourceIdGet**

> \Swagger\Client\Model\RestResultSalesSource salesSalessourceIdGet($id)

Fetches a single sales source by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalessourceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalessourceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSalesSource**](../Model/RestResultSalesSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesstatusGet**

> \Swagger\Client\Model\RestResultSalesStatusses salesSalesstatusGet($offset, $limit, $sort)

Fetches all sales statusses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesSalesstatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSalesStatusses**](../Model/RestResultSalesStatusses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesSalesstatusIdGet**

> \Swagger\Client\Model\RestResultSalesStatus salesSalesstatusIdGet($id)

Fetches a single sales status by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesSalesstatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesSalesstatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSalesStatus**](../Model/RestResultSalesStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServiceGet**

> \Swagger\Client\Model\RestResultSalesServices salesServiceGet($offset, $limit, $sort)

Fetches all services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->salesServiceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultSalesServices**](../Model/RestResultSalesServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServiceIdDelete**

> salesServiceIdDelete($id)

Deletes the service with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->salesServiceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServiceIdDelete: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServiceIdDuplicatePost**

> salesServiceIdDuplicatePost($id, $body)

Duplicates a service on base of the id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\DuplicateProjectService(); // \Swagger\Client\Model\DuplicateProjectService | Optional parameters to overwrite

try {
    $apiInstance->salesServiceIdDuplicatePost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServiceIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                                     | Description                      | Notes      
----------|------------------------------------------------------------------------------------------|----------------------------------|------------
 **id**   | **string**                                                                               | The template&#39;s id            |
 **body** | [**\Swagger\Client\Model\DuplicateProjectService**](../Model/DuplicateProjectService.md) | Optional parameters to overwrite | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServiceIdGet**

> \Swagger\Client\Model\RestResultSalesService salesServiceIdGet($id)

Fetches a single service by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->salesServiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultSalesService**](../Model/RestResultSalesService.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServiceIdPut**

> salesServiceIdPut($id, $body)

Updates a service for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostSalesService(); // \Swagger\Client\Model\PostSalesService | Service object that needs to be updated

try {
    $apiInstance->salesServiceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                             | Notes 
----------|----------------------------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id                   |
 **body** | [**\Swagger\Client\Model\PostSalesService**](../Model/PostSalesService.md) | Service object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesServicePost**

> salesServicePost($body)

Add a new service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostSalesService(); // \Swagger\Client\Model\PostSalesService | template object that needs to be added

try {
    $apiInstance->salesServicePost($body);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                            | Notes 
----------|----------------------------------------------------------------------------|----------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostSalesService**](../Model/PostSalesService.md) | template object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

