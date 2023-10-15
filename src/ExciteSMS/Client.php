<?php

namespace ExciteSMS\ExciteSMS;

use YourNamespace\ExciteSMS\Exception\ExciteSMSException;

class Client
{
    private $accessToken;
    private $apiEndpoint = 'https://portal.excitesms.tech/api/v3/sms/send';

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function sendSMS($recipient, $senderId, $type, $message)
    {
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => $type,
            'message' => $message,
        ];

        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-Type: application/json',
            'Accept: application/json',
        ];

        $ch = curl_init($this->apiEndpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new ExciteSMSException('Curl Error: ' . curl_error($ch));
        }

        curl_close($ch);

        $responseData = json_decode($response, true);

        if (isset($responseData['error'])) {
            throw new ExciteSMSException('ExciteSMS API Error: ' . $responseData['error']);
        }

        return $responseData;
    }
}
