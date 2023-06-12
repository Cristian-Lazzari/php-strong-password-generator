<?php 
$num = '0123456789';
$let = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$simb = '!"£$%&/()=?^;:.,#[]';

function noset($len)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $response = '';
    for ($i = 0; $i < $len; $i++) {
        $response = $characters[rand(0, strlen($characters) - 1)];
    }
    return $response;
}

function onlynumber ($len)
{
    $num = '0123456789';
    
    $randstring = '';
    for ($i = 0; $i < $len; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
function onlyletter ($len)
{
    $letter ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    $randstring = '';
    for ($i = 0; $i < $len; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}


