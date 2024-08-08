<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use LobLib\Utils\DateTimeHelper;
use stdClass;

class Generated implements \JsonSerializable
{
    /**
     * @var array
     */
    private $to;

    /**
     * @var string
     */
    private $carrier;

    /**
     * @var Thumbnail[]|null
     */
    private $thumbnails;

    /**
     * @var \DateTime|null
     */
    private $expectedDeliveryDate;

    /**
     * @var \DateTime|null
     */
    private $dateCreated;

    /**
     * @var \DateTime|null
     */
    private $dateModified;

    /**
     * @var bool|null
     */
    private $deleted;

    /**
     * @param array $to
     */
    public function __construct(array $to)
    {
        $this->to = $to;
    }

    /**
     * Returns To.
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @required
     * @maps to
     */
    public function setTo(array $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Carrier.
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * Sets Carrier.
     *
     * @maps carrier
     */
    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * Returns Thumbnails.
     *
     * @return Thumbnail[]|null
     */
    public function getThumbnails(): ?array
    {
        return $this->thumbnails;
    }

    /**
     * Sets Thumbnails.
     *
     * @maps thumbnails
     *
     * @param Thumbnail[]|null $thumbnails
     */
    public function setThumbnails(?array $thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * Returns Expected Delivery Date.
     * A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`.
     */
    public function getExpectedDeliveryDate(): ?\DateTime
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * Sets Expected Delivery Date.
     * A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`.
     *
     * @maps expected_delivery_date
     * @factory \LobLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setExpectedDeliveryDate(?\DateTime $expectedDeliveryDate): void
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
    }

    /**
     * Returns Date Created.
     * A timestamp in ISO 8601 format of the date the resource was created.
     */
    public function getDateCreated(): ?\DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     * A timestamp in ISO 8601 format of the date the resource was created.
     *
     * @maps date_created
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateCreated(?\DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns Date Modified.
     * A timestamp in ISO 8601 format of the date the resource was last modified.
     */
    public function getDateModified(): ?\DateTime
    {
        return $this->dateModified;
    }

    /**
     * Sets Date Modified.
     * A timestamp in ISO 8601 format of the date the resource was last modified.
     *
     * @maps date_modified
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateModified(?\DateTime $dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * Returns Deleted.
     * Only returned if the resource has been successfully deleted.
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * Sets Deleted.
     * Only returned if the resource has been successfully deleted.
     *
     * @maps deleted
     */
    public function setDeleted(?bool $deleted): void
    {
        $this->deleted = $deleted;
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
        $json['to']                         = $this->to;
        $json['carrier']                    = $this->carrier;
        if (isset($this->thumbnails)) {
            $json['thumbnails']             = $this->thumbnails;
        }
        if (isset($this->expectedDeliveryDate)) {
            $json['expected_delivery_date'] = DateTimeHelper::toSimpleDate($this->expectedDeliveryDate);
        }
        if (isset($this->dateCreated)) {
            $json['date_created']           = DateTimeHelper::toRfc3339DateTime($this->dateCreated);
        }
        if (isset($this->dateModified)) {
            $json['date_modified']          = DateTimeHelper::toRfc3339DateTime($this->dateModified);
        }
        if (isset($this->deleted)) {
            $json['deleted']                = $this->deleted;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
