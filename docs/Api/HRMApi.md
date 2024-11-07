# Swagger\Client\HRMApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                               | HTTP request                                | Description                                                
--------------------------------------------------------------------------------------|---------------------------------------------|------------------------------------------------------------
 [**hrmAbsenceGet**](HRMApi.md#hrmAbsenceGet)                                         | **GET** /hrm/absence                        | Fetches all absence for employees                          
 [**hrmAbsenceIdDelete**](HRMApi.md#hrmAbsenceIdDelete)                               | **DELETE** /hrm/absence/{id}                | Deletes the absence for the given id                       
 [**hrmAbsenceIdGet**](HRMApi.md#hrmAbsenceIdGet)                                     | **GET** /hrm/absence/{id}                   | Fetches a single absence by its id                         
 [**hrmAbsenceIdPut**](HRMApi.md#hrmAbsenceIdPut)                                     | **PUT** /hrm/absence/{id}                   | Updates an absence for the given id                        
 [**hrmAbsencePost**](HRMApi.md#hrmAbsencePost)                                       | **POST** /hrm/absence                       | Add a new absence entity                                   
 [**hrmAbsencetypeGet**](HRMApi.md#hrmAbsencetypeGet)                                 | **GET** /hrm/absencetype                    | Fetches all absence types                                  
 [**hrmAbsencetypeIdGet**](HRMApi.md#hrmAbsencetypeIdGet)                             | **GET** /hrm/absencetype/{id}               | Fetches a single absence type by absence type id           
 [**hrmCivilstatusGet**](HRMApi.md#hrmCivilstatusGet)                                 | **GET** /hrm/civilstatus                    | Fetches all available civil statuses                       
 [**hrmCivilstatusIdGet**](HRMApi.md#hrmCivilstatusIdGet)                             | **GET** /hrm/civilstatus/{id}               | Fetches a single contract type by id                       
 [**hrmContractGet**](HRMApi.md#hrmContractGet)                                       | **GET** /hrm/contract                       | Fetches all contracts                                      
 [**hrmContractIdGet**](HRMApi.md#hrmContractIdGet)                                   | **GET** /hrm/contract/{id}                  | Fetches a single contract by id                            
 [**hrmContracttypeGet**](HRMApi.md#hrmContracttypeGet)                               | **GET** /hrm/contracttype                   | Fetches all available contract types                       
 [**hrmContracttypeIdGet**](HRMApi.md#hrmContracttypeIdGet)                           | **GET** /hrm/contracttype/{id}              | Fetches a single contract type by id                       
 [**hrmDocumentGet**](HRMApi.md#hrmDocumentGet)                                       | **GET** /hrm/document                       | Fetches all available documents for HRM                    
 [**hrmDocumentIdDelete**](HRMApi.md#hrmDocumentIdDelete)                             | **DELETE** /hrm/document/{id}               | Deletes the document with the given id                     
 [**hrmDocumentIdGet**](HRMApi.md#hrmDocumentIdGet)                                   | **GET** /hrm/document/{id}                  | Fetches a single document for HRM by its id                
 [**hrmDocumentPost**](HRMApi.md#hrmDocumentPost)                                     | **POST** /hrm/document                      | create a document                                          
 [**hrmDocumentPut**](HRMApi.md#hrmDocumentPut)                                       | **PUT** /hrm/document                       | update a document                                          
 [**hrmDocumenttypeGet**](HRMApi.md#hrmDocumenttypeGet)                               | **GET** /hrm/documenttype                   | Fetches all available document types for HRM               
 [**hrmDocumenttypeIdGet**](HRMApi.md#hrmDocumenttypeIdGet)                           | **GET** /hrm/documenttype/{id}              | Fetches a single document type for HRM by its id           
 [**hrmEmployeeGet**](HRMApi.md#hrmEmployeeGet)                                       | **GET** /hrm/employee                       | Fetches all employees                                      
 [**hrmEmployeeIdGet**](HRMApi.md#hrmEmployeeIdGet)                                   | **GET** /hrm/employee/{id}                  | Fetches a single employee by id                            
 [**hrmEmployeeIdPut**](HRMApi.md#hrmEmployeeIdPut)                                   | **PUT** /hrm/employee/{id}                  | Updates an existing employee                               
 [**hrmEmployeePost**](HRMApi.md#hrmEmployeePost)                                     | **POST** /hrm/employee                      | Add a new employee                                         
 [**hrmEmployeecustomfieldgroupsGet**](HRMApi.md#hrmEmployeecustomfieldgroupsGet)     | **GET** /hrm/employeecustomfieldgroups      | Fetches all custom field groups available for employees    
 [**hrmEmployeecustomfieldgroupsIdGet**](HRMApi.md#hrmEmployeecustomfieldgroupsIdGet) | **GET** /hrm/employeecustomfieldgroups/{id} | Fetches a single custom field group available for employee 
 [**hrmEmployeecustomfieldsGet**](HRMApi.md#hrmEmployeecustomfieldsGet)               | **GET** /hrm/employeecustomfields           | Fetches all custom fields available for employees          
 [**hrmEmployeecustomfieldsIdGet**](HRMApi.md#hrmEmployeecustomfieldsIdGet)           | **GET** /hrm/employeecustomfields/{id}      | Fetches a single custom field available for employee       
 [**hrmEmployeetypeGet**](HRMApi.md#hrmEmployeetypeGet)                               | **GET** /hrm/employeetype                   | Fetches all available employee types                       
 [**hrmEmployeetypeIdGet**](HRMApi.md#hrmEmployeetypeIdGet)                           | **GET** /hrm/employeetype/{id}              | Fetches a single employee type by id                       
 [**hrmEmploymenttypeGet**](HRMApi.md#hrmEmploymenttypeGet)                           | **GET** /hrm/employmenttype                 | Fetches all available contract types                       
 [**hrmEmploymenttypeIdGet**](HRMApi.md#hrmEmploymenttypeIdGet)                       | **GET** /hrm/employmenttype/{id}            | Fetches a single contract type by id                       
 [**hrmLeaveGet**](HRMApi.md#hrmLeaveGet)                                             | **GET** /hrm/leave                          | Fetches all leave for employees                            
 [**hrmLeaveIdGet**](HRMApi.md#hrmLeaveIdGet)                                         | **GET** /hrm/leave/{id}                     | Fetches a single leave by its id                           
 [**hrmLeaveIdPut**](HRMApi.md#hrmLeaveIdPut)                                         | **PUT** /hrm/leave/{id}                     | Updates an leave for the given id                          
 [**hrmLeavePost**](HRMApi.md#hrmLeavePost)                                           | **POST** /hrm/leave                         | Add a new leave entity                                     
 [**hrmLeavebalanceGet**](HRMApi.md#hrmLeavebalanceGet)                               | **GET** /hrm/leavebalance                   | Fetches all leave balances for employees                   
 [**hrmLeavetypeGet**](HRMApi.md#hrmLeavetypeGet)                                     | **GET** /hrm/leavetype                      | Fetches all leave types                                    
 [**hrmLeavetypeIdGet**](HRMApi.md#hrmLeavetypeIdGet)                                 | **GET** /hrm/leavetype/{id}                 | Fetches a single leave type by leave type id               
 [**hrmTeamGet**](HRMApi.md#hrmTeamGet)                                               | **GET** /hrm/team                           | Fetches all teams                                          
 [**hrmTeamIdGet**](HRMApi.md#hrmTeamIdGet)                                           | **GET** /hrm/team/{id}                      | Fetches a single team by id                                
 [**hrmTimetableGet**](HRMApi.md#hrmTimetableGet)                                     | **GET** /hrm/timetable                      | Fetches all available timetables                           
 [**hrmTimetableIdDelete**](HRMApi.md#hrmTimetableIdDelete)                           | **DELETE** /hrm/timetable/{id}              | Deletes the timetable with given id                        
 [**hrmTimetableIdPut**](HRMApi.md#hrmTimetableIdPut)                                 | **PUT** /hrm/timetable/{id}                 | Updates an existing timetable                              
 [**hrmTimetablePost**](HRMApi.md#hrmTimetablePost)                                   | **POST** /hrm/timetable                     | Add a new timetable                                        

# **hrmAbsenceGet**

> \Swagger\Client\Model\RestResultAbsenceMultiple hrmAbsenceGet($offset, $limit, $sort)

Fetches all absence for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmAbsenceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsenceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultAbsenceMultiple**](../Model/RestResultAbsenceMultiple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsenceIdDelete**

> hrmAbsenceIdDelete($id)

Deletes the absence for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmAbsenceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsenceIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hrmAbsenceIdGet**

> \Swagger\Client\Model\RestResultAbsence hrmAbsenceIdGet($id)

Fetches a single absence by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmAbsenceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsenceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultAbsence**](../Model/RestResultAbsence.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsenceIdPut**

> hrmAbsenceIdPut($id, $body)

Updates an absence for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostAbsence(); // \Swagger\Client\Model\PostAbsence | Absence object containing data that with the new values

try {
    $apiInstance->hrmAbsenceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsenceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                                             | Notes 
----------|------------------------------------------------------------------|---------------------------------------------------------|-------
 **id**   | **string**                                                       | The template&#39;s id                                   |
 **body** | [**\Swagger\Client\Model\PostAbsence**](../Model/PostAbsence.md) | Absence object containing data that with the new values |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsencePost**

> hrmAbsencePost($body)

Add a new absence entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostAbsence(); // \Swagger\Client\Model\PostAbsence | absence object containing data

try {
    $apiInstance->hrmAbsencePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsencePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                    | Notes 
----------|------------------------------------------------------------------|--------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostAbsence**](../Model/PostAbsence.md) | absence object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsencetypeGet**

> \Swagger\Client\Model\RestResultAbsenceTypes hrmAbsencetypeGet($offset, $limit, $sort)

Fetches all absence types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmAbsencetypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsencetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultAbsenceTypes**](../Model/RestResultAbsenceTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsencetypeIdGet**

> \Swagger\Client\Model\RestResultAbsenceType hrmAbsencetypeIdGet($id)

Fetches a single absence type by absence type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmAbsencetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmAbsencetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultAbsenceType**](../Model/RestResultAbsenceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmCivilstatusGet**

> \Swagger\Client\Model\RestResultCivilStatuses hrmCivilstatusGet($offset, $limit, $sort)

Fetches all available civil statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmCivilstatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmCivilstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultCivilStatuses**](../Model/RestResultCivilStatuses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmCivilstatusIdGet**

> \Swagger\Client\Model\RestResultCivilStatus hrmCivilstatusIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmCivilstatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmCivilstatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultCivilStatus**](../Model/RestResultCivilStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContractGet**

> \Swagger\Client\Model\RestResultContracts hrmContractGet($offset, $limit, $sort)

Fetches all contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmContractGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmContractGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultContracts**](../Model/RestResultContracts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContractIdGet**

> \Swagger\Client\Model\RestResultContract hrmContractIdGet($id)

Fetches a single contract by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmContractIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmContractIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultContract**](../Model/RestResultContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContracttypeGet**

> \Swagger\Client\Model\RestResultContractTypes hrmContracttypeGet($offset, $limit, $sort)

Fetches all available contract types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmContracttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmContracttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultContractTypes**](../Model/RestResultContractTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContracttypeIdGet**

> \Swagger\Client\Model\RestResultContractType hrmContracttypeIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmContracttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmContracttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultContractType**](../Model/RestResultContractType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmDocumentGet**

> \Swagger\Client\Model\RestResultDocuments hrmDocumentGet($offset, $limit, $sort)

Fetches all available documents for HRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumentGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentIdDelete**

> hrmDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentIdGet**

> \Swagger\Client\Model\RestResultDocument hrmDocumentIdGet($id)

Fetches a single document for HRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentPost**

> hrmDocumentPost($body)

create a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostDocument(); // \Swagger\Client\Model\PostDocument | Document object containing data

try {
    $apiInstance->hrmDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumentPost: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentPut**

> hrmDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutDocument(); // \Swagger\Client\Model\PutDocument | Document object containing data

try {
    $apiInstance->hrmDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumentPut: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumenttypeGet**

> \Swagger\Client\Model\RestResultDocumentTypes hrmDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for HRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumenttypeIdGet**

> \Swagger\Client\Model\RestResultDocumentType hrmDocumenttypeIdGet($id)

Fetches a single document type for HRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeeGet**

> \Swagger\Client\Model\RestResultEmployees hrmEmployeeGet($offset, $limit, $sort)

Fetches all employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmEmployeeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultEmployees**](../Model/RestResultEmployees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeeIdGet**

> \Swagger\Client\Model\RestResultEmployee hrmEmployeeIdGet($id)

Fetches a single employee by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultEmployee**](../Model/RestResultEmployee.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeeIdPut**

> hrmEmployeeIdPut($body)

Updates an existing employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutEmployee(); // \Swagger\Client\Model\PutEmployee | Employee object that needs to be updated

try {
    $apiInstance->hrmEmployeeIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                              | Notes 
----------|------------------------------------------------------------------|------------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PutEmployee**](../Model/PutEmployee.md) | Employee object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeePost**

> hrmEmployeePost($body)

Add a new employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostEmployee(); // \Swagger\Client\Model\PostEmployee | Employee object that needs to be added

try {
    $apiInstance->hrmEmployeePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                            | Notes 
----------|--------------------------------------------------------------------|----------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostEmployee**](../Model/PostEmployee.md) | Employee object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeecustomfieldgroupsGet**

> \Swagger\Client\Model\RestResultCustomFieldGroups hrmEmployeecustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmEmployeecustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeecustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldgroupsIdGet**

> \Swagger\Client\Model\RestResultCustomFieldGroup hrmEmployeecustomfieldgroupsIdGet($id)

Fetches a single custom field group available for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeecustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeecustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldsGet**

> \Swagger\Client\Model\RestResultCustomFields hrmEmployeecustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmEmployeecustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeecustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldsIdGet**

> \Swagger\Client\Model\RestResultCustomField hrmEmployeecustomfieldsIdGet($id)

Fetches a single custom field available for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeecustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeecustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeetypeGet**

> \Swagger\Client\Model\RestResultEmployeeTypes hrmEmployeetypeGet($offset, $limit, $sort)

Fetches all available employee types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmEmployeetypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultEmployeeTypes**](../Model/RestResultEmployeeTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeetypeIdGet**

> \Swagger\Client\Model\RestResultEmployeeType hrmEmployeetypeIdGet($id)

Fetches a single employee type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmployeetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultEmployeeType**](../Model/RestResultEmployeeType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmploymenttypeGet**

> \Swagger\Client\Model\RestResultEmploymentTypes hrmEmploymenttypeGet($offset, $limit, $sort)

Fetches all available contract types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmEmploymenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmploymenttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultEmploymentTypes**](../Model/RestResultEmploymentTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmploymenttypeIdGet**

> \Swagger\Client\Model\RestResultEmploymentType hrmEmploymenttypeIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmploymenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmEmploymenttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultEmploymentType**](../Model/RestResultEmploymentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeaveGet**

> \Swagger\Client\Model\RestResultLeaveMultiple hrmLeaveGet($offset, $limit, $sort)

Fetches all leave for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmLeaveGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeaveGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultLeaveMultiple**](../Model/RestResultLeaveMultiple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeaveIdGet**

> \Swagger\Client\Model\RestResultLeave hrmLeaveIdGet($id)

Fetches a single leave by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmLeaveIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeaveIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultLeave**](../Model/RestResultLeave.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeaveIdPut**

> hrmLeaveIdPut($id, $body)

Updates an leave for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Swagger\Client\Model\PostLeave(); // \Swagger\Client\Model\PostLeave | Leave object containing data that with the new values

try {
    $apiInstance->hrmLeaveIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeaveIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                                           | Notes 
----------|--------------------------------------------------------------|-------------------------------------------------------|-------
 **id**   | **string**                                                   | The template&#39;s id                                 |
 **body** | [**\Swagger\Client\Model\PostLeave**](../Model/PostLeave.md) | Leave object containing data that with the new values |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavePost**

> hrmLeavePost($body)

Add a new leave entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostLeave(); // \Swagger\Client\Model\PostLeave | Leave object containing data

try {
    $apiInstance->hrmLeavePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                  | Notes 
----------|--------------------------------------------------------------|------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostLeave**](../Model/PostLeave.md) | Leave object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavebalanceGet**

> \Swagger\Client\Model\RestResultLeaveBalances hrmLeavebalanceGet($offset, $limit, $sort)

Fetches all leave balances for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmLeavebalanceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeavebalanceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultLeaveBalances**](../Model/RestResultLeaveBalances.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavetypeGet**

> \Swagger\Client\Model\RestResultLeaveTypes hrmLeavetypeGet($offset, $limit, $sort)

Fetches all leave types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmLeavetypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeavetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultLeaveTypes**](../Model/RestResultLeaveTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavetypeIdGet**

> \Swagger\Client\Model\RestResultLeaveType hrmLeavetypeIdGet($id)

Fetches a single leave type by leave type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmLeavetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmLeavetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultLeaveType**](../Model/RestResultLeaveType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTeamGet**

> \Swagger\Client\Model\RestResultTeams hrmTeamGet($offset, $limit, $sort)

Fetches all teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmTeamGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTeamGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultTeams**](../Model/RestResultTeams.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTeamIdGet**

> \Swagger\Client\Model\RestResultTeam hrmTeamIdGet($id)

Fetches a single team by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmTeamIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTeamIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Swagger\Client\Model\RestResultTeam**](../Model/RestResultTeam.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTimetableGet**

> \Swagger\Client\Model\RestResultTimetables hrmTimetableGet($offset, $limit, $sort)

Fetches all available timetables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hrmTimetableGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTimetableGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RestResultTimetables**](../Model/RestResultTimetables.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTimetableIdDelete**

> hrmTimetableIdDelete($id)

Deletes the timetable with given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmTimetableIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTimetableIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hrmTimetableIdPut**

> hrmTimetableIdPut($body)

Updates an existing timetable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutTimetable(); // \Swagger\Client\Model\PutTimetable | Timetable object that needs to be updated

try {
    $apiInstance->hrmTimetableIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTimetableIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                               | Notes 
----------|--------------------------------------------------------------------|-------------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PutTimetable**](../Model/PutTimetable.md) | Timetable object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTimetablePost**

> hrmTimetablePost($body)

Add a new timetable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostTimetable(); // \Swagger\Client\Model\PostTimetable | Timetable object that needs to be added

try {
    $apiInstance->hrmTimetablePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HRMApi->hrmTimetablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                             | Notes 
----------|----------------------------------------------------------------------|-----------------------------------------|-------
 **body** | [**\Swagger\Client\Model\PostTimetable**](../Model/PostTimetable.md) | Timetable object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

