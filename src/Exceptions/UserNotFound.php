<?php namespace Apiskel\Exceptions;

class UserNotFound extends NotFoundException
{
    /**
     * @var string
     */
    protected $id = 'user_not_found';

    /**
     * @param string $id The users id
     * @param string $region The users region
     */
    public function __construct($id = '?', $region = '?')
    {
        parent::__construct($id, $region);
    }
}
