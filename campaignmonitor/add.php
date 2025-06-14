<?php

require_once 'csrest_subscribers.php';

$auth = array('api_key' => 'zXBTUQ3SAP/D1bxVW96JSv5ez+P5JqBhvIUqb8BzuGOwcm7QAjGGLebncZy0TdNDKiTIqvM32FR14Ncr5C1nUjjw3vbQVRybH3TG3NK/6H0cmeUQGJiYS4guGLqbmjobKZ0WQgrco035FpfLJ3HB2A=='); //API Key
$wrap = new CS_REST_Subscribers('64dc726ce70efc0bbb01f1aad5d2b5ca', $auth); //All Nighter List ID
$result = $wrap->add(array(
    'EmailAddress' => $_POST['EmailAddress'],
    // 'Name' => 'Subscriber name',
    // 'CustomFields' => array(
    //     array(
    //         'Key' => 'Field 1 Key',
    //         'Value' => 'Field Value'
    //     ),
    //     array(
    //         'Key' => 'Multi Option Field 1',
    //         'Value' => 'Option 2'
    //     )
    // ),
    'ConsentToTrack' => 'yes',
    'Resubscribe' => true
));

// echo "Result of POST /api/v3.1/subscribers/{list id}.{format}\n<br />";
// if($result->was_successful()) {
//     echo "Subscribed with code ".$result->http_status_code;
// } else {
//     echo 'Failed with code '.$result->http_status_code."\n<br /><pre>";
//     var_dump($result->response);
//     echo '</pre>';
// }
echo json_encode(array("ErrorCode"=>$result->http_status_code));
