# Paqtcom\Simplicate\HoursApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                           | HTTP request                           | Description                                                         
----------------------------------------------------------------------------------|----------------------------------------|---------------------------------------------------------------------
 [**hoursAbsenceIdPut**](HoursApi.md#hoursAbsenceIdPut)                           | **PUT** /hours/absence/{id}            | Updates an hour entity for absence for the given id                 
 [**hoursAbsencePost**](HoursApi.md#hoursAbsencePost)                             | **POST** /hours/absence                | Add a new hours entity for absence                                  
 [**hoursApprovalGet**](HoursApi.md#hoursApprovalGet)                             | **GET** /hours/approval                | Fetches the approval status of each day for each employee           
 [**hoursApprovalIdDelete**](HoursApi.md#hoursApprovalIdDelete)                   | **DELETE** /hours/approval/{id}        | Deletes the hours approval with the given approval id               
 [**hoursApprovalIdGet**](HoursApi.md#hoursApprovalIdGet)                         | **GET** /hours/approval/{id}           | Fetches a single approval status for a day for an employee          
 [**hoursApprovalIdPut**](HoursApi.md#hoursApprovalIdPut)                         | **PUT** /hours/approval/{id}           | Updates a hours approval for the given approval id                  
 [**hoursApprovalPost**](HoursApi.md#hoursApprovalPost)                           | **POST** /hours/approval               | Add a new hours approval                                            
 [**hoursApprovalstatusGet**](HoursApi.md#hoursApprovalstatusGet)                 | **GET** /hours/approvalstatus          | Fetches all hour types                                              
 [**hoursApprovalstatusIdGet**](HoursApi.md#hoursApprovalstatusIdGet)             | **GET** /hours/approvalstatus/{id}     | Fetches a single hour status by hour type id                        
 [**hoursEmployeeexpenseIdGet**](HoursApi.md#hoursEmployeeexpenseIdGet)           | **GET** /hours/employeeexpense/{id}    | Fetches a single expense for an employee                            
 [**hoursEmployeeexpensesGet**](HoursApi.md#hoursEmployeeexpensesGet)             | **GET** /hours/employeeexpenses        | Fetches the expenses of employees                                   
 [**hoursHoursGet**](HoursApi.md#hoursHoursGet)                                   | **GET** /hours/hours                   | Fetches all hours                                                   
 [**hoursHoursIdDelete**](HoursApi.md#hoursHoursIdDelete)                         | **DELETE** /hours/hours/{id}           | Deletes the hours registration with the given hours id              
 [**hoursHoursIdGet**](HoursApi.md#hoursHoursIdGet)                               | **GET** /hours/hours/{id}              | Fetches a single hours by hours id                                  
 [**hoursHoursIdPut**](HoursApi.md#hoursHoursIdPut)                               | **PUT** /hours/hours/{id}              | Updates a hours registration for the given hours id                 
 [**hoursHoursPost**](HoursApi.md#hoursHoursPost)                                 | **POST** /hours/hours                  | Add a new hours registration                                        
 [**hoursHourstypeGet**](HoursApi.md#hoursHourstypeGet)                           | **GET** /hours/hourstype               | Fetches all hour types                                              
 [**hoursHourstypeIdGet**](HoursApi.md#hoursHourstypeIdGet)                       | **GET** /hours/hourstype/{id}          | Fetches a single hour type by hour type id                          
 [**hoursHourstypeIdPut**](HoursApi.md#hoursHourstypeIdPut)                       | **PUT** /hours/hourstype/{id}          | Updates a hour type registration for the given hour type id         
 [**hoursHourstypePost**](HoursApi.md#hoursHourstypePost)                         | **POST** /hours/hourstype              | Add a new hour type                                                 
 [**hoursLeaveIdPut**](HoursApi.md#hoursLeaveIdPut)                               | **PUT** /hours/leave/{id}              | Updates an hour entity for leave for the given id                   
 [**hoursLeavePost**](HoursApi.md#hoursLeavePost)                                 | **POST** /hours/leave                  | Add a new hours entity for leave                                    
 [**hoursSubmissionGet**](HoursApi.md#hoursSubmissionGet)                         | **GET** /hours/submission              | Fetches hours submission status, by date, for an employee           
 [**hoursSubmissionPost**](HoursApi.md#hoursSubmissionPost)                       | **POST** /hours/submission             | Submit all the employee&#39;s hours between the start and end date. 
 [**hoursSubmitPost**](HoursApi.md#hoursSubmitPost)                               | **POST** /hours/submit                 | Submit hours for approval                                           
 [**hoursTimesheetrowGet**](HoursApi.md#hoursTimesheetrowGet)                     | **GET** /hours/timesheetrow            | Fetches timesheet rows, by date, for an employee                    
 [**hoursTimesheetrowIdDelete**](HoursApi.md#hoursTimesheetrowIdDelete)           | **DELETE** /hours/timesheetrow/{id}    | Deletes the timesheet row with the supplied timesheetrow id         
 [**hoursTimesheetrowMostrecentGet**](HoursApi.md#hoursTimesheetrowMostrecentGet) | **GET** /hours/timesheetrow/mostrecent | Find the most recent timesheet row                                  
 [**hoursTimesheetrowOrderPut**](HoursApi.md#hoursTimesheetrowOrderPut)           | **PUT** /hours/timesheetrow/order      | Change order for timesheetrows.                                     
 [**hoursTimesheetrowPost**](HoursApi.md#hoursTimesheetrowPost)                   | **POST** /hours/timesheetrow           | Submit a timesheet week row for the given employee.                 
 [**timersTimerGet**](HoursApi.md#timersTimerGet)                                 | **GET** /timers/timer                  | Fetches all timers                                                  
 [**timersTimerIdDelete**](HoursApi.md#timersTimerIdDelete)                       | **DELETE** /timers/timer/{id}          | Deletes the timer with the given timer id                           
 [**timersTimerIdGet**](HoursApi.md#timersTimerIdGet)                             | **GET** /timers/timer/{id}             | Fetches a single timer by its id                                    
 [**timersTimerIdPut**](HoursApi.md#timersTimerIdPut)                             | **PUT** /timers/timer/{id}             | Updates a timer for the given timer id                              
 [**timersTimerPost**](HoursApi.md#timersTimerPost)                               | **POST** /timers/timer                 | Add a new timer                                                     

# **hoursAbsenceIdPut**

> hoursAbsenceIdPut($id, $body)

Updates an hour entity for absence for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostAbsence(); // \Paqtcom\Simplicate\Model\PostAbsence | Absence object containing data that with the new values

try {
    $apiInstance->hoursAbsenceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursAbsenceIdPut: ', $e->getMessage(), PHP_EOL;
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

# **hoursAbsencePost**

> hoursAbsencePost($body)

Add a new hours entity for absence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostAbsence(); // \Paqtcom\Simplicate\Model\PostAbsence | absence object containing data

try {
    $apiInstance->hoursAbsencePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursAbsencePost: ', $e->getMessage(), PHP_EOL;
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

# **hoursApprovalGet**

> \Paqtcom\Simplicate\Model\RestResultApprovals hoursApprovalGet($offset, $limit, $sort)

Fetches the approval status of each day for each employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hoursApprovalGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultApprovals**](../Model/RestResultApprovals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursApprovalIdDelete**

> hoursApprovalIdDelete($id)

Deletes the hours approval with the given approval id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hoursApprovalIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hoursApprovalIdGet**

> \Paqtcom\Simplicate\Model\RestResultApproval hoursApprovalIdGet($id)

Fetches a single approval status for a day for an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hoursApprovalIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultApproval**](../Model/RestResultApproval.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursApprovalIdPut**

> hoursApprovalIdPut($id, $body)

Updates a hours approval for the given approval id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostApproval(); // \Paqtcom\Simplicate\Model\PostApproval | Approval object that needs to be updated

try {
    $apiInstance->hoursApprovalIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                              | Notes 
----------|--------------------------------------------------------------------|------------------------------------------|-------
 **id**   | **string**                                                         | The template&#39;s id                    |
 **body** | [**\Paqtcom\Simplicate\Model\PostApproval**](../Model/PostApproval.md) | Approval object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursApprovalPost**

> hoursApprovalPost($body)

Add a new hours approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostApproval(); // \Paqtcom\Simplicate\Model\PostApproval | Approval object that needs to be added

try {
    $apiInstance->hoursApprovalPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                               | Description                            | Notes 
----------|--------------------------------------------------------------------|----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostApproval**](../Model/PostApproval.md) | Approval object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursApprovalstatusGet**

> \Paqtcom\Simplicate\Model\RestResultApprovalStatusList hoursApprovalstatusGet($offset, $limit, $sort)

Fetches all hour types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hoursApprovalstatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultApprovalStatusList**](../Model/RestResultApprovalStatusList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursApprovalstatusIdGet**

> \Paqtcom\Simplicate\Model\RestResultApprovalStatus hoursApprovalstatusIdGet($id)

Fetches a single hour status by hour type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hoursApprovalstatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursApprovalstatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultApprovalStatus**](../Model/RestResultApprovalStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursEmployeeexpenseIdGet**

> \Paqtcom\Simplicate\Model\RestResultEmployeeExpense hoursEmployeeexpenseIdGet($id)

Fetches a single expense for an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hoursEmployeeexpenseIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursEmployeeexpenseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultEmployeeExpense**](../Model/RestResultEmployeeExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursEmployeeexpensesGet**

> \Paqtcom\Simplicate\Model\RestResultEmployeeExpenseList hoursEmployeeexpensesGet($offset, $limit, $sort)

Fetches the expenses of employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hoursEmployeeexpensesGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursEmployeeexpensesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultEmployeeExpenseList**](../Model/RestResultEmployeeExpenseList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHoursGet**

> \Paqtcom\Simplicate\Model\RestResultHours hoursHoursGet($offset, $limit, $sort)

Fetches all hours

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hoursHoursGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHoursGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultHours**](../Model/RestResultHours.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHoursIdDelete**

> hoursHoursIdDelete($id)

Deletes the hours registration with the given hours id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hoursHoursIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHoursIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hoursHoursIdGet**

> \Paqtcom\Simplicate\Model\RestResultHour hoursHoursIdGet($id)

Fetches a single hours by hours id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hoursHoursIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHoursIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultHour**](../Model/RestResultHour.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHoursIdPut**

> hoursHoursIdPut($id, $body)

Updates a hours registration for the given hours id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostHours(); // \Paqtcom\Simplicate\Model\PostHours | Hours object that needs to be updated

try {
    $apiInstance->hoursHoursIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHoursIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                           | Notes 
----------|--------------------------------------------------------------|---------------------------------------|-------
 **id**   | **string**                                                   | The template&#39;s id                 |
 **body** | [**\Paqtcom\Simplicate\Model\PostHours**](../Model/PostHours.md) | Hours object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHoursPost**

> hoursHoursPost($body)

Add a new hours registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostHours(); // \Paqtcom\Simplicate\Model\PostHours | Hours object that needs to be added

try {
    $apiInstance->hoursHoursPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHoursPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                         | Notes 
----------|--------------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostHours**](../Model/PostHours.md) | Hours object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHourstypeGet**

> \Paqtcom\Simplicate\Model\RestResultHourTypes hoursHourstypeGet($offset, $limit, $sort)

Fetches all hour types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->hoursHourstypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHourstypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultHourTypes**](../Model/RestResultHourTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHourstypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultHourType hoursHourstypeIdGet($id)

Fetches a single hour type by hour type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->hoursHourstypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHourstypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultHourType**](../Model/RestResultHourType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHourstypeIdPut**

> hoursHourstypeIdPut($id, $body)

Updates a hour type registration for the given hour type id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostHoursType(); // \Paqtcom\Simplicate\Model\PostHoursType | Hours type object that needs to be updated

try {
    $apiInstance->hoursHourstypeIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHourstypeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                                | Notes 
----------|----------------------------------------------------------------------|--------------------------------------------|-------
 **id**   | **string**                                                           | The template&#39;s id                      |
 **body** | [**\Paqtcom\Simplicate\Model\PostHoursType**](../Model/PostHoursType.md) | Hours type object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursHourstypePost**

> hoursHourstypePost($body)

Add a new hour type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostHoursType(); // \Paqtcom\Simplicate\Model\PostHoursType | Hour type object that needs to be added

try {
    $apiInstance->hoursHourstypePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursHourstypePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                             | Notes 
----------|----------------------------------------------------------------------|-----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostHoursType**](../Model/PostHoursType.md) | Hour type object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursLeaveIdPut**

> hoursLeaveIdPut($id, $body)

Updates an hour entity for leave for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostLeave(); // \Paqtcom\Simplicate\Model\PostLeave | Leave object containing data that with the new values

try {
    $apiInstance->hoursLeaveIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursLeaveIdPut: ', $e->getMessage(), PHP_EOL;
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

# **hoursLeavePost**

> hoursLeavePost($body)

Add a new hours entity for leave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostLeave(); // \Paqtcom\Simplicate\Model\PostLeave | leave object containing data

try {
    $apiInstance->hoursLeavePost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursLeavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                  | Notes 
----------|--------------------------------------------------------------|------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostLeave**](../Model/PostLeave.md) | leave object containing data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursSubmissionGet**

> \Paqtcom\Simplicate\Model\RestResultHoursSubmissions hoursSubmissionGet($q_start_date, $q_end_date, $q_employee_id)

Fetches hours submission status, by date, for an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q_start_date = "q_start_date_example"; // string | 
$q_end_date = "q_end_date_example"; // string | 
$q_employee_id = "q_employee_id_example"; // string | 

try {
    $result = $apiInstance->hoursSubmissionGet($q_start_date, $q_end_date, $q_employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursSubmissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name              | Type       | Description | Notes 
-------------------|------------|-------------|-------
 **q_start_date**  | **string** |             |
 **q_end_date**    | **string** |             |
 **q_employee_id** | **string** |             |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultHoursSubmissions**](../Model/RestResultHoursSubmissions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursSubmissionPost**

> hoursSubmissionPost($body)

Submit all the employee's hours between the start and end date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostSubmission(); // \Paqtcom\Simplicate\Model\PostSubmission | Description of hours that need to be submitted.

try {
    $apiInstance->hoursSubmissionPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursSubmissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                   | Description                                     | Notes 
----------|------------------------------------------------------------------------|-------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostSubmission**](../Model/PostSubmission.md) | Description of hours that need to be submitted. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursSubmitPost**

> hoursSubmitPost($body)

Submit hours for approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\Submit(); // \Paqtcom\Simplicate\Model\Submit | Data that is needed to submit hours

try {
    $apiInstance->hoursSubmitPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                   | Description                         | Notes 
----------|--------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\Submit**](../Model/Submit.md) | Data that is needed to submit hours |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursTimesheetrowGet**

> \Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows hoursTimesheetrowGet($q_start_date, $q_end_date, $q_employee_id)

Fetches timesheet rows, by date, for an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q_start_date = "q_start_date_example"; // string | Y-m-d, must be a Monday
$q_end_date = "q_end_date_example"; // string | Y-m-d, must be the Sunday after the Monday of the start_date
$q_employee_id = "q_employee_id_example"; // string | 

try {
    $result = $apiInstance->hoursTimesheetrowGet($q_start_date, $q_end_date, $q_employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursTimesheetrowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name              | Type       | Description                                                  | Notes 
-------------------|------------|--------------------------------------------------------------|-------
 **q_start_date**  | **string** | Y-m-d, must be a Monday                                      |
 **q_end_date**    | **string** | Y-m-d, must be the Sunday after the Monday of the start_date |
 **q_employee_id** | **string** |                                                              |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows**](../Model/RestResultHoursTimesheetRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursTimesheetrowIdDelete**

> hoursTimesheetrowIdDelete($id)

Deletes the timesheet row with the supplied timesheetrow id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->hoursTimesheetrowIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursTimesheetrowIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **hoursTimesheetrowMostrecentGet**

> \Paqtcom\Simplicate\Model\RestResultDateTimeRange hoursTimesheetrowMostrecentGet($q_before_date, $q_employee_id, $q_type)

Find the most recent timesheet row

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q_before_date = "q_before_date_example"; // string | 
$q_employee_id = "q_employee_id_example"; // string | 
$q_type = "q_type_example"; // string | 

try {
    $result = $apiInstance->hoursTimesheetrowMostrecentGet($q_before_date, $q_employee_id, $q_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursTimesheetrowMostrecentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name              | Type       | Description | Notes 
-------------------|------------|-------------|-------
 **q_before_date** | **string** |             |
 **q_employee_id** | **string** |             |
 **q_type**        | **string** |             |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultDateTimeRange**](../Model/RestResultDateTimeRange.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursTimesheetrowOrderPut**

> hoursTimesheetrowOrderPut($body)

Change order for timesheetrows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Paqtcom\Simplicate\Model\string[]()); // string[] | List of external ids for timesheetrows that need to be ordered.

try {
    $apiInstance->hoursTimesheetrowOrderPut($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursTimesheetrowOrderPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type         | Description                                                     | Notes 
----------|--------------|-----------------------------------------------------------------|-------
 **body** | **string[]** | List of external ids for timesheetrows that need to be ordered. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **hoursTimesheetrowPost**

> hoursTimesheetrowPost($body)

Submit a timesheet week row for the given employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostTimesheetRow(); // \Paqtcom\Simplicate\Model\PostTimesheetRow | Description of timesheetrow that is submitted.

try {
    $apiInstance->hoursTimesheetrowPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->hoursTimesheetrowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                                    | Notes 
----------|----------------------------------------------------------------------------|------------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostTimesheetRow**](../Model/PostTimesheetRow.md) | Description of timesheetrow that is submitted. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timersTimerGet**

> \Paqtcom\Simplicate\Model\RestResultTimers timersTimerGet($offset, $limit, $sort)

Fetches all timers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->timersTimerGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->timersTimerGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultTimers**](../Model/RestResultTimers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timersTimerIdDelete**

> timersTimerIdDelete($id)

Deletes the timer with the given timer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->timersTimerIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->timersTimerIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **timersTimerIdGet**

> \Paqtcom\Simplicate\Model\RestResultTimer timersTimerIdGet($id)

Fetches a single timer by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->timersTimerIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->timersTimerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultTimer**](../Model/RestResultTimer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timersTimerIdPut**

> timersTimerIdPut($id, $body)

Updates a timer for the given timer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PutTimer(); // \Paqtcom\Simplicate\Model\PutTimer | Timer object that needs to be updated

try {
    $apiInstance->timersTimerIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->timersTimerIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                       | Description                           | Notes 
----------|------------------------------------------------------------|---------------------------------------|-------
 **id**   | **string**                                                 | The template&#39;s id                 |
 **body** | [**\Paqtcom\Simplicate\Model\PutTimer**](../Model/PutTimer.md) | Timer object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **timersTimerPost**

> timersTimerPost($body)

Add a new timer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\HoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostTimer(); // \Paqtcom\Simplicate\Model\PostTimer | Timer object that needs to be added

try {
    $apiInstance->timersTimerPost($body);
} catch (Exception $e) {
    echo 'Exception when calling HoursApi->timersTimerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                         | Description                         | Notes 
----------|--------------------------------------------------------------|-------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostTimer**](../Model/PostTimer.md) | Timer object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

