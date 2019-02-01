<?php
include("iki64.php");
$mode = $_GET['mode'];
$data = $_GET['data'];
$key  = $_GET['key'];

if($mode == 'enc'){
    echo iki64_encode($data, $key);
}elseif($mode == 'dec'){
    echo iki64_decode("$data", $key);
};
