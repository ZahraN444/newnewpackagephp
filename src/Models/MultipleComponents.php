<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class MultipleComponents implements \JsonSerializable
{
    /**
     * @var array
     */
    private $recipient = [];

    /**
     * @var string
     */
    private $primaryLine;

    /**
     * @var string|null
     */
    private $secondaryLine;

    /**
     * @var string|null
     */
    private $urbanization;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @param string $primaryLine
     * @param string $city
     * @param string $state
     * @param string $zipCode
     */
    public function __construct(string $primaryLine, string $city, string $state, string $zipCode)
    {
        $this->primaryLine = $primaryLine;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Recipient.
     * The intended recipient, typically a person's or firm's name.
     */
    public function getRecipient(): ?string
    {
        if (count($this->recipient) == 0) {
            return null;
        }
        return $this->recipient['value'];
    }

    /**
     * Sets Recipient.
     * The intended recipient, typically a person's or firm's name.
     *
     * @maps recipient
     */
    public function setRecipient(?string $recipient): void
    {
        $this->recipient['value'] = $recipient;
    }

    /**
     * Unsets Recipient.
     * The intended recipient, typically a person's or firm's name.
     */
    public function unsetRecipient(): void
    {
        $this->recipient = [];
    }

    /**
     * Returns Primary Line.
     * The primary delivery line (usually the street address) of the address.
     * Combination of the following applicable `components`:
     * * `primary_number`
     * * `street_predirection`
     * * `street_name`
     * * `street_suffix`
     * * `street_postdirection`
     * * `secondary_designator`
     * * `secondary_number`
     * * `pmb_designator`
     * * `pmb_number`
     */
    public function getPrimaryLine(): string
    {
        return $this->primaryLine;
    }

    /**
     * Sets Primary Line.
     * The primary delivery line (usually the street address) of the address.
     * Combination of the following applicable `components`:
     * * `primary_number`
     * * `street_predirection`
     * * `street_name`
     * * `street_suffix`
     * * `street_postdirection`
     * * `secondary_designator`
     * * `secondary_number`
     * * `pmb_designator`
     * * `pmb_number`
     *
     * @required
     * @maps primary_line
     */
    public function setPrimaryLine(string $primaryLine): void
    {
        $this->primaryLine = $primaryLine;
    }

    /**
     * Returns Secondary Line.
     * The secondary delivery line of the address. This field is typically empty but may contain
     * information if `primary_line` is too long.
     */
    public function getSecondaryLine(): ?string
    {
        return $this->secondaryLine;
    }

    /**
     * Sets Secondary Line.
     * The secondary delivery line of the address. This field is typically empty but may contain
     * information if `primary_line` is too long.
     *
     * @maps secondary_line
     */
    public function setSecondaryLine(?string $secondaryLine): void
    {
        $this->secondaryLine = $secondaryLine;
    }

    /**
     * Returns Urbanization.
     * Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development
     * within a city. See <a href="https://pe.usps.com/text/pub28/28api_008.htm#:~:text=I51.,-
     * 4%20Urbanizations&text=In%20Puerto%20Rico%2C%20identical%20street,
     * placed%20before%20the%20urbanization%20name." target="_blank">USPS documentation</a> for
     * clarification.
     */
    public function getUrbanization(): ?string
    {
        return $this->urbanization;
    }

    /**
     * Sets Urbanization.
     * Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development
     * within a city. See <a href="https://pe.usps.com/text/pub28/28api_008.htm#:~:text=I51.,-
     * 4%20Urbanizations&text=In%20Puerto%20Rico%2C%20identical%20street,
     * placed%20before%20the%20urbanization%20name." target="_blank">USPS documentation</a> for
     * clarification.
     *
     * @maps urbanization
     */
    public function setUrbanization(?string $urbanization): void
    {
        $this->urbanization = $urbanization;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     * The <a href="https://en.wikipedia.org/wiki/ISO_3166-2:US" target="_blank">ISO 3166-2</a> two letter
     * code or subdivision name for the state. `city` and `state` are required if no `zip_code` is passed.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The <a href="https://en.wikipedia.org/wiki/ISO_3166-2:US" target="_blank">ISO 3166-2</a> two letter
     * code or subdivision name for the state. `city` and `state` are required if no `zip_code` is passed.
     *
     * @required
     * @maps state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Zip Code.
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     *
     * @required
     * @maps zip_code
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
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
        if (!empty($this->recipient)) {
            $json['recipient']      = $this->recipient['value'];
        }
        $json['primary_line']       = $this->primaryLine;
        if (isset($this->secondaryLine)) {
            $json['secondary_line'] = $this->secondaryLine;
        }
        if (isset($this->urbanization)) {
            $json['urbanization']   = $this->urbanization;
        }
        $json['city']               = $this->city;
        $json['state']              = $this->state;
        $json['zip_code']           = $this->zipCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
