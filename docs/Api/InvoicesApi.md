# Swagger\Client\InvoicesApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                            | HTTP request                            | Description                                           
-----------------------------------------------------------------------------------|-----------------------------------------|-------------------------------------------------------
 [**invoicesDocumentGet**](InvoicesApi.md#invoicesDocumentGet)                     | **GET** /invoices/document              | Fetches all available documents for invoices          
 [**invoicesDocumentIdDelete**](InvoicesApi.md#invoicesDocumentIdDelete)           | **DELETE** /invoices/document/{id}      | Deletes the document with the given id                
 [**invoicesDocumentIdGet**](InvoicesApi.md#invoicesDocumentIdGet)                 | **GET** /invoices/document/{id}         | Fetches a single document for invoices by its id      
 [**invoicesDocumentPost**](InvoicesApi.md#invoicesDocumentPost)                   | **POST** /invoices/document             | create a document                                     
 [**invoicesDocumentPut**](InvoicesApi.md#invoicesDocumentPut)                     | **PUT** /invoices/document              | update a document                                     
 [**invoicesDocumenttypeGet**](InvoicesApi.md#invoicesDocumenttypeGet)             | **GET** /invoices/documenttype          | Fetches all available document types for Invoices     
 [**invoicesDocumenttypeIdGet**](InvoicesApi.md#invoicesDocumenttypeIdGet)         | **GET** /invoices/documenttype/{id}     | Fetches a single document type for Invoices by its id 
 [**invoicesInvoiceGet**](InvoicesApi.md#invoicesInvoiceGet)                       | **GET** /invoices/invoice               | Fetches all invoices                                  
 [**invoicesInvoiceIdDelete**](InvoicesApi.md#invoicesInvoiceIdDelete)             | **DELETE** /invoices/invoice/{id}       | Deletes the invoice for the given id                  
 [**invoicesInvoiceIdGet**](InvoicesApi.md#invoicesInvoiceIdGet)                   | **GET** /invoices/invoice/{id}          | Fetches a single invoice by id                        
 [**invoicesInvoiceIdPut**](InvoicesApi.md#invoicesInvoiceIdPut)                   | **PUT** /invoices/invoice/{id}          | Updates a invoice for the given id                    
 [**invoicesInvoicePost**](InvoicesApi.md#invoicesInvoicePost)                     | **POST** /invoices/invoice              | Add a new invoice                                     
 [**invoicesInvoicestatusGet**](InvoicesApi.md#invoicesInvoicestatusGet)           | **GET** /invoices/invoicestatus         | Fetches all invoice status                            
 [**invoicesInvoicestatusIdGet**](InvoicesApi.md#invoicesInvoicestatusIdGet)       | **GET** /invoices/invoicestatus/{id}    | Fetches a single invoice status by id                 
 [**invoicesPaymentGet**](InvoicesApi.md#invoicesPaymentGet)                       | **GET** /invoices/payment               | Fetches all payments                                  
 [**invoicesPaymentIdGet**](InvoicesApi.md#invoicesPaymentIdGet)                   | **GET** /invoices/payment/{id}          | Fetches a single payment by id                        
 [**invoicesPaymentIdPut**](InvoicesApi.md#invoicesPaymentIdPut)                   | **PUT** /invoices/payment/{id}          | Updates a payment for the given id                    
 [**invoicesPaymentPost**](InvoicesApi.md#invoicesPaymentPost)                     | **POST** /invoices/payment              | Add a new payment                                     
 [**invoicesPaymenttermGet**](InvoicesApi.md#invoicesPaymenttermGet)               | **GET** /invoices/paymentterm           | Fetches all paymentterms                              
 [**invoicesPaymenttermIdGet**](InvoicesApi.md#invoicesPaymenttermIdGet)           | **GET** /invoices/paymentterm/{id}      | Fetches a single payment term by id                   
 [**invoicesPropositionGet**](InvoicesApi.md#invoicesPropositionGet)               | **GET** /invoices/proposition           | Show all available propositions                       
 [**invoicesRemindersetGet**](InvoicesApi.md#invoicesRemindersetGet)               | **GET** /invoices/reminderset           | Fetches all invoice reminder sets                     
 [**invoicesRemindersetIdGet**](InvoicesApi.md#invoicesRemindersetIdGet)           | **GET** /invoices/reminderset/{id}      | Fetches a single invoice reminder set by id           
 [**invoicesRemindertemplateGet**](InvoicesApi.md#invoicesRemindertemplateGet)     | **GET** /invoices/remindertemplate      | Fetches all invoice reminder templates                
 [**invoicesRemindertemplateIdGet**](InvoicesApi.md#invoicesRemindertemplateIdGet) | **GET** /invoices/remindertemplate/{id} | Fetches a single invoice reminder template by id      
 [**invoicesVatclassGet**](InvoicesApi.md#invoicesVatclassGet)                     | **GET** /invoices/vatclass              | Fetches all to vat class                              
 [**invoicesVatclassIdGet**](InvoicesApi.md#invoicesVatclassIdGet)                 | **GET** /invoices/vatclass/{id}         | Fetches a single vat class by id                      

# **invoicesDocumentGet**

> \Swagger\Client\Model\RestResultDocuments invoicesDocumentGet($offset, $limit, $sort)

Fetches all available documents for invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumentGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesDocumentIdDelete**

> invoicesDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->invoicesDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **invoicesDocumentIdGet**

> \Swagger\Client\Model\RestResultDocument invoicesDocumentIdGet($id)

Fetches a single document for invoices by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesDocumentPost**

> invoicesDocumentPost($body)

create a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostDocument(); // \Swagger\Client\Model\PostDocument | Document object containing data

try {
    $apiInstance->invoicesDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumentPost: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesDocumentPut**

> invoicesDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutDocument(); // \Swagger\Client\Model\PutDocument | Document object containing data

try {
    $apiInstance->invoicesDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumentPut: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesDocumenttypeGet**

> \Swagger\Client\Model\RestResultDocumentTypes invoicesDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for Invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesDocumenttypeIdGet**

> \Swagger\Client\Model\RestResultDocumentType invoicesDocumenttypeIdGet($id)

Fetches a single document type for Invoices by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoiceGet**

> \Swagger\Client\Model\RestResultInvoices invoicesInvoiceGet($offset, $limit, $sort)

Fetches all invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesInvoiceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultInvoices**](../Model/RestResultInvoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoiceIdDelete**

> invoicesInvoiceIdDelete($id)

Deletes the invoice for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->invoicesInvoiceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoiceIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **invoicesInvoiceIdGet**

> \Swagger\Client\Model\RestResultInvoice invoicesInvoiceIdGet($id)

Fetches a single invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesInvoiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultInvoice**](../Model/RestResultInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoiceIdPut**

> invoicesInvoiceIdPut($id, $body)

Updates a invoice for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\Invoice(); // \Swagger\Client\Model\Invoice | template object that needs to be updated

try {
    $apiInstance->invoicesInvoiceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                     | Description                              | Notes 
----------|----------------------------------------------------------|------------------------------------------|-------
 **id**   | **string**                                               | The template&#39;s id                    |
 **body** | [**\Swagger\Client\Model\Invoice**](../Model/Invoice.md) | template object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoicePost**

> invoicesInvoicePost($body)

Add a new invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostInvoice(); // \Swagger\Client\Model\PostInvoice | Invoice object that needs to be added

try {
    $apiInstance->invoicesInvoicePost($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                           | Notes 
----------|------------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostInvoice**](../Model/PostInvoice.md) | Invoice object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoicestatusGet**

> \Swagger\Client\Model\RestResultInvoiceStatuses invoicesInvoicestatusGet($offset, $limit, $sort)

Fetches all invoice status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesInvoicestatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoicestatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultInvoiceStatuses**](../Model/RestResultInvoiceStatuses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesInvoicestatusIdGet**

> \Swagger\Client\Model\RestResultInvoiceStatus invoicesInvoicestatusIdGet($id)

Fetches a single invoice status by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesInvoicestatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesInvoicestatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultInvoiceStatus**](../Model/RestResultInvoiceStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymentGet**

> \Swagger\Client\Model\RestResultPayments invoicesPaymentGet($offset, $limit, $sort)

Fetches all payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesPaymentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymentGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultPayments**](../Model/RestResultPayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymentIdGet**

> \Swagger\Client\Model\RestResultPayment invoicesPaymentIdGet($id)

Fetches a single payment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesPaymentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultPayment**](../Model/RestResultPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymentIdPut**

> invoicesPaymentIdPut($id, $body)

Updates a payment for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\Payment(); // \Swagger\Client\Model\Payment | Payment object that needs to be updated

try {
    $apiInstance->invoicesPaymentIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                     | Description                             | Notes 
----------|----------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                               | The template&#39;s id                   |
 **body** | [**\Swagger\Client\Model\Payment**](../Model/Payment.md) | Payment object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymentPost**

> invoicesPaymentPost($body)

Add a new payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Payment(); // \Swagger\Client\Model\Payment | Payment object that needs to be added

try {
    $apiInstance->invoicesPaymentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                     | Description                           | Notes 
----------|----------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Swagger\Client\Model\Payment**](../Model/Payment.md) | Payment object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymenttermGet**

> \Swagger\Client\Model\RestResultPaymentTerms invoicesPaymenttermGet($offset, $limit, $sort)

Fetches all paymentterms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesPaymenttermGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymenttermGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultPaymentTerms**](../Model/RestResultPaymentTerms.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPaymenttermIdGet**

> \Swagger\Client\Model\RestResultPaymentTerm invoicesPaymenttermIdGet($id)

Fetches a single payment term by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesPaymenttermIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPaymenttermIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultPaymentTerm**](../Model/RestResultPaymentTerm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesPropositionGet**

> \Swagger\Client\Model\RestResultPropositions invoicesPropositionGet($offset, $limit, $sort)

Show all available propositions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesPropositionGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPropositionGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultPropositions**](../Model/RestResultPropositions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesRemindersetGet**

> \Swagger\Client\Model\RestResultReminderSets invoicesRemindersetGet($offset, $limit, $sort)

Fetches all invoice reminder sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesRemindersetGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRemindersetGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultReminderSets**](../Model/RestResultReminderSets.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesRemindersetIdGet**

> \Swagger\Client\Model\RestResultReminderSet invoicesRemindersetIdGet($id)

Fetches a single invoice reminder set by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesRemindersetIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRemindersetIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultReminderSet**](../Model/RestResultReminderSet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesRemindertemplateGet**

> \Swagger\Client\Model\RestResultReminderTemplates invoicesRemindertemplateGet($offset, $limit, $sort)

Fetches all invoice reminder templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesRemindertemplateGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRemindertemplateGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultReminderTemplates**](../Model/RestResultReminderTemplates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesRemindertemplateIdGet**

> \Swagger\Client\Model\RestResultReminderTemplate invoicesRemindertemplateIdGet($id)

Fetches a single invoice reminder template by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesRemindertemplateIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRemindertemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultReminderTemplate**](../Model/RestResultReminderTemplate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesVatclassGet**

> \Swagger\Client\Model\RestResultVatClasses invoicesVatclassGet($offset, $limit, $sort)

Fetches all to vat class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->invoicesVatclassGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesVatclassGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultVatClasses**](../Model/RestResultVatClasses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **invoicesVatclassIdGet**

> \Swagger\Client\Model\RestResultVatClass invoicesVatclassIdGet($id)

Fetches a single vat class by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->invoicesVatclassIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesVatclassIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultVatClass**](../Model/RestResultVatClass.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

