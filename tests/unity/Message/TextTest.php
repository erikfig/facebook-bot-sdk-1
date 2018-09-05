<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testRetornaUmArray()
    {

        $expected = [
            'recipient' => [
                'id'=>1
            ],
            'message' => [
                'test' => 'Olá',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];

        $this->assertEquals($actual,$expected);
    }

}