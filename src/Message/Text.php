<?php

/*
 * Classe responsável pelo envio de mensagens de texto
 */

namespace CodeBot\Message;

class Text implements Message
{

    private $recipientId;

    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message( $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message' => [
                'test' => $messageText,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}