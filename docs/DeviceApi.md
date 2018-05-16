# SMSGatewayMe\Client\DeviceApi

All URIs are relative to *https://smsgateway.me/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDevice**](DeviceApi.md#getDevice) | **GET** /device/{id} | Get a specific device
[**searchDevices**](DeviceApi.md#searchDevices) | **POST** /device/search | Search devices


# **getDevice**
> \SMSGatewayMe\Client\Model\Device getDevice($id)

Get a specific device

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\DeviceApi();
$id = "id_example"; // string | 

try { 
    $result = $api_instance->getDevice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getDevice: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 

### Return type

[**\SMSGatewayMe\Client\Model\Device**](Device.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **searchDevices**
> \SMSGatewayMe\Client\Model\DeviceSearchResult searchDevices($search)

Search devices

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\DeviceApi();
$search = new \SMSGatewayMe\Client\Model\Search(); // \SMSGatewayMe\Client\Model\Search | Search Criteria

try { 
    $result = $api_instance->searchDevices($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->searchDevices: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\SMSGatewayMe\Client\Model\Search**](\SMSGatewayMe\Client\Model\Search.md)| Search Criteria | [optional] 

### Return type

[**\SMSGatewayMe\Client\Model\DeviceSearchResult**](DeviceSearchResult.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

