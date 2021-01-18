<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status\ServerError;

final class GatewayTimeoutException extends \Kobens\Http\Exception\Status\ServerErrorException
{
    public function __construct($message = null, int $code = 504, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
