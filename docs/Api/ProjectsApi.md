# Paqtcom\Simplicate\ProjectsApi

All URIs are relative to *http://localhost/api/v2*

 Method                                                                                                              | HTTP request                                              | Description                                                                                      
---------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------|--------------------------------------------------------------------------------------------------
 [**projectsAssignmentGet**](ProjectsApi.md#projectsAssignmentGet)                                                   | **GET** /projects/assignment                              | Fetches all available assignments for projects                                                   
 [**projectsAssignmentIdGet**](ProjectsApi.md#projectsAssignmentIdGet)                                               | **GET** /projects/assignment/{id}                         | Fetches all a single assignment by its id                                                        
 [**projectsAssignmentIdPut**](ProjectsApi.md#projectsAssignmentIdPut)                                               | **PUT** /projects/assignment/{id}                         | Updates a project assignment for the given id                                                    
 [**projectsAssignmentPost**](ProjectsApi.md#projectsAssignmentPost)                                                 | **POST** /projects/assignment                             | Creates a new project assignment                                                                 
 [**projectsAssignmentbudgetGet**](ProjectsApi.md#projectsAssignmentbudgetGet)                                       | **GET** /projects/assignmentbudget                        | Get budget information (planned amount, spent amount etc.) of assignment within given date range 
 [**projectsAssignmentstatusGet**](ProjectsApi.md#projectsAssignmentstatusGet)                                       | **GET** /projects/assignmentstatus                        | Fetches all available assignment statuses for projects                                           
 [**projectsAssignmentstatusIdGet**](ProjectsApi.md#projectsAssignmentstatusIdGet)                                   | **GET** /projects/assignmentstatus/{id}                   | Fetches a single assignment status by its id                                                     
 [**projectsAssignmentstatusIdPut**](ProjectsApi.md#projectsAssignmentstatusIdPut)                                   | **PUT** /projects/assignmentstatus/{id}                   | Updates a project assignment status for the given id                                             
 [**projectsAssignmentstatusPost**](ProjectsApi.md#projectsAssignmentstatusPost)                                     | **POST** /projects/assignmentstatus                       | Creates a new project assignment status                                                          
 [**projectsDocumentGet**](ProjectsApi.md#projectsDocumentGet)                                                       | **GET** /projects/document                                | Fetches all available documents for projects                                                     
 [**projectsDocumentIdDelete**](ProjectsApi.md#projectsDocumentIdDelete)                                             | **DELETE** /projects/document/{id}                        | Deletes the document with the given id                                                           
 [**projectsDocumentIdGet**](ProjectsApi.md#projectsDocumentIdGet)                                                   | **GET** /projects/document/{id}                           | Fetches a single document for projects by its id                                                 
 [**projectsDocumentPost**](ProjectsApi.md#projectsDocumentPost)                                                     | **POST** /projects/document                               | create a document                                                                                
 [**projectsDocumentPut**](ProjectsApi.md#projectsDocumentPut)                                                       | **PUT** /projects/document                                | update a document                                                                                
 [**projectsDocumenttypeGet**](ProjectsApi.md#projectsDocumenttypeGet)                                               | **GET** /projects/documenttype                            | Fetches all available document types for Projects                                                
 [**projectsDocumenttypeIdGet**](ProjectsApi.md#projectsDocumenttypeIdGet)                                           | **GET** /projects/documenttype/{id}                       | Fetches a single document type for Projects by its id                                            
 [**projectsProjectGet**](ProjectsApi.md#projectsProjectGet)                                                         | **GET** /projects/project                                 | Fetches all projects                                                                             
 [**projectsProjectIdDelete**](ProjectsApi.md#projectsProjectIdDelete)                                               | **DELETE** /projects/project/{id}                         | Deletes the project with the given id                                                            
 [**projectsProjectIdGet**](ProjectsApi.md#projectsProjectIdGet)                                                     | **GET** /projects/project/{id}                            | Fetches a single project by id                                                                   
 [**projectsProjectIdPlanningBudgetGet**](ProjectsApi.md#projectsProjectIdPlanningBudgetGet)                         | **GET** /projects/project/{id}/planningBudget             | Fetches the assignment budget info of a project                                                  
 [**projectsProjectIdPut**](ProjectsApi.md#projectsProjectIdPut)                                                     | **PUT** /projects/project/{id}                            | Updates a project for the given id                                                               
 [**projectsProjectPost**](ProjectsApi.md#projectsProjectPost)                                                       | **POST** /projects/project                                | Add a new project                                                                                
 [**projectsProjectcustomfieldgroupsGet**](ProjectsApi.md#projectsProjectcustomfieldgroupsGet)                       | **GET** /projects/projectcustomfieldgroups                | Fetches all custom field groups available for projects                                           
 [**projectsProjectcustomfieldgroupsIdGet**](ProjectsApi.md#projectsProjectcustomfieldgroupsIdGet)                   | **GET** /projects/projectcustomfieldgroups/{id}           | Fetches a single custom field group available for project                                        
 [**projectsProjectcustomfieldsGet**](ProjectsApi.md#projectsProjectcustomfieldsGet)                                 | **GET** /projects/projectcustomfields                     | Fetches all custom fields available for projects                                                 
 [**projectsProjectcustomfieldsIdGet**](ProjectsApi.md#projectsProjectcustomfieldsIdGet)                             | **GET** /projects/projectcustomfields/{id}                | Fetches a single custom field available for projects                                             
 [**projectsProjectemployeePost**](ProjectsApi.md#projectsProjectemployeePost)                                       | **POST** projects/projectemployee                         | Add an employee to a project                                                                     
 [**projectsProjectemployeeProjectEmployeeIdDelete**](ProjectsApi.md#projectsProjectemployeeProjectEmployeeIdDelete) | **DELETE** projects/projectemployee/{project_employee_id} | Remove an employee from a project                                                                
 [**projectsProjectfiltersGet**](ProjectsApi.md#projectsProjectfiltersGet)                                           | **GET** /projects/projectfilters                          | Fetches all filters available for projects                                                       
 [**projectsProjectfiltersIdGet**](ProjectsApi.md#projectsProjectfiltersIdGet)                                       | **GET** /projects/projectfilters/{id}                     | Fetches a single filter available for projects                                                   
 [**projectsProjectstatusGet**](ProjectsApi.md#projectsProjectstatusGet)                                             | **GET** /projects/projectstatus                           | Fetches all projects statusses                                                                   
 [**projectsProjectstatusIdGet**](ProjectsApi.md#projectsProjectstatusIdGet)                                         | **GET** /projects/projectstatus/{id}                      | Fetches a single projects status by id                                                           
 [**projectsPurchaseGet**](ProjectsApi.md#projectsPurchaseGet)                                                       | **GET** /projects/purchase                                | Fetches all project purchase records                                                             
 [**projectsPurchaseIdGet**](ProjectsApi.md#projectsPurchaseIdGet)                                                   | **GET** /projects/purchase/{id}                           | Fetches a single project purchase record                                                         
 [**projectsPurchasetypeGet**](ProjectsApi.md#projectsPurchasetypeGet)                                               | **GET** /projects/purchasetype                            | Fetches all purchase types                                                                       
 [**projectsPurchasetypeIdGet**](ProjectsApi.md#projectsPurchasetypeIdGet)                                           | **GET** /projects/purchasetype/{id}                       | Fetches a single purchase type by id                                                             
 [**projectsReverseinvoiceGet**](ProjectsApi.md#projectsReverseinvoiceGet)                                           | **GET** /projects/reverseinvoice                          | Fetches all reverse invoice records                                                              
 [**projectsReverseinvoiceIdGet**](ProjectsApi.md#projectsReverseinvoiceIdGet)                                       | **GET** /projects/reverseinvoice/{id}                     | Fetches a single project reverse invoice                                                         
 [**projectsServiceGet**](ProjectsApi.md#projectsServiceGet)                                                         | **GET** /projects/service                                 | Fetches all services                                                                             
 [**projectsServiceIdDelete**](ProjectsApi.md#projectsServiceIdDelete)                                               | **DELETE** /projects/service/{id}                         | Deletes the service with the given id                                                            
 [**projectsServiceIdDuplicatePost**](ProjectsApi.md#projectsServiceIdDuplicatePost)                                 | **POST** /projects/service/{id}/duplicate                 | Duplicates a service on base of the id                                                           
 [**projectsServiceIdGet**](ProjectsApi.md#projectsServiceIdGet)                                                     | **GET** /projects/service/{id}                            | Fetches a single service by id                                                                   
 [**projectsServiceIdPlanningBudgetGet**](ProjectsApi.md#projectsServiceIdPlanningBudgetGet)                         | **GET** /projects/service/{id}/planningBudget             | Fetches the assignment budget info of a project service                                          
 [**projectsServiceIdPut**](ProjectsApi.md#projectsServiceIdPut)                                                     | **PUT** /projects/service/{id}                            | Updates a service for the given id                                                               
 [**projectsServicePost**](ProjectsApi.md#projectsServicePost)                                                       | **POST** /projects/service                                | Add a new service                                                                                

# **projectsAssignmentGet**

> \Paqtcom\Simplicate\Model\RestResultProjectAssignments projectsAssignmentGet($offset, $limit, $sort)

Fetches all available assignments for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsAssignmentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjectAssignments**](../Model/RestResultProjectAssignments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentIdGet**

> \Paqtcom\Simplicate\Model\RestResultProjectAssignment projectsAssignmentIdGet($id)

Fetches all a single assignment by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsAssignmentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultProjectAssignment**](../Model/RestResultProjectAssignment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentIdPut**

> projectsAssignmentIdPut($id, $body)

Updates a project assignment for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PutAssignment(); // \Paqtcom\Simplicate\Model\PutAssignment | Project assignment PUT body

try {
    $apiInstance->projectsAssignmentIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                 | Description                 | Notes 
----------|----------------------------------------------------------------------|-----------------------------|-------
 **id**   | **string**                                                           | The template&#39;s id       |
 **body** | [**\Paqtcom\Simplicate\Model\PutAssignment**](../Model/PutAssignment.md) | Project assignment PUT body |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentPost**

> projectsAssignmentPost($body)

Creates a new project assignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostAssignment(); // \Paqtcom\Simplicate\Model\PostAssignment | Project assignment POST body

try {
    $apiInstance->projectsAssignmentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                   | Description                  | Notes 
----------|------------------------------------------------------------------------|------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostAssignment**](../Model/PostAssignment.md) | Project assignment POST body |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentbudgetGet**

> \Paqtcom\Simplicate\Model\RestResultProjectAssignmentbudget projectsAssignmentbudgetGet($q_range_start, $q_employee_id,
> $q_assignment_id, $offset, $limit, $sort)

Get budget information (planned amount, spent amount etc.) of assignment within given date range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q_range_start = "q_range_start_example"; // string | 
$q_employee_id = "q_employee_id_example"; // string | 
$q_assignment_id = "q_assignment_id_example"; // string | 
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsAssignmentbudgetGet($q_range_start, $q_employee_id, $q_assignment_id, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentbudgetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name                | Type       | Description                      | Notes                     
---------------------|------------|----------------------------------|---------------------------
 **q_range_start**   | **string** |                                  |
 **q_employee_id**   | **string** |                                  |
 **q_assignment_id** | **string** |                                  |
 **offset**          | **int**    | The offset to search from        | [optional]                
 **limit**           | **int**    | The limit of max allowed results | [optional] [default to 5] 
 **sort**            | **string** | Sort the result by column name   | [optional]                

### Return type

[**\Paqtcom\Simplicate\Model\RestResultProjectAssignmentbudget**](../Model/RestResultProjectAssignmentbudget.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentstatusGet**

> \Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatuses projectsAssignmentstatusGet($offset, $limit, $sort)

Fetches all available assignment statuses for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsAssignmentstatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatuses**](../Model/RestResultProjectAssignmentStatuses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentstatusIdGet**

> \Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatus projectsAssignmentstatusIdGet($id, $offset, $limit, $sort)

Fetches a single assignment status by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsAssignmentstatusIdGet($id, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentstatusIdGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatus**](../Model/RestResultProjectAssignmentStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentstatusIdPut**

> projectsAssignmentstatusIdPut($id, $body)

Updates a project assignment status for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\AssignmentStatus(); // \Paqtcom\Simplicate\Model\AssignmentStatus | Project assignment POST body

try {
    $apiInstance->projectsAssignmentstatusIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentstatusIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                  | Notes 
----------|----------------------------------------------------------------------------|------------------------------|-------
 **id**   | **string**                                                                 | The template&#39;s id        |
 **body** | [**\Paqtcom\Simplicate\Model\AssignmentStatus**](../Model/AssignmentStatus.md) | Project assignment POST body |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsAssignmentstatusPost**

> projectsAssignmentstatusPost($body)

Creates a new project assignment status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\AssignmentStatus(); // \Paqtcom\Simplicate\Model\AssignmentStatus | Project assignment POST body

try {
    $apiInstance->projectsAssignmentstatusPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAssignmentstatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                       | Description                  | Notes 
----------|----------------------------------------------------------------------------|------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\AssignmentStatus**](../Model/AssignmentStatus.md) | Project assignment POST body |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsDocumentGet**

> \Paqtcom\Simplicate\Model\RestResultDocuments projectsDocumentGet($offset, $limit, $sort)

Fetches all available documents for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsDocumentGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumentGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumentIdDelete**

> projectsDocumentIdDelete($id)

Deletes the document with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->projectsDocumentIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumentIdGet**

> \Paqtcom\Simplicate\Model\RestResultDocument projectsDocumentIdGet($id)

Fetches a single document for projects by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsDocumentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumentPost**

> projectsDocumentPost($body)

create a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostDocument(); // \Paqtcom\Simplicate\Model\PostDocument | Document object containing data

try {
    $apiInstance->projectsDocumentPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumentPost: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumentPut**

> projectsDocumentPut($body)

update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PutDocument(); // \Paqtcom\Simplicate\Model\PutDocument | Document object containing data

try {
    $apiInstance->projectsDocumentPut($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumentPut: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumenttypeGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentTypes projectsDocumenttypeGet($offset, $limit, $sort)

Fetches all available document types for Projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsDocumenttypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumenttypeGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsDocumenttypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultDocumentType projectsDocumenttypeIdGet($id)

Fetches a single document type for Projects by its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsDocumenttypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDocumenttypeIdGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectGet**

> \Paqtcom\Simplicate\Model\RestResultProjects projectsProjectGet($offset, $limit, $sort)

Fetches all projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsProjectGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjects**](../Model/RestResultProjects.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectIdDelete**

> projectsProjectIdDelete($id)

Deletes the project with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->projectsProjectIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectIdGet**

> \Paqtcom\Simplicate\Model\RestResultProject projectsProjectIdGet($id)

Fetches a single project by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsProjectIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultProject**](../Model/RestResultProject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectIdPlanningBudgetGet**

> \Paqtcom\Simplicate\Model\RestResult projectsProjectIdPlanningBudgetGet($id, $by, $until_date)

Fetches the assignment budget info of a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$by = "by_example"; // string | 
$until_date = "until_date_example"; // string | Y-m-d

try {
    $result = $apiInstance->projectsProjectIdPlanningBudgetGet($id, $by, $until_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectIdPlanningBudgetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name           | Type       | Description           | Notes      
----------------|------------|-----------------------|------------
 **id**         | **string** | The template&#39;s id |
 **by**         | **string** |                       | [optional] 
 **until_date** | **string** | Y-m-d                 | [optional] 

### Return type

[**\Paqtcom\Simplicate\Model\RestResult**](../Model/RestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectIdPut**

> projectsProjectIdPut($id, $body)

Updates a project for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PostProject(); // \Paqtcom\Simplicate\Model\PostProject | project object that needs to be updated

try {
    $apiInstance->projectsProjectIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                             | Notes 
----------|------------------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                                       | The template&#39;s id                   |
 **body** | [**\Paqtcom\Simplicate\Model\PostProject**](../Model/PostProject.md) | project object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectPost**

> projectsProjectPost($body)

Add a new project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostProject(); // \Paqtcom\Simplicate\Model\PostProject | Project object that needs to be added

try {
    $apiInstance->projectsProjectPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                             | Description                           | Notes 
----------|------------------------------------------------------------------|---------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostProject**](../Model/PostProject.md) | Project object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectcustomfieldgroupsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroups projectsProjectcustomfieldgroupsGet($offset, $limit, $sort)

Fetches all custom field groups available for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsProjectcustomfieldgroupsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectcustomfieldgroupsGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectcustomfieldgroupsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFieldGroup projectsProjectcustomfieldgroupsIdGet($id)

Fetches a single custom field group available for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsProjectcustomfieldgroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectcustomfieldgroupsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectcustomfieldsGet**

> \Paqtcom\Simplicate\Model\RestResultCustomFields projectsProjectcustomfieldsGet($offset, $limit, $sort)

Fetches all custom fields available for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsProjectcustomfieldsGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectcustomfieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectcustomfieldsIdGet**

> \Paqtcom\Simplicate\Model\RestResultCustomField projectsProjectcustomfieldsIdGet($id)

Fetches a single custom field available for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsProjectcustomfieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectcustomfieldsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **projectsProjectemployeePost**

> projectsProjectemployeePost($body)

Add an employee to a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\Body(); // \Paqtcom\Simplicate\Model\Body | Body for adding an employee to a project

try {
    $apiInstance->projectsProjectemployeePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectemployeePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                               | Description                              | Notes 
----------|----------------------------------------------------|------------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\Body**](../Model/Body.md) | Body for adding an employee to a project |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectemployeeProjectEmployeeIdDelete**

> projectsProjectemployeeProjectEmployeeIdDelete()

Remove an employee from a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->projectsProjectemployeeProjectEmployeeIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectemployeeProjectEmployeeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectfiltersGet**

> \Paqtcom\Simplicate\Model\RestResultFilters projectsProjectfiltersGet($offset, $limit, $sort)

Fetches all filters available for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsProjectfiltersGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectfiltersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultFilters**](../Model/RestResultFilters.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectfiltersIdGet**

> \Paqtcom\Simplicate\Model\RestResultFilter projectsProjectfiltersIdGet($id)

Fetches a single filter available for projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsProjectfiltersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectfiltersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultFilter**](../Model/RestResultFilter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectstatusGet**

> \Paqtcom\Simplicate\Model\RestResultProjectStatusses projectsProjectstatusGet($offset, $limit, $sort)

Fetches all projects statusses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsProjectstatusGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectstatusGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjectStatusses**](../Model/RestResultProjectStatusses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsProjectstatusIdGet**

> \Paqtcom\Simplicate\Model\RestResultProjectStatus projectsProjectstatusIdGet($id)

Fetches a single projects status by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsProjectstatusIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsProjectstatusIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultProjectStatus**](../Model/RestResultProjectStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsPurchaseGet**

> \Paqtcom\Simplicate\Model\RestResultPurchases projectsPurchaseGet($offset, $limit, $sort)

Fetches all project purchase records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsPurchaseGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPurchaseGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultPurchases**](../Model/RestResultPurchases.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsPurchaseIdGet**

> \Paqtcom\Simplicate\Model\RestResultPurchase projectsPurchaseIdGet($id)

Fetches a single project purchase record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsPurchaseIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPurchaseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultPurchase**](../Model/RestResultPurchase.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsPurchasetypeGet**

> \Paqtcom\Simplicate\Model\RestResultPurchaseTypes projectsPurchasetypeGet($offset, $limit, $sort)

Fetches all purchase types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsPurchasetypeGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPurchasetypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultPurchaseTypes**](../Model/RestResultPurchaseTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsPurchasetypeIdGet**

> \Paqtcom\Simplicate\Model\RestResultPurchaseType projectsPurchasetypeIdGet($id)

Fetches a single purchase type by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsPurchasetypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsPurchasetypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultPurchaseType**](../Model/RestResultPurchaseType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsReverseinvoiceGet**

> \Paqtcom\Simplicate\Model\RestResultReverseInvoices projectsReverseinvoiceGet($offset, $limit, $sort)

Fetches all reverse invoice records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsReverseinvoiceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsReverseinvoiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultReverseInvoices**](../Model/RestResultReverseInvoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsReverseinvoiceIdGet**

> \Paqtcom\Simplicate\Model\RestResultReverseInvoice projectsReverseinvoiceIdGet($id)

Fetches a single project reverse invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsReverseinvoiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsReverseinvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultReverseInvoice**](../Model/RestResultReverseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServiceGet**

> \Paqtcom\Simplicate\Model\RestResultProjectServices projectsServiceGet($offset, $limit, $sort)

Fetches all services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | The offset to search from
$limit = 5; // int | The limit of max allowed results
$sort = "sort_example"; // string | Sort the result by column name

try {
    $result = $apiInstance->projectsServiceGet($offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\Paqtcom\Simplicate\Model\RestResultProjectServices**](../Model/RestResultProjectServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServiceIdDelete**

> projectsServiceIdDelete($id)

Deletes the service with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $apiInstance->projectsServiceIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **projectsServiceIdDuplicatePost**

> projectsServiceIdDuplicatePost($id, $body)

Duplicates a service on base of the id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\DuplicateProjectService(); // \Paqtcom\Simplicate\Model\DuplicateProjectService | Optional parameters to overwrite

try {
    $apiInstance->projectsServiceIdDuplicatePost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceIdDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                                     | Description                      | Notes      
----------|------------------------------------------------------------------------------------------|----------------------------------|------------
 **id**   | **string**                                                                               | The template&#39;s id            |
 **body** | [**\Paqtcom\Simplicate\Model\DuplicateProjectService**](../Model/DuplicateProjectService.md) | Optional parameters to overwrite | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServiceIdGet**

> \Paqtcom\Simplicate\Model\RestResultProjectService projectsServiceIdGet($id)

Fetches a single service by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id

try {
    $result = $apiInstance->projectsServiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name   | Type       | Description           | Notes 
--------|------------|-----------------------|-------
 **id** | **string** | The template&#39;s id |

### Return type

[**\Paqtcom\Simplicate\Model\RestResultProjectService**](../Model/RestResultProjectService.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServiceIdPlanningBudgetGet**

> \Paqtcom\Simplicate\Model\RestResult projectsServiceIdPlanningBudgetGet($id, $by, $until_date)

Fetches the assignment budget info of a project service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$by = "by_example"; // string | 
$until_date = "until_date_example"; // string | Y-m-d

try {
    $result = $apiInstance->projectsServiceIdPlanningBudgetGet($id, $by, $until_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceIdPlanningBudgetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name           | Type       | Description           | Notes      
----------------|------------|-----------------------|------------
 **id**         | **string** | The template&#39;s id |
 **by**         | **string** |                       | [optional] 
 **until_date** | **string** | Y-m-d                 | [optional] 

### Return type

[**\Paqtcom\Simplicate\Model\RestResult**](../Model/RestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServiceIdPut**

> projectsServiceIdPut($id, $body)

Updates a service for the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The template's id
$body = new \Paqtcom\Simplicate\Model\PutProjectService(); // \Paqtcom\Simplicate\Model\PutProjectService | Service object that needs to be updated

try {
    $apiInstance->projectsServiceIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                         | Description                             | Notes 
----------|------------------------------------------------------------------------------|-----------------------------------------|-------
 **id**   | **string**                                                                   | The template&#39;s id                   |
 **body** | [**\Paqtcom\Simplicate\Model\PutProjectService**](../Model/PutProjectService.md) | Service object that needs to be updated |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **projectsServicePost**

> projectsServicePost($body)

Add a new service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Paqtcom\Simplicate\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Paqtcom\Simplicate\Model\PostProjectService(); // \Paqtcom\Simplicate\Model\PostProjectService | template object that needs to be added

try {
    $apiInstance->projectsServicePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name     | Type                                                                           | Description                            | Notes 
----------|--------------------------------------------------------------------------------|----------------------------------------|-------
 **body** | [**\Paqtcom\Simplicate\Model\PostProjectService**](../Model/PostProjectService.md) | template object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

