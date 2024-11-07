# AssignmentBudget

## Properties

 Name                   | Type       | Description                                                                                                                                                                                     | Notes                                
------------------------|------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------
 **assignment_id**      | **string** |                                                                                                                                                                                                 | [optional]                           
 **range_start**        | **string** |                                                                                                                                                                                                 | [optional] [default to '2020-02-03'] 
 **budget_range_start** | **string** |                                                                                                                                                                                                 | [optional]                           
 **range_end**          | **string** |                                                                                                                                                                                                 | [optional] [default to '2020-02-10'] 
 **budget_range_end**   | **string** |                                                                                                                                                                                                 | [optional]                           
 **planned_amount**     | **object** | Planned amount for either given week or the rest of the assignment duration. Returns float by default; if &#39;experimental&#39; header is sent, returns string using ISO 8601 duration format. | [optional]                           
 **spent_amount**       | **object** | Spent amount in given range. Returns float by default; if &#39;experimental&#39; header is sent, returns string using ISO 8601 duration format.                                                 | [optional]                           
 **hours_type**         | **string** |                                                                                                                                                                                                 | [optional]                           

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


