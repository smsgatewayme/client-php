# SMSGatewayMe\Client\ContactApi

All URIs are relative to *https://smsgateway.me/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPhoneNumber**](ContactApi.md#addPhoneNumber) | **PUT** /contact/{id}/phone-number/{phone-number} | The phone number to add
[**createContacts**](ContactApi.md#createContacts) | **POST** /contact | Create Contacts
[**deletePhoneNumber**](ContactApi.md#deletePhoneNumber) | **DELETE** /contact/{id}/phone-number/{phone-number} | The phone number to delete
[**getContact**](ContactApi.md#getContact) | **GET** /contact/{id} | Get a specific contact
[**searchContacts**](ContactApi.md#searchContacts) | **POST** /contact/search | Search contacts
[**updateContact**](ContactApi.md#updateContact) | **PUT** /contact/{id} | Update contact


# **addPhoneNumber**
> \SMSGatewayMe\Client\Model\Contact addPhoneNumber($id, $phoneNumber)

The phone number to add

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$id = "id_example"; // string | 
$phoneNumber = "phoneNumber_example"; // string | phone number to add

try { 
    $result = $api_instance->addPhoneNumber($id, $phoneNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addPhoneNumber: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **phoneNumber** | **string**| phone number to add | 

### Return type

[**\SMSGatewayMe\Client\Model\Contact**](Contact.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createContacts**
> \SMSGatewayMe\Client\Model\Contact[] createContacts($contacts)

Create Contacts

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$contacts = array(new CreateContactRequest()); // \SMSGatewayMe\Client\Model\CreateContactRequest[] | contacts to create

try { 
    $result = $api_instance->createContacts($contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContacts: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contacts** | [**\SMSGatewayMe\Client\Model\CreateContactRequest[]**](CreateContactRequest.md)| contacts to create | 

### Return type

[**\SMSGatewayMe\Client\Model\Contact[]**](Contact.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deletePhoneNumber**
> \SMSGatewayMe\Client\Model\Contact deletePhoneNumber($id, $phoneNumber)

The phone number to delete

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$id = "id_example"; // string | 
$phoneNumber = "phoneNumber_example"; // string | phone number to add

try { 
    $result = $api_instance->deletePhoneNumber($id, $phoneNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deletePhoneNumber: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **phoneNumber** | **string**| phone number to add | 

### Return type

[**\SMSGatewayMe\Client\Model\Contact**](Contact.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContact**
> \SMSGatewayMe\Client\Model\Contact getContact($id)

Get a specific contact

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$id = "id_example"; // string | 

try { 
    $result = $api_instance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 

### Return type

[**\SMSGatewayMe\Client\Model\Contact**](Contact.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **searchContacts**
> \SMSGatewayMe\Client\Model\ContactSearchResult searchContacts($search)

Search contacts

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$search = new \SMSGatewayMe\Client\Model\Search(); // \SMSGatewayMe\Client\Model\Search | Search Criteria

try { 
    $result = $api_instance->searchContacts($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->searchContacts: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\SMSGatewayMe\Client\Model\Search**](\SMSGatewayMe\Client\Model\Search.md)| Search Criteria | [optional] 

### Return type

[**\SMSGatewayMe\Client\Model\ContactSearchResult**](ContactSearchResult.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateContact**
> \SMSGatewayMe\Client\Model\Contact updateContact($id, $contact)

Update contact

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// SMSGatewayMe\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'BEARER');

$api_instance = new SMSGatewayMe\Client\Api\ContactApi();
$id = "id_example"; // string | 
$contact = new \SMSGatewayMe\Client\Model\UpdateContactRequest(); // \SMSGatewayMe\Client\Model\UpdateContactRequest | contacts details

try { 
    $result = $api_instance->updateContact($id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **contact** | [**\SMSGatewayMe\Client\Model\UpdateContactRequest**](\SMSGatewayMe\Client\Model\UpdateContactRequest.md)| contacts details | 

### Return type

[**\SMSGatewayMe\Client\Model\Contact**](Contact.md)

### Authorization

[Authorization](../README.md#Authorization)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

