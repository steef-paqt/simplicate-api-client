# Swagger\Client\CRMApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                                       | HTTP request                                    | Description                                                                                    
----------------------------------------------------------------------------------------------|-------------------------------------------------|------------------------------------------------------------------------------------------------
 [**crmContactpersonGet**](CRMApi.md#crmContactpersonGet)                                     | **GET** /crm/contactperson                      | Fetches all contact persons                                                                    
 [**crmContactpersonIdDelete**](CRMApi.md#crmContactpersonIdDelete)                           | **DELETE** /crm/contactperson/{id}              | Deletes the contact person for the given id                                                    
 [**crmContactpersonIdGet**](CRMApi.md#crmContactpersonIdGet)                                 | **GET** /crm/contactperson/{id}                 | Fetches a single contact person by id                                                          
 [**crmCountryGet**](CRMApi.md#crmCountryGet)                                                 | **GET** /crm/country                            | Fetches all available countries                                                                
 [**crmCountryIdGet**](CRMApi.md#crmCountryIdGet)                                             | **GET** /crm/country/{id}                       | Fetches a single country by id                                                                 
 [**crmDebtorGet**](CRMApi.md#crmDebtorGet)                                                   | **GET** /crm/debtor                             | Fetches all debtors available (organization and if business to consumer is enabled person also 
 [**crmDocumentGet**](CRMApi.md#crmDocumentGet)                                               | **GET** /crm/document                           | Fetches all available documents for CRM                                                        
 [**crmDocumentIdDelete**](CRMApi.md#crmDocumentIdDelete)                                     | **DELETE** /crm/document/{id}                   | Deletes the document with the given id                                                         
 [**crmDocumentIdGet**](CRMApi.md#crmDocumentIdGet)                                           | **GET** /crm/document/{id}                      | Fetches a single document for CRM by its id                                                    
 [**crmDocumentPost**](CRMApi.md#crmDocumentPost)                                             | **POST** /crm/document                          | update a document                                                                              
 [**crmDocumentPut**](CRMApi.md#crmDocumentPut)                                               | **PUT** /crm/document                           | update a document                                                                              
 [**crmDocumenttypeGet**](CRMApi.md#crmDocumenttypeGet)                                       | **GET** /crm/documenttype                       | Fetches all available document types for CRM                                                   
 [**crmDocumenttypeIdGet**](CRMApi.md#crmDocumenttypeIdGet)                                   | **GET** /crm/documenttype/{id}                  | Fetches a single document type for CRM by its id                                               
 [**crmGenderGet**](CRMApi.md#crmGenderGet)                                                   | **GET** /crm/gender                             | Fetches all available genders                                                                  
 [**crmGenderIdGet**](CRMApi.md#crmGenderIdGet)                                               | **GET** /crm/gender/{id}                        | Fetches a single gender by id                                                                  
 [**crmIndustryGet**](CRMApi.md#crmIndustryGet)                                               | **GET** /crm/industry                           | Fetches all industry types                                                                     
 [**crmIndustryIdGet**](CRMApi.md#crmIndustryIdGet)                                           | **GET** /crm/industry/{id}                      | Fetches a industry type by id                                                                  
 [**crmInterestsGet**](CRMApi.md#crmInterestsGet)                                             | **GET** /crm/interests                          | Fetches all interests available                                                                
 [**crmInterestsIdGet**](CRMApi.md#crmInterestsIdGet)                                         | **GET** /crm/interests/{id}                     | Fetches a single interest by id                                                                
 [**crmMyorganizationprofileGet**](CRMApi.md#crmMyorganizationprofileGet)                     | **GET** /crm/myorganizationprofile              | Fetches all my organization profiles                                                           
 [**crmMyorganizationprofileIdGet**](CRMApi.md#crmMyorganizationprofileIdGet)                 | **GET** /crm/myorganizationprofile/{id}         | Fetches a single my organization profile by id                                                 
 [**crmOrganizationGet**](CRMApi.md#crmOrganizationGet)                                       | **GET** /crm/organization                       | Fetches all organizations                                                                      
 [**crmOrganizationIdDelete**](CRMApi.md#crmOrganizationIdDelete)                             | **DELETE** /crm/organization/{id}               | Deletes the organization for the given id                                                      
 [**crmOrganizationIdGet**](CRMApi.md#crmOrganizationIdGet)                                   | **GET** /crm/organization/{id}                  | Fetches a single organization by id                                                            
 [**crmOrganizationIdPut**](CRMApi.md#crmOrganizationIdPut)                                   | **PUT** /crm/organization/{id}                  | Updates an organization for the given id                                                       
 [**crmOrganizationPost**](CRMApi.md#crmOrganizationPost)                                     | **POST** /crm/organization                      | Add a new organization                                                                         
 [**crmOrganizationcustomfieldgroupsGet**](CRMApi.md#crmOrganizationcustomfieldgroupsGet)     | **GET** /crm/organizationcustomfieldgroups      | Fetches all custom field groups available for organizations                                    
 [**crmOrganizationcustomfieldgroupsIdGet**](CRMApi.md#crmOrganizationcustomfieldgroupsIdGet) | **GET** /crm/organizationcustomfieldgroups/{id} | Fetches a single custom field group available for organization                                 
 [**crmOrganizationcustomfieldsGet**](CRMApi.md#crmOrganizationcustomfieldsGet)               | **GET** /crm/organizationcustomfields           | Fetches all custom fields available for organizations                                          
 [**crmOrganizationcustomfieldsIdGet**](CRMApi.md#crmOrganizationcustomfieldsIdGet)           | **GET** /crm/organizationcustomfields/{id}      | Fetches a single custom field available for organization                                       
 [**crmOrganizationsizeGet**](CRMApi.md#crmOrganizationsizeGet)                               | **GET** /crm/organizationsize                   | Fetches all available organization sizes                                                       
 [**crmOrganizationsizeIdGet**](CRMApi.md#crmOrganizationsizeIdGet)                           | **GET** /crm/organizationsize/{id}              | Fetches a single organization size by id                                                       
 [**crmPersonGet**](CRMApi.md#crmPersonGet)                                                   | **GET** /crm/person                             | Fetches all persons                                                                            
 [**crmPersonIdDelete**](CRMApi.md#crmPersonIdDelete)                                         | **DELETE** /crm/person/{id}                     | Deletes the person for the given id                                                            
 [**crmPersonIdGet**](CRMApi.md#crmPersonIdGet)                                               | **GET** /crm/person/{id}                        | Fetches a single person by id                                                                  
 [**crmPersonIdPut**](CRMApi.md#crmPersonIdPut)                                               | **PUT** /crm/person/{id}                        | Updates a person for the given id                                                              
 [**crmPersonPost**](CRMApi.md#crmPersonPost)                                                 | **POST** /crm/person                            | Add a new person                                                                               
 [**crmPersoncustomfieldgroupsGet**](CRMApi.md#crmPersoncustomfieldgroupsGet)                 | **GET** /crm/personcustomfieldgroups            | Fetches all custom field groups available for persons                                          
 [**crmPersoncustomfieldgroupsIdGet**](CRMApi.md#crmPersoncustomfieldgroupsIdGet)             | **GET** /crm/personcustomfieldgroups/{id}       | Fetches a single custom field group available for person                                       
 [**crmPersoncustomfieldsGet**](CRMApi.md#crmPersoncustomfieldsGet)                           | **GET** /crm/personcustomfields                 | Fetches all custom fields available for persons                                                
 [**crmPersoncustomfieldsIdGet**](CRMApi.md#crmPersoncustomfieldsIdGet)                       | **GET** /crm/personcustomfields/{id}            | Fetches a single custom field available for person                                             
 [**crmRelationtypeGet**](CRMApi.md#crmRelationtypeGet)                                       | **GET** /crm/relationtype                       | Fetches all relation types                                                                     
 [**crmRelationtypeIdGet**](CRMApi.md#crmRelationtypeIdGet)                                   | **GET** /crm/relationtype/{id}                  | Fetches a single relation type by id                                                           

# **crmContactpersonGet**

> \Swagger\Client\Model\RestResultContactPersons crmContactpersonGet($offset, $limit, $sort, $select)

Fetches all contact persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmContactpersonGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmContactpersonGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultContactPersons**](../Model/RestResultContactPersons.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmContactpersonIdDelete**

> crmContactpersonIdDelete($id)

Deletes the contact person for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmContactpersonIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmContactpersonIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **crmContactpersonIdGet**

> \Swagger\Client\Model\RestResultContactPerson crmContactpersonIdGet($id)

Fetches a single contact person by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmContactpersonIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmContactpersonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultContactPerson**](../Model/RestResultContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmCountryGet**

> \Swagger\Client\Model\RestResultCountries crmCountryGet($offset, $limit, $sort)

Fetches all available countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmCountryGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmCountryGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultCountries**](../Model/RestResultCountries.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmCountryIdGet**

> \Swagger\Client\Model\RestResultCountry crmCountryIdGet($id)

Fetches a single country by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmCountryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultCountry**](../Model/RestResultCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDebtorGet**

> \Swagger\Client\Model\RestResultDebtorList crmDebtorGet($offset, $limit, $sort)

Fetches all debtors available (organization and if business to consumer is enabled person also

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDebtorGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDebtorGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultDebtorList**](../Model/RestResultDebtorList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDocumentGet**

> \Swagger\Client\Model\RestResultDocuments crmDocumentGet($offset, $limit, $sort)

Fetches all available documents for CRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumentGet: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumentIdDelete**

> crmDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumentIdGet**

> \Swagger\Client\Model\RestResultDocument crmDocumentIdGet($id)

Fetches a single document for CRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumentPost**

> crmDocumentPost($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostDocument(); // \Swagger\Client\Model\PostDocument | Document object containing data

try {
    $apiInstance->crmDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumentPost: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumentPut**

> crmDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutDocument(); // \Swagger\Client\Model\PutDocument | Document object containing data

try {
    $apiInstance->crmDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumentPut: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumenttypeGet**

> \Swagger\Client\Model\RestResultDocumentTypes crmDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for CRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

# **crmDocumenttypeIdGet**

> \Swagger\Client\Model\RestResultDocumentType crmDocumenttypeIdGet($id)

Fetches a single document type for CRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
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

# **crmGenderGet**

> \Swagger\Client\Model\RestResultGenders crmGenderGet($offset, $limit, $sort)

Fetches all available genders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmGenderGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmGenderGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultGenders**](../Model/RestResultGenders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmGenderIdGet**

> \Swagger\Client\Model\RestResultGender crmGenderIdGet($id)

Fetches a single gender by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmGenderIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmGenderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultGender**](../Model/RestResultGender.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmIndustryGet**

> \Swagger\Client\Model\RestResultIndustries crmIndustryGet($offset, $limit, $sort)

Fetches all industry types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmIndustryGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmIndustryGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultIndustries**](../Model/RestResultIndustries.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmIndustryIdGet**

> \Swagger\Client\Model\RestResultIndustry crmIndustryIdGet($id)

Fetches a industry type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmIndustryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmIndustryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultIndustry**](../Model/RestResultIndustry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmInterestsGet**

> \Swagger\Client\Model\RestResultInterests crmInterestsGet($offset, $limit, $sort)

Fetches all interests available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmInterestsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmInterestsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultInterests**](../Model/RestResultInterests.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmInterestsIdGet**

> \Swagger\Client\Model\RestResultInterest crmInterestsIdGet($id)

Fetches a single interest by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmInterestsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmInterestsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultInterest**](../Model/RestResultInterest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmMyorganizationprofileGet**

> \Swagger\Client\Model\RestResultMyOrganizationProfiles crmMyorganizationprofileGet($offset, $limit, $sort)

Fetches all my organization profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmMyorganizationprofileGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmMyorganizationprofileGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultMyOrganizationProfiles**](../Model/RestResultMyOrganizationProfiles.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmMyorganizationprofileIdGet**

> \Swagger\Client\Model\RestResultMyOrganizationProfile crmMyorganizationprofileIdGet($id)

Fetches a single my organization profile by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmMyorganizationprofileIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmMyorganizationprofileIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultMyOrganizationProfile**](../Model/RestResultMyOrganizationProfile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationGet**

> \Swagger\Client\Model\RestResultOrganizations crmOrganizationGet($offset, $limit, $sort, $select)

Fetches all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmOrganizationGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultOrganizations**](../Model/RestResultOrganizations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationIdDelete**

> crmOrganizationIdDelete($id)

Deletes the organization for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmOrganizationIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **crmOrganizationIdGet**

> \Swagger\Client\Model\RestResultOrganization crmOrganizationIdGet($id)

Fetches a single organization by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultOrganization**](../Model/RestResultOrganization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationIdPut**

> crmOrganizationIdPut($id, $body)

Updates an organization for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostOrganization(); // \Swagger\Client\Model\PostOrganization | Organization object containing data that with the new values

try {
    $apiInstance->crmOrganizationIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                                                  | Notes 
----------|----------------------------------------------------------------------------|--------------------------------------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id                                        |
 **body** | [**\Swagger\Client\Model\PostOrganization**](../Model/PostOrganization.md) | Organization object containing data that with the new values |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationPost**

> crmOrganizationPost($body)

Add a new organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostOrganization(); // \Swagger\Client\Model\PostOrganization | Organization object containing data

try {
    $apiInstance->crmOrganizationPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                         | Notes 
----------|----------------------------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostOrganization**](../Model/PostOrganization.md) | Organization object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldgroupsGet**

> \Swagger\Client\Model\RestResultCustomFieldGroups crmOrganizationcustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationcustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationcustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldgroupsIdGet**

> \Swagger\Client\Model\RestResultCustomFieldGroup crmOrganizationcustomfieldgroupsIdGet($id)

Fetches a single custom field group available for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationcustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationcustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldsGet**

> \Swagger\Client\Model\RestResultCustomFields crmOrganizationcustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationcustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationcustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldsIdGet**

> \Swagger\Client\Model\RestResultCustomField crmOrganizationcustomfieldsIdGet($id)

Fetches a single custom field available for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationcustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationcustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationsizeGet**

> \Swagger\Client\Model\RestResultOrganizationSizes crmOrganizationsizeGet($offset, $limit, $sort)

Fetches all available organization sizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationsizeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationsizeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultOrganizationSizes**](../Model/RestResultOrganizationSizes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationsizeIdGet**

> \Swagger\Client\Model\RestResultOrganizationSize crmOrganizationsizeIdGet($id)

Fetches a single organization size by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationsizeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmOrganizationsizeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultOrganizationSize**](../Model/RestResultOrganizationSize.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersonGet**

> \Swagger\Client\Model\RestResultPersons crmPersonGet($offset, $limit, $sort, $select)

Fetches all persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmPersonGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersonGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultPersons**](../Model/RestResultPersons.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersonIdDelete**

> crmPersonIdDelete($id)

Deletes the person for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmPersonIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersonIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **crmPersonIdGet**

> \Swagger\Client\Model\RestResultPerson crmPersonIdGet($id)

Fetches a single person by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersonIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultPerson**](../Model/RestResultPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersonIdPut**

> crmPersonIdPut($id, $body)

Updates a person for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostPerson(); // \Swagger\Client\Model\PostPerson | Person object that needs to be added

try {
    $apiInstance->crmPersonIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersonIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                          | Notes 
----------|----------------------------------------------------------------|--------------------------------------|-------
 **id**   | **string**                                                     | The template&#39;s id                |
 **body** | [**\Swagger\Client\Model\PostPerson**](../Model/PostPerson.md) | Person object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersonPost**

> crmPersonPost($body)

Add a new person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostPerson(); // \Swagger\Client\Model\PostPerson | Person object that needs to be added

try {
    $apiInstance->crmPersonPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                          | Notes 
----------|----------------------------------------------------------------|--------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostPerson**](../Model/PostPerson.md) | Person object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldgroupsGet**

> \Swagger\Client\Model\RestResultCustomFieldGroups crmPersoncustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmPersoncustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersoncustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldgroupsIdGet**

> \Swagger\Client\Model\RestResultCustomFieldGroup crmPersoncustomfieldgroupsIdGet($id)

Fetches a single custom field group available for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersoncustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersoncustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldsGet**

> \Swagger\Client\Model\RestResultCustomFields crmPersoncustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmPersoncustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersoncustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldsIdGet**

> \Swagger\Client\Model\RestResultCustomField crmPersoncustomfieldsIdGet($id)

Fetches a single custom field available for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersoncustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmPersoncustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmRelationtypeGet**

> \Swagger\Client\Model\RestResultRelationTypes crmRelationtypeGet($offset, $limit, $sort)

Fetches all relation types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmRelationtypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmRelationtypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultRelationTypes**](../Model/RestResultRelationTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmRelationtypeIdGet**

> \Swagger\Client\Model\RestResultRelationType crmRelationtypeIdGet($id)

Fetches a single relation type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmRelationtypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmRelationtypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultRelationType**](../Model/RestResultRelationType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

