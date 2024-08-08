<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class SortBy implements \JsonSerializable
{
    /**
     * @var string
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $dateModified;

    /**
     * @param string $dateCreated
     * @param string $dateModified
     */
    public function __construct(string $dateCreated, string $dateModified)
    {
        $this->dateCreated = $dateCreated;
        $this->dateModified = $dateModified;
    }

    /**
     * Returns Date Created.
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     *
     * @required
     * @maps date_created
     * @factory \LobLib\Models\DateCreatedEnum::checkValue
     */
    public function setDateCreated(string $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns Date Modified.
     */
    public function getDateModified(): string
    {
        return $this->dateModified;
    }

    /**
     * Sets Date Modified.
     *
     * @required
     * @maps date_modified
     * @factory \LobLib\Models\DateCreatedEnum::checkValue
     */
    public function setDateModified(string $dateModified): void
    {
        $this->dateModified = $dateModified;
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
        $json['date_created']  = DateCreatedEnum::checkValue($this->dateCreated);
        $json['date_modified'] = DateCreatedEnum::checkValue($this->dateModified);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
