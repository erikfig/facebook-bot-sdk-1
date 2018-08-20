<?php

namespace CodeBot;

use GuzzleHttp\Client;

class CallSendApi
{

    const URL = 'https://graph.facebook.com/v2.6/me/messages';
    private $pageAccessToken;

    public function __construct($pageAccessToken)
    {
        $this->pageAccessToken = $pageAccessToken;
    }

    public function make(array $message, strint $url = null, $method = 'POST') :string
    {

        $client = new Client();
        $url = $url ?? CallSendApi::URL;

        $response = $client->request($method, $url, [
            'json' => $method,
            'query' => ['access_token' => $this->pageAccessToken]
        ]);

        return (string)$response->getBody();

    }

}