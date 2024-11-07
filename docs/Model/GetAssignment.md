# GetAssignment

## Properties

 Name                 | Type                                                                                  | Description | Notes                                               
----------------------|---------------------------------------------------------------------------------------|-------------|-----------------------------------------------------
 **id**               | **string**                                                                            |             | [optional] [default to 'assignment:abc']            
 **start_date**       | **string**                                                                            |             | [optional] [default to '2032-01-01']                
 **end_date**         | **string**                                                                            |             | [optional] [default to '2032-12-31']                
 **hours_total**      | **float**                                                                             |             | [optional]                                          
 **hours**            | **float**                                                                             |             | [optional]                                          
 **hours_type**       | **string**                                                                            |             | [optional] [default to 'total']                     
 **spread**           | **int[]**                                                                             |             | [optional]                                          
 **status**           | [**\Paqtcom\Simplicate\Model\GetAssignmentStatus**](GetAssignmentStatus.md)               |             | [optional]                                          
 **project**          | [**\Paqtcom\Simplicate\Model\GetProjectSimple**](GetProjectSimple.md)                     |             | [optional]                                          
 **projectservice**   | [**\Paqtcom\Simplicate\Model\GetProjectServiceSimple**](GetProjectServiceSimple.md)       |             | [optional]                                          
 **projecthourstype** | [**\Paqtcom\Simplicate\Model\GetProjectServiceHoursType**](GetProjectServiceHoursType.md) |             | [optional]                                          
 **employees**        | [**\Paqtcom\Simplicate\Model\GetEmployeeSimple[]**](GetEmployeeSimple.md)                 |             | [optional]                                          
 **spent_amount**     | **string**                                                                            |             | [optional]                                          
 **is_planned**       | **bool**                                                                              |             | [optional]                                          
 **name**             | **string**                                                                            |             | [optional] [default to 'Website Design Assignment'] 
 **use_spread**       | **bool**                                                                              |             | [optional]                                          
 **description**      | **string**                                                                            |             | [optional]                                          
 **created_at**       | **string**                                                                            |             | [optional]                                          
 **updated_at**       | **string**                                                                            |             | [optional]                                          

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


