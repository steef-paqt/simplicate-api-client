# GetHours

## Properties

 Name                       | Type                                                                                    | Description                                   | Notes      
----------------------------|-----------------------------------------------------------------------------------------|-----------------------------------------------|------------
 **id**                     | **string**                                                                              |                                               | [optional] 
 **employee**               | [**\Paqtcom\Simplicate\Model\GetEmployeeSimple**](GetEmployeeSimple.md)                     |                                               | [optional] 
 **project**                | [**\Paqtcom\Simplicate\Model\GetProjectSimple**](GetProjectSimple.md)                       |                                               | [optional] 
 **projectservice**         | [**\Paqtcom\Simplicate\Model\GetHoursHoursProjectService**](GetHoursHoursProjectService.md) |                                               | [optional] 
 **type**                   | **object**                                                                              | When record is leave related return leaveType | [optional] 
 **approvalstatus**         | [**\Paqtcom\Simplicate\Model\GetApprovalStatus**](GetApprovalStatus.md)                     |                                               | [optional] 
 **invoice_status**         | **string**                                                                              |                                               | [optional] 
 **invoice_id**             | **string**                                                                              | See /invoices/invoice                         | [optional] 
 **invoiceline_id**         | **string**                                                                              | See /invoices/invoice                         | [optional] 
 **tariff**                 | **float**                                                                               |                                               | [optional] 
 **custom_fields**          | [**\Paqtcom\Simplicate\Model\GetCustomField[]**](GetCustomField.md)                         |                                               | [optional] 
 **created_at**             | **string**                                                                              |                                               | [optional] 
 **updated_at**             | **string**                                                                              |                                               | [optional] 
 **locked**                 | **bool**                                                                                |                                               | [optional] 
 **is_editable**            | [**\Paqtcom\Simplicate\Model\IsSatisfied**](IsSatisfied.md)                                 |                                               | [optional] 
 **is_deletable**           | [**\Paqtcom\Simplicate\Model\IsSatisfied**](IsSatisfied.md)                                 |                                               | [optional] 
 **leave_status**           | [**\Paqtcom\Simplicate\Model\LeaveStatus**](LeaveStatus.md)                                 |                                               | [optional] 
 **leave_id**               | **string**                                                                              |                                               | [optional] 
 **absence_id**             | **string**                                                                              |                                               | [optional] 
 **status**                 | **string**                                                                              |                                               | [optional] 
 **corrections**            | [**\Paqtcom\Simplicate\Model\Correction**](Correction.md)                                   |                                               | [optional] 
 **mileage**                | [**\Paqtcom\Simplicate\Model\GetMileageSimple**](GetMileageSimple.md)                       |                                               | [optional] 
 **is_productive**          | **bool**                                                                                |                                               | [optional] 
 **hours**                  | **float**                                                                               |                                               | [optional] 
 **duration_in_minutes**    | **int**                                                                                 |                                               | [optional] 
 **start_date**             | **string**                                                                              |                                               | [optional] 
 **end_date**               | **string**                                                                              |                                               | [optional] 
 **is_time_defined**        | **bool**                                                                                |                                               | [optional] 
 **is_recurring**           | **bool**                                                                                |                                               | [optional] 
 **recurrence**             | [**\Paqtcom\Simplicate\Model\Recurrence**](Recurrence.md)                                   |                                               | [optional] 
 **is_external**            | **bool**                                                                                |                                               | [optional] 
 **billable**               | **bool**                                                                                |                                               | [optional] 
 **note**                   | **string**                                                                              |                                               | [optional] 
 **address**                | [**\Paqtcom\Simplicate\Model\Address**](Address.md)                                         |                                               | [optional] 
 **assignment_id**          | **string**                                                                              |                                               | [optional] 
 **should_sync_to_cronofy** | **bool**                                                                                |                                               | [optional] 
 **source**                 | **string**                                                                              |                                               | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


