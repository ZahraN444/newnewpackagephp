<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class UsAutocompletions implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var Suggestions[]|null
     */
    private $suggestions;

    /**
     * @var string|null
     */
    private $object;

    /**
     * Returns Id.
     * Unique identifier prefixed with `us_auto_`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `us_auto_`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Suggestions.
     * An array of objects representing suggested addresses.
     *
     * @return Suggestions[]|null
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * Sets Suggestions.
     * An array of objects representing suggested addresses.
     *
     * @maps suggestions
     *
     * @param Suggestions[]|null $suggestions
     */
    public function setSuggestions(?array $suggestions): void
    {
        $this->suggestions = $suggestions;
    }

    /**
     * Returns Object.
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * Sets Object.
     *
     * @maps object
     * @factory \LobLib\Models\Object13Enum::checkValue
     */
    public function setObject(?string $object): void
    {
        $this->object = $object;
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
            $json['id']          = $this->id;
        }
        if (isset($this->suggestions)) {
            $json['suggestions'] = $this->suggestions;
        }
        if (isset($this->object)) {
            $json['object']      = Object13Enum::checkValue($this->object);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
