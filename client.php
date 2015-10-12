<?php

$options = array('location' => 'http://localhost:81/soap-demo/SimpleServer.php', 
                  'uri' => 'http://localhost:81/soap-demo');
//create an instante of the SOAPClient (the API will be available)
$api = new SoapClient(NULL, $options);
//call an API method
$param = "Quoc Huy";
$result =  $api->AddHello($param);
echo $result; 

?>
