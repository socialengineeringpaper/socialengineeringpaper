<?php

    // Set IP
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    // Validate IP Address
    if(filter_var($remote, FILTER_VALIDATE_IP))
    {
        $ib = $remote;
    }
    elseif(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ib = $client;
    }
    else
    {
        $ib = $forward;
    }
    
?>