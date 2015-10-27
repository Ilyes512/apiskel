<?php

/*
 * Todo: To be added over time:
 *
 * 405 Method Not Found
 * 406 Not Acceptable
 * 413 Payload Too Large
 * 418 I'm a teapot
 * 429 Too Many Requests
 * 498/499 Token Required (Unofficial)
 * 501 Not Implemented
 * 503 Service Unavailable
 * 505 HTTP Version Not Supported
 * 520 Unknown Error
 */

return [
    // 200
    'ok'                    => [
        'title'  => 'Standard response for successful HTTP requests.',
        'detail' => '',
    ],
    // 204
    'no_content'            => [
        'title'  => 'Standard response for successful HTTP requests without a body.',
        'detail' => 'The server successfully processed the request, but is not returning any content',
    ],
    // 400
    'bad_request'           => [
        'title'  => 'The server cannot or will not process the request due to something that is perceived to be a client error.',
        'detail' => 'Your request had an error. Please try again.'
    ],
    // 401
    'unauthorized'          => [
        'title'  => '',
        'detail' => '',
    ],
    // 403
    'forbidden'             => [
        'title'  => 'The request was a valid request, but the server is refusing to respond to it.',
        'detail' => 'Your request was valid, but you are not authorised to perform that action.'
    ],
    // 404
    'not_found'             => [
        'title'  => 'The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.',
        'detail' => 'The resource you were looking for was not found.'
    ],
    // 412
    'precondition_failed'   => [
        'title'  => 'The server does not meet one of the preconditions that the requester put on the request.',
        'detail' => 'Your request did not satisfy the required preconditions.'
    ],
    // 422
    'unprocessable_entity'  => [
        'title'  => '',
        'detail' => '',
    ],
    // 500
    'internal_server_error' => [
        'title'  => '',
        'detail' => '',
    ],
];
