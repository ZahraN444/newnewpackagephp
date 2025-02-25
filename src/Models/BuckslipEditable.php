<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use LobLib\ApiHelper;
use stdClass;

class BuckslipEditable implements \JsonSerializable
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
     * @var string
     */
    private $front;

    /**
     * @var string|null
     */
    private $back;

    /**
     * @param string $front
     */
    public function __construct(string $front)
    {
        $this->front = $front;
    }

    /**
     * Returns Description.
     * Description of the buckslip.
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
     * Description of the buckslip.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * Description of the buckslip.
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
     * @factory \LobLib\Models\SizeEnum::checkValue
     */
    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    /**
     * Returns Front.
     * A PDF template for the front of the buckslip
     */
    public function getFront(): string
    {
        return $this->front;
    }

    /**
     * Sets Front.
     * A PDF template for the front of the buckslip
     *
     * @required
     * @maps front
     * @mapsBy oneOf(string)
     */
    public function setFront(string $front): void
    {
        $this->front = $front;
    }

    /**
     * Returns Back.
     * A PDF template for the back of the buckslip
     */
    public function getBack(): ?string
    {
        return $this->back;
    }

    /**
     * Sets Back.
     * A PDF template for the back of the buckslip
     *
     * @maps back
     * @mapsBy anyOf(oneOf(string),null)
     */
    public function setBack(?string $back): void
    {
        $this->back = $back;
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
            $json['size']        = SizeEnum::checkValue($this->size);
        }
        $json['front']           = ApiHelper::getJsonHelper()->verifyTypes($this->front, 'oneOf(string)');
        if (isset($this->back)) {
            $json['back']        = ApiHelper::getJsonHelper()->verifyTypes($this->back, 'anyOf(oneOf(string),null)');
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
