# SMSGatewayMe\Client\CallbackApi

All URIs are relative to *https://smsgateway.me/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCallback**](CallbackApi.md#createCallback) | **POST** /callback | Create Callback
[**getCallback**](CallbackApi.md#getCallback) | **GET** /callback/{id} | Get a specific callback
[**searchCallbacks**](CallbackApi.md#searchCallbacks) | **POST** /callback/search | Search callbacks
[**updateCallback**](CallbackApi.md#updateCallback) | **PUT** /callback/{id} | Update callback


# **createCallback**
> \SMSGatewayMe\Client\Model\Callback createCallback($callback)

Create Callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\CallbackApi();
$callback = new \SMSGatewayMe\Client\Model\CreateCallbackRequest(); // \SMSGatewayMe\Client\Model\CreateCallbackRequest | callback to create

try { 
    $result = $api_instance->createCallback($callback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->createCallback: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callback** | [**\SMSGatewayMe\Client\Model\CreateCallbackRequest**](\SMSGatewayMe\Client\Model\CreateCallbackRequest.md)| callback to create | 

### Return type

[**\SMSGatewayMe\Client\Model\Callback**](Callback.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCallback**
> \SMSGatewayMe\Client\Model\Callback getCallback($id)

Get a specific callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\CallbackApi();
$id = "id_example"; // string | 

try { 
    $result = $api_instance->getCallback($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->getCallback: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 

### Return type

[**\SMSGatewayMe\Client\Model\Callback**](Callback.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **searchCallbacks**
> \SMSGatewayMe\Client\Model\CallbackSearchResult searchCallbacks($search)

Search callbacks

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\CallbackApi();
$search = new \SMSGatewayMe\Client\Model\Search(); // \SMSGatewayMe\Client\Model\Search | Search Criteria

try { 
    $result = $api_instance->searchCallbacks($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->searchCallbacks: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\SMSGatewayMe\Client\Model\Search**](\SMSGatewayMe\Client\Model\Search.md)| Search Criteria | [optional] 

### Return type

[**\SMSGatewayMe\Client\Model\CallbackSearchResult**](CallbackSearchResult.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCallback**
> \SMSGatewayMe\Client\Model\Callback updateCallback($id, $callback)

Update callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\CallbackApi();
$id = "id_example"; // string | 
$callback = array(new UpdateCallbackRequest()); // \SMSGatewayMe\Client\Model\UpdateCallbackRequest[] | callback update data

try { 
    $result = $api_instance->updateCallback($id, $callback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackApi->updateCallback: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **callback** | [**\SMSGatewayMe\Client\Model\UpdateCallbackRequest[]**](UpdateCallbackRequest.md)| callback update data | 

### Return type

[**\SMSGatewayMe\Client\Model\Callback**](Callback.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

