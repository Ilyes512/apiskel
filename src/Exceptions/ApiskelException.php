<?php namespace Apiskel\Exceptions;

use Exception;

abstract class ApiskelException extends Exception
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $detail;

    /**
     * @param string $message
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }

    /**
     * Get the status
     *
     * @return int
     */
    public function getStatus()
    {
        return (int) $this->status;
    }

    /**
     * Return the Exception as an array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id'     => $this->id,
            'status' => $this->status,
            'title'  => $this->title,
            'detail' => $this->detail,
        ];
    }

    /**
     * Build the Exception
     *
     * @param array $args
     *
     * @return string
     */
    protected function build(array $args)
    {
        // todo fix tight coupling with laravel
        $error = config(sprintf('errors.%s', $this->id));

        $this->status = $error['status'];
        $this->title  = $error['title'];
        $this->detail = vsprintf($error['detail'], $args);

        return $this->detail;
    }
}
