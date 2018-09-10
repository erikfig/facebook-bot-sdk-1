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
        print_r("====>entrando no check\n");
        print_r("=====Variáveis:\n");

        var_dump($hubMode);
        var_dump($hubVerifyToken);
        var_dump($token);

        print_r($_GET);


        if ($hubMode === 'subscribe' and $hubVerifyToken === $token){
            print_r("////entrando IF");
            return filter_input(INPUT_GET, 'hub_challenge');
        }
        return false;

    }

}