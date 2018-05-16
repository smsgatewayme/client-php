# SMSGatewayMe\Client\MessageApi

All URIs are relative to *https://smsgateway.me/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMessages**](MessageApi.md#cancelMessages) | **POST** /message/cancel | Cancel messages
[**getMessage**](MessageApi.md#getMessage) | **GET** /message/{id} | Get a specific message
[**searchMessages**](MessageApi.md#searchMessages) | **POST** /message/search | Search messages
[**sendMessages**](MessageApi.md#sendMessages) | **POST** /message/send | Send messages


# **cancelMessages**
> \SMSGatewayMe\Client\Model\Message[] cancelMessages($messages)

Cancel messages

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\MessageApi();
$messages = array(new CancelMessageRequest()); // \SMSGatewayMe\Client\Model\CancelMessageRequest[] | messages to cancel

try { 
    $result = $api_instance->cancelMessages($messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->cancelMessages: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messages** | [**\SMSGatewayMe\Client\Model\CancelMessageRequest[]**](CancelMessageRequest.md)| messages to cancel | 

### Return type

[**\SMSGatewayMe\Client\Model\Message[]**](Message.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMessage**
> \SMSGatewayMe\Client\Model\Message getMessage($id)

Get a specific message

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\MessageApi();
$id = "id_example"; // string | 

try { 
    $result = $api_instance->getMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getMessage: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 

### Return type

[**\SMSGatewayMe\Client\Model\Message**](Message.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **searchMessages**
> \SMSGatewayMe\Client\Model\MessageSearchResult searchMessages($search)

Search messages

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\MessageApi();
$search = new \SMSGatewayMe\Client\Model\Search(); // \SMSGatewayMe\Client\Model\Search | Search Criteria

try { 
    $result = $api_instance->searchMessages($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->searchMessages: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\SMSGatewayMe\Client\Model\Search**](\SMSGatewayMe\Client\Model\Search.md)| Search Criteria | [optional] 

### Return type

[**\SMSGatewayMe\Client\Model\MessageSearchResult**](MessageSearchResult.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sendMessages**
> \SMSGatewayMe\Client\Model\Message[] sendMessages($messages)

Send messages

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\MessageApi();
$messages = array(new SendMessageRequest()); // \SMSGatewayMe\Client\Model\SendMessageRequest[] | messages to send

try { 
    $result = $api_instance->sendMessages($messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->sendMessages: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messages** | [**\SMSGatewayMe\Client\Model\SendMessageRequest[]**](SendMessageRequest.md)| messages to send | 

### Return type

[**\SMSGatewayMe\Client\Model\Message[]**](Message.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

