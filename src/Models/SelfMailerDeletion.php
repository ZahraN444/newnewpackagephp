<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

/**
 * Lob uses RESTful HTTP response codes to indicate success or failure of an API request. In general,
 * 2xx indicates success, 4xx indicate an input error, and 5xx indicates an error on Lob's end.
 */
class SelfMailerDeletion implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $deleted;

    /**
     * Returns Id.
     * Unique identifier prefixed with `sfm_`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `sfm_`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Deleted.
     * Only returned if the resource has been successfully deleted.
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * Sets Deleted.
     * Only returned if the resource has been successfully deleted.
     *
     * @maps deleted
     */
    public function setDeleted(?bool $deleted): void
    {
        $this->deleted = $deleted;
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
        if (isset($this->id)) {
            $json['id']      = $this->id;
        }
        if (isset($this->deleted)) {
            $json['deleted'] = $this->deleted;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
