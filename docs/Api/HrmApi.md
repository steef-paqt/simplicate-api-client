# HrmApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                               | HTTP request                                | Description                                                
--------------------------------------------------------------------------------------|---------------------------------------------|------------------------------------------------------------
 [**hrmAbsenceGet**](HrmApi.md#hrmAbsenceGet)                                         | **GET** /hrm/absence                        | Fetches all absence for employees                          
 [**hrmAbsenceIdDelete**](HrmApi.md#hrmAbsenceIdDelete)                               | **DELETE** /hrm/absence/{id}                | Deletes the absence for the given id                       
 [**hrmAbsenceIdGet**](HrmApi.md#hrmAbsenceIdGet)                                     | **GET** /hrm/absence/{id}                   | Fetches a single absence by its id                         
 [**hrmAbsenceIdPut**](HrmApi.md#hrmAbsenceIdPut)                                     | **PUT** /hrm/absence/{id}                   | Updates an absence for the given id                        
 [**hrmAbsencePost**](HrmApi.md#hrmAbsencePost)                                       | **POST** /hrm/absence                       | Add a new absence entity                                   
 [**hrmAbsencetypeGet**](HrmApi.md#hrmAbsencetypeGet)                                 | **GET** /hrm/absencetype                    | Fetches all absence types                                  
 [**hrmAbsencetypeIdGet**](HrmApi.md#hrmAbsencetypeIdGet)                             | **GET** /hrm/absencetype/{id}               | Fetches a single absence type by absence type id           
 [**hrmCivilstatusGet**](HrmApi.md#hrmCivilstatusGet)                                 | **GET** /hrm/civilstatus                    | Fetches all available civil statuses                       
 [**hrmCivilstatusIdGet**](HrmApi.md#hrmCivilstatusIdGet)                             | **GET** /hrm/civilstatus/{id}               | Fetches a single contract type by id                       
 [**hrmContractGet**](HrmApi.md#hrmContractGet)                                       | **GET** /hrm/contract                       | Fetches all contracts                                      
 [**hrmContractIdGet**](HrmApi.md#hrmContractIdGet)                                   | **GET** /hrm/contract/{id}                  | Fetches a single contract by id                            
 [**hrmContracttypeGet**](HrmApi.md#hrmContracttypeGet)                               | **GET** /hrm/contracttype                   | Fetches all available contract types                       
 [**hrmContracttypeIdGet**](HrmApi.md#hrmContracttypeIdGet)                           | **GET** /hrm/contracttype/{id}              | Fetches a single contract type by id                       
 [**hrmDocumentGet**](HrmApi.md#hrmDocumentGet)                                       | **GET** /hrm/document                       | Fetches all available documents for HRM                    
 [**hrmDocumentIdDelete**](HrmApi.md#hrmDocumentIdDelete)                             | **DELETE** /hrm/document/{id}               | Deletes the document with the given id                     
 [**hrmDocumentIdGet**](HrmApi.md#hrmDocumentIdGet)                                   | **GET** /hrm/document/{id}                  | Fetches a single document for HRM by its id                
 [**hrmDocumentPost**](HrmApi.md#hrmDocumentPost)                                     | **POST** /hrm/document                      | create a document                                          
 [**hrmDocumentPut**](HrmApi.md#hrmDocumentPut)                                       | **PUT** /hrm/document                       | update a document                                          
 [**hrmDocumenttypeGet**](HrmApi.md#hrmDocumenttypeGet)                               | **GET** /hrm/documenttype                   | Fetches all available document types for HRM               
 [**hrmDocumenttypeIdGet**](HrmApi.md#hrmDocumenttypeIdGet)                           | **GET** /hrm/documenttype/{id}              | Fetches a single document type for HRM by its id           
 [**hrmEmployeeGet**](HrmApi.md#hrmEmployeeGet)                                       | **GET** /hrm/employee                       | Fetches all employees                                      
 [**hrmEmployeeIdGet**](HrmApi.md#hrmEmployeeIdGet)                                   | **GET** /hrm/employee/{id}                  | Fetches a single employee by id                            
 [**hrmEmployeeIdPut**](HrmApi.md#hrmEmployeeIdPut)                                   | **PUT** /hrm/employee/{id}                  | Updates an existing employee                               
 [**hrmEmployeePost**](HrmApi.md#hrmEmployeePost)                                     | **POST** /hrm/employee                      | Add a new employee                                         
 [**hrmEmployeecustomfieldgroupsGet**](HrmApi.md#hrmEmployeecustomfieldgroupsGet)     | **GET** /hrm/employeecustomfieldgroups      | Fetches all custom field groups available for employees    
 [**hrmEmployeecustomfieldgroupsIdGet**](HrmApi.md#hrmEmployeecustomfieldgroupsIdGet) | **GET** /hrm/employeecustomfieldgroups/{id} | Fetches a single custom field group available for employee 
 [**hrmEmployeecustomfieldsGet**](HrmApi.md#hrmEmployeecustomfieldsGet)               | **GET** /hrm/employeecustomfields           | Fetches all custom fields available for employees          
 [**hrmEmployeecustomfieldsIdGet**](HrmApi.md#hrmEmployeecustomfieldsIdGet)           | **GET** /hrm/employeecustomfields/{id}      | Fetches a single custom field available for employee       
 [**hrmEmployeetypeGet**](HrmApi.md#hrmEmployeetypeGet)                               | **GET** /hrm/employeetype                   | Fetches all available employee types                       
 [**hrmEmployeetypeIdGet**](HrmApi.md#hrmEmployeetypeIdGet)                           | **GET** /hrm/employeetype/{id}              | Fetches a single employee type by id                       
 [**hrmEmploymenttypeGet**](HrmApi.md#hrmEmploymenttypeGet)                           | **GET** /hrm/employmenttype                 | Fetches all available contract types                       
 [**hrmEmploymenttypeIdGet**](HrmApi.md#hrmEmploymenttypeIdGet)                       | **GET** /hrm/employmenttype/{id}            | Fetches a single contract type by id                       
 [**hrmLeaveGet**](HrmApi.md#hrmLeaveGet)                                             | **GET** /hrm/leave                          | Fetches all leave for employees                            
 [**hrmLeaveIdGet**](HrmApi.md#hrmLeaveIdGet)                                         | **GET** /hrm/leave/{id}                     | Fetches a single leave by its id                           
 [**hrmLeaveIdPut**](HrmApi.md#hrmLeaveIdPut)                                         | **PUT** /hrm/leave/{id}                     | Updates an leave for the given id                          
 [**hrmLeavePost**](HrmApi.md#hrmLeavePost)                                           | **POST** /hrm/leave                         | Add a new leave entity                                     
 [**hrmLeavebalanceGet**](HrmApi.md#hrmLeavebalanceGet)                               | **GET** /hrm/leavebalance                   | Fetches all leave balances for employees                   
 [**hrmLeavetypeGet**](HrmApi.md#hrmLeavetypeGet)                                     | **GET** /hrm/leavetype                      | Fetches all leave types                                    
 [**hrmLeavetypeIdGet**](HrmApi.md#hrmLeavetypeIdGet)                                 | **GET** /hrm/leavetype/{id}                 | Fetches a single leave type by leave type id               
 [**hrmTeamGet**](HrmApi.md#hrmTeamGet)                                               | **GET** /hrm/team                           | Fetches all teams                                          
 [**hrmTeamIdGet**](HrmApi.md#hrmTeamIdGet)                                           | **GET** /hrm/team/{id}                      | Fetches a single team by id                                
 [**hrmTimetableGet**](HrmApi.md#hrmTimetableGet)                                     | **GET** /hrm/timetable                      | Fetches all available timetables                           
 [**hrmTimetableIdDelete**](HrmApi.md#hrmTimetableIdDelete)                           | **DELETE** /hrm/timetable/{id}              | Deletes the timetable with given id                        
 [**hrmTimetableIdPut**](HrmApi.md#hrmTimetableIdPut)                                 | **PUT** /hrm/timetable/{id}                 | Updates an existing timetable                              
 [**hrmTimetablePost**](HrmApi.md#hrmTimetablePost)                                   | **POST** /hrm/timetable                     | Add a new timetable                                        

# **hrmAbsenceGet**

> \Paqtcom\Simplicate\Model\RestResultAbsenceMultiple hrmAbsenceGet($offset, $limit, $sort)

Fetches all absence for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmAbsenceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultAbsenceMultiple**](../Model/RestResultAbsenceMultiple.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmAbsenceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmAbsenceIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultAbsence hrmAbsenceIdGet($id)

Fetches a single absence by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmAbsenceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmAbsenceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultAbsence**](../Model/RestResultAbsence.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostAbsence(); // \Paqtcom\Simplicate\Model\PostAbsence | Absence object containing data that with the new values

try {
    $apiInstance->hrmAbsenceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmAbsenceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                                             | Notes 
----------|------------------------------------------------------------------|---------------------------------------------------------|-------
 **id**   | **string**                                                       | The template&#39;s id                                   |
 **body** | [**\Paqtcom\Simplicate\Model\PostAbsence**](../Model/PostAbsence.md) | Absence object containing data that with the new values |

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostAbsence(); // \Paqtcom\Simplicate\Model\PostAbsence | absence object containing data

try {
    $apiInstance->hrmAbsencePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmAbsencePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                    | Notes 
----------|------------------------------------------------------------------|--------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostAbsence**](../Model/PostAbsence.md) | absence object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsencetypeGet**

> \Paqtcom\Simplicate\Model\RestResultAbsenceTypes hrmAbsencetypeGet($offset, $limit, $sort)

Fetches all absence types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmAbsencetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultAbsenceTypes**](../Model/RestResultAbsenceTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmAbsencetypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultAbsenceType hrmAbsencetypeIdGet($id)

Fetches a single absence type by absence type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmAbsencetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmAbsencetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultAbsenceType**](../Model/RestResultAbsenceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmCivilstatusGet**

> \Paqtcom\Simplicate\Model\RestResultCivilStatuses hrmCivilstatusGet($offset, $limit, $sort)

Fetches all available civil statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmCivilstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultCivilStatuses**](../Model/RestResultCivilStatuses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmCivilstatusIdGet**

> \Paqtcom\Simplicate\Model\RestResultCivilStatus hrmCivilstatusIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmCivilstatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmCivilstatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultCivilStatus**](../Model/RestResultCivilStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContractGet**

> \Paqtcom\Simplicate\Model\RestResultContracts hrmContractGet($offset, $limit, $sort)

Fetches all contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmContractGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultContracts**](../Model/RestResultContracts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContractIdGet**

> \Paqtcom\Simplicate\Model\RestResultContract hrmContractIdGet($id)

Fetches a single contract by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmContractIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmContractIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultContract**](../Model/RestResultContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContracttypeGet**

> \Paqtcom\Simplicate\Model\RestResultContractTypes hrmContracttypeGet($offset, $limit, $sort)

Fetches all available contract types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmContracttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultContractTypes**](../Model/RestResultContractTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmContracttypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultContractType hrmContracttypeIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmContracttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmContracttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultContractType**](../Model/RestResultContractType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmDocumentGet**

> \Paqtcom\Simplicate\Model\RestResultDocuments hrmDocumentGet($offset, $limit, $sort)

Fetches all available documents for HRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmDocumentGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentIdDelete**

> hrmDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

> \Paqtcom\Simplicate\Model\RestResultDocument hrmDocumentIdGet($id)

Fetches a single document for HRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentPost**

> hrmDocumentPost($body)

create a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostDocument(); // \Paqtcom\Simplicate\Model\PostDocument | Document object containing data

try {
    $apiInstance->hrmDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmDocumentPost: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumentPut**

> hrmDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PutDocument(); // \Paqtcom\Simplicate\Model\PutDocument | Document object containing data

try {
    $apiInstance->hrmDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmDocumentPut: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumenttypeGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentTypes hrmDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for HRM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmDocumenttypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentType hrmDocumenttypeIdGet($id)

Fetches a single document type for HRM by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeeGet**

> \Paqtcom\Simplicate\Model\RestResultEmployees hrmEmployeeGet($offset, $limit, $sort)

Fetches all employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmEmployeeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultEmployees**](../Model/RestResultEmployees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeeIdGet**

> \Paqtcom\Simplicate\Model\RestResultEmployee hrmEmployeeIdGet($id)

Fetches a single employee by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultEmployee**](../Model/RestResultEmployee.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PutEmployee(); // \Paqtcom\Simplicate\Model\PutEmployee | Employee object that needs to be updated

try {
    $apiInstance->hrmEmployeeIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                              | Notes 
----------|------------------------------------------------------------------|------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PutEmployee**](../Model/PutEmployee.md) | Employee object that needs to be updated |

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostEmployee(); // \Paqtcom\Simplicate\Model\PostEmployee | Employee object that needs to be added

try {
    $apiInstance->hrmEmployeePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                            | Notes 
----------|--------------------------------------------------------------------|----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostEmployee**](../Model/PostEmployee.md) | Employee object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeecustomfieldgroupsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroups hrmEmployeecustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmEmployeecustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldgroupsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup hrmEmployeecustomfieldgroupsIdGet($id)

Fetches a single custom field group available for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeecustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeecustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFields hrmEmployeecustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmEmployeecustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeecustomfieldsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomField hrmEmployeecustomfieldsIdGet($id)

Fetches a single custom field available for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeecustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeecustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **hrmEmployeetypeGet**

> \Paqtcom\Simplicate\Model\RestResultEmployeeTypes hrmEmployeetypeGet($offset, $limit, $sort)

Fetches all available employee types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmEmployeetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultEmployeeTypes**](../Model/RestResultEmployeeTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmployeetypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultEmployeeType hrmEmployeetypeIdGet($id)

Fetches a single employee type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmployeetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmployeetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultEmployeeType**](../Model/RestResultEmployeeType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmploymenttypeGet**

> \Paqtcom\Simplicate\Model\RestResultEmploymentTypes hrmEmploymenttypeGet($offset, $limit, $sort)

Fetches all available contract types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmEmploymenttypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultEmploymentTypes**](../Model/RestResultEmploymentTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmEmploymenttypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultEmploymentType hrmEmploymenttypeIdGet($id)

Fetches a single contract type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmEmploymenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmEmploymenttypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultEmploymentType**](../Model/RestResultEmploymentType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeaveGet**

> \Paqtcom\Simplicate\Model\RestResultLeaveMultiple hrmLeaveGet($offset, $limit, $sort)

Fetches all leave for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmLeaveGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultLeaveMultiple**](../Model/RestResultLeaveMultiple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeaveIdGet**

> \Paqtcom\Simplicate\Model\RestResultLeave hrmLeaveIdGet($id)

Fetches a single leave by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmLeaveIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmLeaveIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultLeave**](../Model/RestResultLeave.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostLeave(); // \Paqtcom\Simplicate\Model\PostLeave | Leave object containing data that with the new values

try {
    $apiInstance->hrmLeaveIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmLeaveIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                                           | Notes 
----------|--------------------------------------------------------------|-------------------------------------------------------|-------
 **id**   | **string**                                                   | The template&#39;s id                                 |
 **body** | [**\Paqtcom\Simplicate\Model\PostLeave**](../Model/PostLeave.md) | Leave object containing data that with the new values |

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostLeave(); // \Paqtcom\Simplicate\Model\PostLeave | Leave object containing data

try {
    $apiInstance->hrmLeavePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmLeavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                  | Notes 
----------|--------------------------------------------------------------|------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostLeave**](../Model/PostLeave.md) | Leave object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavebalanceGet**

> \Paqtcom\Simplicate\Model\RestResultLeaveBalances hrmLeavebalanceGet($offset, $limit, $sort)

Fetches all leave balances for employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmLeavebalanceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultLeaveBalances**](../Model/RestResultLeaveBalances.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavetypeGet**

> \Paqtcom\Simplicate\Model\RestResultLeaveTypes hrmLeavetypeGet($offset, $limit, $sort)

Fetches all leave types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmLeavetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultLeaveTypes**](../Model/RestResultLeaveTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmLeavetypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultLeaveType hrmLeavetypeIdGet($id)

Fetches a single leave type by leave type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmLeavetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmLeavetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultLeaveType**](../Model/RestResultLeaveType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTeamGet**

> \Paqtcom\Simplicate\Model\RestResultTeams hrmTeamGet($offset, $limit, $sort)

Fetches all teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmTeamGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultTeams**](../Model/RestResultTeams.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTeamIdGet**

> \Paqtcom\Simplicate\Model\RestResultTeam hrmTeamIdGet($id)

Fetches a single team by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hrmTeamIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmTeamIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultTeam**](../Model/RestResultTeam.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hrmTimetableGet**

> \Paqtcom\Simplicate\Model\RestResultTimetables hrmTimetableGet($offset, $limit, $sort)

Fetches all available timetables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
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
    echo 'Exception when calling HrmApi->hrmTimetableGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultTimetables**](../Model/RestResultTimetables.md)

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hrmTimetableIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmTimetableIdDelete: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PutTimetable(); // \Paqtcom\Simplicate\Model\PutTimetable | Timetable object that needs to be updated

try {
    $apiInstance->hrmTimetableIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmTimetableIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                               | Notes 
----------|--------------------------------------------------------------------|-------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PutTimetable**](../Model/PutTimetable.md) | Timetable object that needs to be updated |

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

$apiInstance = new Paqtcom\Simplicate\Api\HrmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostTimetable(); // \Paqtcom\Simplicate\Model\PostTimetable | Timetable object that needs to be added

try {
    $apiInstance->hrmTimetablePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HrmApi->hrmTimetablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                             | Notes 
----------|----------------------------------------------------------------------|-----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostTimetable**](../Model/PostTimetable.md) | Timetable object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

