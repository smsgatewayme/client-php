<?php

namespace SMSGatewayMe\Client;

use SMSGatewayMe\Client\Api\CallbackApi;
use SMSGatewayMe\Client\Api\ContactApi;
use SMSGatewayMe\Client\Api\DeviceApi;
use SMSGatewayMe\Client\Api\MessageApi;

class ClientProvider
{
    /**
     * @var DeviceApi
     */
    private $deviceClient;

    /**
     * @var MessageApi
     */
    private $messageClient;

    /**
     * @var ContactApi
     */
    private $contactClient;

    /**
     * @var CallbackApi
     */
    private $callbackClient;

    /**
     * ClientFactory constructor.
     *
     * @param string $apiToken
     */
    public function __construct($apiToken)
    {
        // Configure client
        $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization',$apiToken);
        $apiClient = new ApiClient($config);

        $this->deviceClient = new DeviceApi($apiClient);
        $this->messageClient = new MessageApi($apiClient);
        $this->contactClient = new ContactApi($apiClient);
        $this->callbackClient = new CallbackApi($apiClient);
    }

    /**
     * @return DeviceApi
     */
    public function getDeviceClient()
    {
        return $this->deviceClient;
    }

    /**
     * @return MessageApi
     */
    public function getMessageClient()
    {
        return $this->messageClient;
    }

    /**
     * @return ContactApi
     */
    public function getContactClient()
    {
        return $this->contactClient;
    }

    /**
     * @return CallbackApi
     */
    public function getCallbackClient()
    {
        return $this->callbackClient;
    }
}
