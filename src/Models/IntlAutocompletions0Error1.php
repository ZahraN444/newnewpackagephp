<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class IntlAutocompletions0Error1 implements \JsonSerializable
{
    /**
     * @var Error1
     */
    private $error;

    /**
     * @param Error1 $error
     */
    public function __construct(Error1 $error)
    {
        $this->error = $error;
    }

    /**
     * Returns Error.
     */
    public function getError(): Error1
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @required
     * @maps error
     */
    public function setError(Error1 $error): void
    {
        $this->error = $error;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['error'] = $this->error;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
