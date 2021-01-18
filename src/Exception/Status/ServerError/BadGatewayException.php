<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status\ServerError;

final class BadGatewayException extends \Kobens\Http\Exception\Status\ServerError
{
    public function __construct($message = null, int $code = 502, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
