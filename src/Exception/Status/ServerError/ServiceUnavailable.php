<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status\ServerError;

use Kobens\Http\Exception\Status\ServerError;

final class ServiceUnavailable extends ServerError
{
    public function __construct($message = null, int $code = 503, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
