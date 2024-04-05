
# iki64
base64 with key

## how to
```php
include("iki64.php");

//    to encode     $data                    $key
echo iki64_encode('this is iki64 example', 'secret');


//    to decode     $data                          $key
echo iki64_decode('nOkqiyMqiyMqj2b2LZMcdOAxiOhc', 'secret');
```

## demo
http://tpcg.io/_ZVD91M



# Javascript CDN
`https://cdn.jsdelivr.net/gh/milio48/iki64@master/iki64.js`


```html
<script src="https://cdn.jsdelivr.net/gh/milio48/iki64@master/iki64.js"></script>
<script>
  console.log(iki64_encode('this is iki64 example', 'secret')) //nOkqiyMqiyMqj2b2LZMcdOAxiOhc;
  console.log(iki64_decode('nOkqiyMqiyMqj2b2LZMcdOAxiOhc', 'secret')) //this is iki64 example;
</script>
```
