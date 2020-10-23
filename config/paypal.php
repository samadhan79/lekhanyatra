<?php
return array(
/** set your paypal credential **/
'client_id' =>'ATuVLrlncj1osklqR9TiPPqE-9nL59qKKwQcoW_INMUf3BFSqWD2Q1OvBRlSajVKbUIrCrgXDfUm2ONu',
'secret' => 'ELtz6ZLF5iYonwChBQtiNLPwLhks7wccPffdaTGHtGzSDRr92NgI-u9m2QVV3tbfCAWSdXRhqO-R7H_J',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);