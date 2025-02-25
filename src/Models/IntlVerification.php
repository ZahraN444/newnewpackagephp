<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class IntlVerification implements \JsonSerializable
{
    /**
     * @var array
     */
    private $recipient = [];

    /**
     * @var string|null
     */
    private $primaryLine;

    /**
     * @var string|null
     */
    private $secondaryLine;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $lastLine;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $coverage;

    /**
     * @var string|null
     */
    private $deliverability;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var Components1|null
     */
    private $components;

    /**
     * @var string|null
     */
    private $object;

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
     */
    public function getPrimaryLine(): ?string
    {
        return $this->primaryLine;
    }

    /**
     * Sets Primary Line.
     * The primary delivery line (usually the street address) of the address.
     *
     * @maps primary_line
     */
    public function setPrimaryLine(?string $primaryLine): void
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
     * Returns Id.
     * Unique identifier prefixed with `intl_ver_`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `intl_ver_`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Last Line.
     * Combination of the following applicable `components`:
     * * `city`
     * * `state`
     * * `zip_code`
     * * `zip_code_plus_4`
     */
    public function getLastLine(): ?string
    {
        return $this->lastLine;
    }

    /**
     * Sets Last Line.
     * Combination of the following applicable `components`:
     * * `city`
     * * `state`
     * * `zip_code`
     * * `zip_code_plus_4`
     *
     * @maps last_line
     */
    public function setLastLine(?string $lastLine): void
    {
        $this->lastLine = $lastLine;
    }

    /**
     * Returns Country.
     * The country of the address. Will be returned as a 2 letter country short-name code (ISO 3166).
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * The country of the address. Will be returned as a 2 letter country short-name code (ISO 3166).
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Coverage.
     */
    public function getCoverage(): ?string
    {
        return $this->coverage;
    }

    /**
     * Sets Coverage.
     *
     * @maps coverage
     * @factory \LobLib\Models\CoverageEnum::checkValue
     */
    public function setCoverage(?string $coverage): void
    {
        $this->coverage = $coverage;
    }

    /**
     * Returns Deliverability.
     */
    public function getDeliverability(): ?string
    {
        return $this->deliverability;
    }

    /**
     * Sets Deliverability.
     *
     * @maps deliverability
     * @factory \LobLib\Models\Deliverability1Enum::checkValue
     */
    public function setDeliverability(?string $deliverability): void
    {
        $this->deliverability = $deliverability;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \LobLib\Models\Status1Enum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Components.
     */
    public function getComponents(): ?Components1
    {
        return $this->components;
    }

    /**
     * Sets Components.
     *
     * @maps components
     */
    public function setComponents(?Components1 $components): void
    {
        $this->components = $components;
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
     * @factory \LobLib\Models\Object2Enum::checkValue
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
        if (!empty($this->recipient)) {
            $json['recipient']      = $this->recipient['value'];
        }
        if (isset($this->primaryLine)) {
            $json['primary_line']   = $this->primaryLine;
        }
        if (isset($this->secondaryLine)) {
            $json['secondary_line'] = $this->secondaryLine;
        }
        if (isset($this->id)) {
            $json['id']             = $this->id;
        }
        if (isset($this->lastLine)) {
            $json['last_line']      = $this->lastLine;
        }
        if (isset($this->country)) {
            $json['country']        = $this->country;
        }
        if (isset($this->coverage)) {
            $json['coverage']       = CoverageEnum::checkValue($this->coverage);
        }
        if (isset($this->deliverability)) {
            $json['deliverability'] = Deliverability1Enum::checkValue($this->deliverability);
        }
        if (isset($this->status)) {
            $json['status']         = Status1Enum::checkValue($this->status);
        }
        if (isset($this->components)) {
            $json['components']     = $this->components;
        }
        if (isset($this->object)) {
            $json['object']         = Object2Enum::checkValue($this->object);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
