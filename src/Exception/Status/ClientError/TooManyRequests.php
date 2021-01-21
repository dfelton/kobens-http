<?php

declare(strict_types=1);

namespace Kobens\Http\Exception\Status\ServerError;

final class BadGatewayException extends \Kobens\Http\Exception\Status\ClientErrorException
{
    public const STATUS_CODE = 429;

    public function __construct($message = null, $code = self::STATUS_CODE, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
