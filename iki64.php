<?php

// https://www.programmingalgorithms.com/algorithm/caesar-cipher?lang=PHP

function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}

// iki64

function iki64_encode($data, $key){
    $satu   = base64_encode($data);
    $keyLen = strlen($key);
    $dua    = Encipher($satu, $keyLen);
    $tiga   = str_split($key);
    $empat  = range('a', 'z');
    $lima   = array_unique($tiga);
    $enam   = implode($lima);
    $tuju   = strtr($dua, $empat, $enam);
    return $tuju;
};

function iki64_decode($data, $key){
    $keyLen = strlen($key);
    $empat  = range('a', 'z');
    $tiga   = str_split($key);
    $dua    = Decipher($data, $keyLen);
    $lima   = array_unique($tiga);
    $enam   = implode($lima);
    $tuju   = strtr($dua, $enam, $empat);
    $satu   = base64_decode($tuju);
    return $satu;
};
