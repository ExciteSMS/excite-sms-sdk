<?php

namespace ExcitesmsPhpSdk\ExcitesmsPhpSdk;

use GuzzleHttp\Client;

class ExciteSms
{
    protected $baseUrl;
    protected $apiKey;
    protected $httpClient;

    public function __construct($baseUrl, $apiKey)
    {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
        $this->httpClient = new Client();
    }

    public function sendSingleContactListSms($recipient, $senderId, $message)
    {
        $url = $this->baseUrl . '/api/v3/sms/campaign';

        $headers = [
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => 'plain',
            'message' => $message,
        ];

        $response = $this->httpClient->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        return $response->getBody()->getContents();
    }
}
