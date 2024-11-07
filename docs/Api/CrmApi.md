# CrmApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                                       | HTTP request                                    | Description                                                                                    
----------------------------------------------------------------------------------------------|-------------------------------------------------|------------------------------------------------------------------------------------------------
 [**crmContactpersonGet**](CrmApi.md#crmContactpersonGet)                                     | **GET** /crm/contactperson                      | Fetches all contact persons                                                                    
 [**crmContactpersonIdDelete**](CrmApi.md#crmContactpersonIdDelete)                           | **DELETE** /crm/contactperson/{id}              | Deletes the contact person for the given id                                                    
 [**crmContactpersonIdGet**](CrmApi.md#crmContactpersonIdGet)                                 | **GET** /crm/contactperson/{id}                 | Fetches a single contact person by id                                                          
 [**crmCountryGet**](CrmApi.md#crmCountryGet)                                                 | **GET** /crm/country                            | Fetches all available countries                                                                
 [**crmCountryIdGet**](CrmApi.md#crmCountryIdGet)                                             | **GET** /crm/country/{id}                       | Fetches a single country by id                                                                 
 [**crmDebtorGet**](CrmApi.md#crmDebtorGet)                                                   | **GET** /crm/debtor                             | Fetches all debtors available (organization and if business to consumer is enabled person also 
 [**crmDocumentGet**](CrmApi.md#crmDocumentGet)                                               | **GET** /crm/document                           | Fetches all available documents for CRM                                                        
 [**crmDocumentIdDelete**](CrmApi.md#crmDocumentIdDelete)                                     | **DELETE** /crm/document/{id}                   | Deletes the document with the given id                                                         
 [**crmDocumentIdGet**](CrmApi.md#crmDocumentIdGet)                                           | **GET** /crm/document/{id}                      | Fetches a single document for CRM by its id                                                    
 [**crmDocumentPost**](CrmApi.md#crmDocumentPost)                                             | **POST** /crm/document                          | update a document                                                                              
 [**crmDocumentPut**](CrmApi.md#crmDocumentPut)                                               | **PUT** /crm/document                           | update a document                                                                              
 [**crmDocumenttypeGet**](CrmApi.md#crmDocumenttypeGet)                                       | **GET** /crm/documenttype                       | Fetches all available document types for CRM                                                   
 [**crmDocumenttypeIdGet**](CrmApi.md#crmDocumenttypeIdGet)                                   | **GET** /crm/documenttype/{id}                  | Fetches a single document type for CRM by its id                                               
 [**crmGenderGet**](CrmApi.md#crmGenderGet)                                                   | **GET** /crm/gender                             | Fetches all available genders                                                                  
 [**crmGenderIdGet**](CrmApi.md#crmGenderIdGet)                                               | **GET** /crm/gender/{id}                        | Fetches a single gender by id                                                                  
 [**crmIndustryGet**](CrmApi.md#crmIndustryGet)                                               | **GET** /crm/industry                           | Fetches all industry types                                                                     
 [**crmIndustryIdGet**](CrmApi.md#crmIndustryIdGet)                                           | **GET** /crm/industry/{id}                      | Fetches a industry type by id                                                                  
 [**crmInterestsGet**](CrmApi.md#crmInterestsGet)                                             | **GET** /crm/interests                          | Fetches all interests available                                                                
 [**crmInterestsIdGet**](CrmApi.md#crmInterestsIdGet)                                         | **GET** /crm/interests/{id}                     | Fetches a single interest by id                                                                
 [**crmMyorganizationprofileGet**](CrmApi.md#crmMyorganizationprofileGet)                     | **GET** /crm/myorganizationprofile              | Fetches all my organization profiles                                                           
 [**crmMyorganizationprofileIdGet**](CrmApi.md#crmMyorganizationprofileIdGet)                 | **GET** /crm/myorganizationprofile/{id}         | Fetches a single my organization profile by id                                                 
 [**crmOrganizationGet**](CrmApi.md#crmOrganizationGet)                                       | **GET** /crm/organization                       | Fetches all organizations                                                                      
 [**crmOrganizationIdDelete**](CrmApi.md#crmOrganizationIdDelete)                             | **DELETE** /crm/organization/{id}               | Deletes the organization for the given id                                                      
 [**crmOrganizationIdGet**](CrmApi.md#crmOrganizationIdGet)                                   | **GET** /crm/organization/{id}                  | Fetches a single organization by id                                                            
 [**crmOrganizationIdPut**](CrmApi.md#crmOrganizationIdPut)                                   | **PUT** /crm/organization/{id}                  | Updates an organization for the given id                                                       
 [**crmOrganizationPost**](CrmApi.md#crmOrganizationPost)                                     | **POST** /crm/organization                      | Add a new organization                                                                         
 [**crmOrganizationcustomfieldgroupsGet**](CrmApi.md#crmOrganizationcustomfieldgroupsGet)     | **GET** /crm/organizationcustomfieldgroups      | Fetches all custom field groups available for organizations                                    
 [**crmOrganizationcustomfieldgroupsIdGet**](CrmApi.md#crmOrganizationcustomfieldgroupsIdGet) | **GET** /crm/organizationcustomfieldgroups/{id} | Fetches a single custom field group available for organization                                 
 [**crmOrganizationcustomfieldsGet**](CrmApi.md#crmOrganizationcustomfieldsGet)               | **GET** /crm/organizationcustomfields           | Fetches all custom fields available for organizations                                          
 [**crmOrganizationcustomfieldsIdGet**](CrmApi.md#crmOrganizationcustomfieldsIdGet)           | **GET** /crm/organizationcustomfields/{id}      | Fetches a single custom field available for organization                                       
 [**crmOrganizationsizeGet**](CrmApi.md#crmOrganizationsizeGet)                               | **GET** /crm/organizationsize                   | Fetches all available organization sizes                                                       
 [**crmOrganizationsizeIdGet**](CrmApi.md#crmOrganizationsizeIdGet)                           | **GET** /crm/organizationsize/{id}              | Fetches a single organization size by id                                                       
 [**crmPersonGet**](CrmApi.md#crmPersonGet)                                                   | **GET** /crm/person                             | Fetches all persons                                                                            
 [**crmPersonIdDelete**](CrmApi.md#crmPersonIdDelete)                                         | **DELETE** /crm/person/{id}                     | Deletes the person for the given id                                                            
 [**crmPersonIdGet**](CrmApi.md#crmPersonIdGet)                                               | **GET** /crm/person/{id}                        | Fetches a single person by id                                                                  
 [**crmPersonIdPut**](CrmApi.md#crmPersonIdPut)                                               | **PUT** /crm/person/{id}                        | Updates a person for the given id                                                              
 [**crmPersonPost**](CrmApi.md#crmPersonPost)                                                 | **POST** /crm/person                            | Add a new person                                                                               
 [**crmPersoncustomfieldgroupsGet**](CrmApi.md#crmPersoncustomfieldgroupsGet)                 | **GET** /crm/personcustomfieldgroups            | Fetches all custom field groups available for persons                                          
 [**crmPersoncustomfieldgroupsIdGet**](CrmApi.md#crmPersoncustomfieldgroupsIdGet)             | **GET** /crm/personcustomfieldgroups/{id}       | Fetches a single custom field group available for person                                       
 [**crmPersoncustomfieldsGet**](CrmApi.md#crmPersoncustomfieldsGet)                           | **GET** /crm/personcustomfields                 | Fetches all custom fields available for persons                                                
 [**crmPersoncustomfieldsIdGet**](CrmApi.md#crmPersoncustomfieldsIdGet)                       | **GET** /crm/personcustomfields/{id}            | Fetches a single custom field available for person                                             
 [**crmRelationtypeGet**](CrmApi.md#crmRelationtypeGet)                                       | **GET** /crm/relationtype                       | Fetches all relation types                                                                     
 [**crmRelationtypeIdGet**](CrmApi.md#crmRelationtypeIdGet)                                   | **GET** /crm/relationtype/{id}                  | Fetches a single relation type by id                                                           

# **crmContactpersonGet**

> \Paqtcom\Simplicate\Model\RestResultContactPersons crmContactpersonGet($offset, $limit, $sort, $select)

Fetches all contact persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmContactpersonGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmContactpersonGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultContactPersons**](../Model/RestResultContactPersons.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmContactpersonIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmContactpersonIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultContactPerson crmContactpersonIdGet($id)

Fetches a single contact person by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmContactpersonIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmContactpersonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultContactPerson**](../Model/RestResultContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmCountryGet**

> \Paqtcom\Simplicate\Model\RestResultCountries crmCountryGet($offset, $limit, $sort)

Fetches all available countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmCountryGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmCountryGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCountries**](../Model/RestResultCountries.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmCountryIdGet**

> \Paqtcom\Simplicate\Model\RestResultCountry crmCountryIdGet($id)

Fetches a single country by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmCountryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCountry**](../Model/RestResultCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDebtorGet**

> \Paqtcom\Simplicate\Model\RestResultDebtorList crmDebtorGet($offset, $limit, $sort)

Fetches all debtors available (organization and if business to consumer is enabled person also

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDebtorGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDebtorGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultDebtorList**](../Model/RestResultDebtorList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDocumentGet**

> \Paqtcom\Simplicate\Model\RestResultDocuments crmDocumentGet($offset, $limit, $sort)

Fetches all available documents for CRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumentGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultDocuments**](../Model/RestResultDocuments.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultDocument crmDocumentIdGet($id)

Fetches a single document for CRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultDocument**](../Model/RestResultDocument.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PostDocument(); // \Paqtcom\Simplicate\Model\PostDocument | Document object containing data

try {
    $apiInstance->crmDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                     | Notes 
----------|--------------------------------------------------------------------|---------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostDocument**](../Model/PostDocument.md) | Document object containing data |

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PutDocument(); // \Paqtcom\Simplicate\Model\PutDocument | Document object containing data

try {
    $apiInstance->crmDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumentPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                     | Notes 
----------|------------------------------------------------------------------|---------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PutDocument**](../Model/PutDocument.md) | Document object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDocumenttypeGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentTypes crmDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for CRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultDocumentTypes**](../Model/RestResultDocumentTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmDocumenttypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentType crmDocumenttypeIdGet($id)

Fetches a single document type for CRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultDocumentType**](../Model/RestResultDocumentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmGenderGet**

> \Paqtcom\Simplicate\Model\RestResultGenders crmGenderGet($offset, $limit, $sort)

Fetches all available genders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmGenderGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmGenderGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultGenders**](../Model/RestResultGenders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmGenderIdGet**

> \Paqtcom\Simplicate\Model\RestResultGender crmGenderIdGet($id)

Fetches a single gender by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmGenderIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmGenderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultGender**](../Model/RestResultGender.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmIndustryGet**

> \Paqtcom\Simplicate\Model\RestResultIndustries crmIndustryGet($offset, $limit, $sort)

Fetches all industry types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmIndustryGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmIndustryGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultIndustries**](../Model/RestResultIndustries.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmIndustryIdGet**

> \Paqtcom\Simplicate\Model\RestResultIndustry crmIndustryIdGet($id)

Fetches a industry type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmIndustryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmIndustryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultIndustry**](../Model/RestResultIndustry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmInterestsGet**

> \Paqtcom\Simplicate\Model\RestResultInterests crmInterestsGet($offset, $limit, $sort)

Fetches all interests available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmInterestsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmInterestsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultInterests**](../Model/RestResultInterests.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmInterestsIdGet**

> \Paqtcom\Simplicate\Model\RestResultInterest crmInterestsIdGet($id)

Fetches a single interest by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmInterestsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmInterestsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultInterest**](../Model/RestResultInterest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmMyorganizationprofileGet**

> \Paqtcom\Simplicate\Model\RestResultMyOrganizationProfiles crmMyorganizationprofileGet($offset, $limit, $sort)

Fetches all my organization profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmMyorganizationprofileGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmMyorganizationprofileGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultMyOrganizationProfiles**](../Model/RestResultMyOrganizationProfiles.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmMyorganizationprofileIdGet**

> \Paqtcom\Simplicate\Model\RestResultMyOrganizationProfile crmMyorganizationprofileIdGet($id)

Fetches a single my organization profile by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmMyorganizationprofileIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmMyorganizationprofileIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultMyOrganizationProfile**](../Model/RestResultMyOrganizationProfile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationGet**

> \Paqtcom\Simplicate\Model\RestResultOrganizations crmOrganizationGet($offset, $limit, $sort, $select)

Fetches all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmOrganizationGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultOrganizations**](../Model/RestResultOrganizations.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmOrganizationIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultOrganization crmOrganizationIdGet($id)

Fetches a single organization by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultOrganization**](../Model/RestResultOrganization.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostOrganization(); // \Paqtcom\Simplicate\Model\PostOrganization | Organization object containing data that with the new values

try {
    $apiInstance->crmOrganizationIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                                                  | Notes 
----------|----------------------------------------------------------------------------|--------------------------------------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id                                        |
 **body** | [**\Paqtcom\Simplicate\Model\PostOrganization**](../Model/PostOrganization.md) | Organization object containing data that with the new values |

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PostOrganization(); // \Paqtcom\Simplicate\Model\PostOrganization | Organization object containing data

try {
    $apiInstance->crmOrganizationPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                         | Notes 
----------|----------------------------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostOrganization**](../Model/PostOrganization.md) | Organization object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldgroupsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroups crmOrganizationcustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationcustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationcustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

# **crmOrganizationcustomfieldgroupsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup crmOrganizationcustomfieldgroupsIdGet($id)

Fetches a single custom field group available for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationcustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationcustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup**](../Model/RestResultCustomFieldGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFields crmOrganizationcustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationcustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationcustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFields**](../Model/RestResultCustomFields.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationcustomfieldsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomField crmOrganizationcustomfieldsIdGet($id)

Fetches a single custom field available for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationcustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationcustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCustomField**](../Model/RestResultCustomField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationsizeGet**

> \Paqtcom\Simplicate\Model\RestResultOrganizationSizes crmOrganizationsizeGet($offset, $limit, $sort)

Fetches all available organization sizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmOrganizationsizeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationsizeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultOrganizationSizes**](../Model/RestResultOrganizationSizes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmOrganizationsizeIdGet**

> \Paqtcom\Simplicate\Model\RestResultOrganizationSize crmOrganizationsizeIdGet($id)

Fetches a single organization size by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmOrganizationsizeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmOrganizationsizeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultOrganizationSize**](../Model/RestResultOrganizationSize.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersonGet**

> \Paqtcom\Simplicate\Model\RestResultPersons crmPersonGet($offset, $limit, $sort, $select)

Fetches all persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name
$select = "select_example"; // string | Select only specific fields to return

try {
    $result = $apiInstance->crmPersonGet($offset, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersonGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultPersons**](../Model/RestResultPersons.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->crmPersonIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersonIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultPerson crmPersonIdGet($id)

Fetches a single person by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersonIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultPerson**](../Model/RestResultPerson.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostPerson(); // \Paqtcom\Simplicate\Model\PostPerson | Person object that needs to be added

try {
    $apiInstance->crmPersonIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersonIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                          | Notes 
----------|----------------------------------------------------------------|--------------------------------------|-------
 **id**   | **string**                                                     | The template&#39;s id                |
 **body** | [**\Paqtcom\Simplicate\Model\PostPerson**](../Model/PostPerson.md) | Person object that needs to be added |

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

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$body = new \Paqtcom\Simplicate\Model\PostPerson(); // \Paqtcom\Simplicate\Model\PostPerson | Person object that needs to be added

try {
    $apiInstance->crmPersonPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                           | Description                          | Notes 
----------|----------------------------------------------------------------|--------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostPerson**](../Model/PostPerson.md) | Person object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldgroupsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroups crmPersoncustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmPersoncustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersoncustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

# **crmPersoncustomfieldgroupsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup crmPersoncustomfieldgroupsIdGet($id)

Fetches a single custom field group available for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersoncustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersoncustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup**](../Model/RestResultCustomFieldGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFields crmPersoncustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmPersoncustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersoncustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCustomFields**](../Model/RestResultCustomFields.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmPersoncustomfieldsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomField crmPersoncustomfieldsIdGet($id)

Fetches a single custom field available for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmPersoncustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmPersoncustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCustomField**](../Model/RestResultCustomField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmRelationtypeGet**

> \Paqtcom\Simplicate\Model\RestResultRelationTypes crmRelationtypeGet($offset, $limit, $sort)

Fetches all relation types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->crmRelationtypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmRelationtypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultRelationTypes**](../Model/RestResultRelationTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **crmRelationtypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultRelationType crmRelationtypeIdGet($id)

Fetches a single relation type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\CrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new Paqtcom\Simplicate\ClientFactory::create("<key>", "<secret>", "<domain>")()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->crmRelationtypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmApi->crmRelationtypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultRelationType**](../Model/RestResultRelationType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

