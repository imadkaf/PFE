<?php

return array(
    array(
        'server' => array(
            'REQUEST_URI'    => '/b/b2',
            'REQUEST_METHOD' => 'DELETE',
        ),
        'body' => '',
    ),
    array(
        'status' => 'HTTP/1.1 204 No Content',
        'headers' => array(
            'Server'         => 'eZComponents/dev/ezcWebdavTransportTestMock',
            'Content-Length' => '0',
        ),
        'body' => '',
    ),
);

?>
