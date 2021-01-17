<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status;

class ServerError extends \Kobens\Http\Exception\Exception
{
    public function __construct($message = null, int $code = 500, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
