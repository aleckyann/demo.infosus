<?php

function segment($posicao) {
    $segmentos = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $segmentos[0] = $_SERVER['SERVER_NAME'];

    if(array_key_exists($posicao, $segmentos)){
        return $segmentos[$posicao];
    } else {
        return '';
    }
}


function active($posicao, $segmento2)
{
    $segmento1 = segment($posicao);

    if($segmento1 === $segmento2){
        return 'class="active"';
    } else {
        return '';
    }
}


function colapsed($posicao, $segmento2)
{
    $segmento1 = segment($posicao);

    if($segmento1 === $segmento2){
        return 'class="colapsed"';
    } else {
        return 'class="collapse"';
    }
}


 ?>
