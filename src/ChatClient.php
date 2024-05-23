<?php

namespace CurelyAI;

class ChatClient
{
    private $botKey;
    private $baseUrl;

    public function __construct($botKey)
    {
        $this->botKey = $botKey;
        $this->baseUrl = 'http://localhost:8000'; // API base URL
    }

    public function chat($message)
    {
        $url = $this->baseUrl . '/chat';
        $headers = [
            'Content-Type: application/json',
            'bot_key: ' . $this->botKey
        ];
        $payload = [
            'message' => $message
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response)->message;
    }
}
