<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status;

class ClientErrorException extends \Kobens\Http\Exception\Exception
{
    public function __construct($message = null, $code = 400, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
