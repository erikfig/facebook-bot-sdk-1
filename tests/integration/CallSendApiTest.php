<?php
namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    //ANOTATION: PREVINIR QUE ERRO ACONTEÇA POR INCOERENCIA NO ACCESS TOKEN
    //PASSADO NO METODO CallSendApi
    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */
    public function testMarkeRequest()
    {
        $message = (new Text(1))->message('Olá');
        (new CallSendApi('23jsd11d1299dj12md'))->make($message);
    }

}