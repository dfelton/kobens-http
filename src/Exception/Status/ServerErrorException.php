<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status;

class ServerErrorException extends \Kobens\Http\Exception\Exception
{
    public function __construct($message = null, $code = 500, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
