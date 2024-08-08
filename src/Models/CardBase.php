<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class CardBase implements \JsonSerializable
{
    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string|null
     */
    private $size;

    /**
     * Returns Description.
     * Description of the card.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * Description of the card.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * Description of the card.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Size.
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * Sets Size.
     *
     * @maps size
     * @factory \LobLib\Models\Size1Enum::checkValue
     */
    public function setSize(?string $size): void
    {
        $this->size = $size;
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
        if (!empty($this->description)) {
            $json['description'] = $this->description['value'];
        }
        if (isset($this->size)) {
            $json['size']        = Size1Enum::checkValue($this->size);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
