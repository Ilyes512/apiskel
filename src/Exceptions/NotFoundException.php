<?php namespace Apiskel\Exceptions;

class NotFoundException extends ApiskelException
{
    /**
     * @var string
     */
    protected $id = 'notFound';

    /**
     * @var string
     */
    protected $status = '404';

    /**
     * @param string ...$args
     */
    public function __construct(...$args)
    {
        $message = $this->build($args);

        parent::__construct($message);
    }
}
