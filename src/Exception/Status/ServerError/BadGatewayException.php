<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status\ServerError;

final class BadGatewayException extends \Kobens\Http\Exception\Status\ServerErrorException
{
    public function __construct($message = null, $code = 502, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
