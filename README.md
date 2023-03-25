# iki64
base64 encode & decode with key

## Installation
```composer require justalinko/iki64:dev-master```


## how to
```
<?php

require_once('vendor/autoload.php');
$iki = new Iki64;

//    to encode     $data                    $key
echo $iki->iki64_encode('this is iki64 example', 'secret');


//    to decode     $data                          $key
echo $iki->iki64_decode('nOkqiyMqiyMqj2b2LZMcdOAxiOhc', 'secret');
```

## demo
http://tpcg.io/0xCvk1


___original code https://github.com/milio48/iki64__