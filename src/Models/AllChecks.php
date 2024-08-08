<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class AllChecks implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $object;

    /**
     * @var array
     */
    private $nextUrl = [];

    /**
     * @var array
     */
    private $previousUrl = [];

    /**
     * @var int|null
     */
    private $count;

    /**
     * @var int|null
     */
    private $totalCount;

    /**
     * @var Check[]|null
     */
    private $data;

    /**
     * Returns Object.
     * Value is resource type.
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * Sets Object.
     * Value is resource type.
     *
     * @maps object
     */
    public function setObject(?string $object): void
    {
        $this->object = $object;
    }

    /**
     * Returns Next Url.
     * Url of next page of items in list.
     */
    public function getNextUrl(): ?string
    {
        if (count($this->nextUrl) == 0) {
            return null;
        }
        return $this->nextUrl['value'];
    }

    /**
     * Sets Next Url.
     * Url of next page of items in list.
     *
     * @maps next_url
     */
    public function setNextUrl(?string $nextUrl): void
    {
        $this->nextUrl['value'] = $nextUrl;
    }

    /**
     * Unsets Next Url.
     * Url of next page of items in list.
     */
    public function unsetNextUrl(): void
    {
        $this->nextUrl = [];
    }

    /**
     * Returns Previous Url.
     * Url of previous page of items in list.
     */
    public function getPreviousUrl(): ?string
    {
        if (count($this->previousUrl) == 0) {
            return null;
        }
        return $this->previousUrl['value'];
    }

    /**
     * Sets Previous Url.
     * Url of previous page of items in list.
     *
     * @maps previous_url
     */
    public function setPreviousUrl(?string $previousUrl): void
    {
        $this->previousUrl['value'] = $previousUrl;
    }

    /**
     * Unsets Previous Url.
     * Url of previous page of items in list.
     */
    public function unsetPreviousUrl(): void
    {
        $this->previousUrl = [];
    }

    /**
     * Returns Count.
     * number of resources in a set
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * number of resources in a set
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Total Count.
     * Indicates the total number of records. Provided when the request specifies an "include" query
     * parameter
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Sets Total Count.
     * Indicates the total number of records. Provided when the request specifies an "include" query
     * parameter
     *
     * @maps total_count
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Returns Data.
     * list of checks
     *
     * @return Check[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * list of checks
     *
     * @maps data
     *
     * @param Check[]|null $data
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
        if (isset($this->object)) {
            $json['object']       = $this->object;
        }
        if (!empty($this->nextUrl)) {
            $json['next_url']     = $this->nextUrl['value'];
        }
        if (!empty($this->previousUrl)) {
            $json['previous_url'] = $this->previousUrl['value'];
        }
        if (isset($this->count)) {
            $json['count']        = $this->count;
        }
        if (isset($this->totalCount)) {
            $json['total_count']  = $this->totalCount;
        }
        if (isset($this->data)) {
            $json['data']         = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
