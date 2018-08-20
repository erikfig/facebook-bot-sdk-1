<?php

namespace CodeBot\Message;

class Video implements Message
{

    private $recipientId;

    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message($messageText): array
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ],
            ]
        ];
    }
}