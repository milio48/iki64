<?php
include("iki64.php");
$mode = $_POST['mode'];
$data = $_POST['data'];
$key  = $_POST['key'];


echo "<html><h3>iki64</h3>
<form method='post' autocomplete='off'>
    input: <textarea name='data'>$_POST[data]</textarea><br>
    key: <input type='text' name='key' value='$_POST[key]'><br>
    <input type='submit' name='mode' value='encode'> <input type='submit' name='mode' value='decode'>
</form><br><br>";

if($mode == 'encode'){
    echo '<br><sup>encode :</sup><hr>';
    echo iki64_encode($data, $key);
}elseif($mode == 'decode'){
    echo '<br><sup>decode :</sup><hr>';
    echo iki64_decode($data, $key);
};
