# GetHours

## Properties

 Name                       | Type                                                                                    | Description                                   | Notes      
----------------------------|-----------------------------------------------------------------------------------------|-----------------------------------------------|------------
 **id**                     | **string**                                                                              |                                               | [optional] 
 **employee**               | [**\Swagger\Client\Model\GetEmployeeSimple**](GetEmployeeSimple.md)                     |                                               | [optional] 
 **project**                | [**\Swagger\Client\Model\GetProjectSimple**](GetProjectSimple.md)                       |                                               | [optional] 
 **projectservice**         | [**\Swagger\Client\Model\GetHoursHoursProjectService**](GetHoursHoursProjectService.md) |                                               | [optional] 
 **type**                   | **object**                                                                              | When record is leave related return leaveType | [optional] 
 **approvalstatus**         | [**\Swagger\Client\Model\GetApprovalStatus**](GetApprovalStatus.md)                     |                                               | [optional] 
 **invoice_status**         | **string**                                                                              |                                               | [optional] 
 **invoice_id**             | **string**                                                                              | See /invoices/invoice                         | [optional] 
 **invoiceline_id**         | **string**                                                                              | See /invoices/invoice                         | [optional] 
 **tariff**                 | **float**                                                                               |                                               | [optional] 
 **custom_fields**          | [**\Swagger\Client\Model\GetCustomField[]**](GetCustomField.md)                         |                                               | [optional] 
 **created_at**             | **string**                                                                              |                                               | [optional] 
 **updated_at**             | **string**                                                                              |                                               | [optional] 
 **locked**                 | **bool**                                                                                |                                               | [optional] 
 **is_editable**            | [**\Swagger\Client\Model\IsSatisfied**](IsSatisfied.md)                                 |                                               | [optional] 
 **is_deletable**           | [**\Swagger\Client\Model\IsSatisfied**](IsSatisfied.md)                                 |                                               | [optional] 
 **leave_status**           | [**\Swagger\Client\Model\LeaveStatus**](LeaveStatus.md)                                 |                                               | [optional] 
 **leave_id**               | **string**                                                                              |                                               | [optional] 
 **absence_id**             | **string**                                                                              |                                               | [optional] 
 **status**                 | **string**                                                                              |                                               | [optional] 
 **corrections**            | [**\Swagger\Client\Model\Correction**](Correction.md)                                   |                                               | [optional] 
 **mileage**                | [**\Swagger\Client\Model\GetMileageSimple**](GetMileageSimple.md)                       |                                               | [optional] 
 **is_productive**          | **bool**                                                                                |                                               | [optional] 
 **hours**                  | **float**                                                                               |                                               | [optional] 
 **duration_in_minutes**    | **int**                                                                                 |                                               | [optional] 
 **start_date**             | **string**                                                                              |                                               | [optional] 
 **end_date**               | **string**                                                                              |                                               | [optional] 
 **is_time_defined**        | **bool**                                                                                |                                               | [optional] 
 **is_recurring**           | **bool**                                                                                |                                               | [optional] 
 **recurrence**             | [**\Swagger\Client\Model\Recurrence**](Recurrence.md)                                   |                                               | [optional] 
 **is_external**            | **bool**                                                                                |                                               | [optional] 
 **billable**               | **bool**                                                                                |                                               | [optional] 
 **note**                   | **string**                                                                              |                                               | [optional] 
 **address**                | [**\Swagger\Client\Model\Address**](Address.md)                                         |                                               | [optional] 
 **assignment_id**          | **string**                                                                              |                                               | [optional] 
 **should_sync_to_cronofy** | **bool**                                                                                |                                               | [optional] 
 **source**                 | **string**                                                                              |                                               | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


