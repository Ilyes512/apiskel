<?php namespace Apiskel\Exceptions;

class UserNotFound extends NotFoundException
{
    /**
     * @var string
     */
    protected $id = 'userNotFound';

    /**
     * @param string $id The users id
     * @param string $region The users region
     */
    public function __construct($id = '(Unknown id)', $region = '(Unknown region)')
    {
        parent::__construct($id, $region);
    }
}
