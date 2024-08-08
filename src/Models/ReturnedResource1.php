<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class ReturnedResource1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $resourceType;

    /**
     * @var Details6
     */
    private $details;

    /**
     * @var array
     */
    private $from;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @param Details6 $details
     * @param array $from
     */
    public function __construct(Details6 $details, array $from)
    {
        $this->details = $details;
        $this->from = $from;
    }

    /**
     * Returns Resource Type.
     * Mailpiece type for the creative
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    /**
     * Sets Resource Type.
     * Mailpiece type for the creative
     *
     * @maps resource_type
     */
    public function setResourceType(string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): Details6
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @required
     * @maps details
     */
    public function setDetails(Details6 $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns From.
     */
    public function getFrom(): array
    {
        return $this->from;
    }

    /**
     * Sets From.
     *
     * @required
     * @maps from
     */
    public function setFrom(array $from): void
    {
        $this->from = $from;
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
        $json['resource_type']   = $this->resourceType;
        $json['details']         = $this->details;
        $json['from']            = $this->from;
        if (!empty($this->description)) {
            $json['description'] = $this->description['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']    = $this->metadata;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
