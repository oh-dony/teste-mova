<?php

echo "<h1>Mensagem para um dia especifico, exemplo de uma CRON rodando</h1>";

function feriados($calendario)
{
    $mensagemDeNatal = "";
    $feriado = false;

    switch ($calendario) {
        case '25/12':
            $mensagemDeNatal = "Feliz Natal e um ótimo ano novo!";
            $feriado = true;
            break;

        default:

            break;
    }

    return [
        'feriado' => $feriado,
        'mensagem' => $mensagemDeNatal,
    ];
}

$diaDaSenmana = "Domingo";
$calendario = "23/12";
$feriado = feriados($calendario);

switch ($diaDaSenmana) {
    case 'Segunda-Feira':
        echo $feriado["feriado"] ? $feriado["mensagem"] : "Bom Dia! hoje é {$diaDaSenmana} tenha uma ótima semana!";
        break;
    case 'Terça-Feira':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "Boa tarde! hoje é {$diaDaSenmana} tenha uma ótima noite";
        break;
    case 'Quarta-Feira':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "Hoje é {$diaDaSenmana} meu banaca, dia de Flamengo!";
        break;
    case 'Quinta-Feira':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "Hoje é {$diaDaSenmana} dia de jantar pastel!";
        break;
    case 'Sexta-Feira':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "Sextou!";
        break;
    case 'Sabado':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "hoje é {$diaDaSenmana}! Filmes e lanches?";
        break;
    case 'Domingo':
        echo $feriado["feriado"] ? $feriado["mensagem"] :  "Hoje é {$diaDaSenmana}! Vamos pra luta amanha?";
        break;
}
