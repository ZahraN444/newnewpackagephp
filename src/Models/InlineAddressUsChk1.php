<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class InlineAddressUsChk1 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $name = [];

    /**
     * @var array
     */
    private $company = [];

    /**
     * @var string|null
     */
    private $addressLine1;

    /**
     * @var array
     */
    private $addressLine2 = [];

    /**
     * @var string|null
     */
    private $addressCity;

    /**
     * @var string|null
     */
    private $addressState;

    /**
     * @var string|null
     */
    private $addressZip;

    /**
     * @var array
     */
    private $phone = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var array|null
     */
    private $addressCountry;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

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
        if (count($this->name) == 0) {
            return null;
        }
        return $this->name['value'];
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
        $this->name['value'] = $name;
    }

    /**
     * Unsets Name.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address.
     */
    public function unsetName(): void
    {
        $this->name = [];
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
        if (count($this->company) == 0) {
            return null;
        }
        return $this->company['value'];
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
        $this->company['value'] = $company;
    }

    /**
     * Unsets Company.
     * Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters.
     * If both `name` and `company` are provided, they will be printed on two separate lines above the rest
     * of the address. This field can be used for any secondary recipient information which is not part of
     * the actual mailing address (Company Name, Department, Attention Line, etc).
     */
    public function unsetCompany(): void
    {
        $this->company = [];
    }

    /**
     * Returns Address Line 1.
     * The primary number, street name, and directional information.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * The primary number, street name, and directional information.
     *
     * @maps address_line1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     * An optional field for address unit information. Total string sum of this plus `address_line1` may
     * not exceed 50 characters.
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
     * An optional field for address unit information. Total string sum of this plus `address_line1` may
     * not exceed 50 characters.
     *
     * @maps address_line2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2['value'] = $addressLine2;
    }

    /**
     * Unsets Address Line 2.
     * An optional field for address unit information. Total string sum of this plus `address_line1` may
     * not exceed 50 characters.
     */
    public function unsetAddressLine2(): void
    {
        $this->addressLine2 = [];
    }

    /**
     * Returns Address City.
     */
    public function getAddressCity(): ?string
    {
        return $this->addressCity;
    }

    /**
     * Sets Address City.
     *
     * @maps address_city
     */
    public function setAddressCity(?string $addressCity): void
    {
        $this->addressCity = $addressCity;
    }

    /**
     * Returns Address State.
     * 2 letter state short-name code
     */
    public function getAddressState(): ?string
    {
        return $this->addressState;
    }

    /**
     * Sets Address State.
     * 2 letter state short-name code
     *
     * @maps address_state
     */
    public function setAddressState(?string $addressState): void
    {
        $this->addressState = $addressState;
    }

    /**
     * Returns Address Zip.
     * Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.
     */
    public function getAddressZip(): ?string
    {
        return $this->addressZip;
    }

    /**
     * Sets Address Zip.
     * Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.
     *
     * @maps address_zip
     */
    public function setAddressZip(?string $addressZip): void
    {
        $this->addressZip = $addressZip;
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
    public function getAddressCountry(): ?array
    {
        return $this->addressCountry;
    }

    /**
     * Sets Address Country.
     *
     * @maps address_country
     */
    public function setAddressCountry(?array $addressCountry): void
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
        if (!empty($this->description)) {
            $json['description']     = $this->description['value'];
        }
        if (!empty($this->name)) {
            $json['name']            = $this->name['value'];
        }
        if (!empty($this->company)) {
            $json['company']         = $this->company['value'];
        }
        if (isset($this->addressLine1)) {
            $json['address_line1']   = $this->addressLine1;
        }
        if (!empty($this->addressLine2)) {
            $json['address_line2']   = $this->addressLine2['value'];
        }
        if (isset($this->addressCity)) {
            $json['address_city']    = $this->addressCity;
        }
        if (isset($this->addressState)) {
            $json['address_state']   = $this->addressState;
        }
        if (isset($this->addressZip)) {
            $json['address_zip']     = $this->addressZip;
        }
        if (!empty($this->phone)) {
            $json['phone']           = $this->phone['value'];
        }
        if (!empty($this->email)) {
            $json['email']           = $this->email['value'];
        }
        if (isset($this->addressCountry)) {
            $json['address_country'] = $this->addressCountry;
        }
        if (isset($this->metadata)) {
            $json['metadata']        = $this->metadata;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
