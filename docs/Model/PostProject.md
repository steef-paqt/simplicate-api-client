# PostProject

## Properties

 Name                           | Type                                                                                      | Description                                                                                 | Notes      
--------------------------------|-------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------|------------
 **project_manager_id**         | **string**                                                                                | &#39;id&#39; found in &#39;hrm/employee&#39;                                                | [optional] 
 **project_status_id**          | **string**                                                                                | &#39;id&#39; found in &#39;projects/projectstatus&#39;                                      | [optional] 
 **separate_invoice_recipient** | [**\Swagger\Client\Model\PostSeparateInvoiceRecipient**](PostSeparateInvoiceRecipient.md) |                                                                                             | [optional] 
 **divergent_payment_term_id**  | **string**                                                                                | See /invoices/paymentterm. If you want to unset, please provide string value &#39;null&#39; | [optional] 
 **teams**                      | [**\Swagger\Client\Model\PostTeam[]**](PostTeam.md)                                       | See /hrm/team                                                                               | [optional] 
 **custom_fields**              | [**\Swagger\Client\Model\PostCustomFieldValue[]**](PostCustomFieldValue.md)               |                                                                                             | [optional] 
 **my_organization_profile_id** | **string**                                                                                |                                                                                             | [optional] 
 **person_id**                  | **string**                                                                                |                                                                                             | [optional] 
 **organization_id**            | **string**                                                                                |                                                                                             | [optional] 
 **contact_id**                 | **string**                                                                                |                                                                                             | [optional] 
 **name**                       | **string**                                                                                |                                                                                             | [optional] 
 **billable**                   | **bool**                                                                                  |                                                                                             | [optional] 
 **can_register_mileage**       | **bool**                                                                                  |                                                                                             | [optional] 
 **project_number**             | **string**                                                                                |                                                                                             | [optional] 
 **note**                       | **string**                                                                                |                                                                                             | [optional] 
 **start_date**                 | **string**                                                                                |                                                                                             | [optional] 
 **end_date**                   | **string**                                                                                |                                                                                             | [optional] 
 **invoice_reference**          | **string**                                                                                |                                                                                             | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


