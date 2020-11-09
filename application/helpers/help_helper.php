<?php

function select($select, $selected)
{
    if($select == $selected){
        return 'selected';
    }
}

function alert($content, $type){
    if($content) {
        echo "<div class='alert alert-".$type."'>";
        echo "<p>".$content."</p>";
        echo "</div>";
    };
}


//00/00/0000 -> 0000-00-00
function data_db($data)
{
    $data = explode("/", $data);
    return $data[2]. '-' .$data[1]. '-' .$data[0];
}

//0000-00-00 -> 00/00/0000
function data_normal($data)
{
    $data = explode("-", $data);
    return $data[2]. '/' .$data[1]. '/' .$data[0];
}

//0000-00-00 00:00:00 -> 00/00/0000 00:00:00
function datetime_normal($data)
{
    if($data == ''){
        return '';
    } else {
        $data = explode(' ', $data);
        $horas = $data[1];
        $data = explode("-", $data[0]);
        $data = $data[2]. '/' .$data[1]. '/' .$data[0] .' ás: '. $horas;
        return $data;
    }
}

//0000-00-00 00:00:00 -> 00/00/0000 00:00:00
function datetime_db($data)
{
    $data = explode(' ', $data);
    $horas = $data[1];
    $data = explode("-", $data[0]);
    $data = $data[2]. '/' .$data[1]. '/' .$data[0] .' '. $horas;
    return $data;
}

function use_uri_segment($uri)
{
    return ucfirst(str_replace('-', ' ', $uri));
}

function pre($data = '')
{
    echo '<pre style="margin:5px; opacity:0.95; border-radius:0; box-shadow: 1px 3px 5px 1px #888888; background-color:#282828; color:#EF4136; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:#FF4B4B;">';
    print_r($data);
    echo '</pre>';
}


function to_url($segment)
{
    return str_replace(' ', '-', urldecode($segment));
}

function breadcrumb($segment)
{
    return ucfirst(str_replace('-', ' ', urldecode($segment)));
}

function usuario_url($segment)
{
    return ucfirst(str_replace('-', ' ', urldecode($segment)));
}

function criptografia($value){
    return hash('Whirlpool', $value);
}

?>
