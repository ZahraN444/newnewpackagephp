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
 * Must either be an address ID or an inline object with correct address parameters. All addresses will
 * be standardized into uppercase without being modified by verification.
 */
class From2 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var array
     */
    private $addressLine2 = [];

    /**
     * @var string
     */
    private $addressCity;

    /**
     * @var string
     */
    private $addressState;

    /**
     * @var string
     */
    private $addressZip;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var array
     */
    private $phone = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var string|null
     */
    private $addressCountry;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @param string $addressLine1
     * @param string $addressCity
     * @param string $addressState
     * @param string $addressZip
     */
    public function __construct(string $addressLine1, string $addressCity, string $addressState, string $addressZip)
    {
        $this->addressLine1 = $addressLine1;
        $this->addressCity = $addressCity;
        $this->addressState = $addressState;
        $this->addressZip = $addressZip;
    }

    /**
     * Returns Address Line 1.
     * The primary number, street name, and directional information.
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * The primary number, street name, and directional information.
     *
     * @required
     * @maps address_line1
     */
    public function setAddressLine1(string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     * An optional field containing any information which can't fit into line 1.
     */
    public function getAddressLine2(): ?string
    {
        if (count($this->addressLine2) == 0) {
            return null;
        }
        return $this->addressLine2['value'];
    }

    /**
     * Sets Address Line 2.
     * An optional field containing any information which can't fit into line 1.
     *
     * @maps address_line2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2['value'] = $addressLine2;
    }

    /**
     * Unsets Address Line 2.
     * An optional field containing any information which can't fit into line 1.
     */
    public function unsetAddressLine2(): void
    {
        $this->addressLine2 = [];
    }

    /**
     * Returns Address City.
     */
    public function getAddressCity(): string
    {
        return $this->addressCity;
    }

    /**
     * Sets Address City.
     *
     * @required
     * @maps address_city
     */
    public function setAddressCity(string $addressCity): void
    {
        $this->addressCity = $addressCity;
    }

    /**
     * Returns Address State.
     * 2 letter state short-name code
     */
    public function getAddressState(): string
    {
        return $this->addressState;
    }

    /**
     * Sets Address State.
     * 2 letter state short-name code
     *
     * @required
     * @maps address_state
     */
    public function setAddressState(string $addressState): void
    {
        $this->addressState = $addressState;
    }

    /**
     * Returns Address Zip.
     * Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.
     */
    public function getAddressZip(): string
    {
        return $this->addressZip;
    }

    /**
     * Sets Address Zip.
     * Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.
     *
     * @required
     * @maps address_zip
     */
    public function setAddressZip(string $addressZip): void
    {
        $this->addressZip = $addressZip;
    }

    /**
     * Returns Description.
     * An internal description that identifies this resource. Must be no longer than 255 characters.
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
     * An internal description that identifies this resource. Must be no longer than 255 characters.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * An internal description that identifies this resource. Must be no longer than 255 characters.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Name.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Company.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address. This field can be used for any secondary recipient information which is not part of
     * the actual mailing address (Company Name, Department, Attention Line, etc).
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Sets Company.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address. This field can be used for any secondary recipient information which is not part of
     * the actual mailing address (Company Name, Department, Attention Line, etc).
     *
     * @maps company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * Returns Phone.
     * Must be no longer than 40 characters.
     */
    public function getPhone(): ?string
    {
        if (count($this->phone) == 0) {
            return null;
        }
        return $this->phone['value'];
    }

    /**
     * Sets Phone.
     * Must be no longer than 40 characters.
     *
     * @maps phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone['value'] = $phone;
    }

    /**
     * Unsets Phone.
     * Must be no longer than 40 characters.
     */
    public function unsetPhone(): void
    {
        $this->phone = [];
    }

    /**
     * Returns Email.
     * Must be no longer than 100 characters.
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Must be no longer than 100 characters.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Must be no longer than 100 characters.
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Address Country.
     */
    public function getAddressCountry(): ?string
    {
        return $this->addressCountry;
    }

    /**
     * Sets Address Country.
     *
     * @maps address_country
     * @factory \LobLib\Models\AddressCountry2Enum::checkValue
     */
    public function setAddressCountry(?string $addressCountry): void
    {
        $this->addressCountry = $addressCountry;
    }

    /**
     * Returns Metadata.
     * Use metadata to store custom information for tagging and labeling back to your internal systems.
     * Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must
     * be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" :
     * "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more
     * information.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Use metadata to store custom information for tagging and labeling back to your internal systems.
     * Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must
     * be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" :
     * "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more
     * information.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
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
        $json['address_line1']       = $this->addressLine1;
        if (!empty($this->addressLine2)) {
            $json['address_line2']   = $this->addressLine2['value'];
        }
        $json['address_city']        = $this->addressCity;
        $json['address_state']       = $this->addressState;
        $json['address_zip']         = $this->addressZip;
        if (!empty($this->description)) {
            $json['description']     = $this->description['value'];
        }
        $json['name']                = $this->name;
        $json['company']             = $this->company;
        if (!empty($this->phone)) {
            $json['phone']           = $this->phone['value'];
        }
        if (!empty($this->email)) {
            $json['email']           = $this->email['value'];
        }
        if (isset($this->addressCountry)) {
            $json['address_country'] = AddressCountry2Enum::checkValue($this->addressCountry);
        }
        if (isset($this->metadata)) {
            $json['metadata']        = $this->metadata;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
