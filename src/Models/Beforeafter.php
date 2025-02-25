<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Beforeafter implements \JsonSerializable
{
    /**
     * @var string
     */
    private $before;

    /**
     * @var string
     */
    private $after;

    /**
     * @param string $before
     * @param string $after
     */
    public function __construct(string $before, string $after)
    {
        $this->before = $before;
        $this->after = $after;
    }

    /**
     * Returns Before.
     * A reference to a list entry used for paginating to the previous set of entries. This field is pre-
     * populated in the `previous_url` field in the return response.
     */
    public function getBefore(): string
    {
        return $this->before;
    }

    /**
     * Sets Before.
     * A reference to a list entry used for paginating to the previous set of entries. This field is pre-
     * populated in the `previous_url` field in the return response.
     *
     * @required
     * @maps before
     */
    public function setBefore(string $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     * A reference to a list entry used for paginating to the next set of entries. This field is pre-
     * populated in the `next_url` field in the return response.
     */
    public function getAfter(): string
    {
        return $this->after;
    }

    /**
     * Sets After.
     * A reference to a list entry used for paginating to the next set of entries. This field is pre-
     * populated in the `next_url` field in the return response.
     *
     * @required
     * @maps after
     */
    public function setAfter(string $after): void
    {
        $this->after = $after;
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
        $json['before'] = $this->before;
        $json['after']  = $this->after;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
