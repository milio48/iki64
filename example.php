<?php
require_once 'vendor/autoload.php';
use Justalinko\Iki64\Iki64;
$iki64 = new Iki64;

$key = '@@Yourkey!23';

/** encode */
echo $iki64->iki64_encode('Hello World!' , $key).PHP_EOL;
// result : VATndA8eT29hdAQf

/** decode */
echo $iki64->iki64_decode('VATndA8eT29hdAQf' , $key).PHP_EOL;
// result : Hello World!

/** if wrong key */
echo $iki64->iki64_decode('VATndA8eT29hdAQf' , 'wrong key').PHP_EOL;
// result : <e�xo-_o`xc_
