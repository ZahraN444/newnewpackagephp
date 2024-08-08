<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class LinksResponse implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $count;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var int|null
     */
    private $offset;

    /**
     * @var LinkResponse[]|null
     */
    private $data;

    /**
     * Returns Count.
     * The number of results in the current response.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * The number of results in the current response.
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Limit.
     * How many results to return.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * How many results to return.
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Offset.
     * An integer that designates the offset at which to begin returning results. Defaults to 0.
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * Sets Offset.
     * An integer that designates the offset at which to begin returning results. Defaults to 0.
     *
     * @maps offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Returns Data.
     * list of links
     *
     * @return LinkResponse[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * list of links
     *
     * @maps data
     *
     * @param LinkResponse[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
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
        if (isset($this->count)) {
            $json['count']  = $this->count;
        }
        if (isset($this->limit)) {
            $json['limit']  = $this->limit;
        }
        if (isset($this->offset)) {
            $json['offset'] = $this->offset;
        }
        if (isset($this->data)) {
            $json['data']   = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
