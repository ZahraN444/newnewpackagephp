<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Addresses implements \JsonSerializable
{
    /**
     * @var Components3|null
     */
    private $components;

    /**
     * @var LocationAnalysis1|null
     */
    private $locationAnalysis;

    /**
     * Returns Components.
     */
    public function getComponents(): ?Components3
    {
        return $this->components;
    }

    /**
     * Sets Components.
     *
     * @maps components
     */
    public function setComponents(?Components3 $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Location Analysis.
     */
    public function getLocationAnalysis(): ?LocationAnalysis1
    {
        return $this->locationAnalysis;
    }

    /**
     * Sets Location Analysis.
     *
     * @maps location_analysis
     */
    public function setLocationAnalysis(?LocationAnalysis1 $locationAnalysis): void
    {
        $this->locationAnalysis = $locationAnalysis;
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
        if (isset($this->components)) {
            $json['components']        = $this->components;
        }
        if (isset($this->locationAnalysis)) {
            $json['location_analysis'] = $this->locationAnalysis;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
