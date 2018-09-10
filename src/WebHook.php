<?php

namespace CodeBot;

/*
 * CLASSE RESPONSÁVEL PELA CHECAGEM REALIZADA PELO FACEBOOK PARA VERIFICAÇÃO DO
 * STATUS DE SERVIDOR DO CHATBOT.
 */


class WebHook
{

    public function check(string $token)
    {

        $hubMode = filter_input(INPUT_GET, 'hub_mode');
        $hubVerifyToken = filter_input(INPUT_GET, 'hub_verify_token');
        print_r("////entrando no check");
        if ($hubMode === 'subscribe' and $hubVerifyToken === $token){
            print_r("////entrando IF check");
            return filter_input(INPUT_GET, 'hub_challenge');
        }
        return false;

    }

}