<?php

    function encrypt($text, $key){

        $algorithm = "AES256"; 
        $message = openssl_encrypt(
        $text, 
        $algorithm, 
        $key, 
        OPENSSL_RAW_DATA, 
        $key);

        return base64_encode($message); 

    }

    function decrypt($text, $key){

        $algorithm = "AES256";          
        $message = openssl_decrypt(
        base64_decode($text), 
        $algorithm, 
        $key, 
        OPENSSL_RAW_DATA, 
        $key);

        return $message ;

    }  

?>