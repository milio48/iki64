<?php
/**
 * @author https://github.com/milio48
 * @license MIT
 * 
 * --------------------------------------
 * Just rewrite code from iki64.php ( https://github.com/milio48/iki64 )
 * Make the code to packagist.org repository
 * For easy intregration to other project
 * --------------------------------------
 * 
 */

 namespace Justalinko\Iki64;
 Class Iki64
 {

// https://www.programmingalgorithms.com/algorithm/caesar-cipher?lang=PHP

        private function ___iki64_Cipher($ch, $key)
        {
            if (!ctype_alpha($ch))
                return $ch;

            $offset = ord(ctype_upper($ch) ? 'A' : 'a');
            return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
        }

        private function ___iki64_Encipher($input, $key)
        {
            $output = "";

            $inputArr = str_split($input);
            foreach ($inputArr as $ch)
                $output .= $this->___iki64_Cipher($ch, $key);

            return $output;
        }

        private function ___iki64_Decipher($input, $key)
        {
            return $this->___iki64_Encipher($input, 26 - $key);
        }

        // iki64
        private function ___iki64_abc($data){
            $md5    = md5("$data" . 'iki64');
            $az     = implode(range('a', 'z'));
            $base64 = strtolower(base64_encode($md5)) . "$az";
            $final  = preg_replace('([0-9|\=])', '', "$base64");
            $arr    = array_unique(str_split($final));
            return implode($arr);
        }

        private function ___iki64_ABCD($data){
            $md5    = md5("$data" . '_iki64');
            $az     = implode(range('A', 'Z'));
            $base64 = strtoupper(base64_encode($md5)) . "$az";
            $final  = preg_replace('([0-9|\=])', '', "$base64");
            $arr    = array_unique(str_split($final));
            return implode($arr);
        }

        public function iki64_encode($data, $key){
            $keyLen = strlen($key);
            $az     = implode(range('a', 'z'));
            $AZ     = implode(range('A', 'Z'));
            $rand   = $this->___iki64_abc($key);
            $rand2  = $this->___iki64_ABCD($key);

            $one    = base64_encode($data);
            $two    = $this->___iki64_Encipher($one, $keyLen);
            $three  = strtr($two, $az, $rand);

            $four   = strtr($three, $AZ, $rand2);
            return $four;
        }

        public function iki64_decode($data, $key){
            $keyLen = strlen($key);
            $az     = implode(range('a', 'z'));
            $AZ     = implode(range('A', 'Z'));
            $rand   = $this->___iki64_abc($key);
            $rand2  = $this->___iki64_ABCD($key);

            $four   = strtr($data, $rand2, $AZ);

            $three  = strtr($four, $rand, $az);
            $two    = $this->___iki64_Decipher($three, $keyLen);
            $one    = base64_decode($two);
            return $one;
        }

 }