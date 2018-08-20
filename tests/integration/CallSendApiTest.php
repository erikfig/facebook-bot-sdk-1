<?php
namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{

    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */
    public function testMarkeRequest()
    {
        $message = (new Text(1))->message('Olá');
        (new CallSendApi('we23weewqe2'))->make($message);
    }

}