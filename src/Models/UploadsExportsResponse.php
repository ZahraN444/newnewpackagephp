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

class UploadsExportsResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var bool
     */
    private $deleted;

    /**
     * @var string
     */
    private $s3Url;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $uploadId;

    /**
     * @param string $id
     * @param \DateTime $dateCreated
     * @param \DateTime $dateModified
     * @param bool $deleted
     * @param string $s3Url
     * @param string $state
     * @param string $type
     * @param string $uploadId
     */
    public function __construct(
        string $id,
        \DateTime $dateCreated,
        \DateTime $dateModified,
        bool $deleted,
        string $s3Url,
        string $state,
        string $type,
        string $uploadId
    ) {
        $this->id = $id;
        $this->dateCreated = $dateCreated;
        $this->dateModified = $dateModified;
        $this->deleted = $deleted;
        $this->s3Url = $s3Url;
        $this->state = $state;
        $this->type = $type;
        $this->uploadId = $uploadId;
    }

    /**
     * Returns Id.
     * Unique identifier prefixed with `ex_`.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `ex_`.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Date Created.
     * A timestamp in ISO 8601 format of the date the export was created
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     * A timestamp in ISO 8601 format of the date the export was created
     *
     * @required
     * @maps dateCreated
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateCreated(\DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns Date Modified.
     * A timestamp in ISO 8601 format of the date the export was last modified
     */
    public function getDateModified(): \DateTime
    {
        return $this->dateModified;
    }

    /**
     * Sets Date Modified.
     * A timestamp in ISO 8601 format of the date the export was last modified
     *
     * @required
     * @maps dateModified
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateModified(\DateTime $dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * Returns Deleted.
     * Returns as `true` if the resource has been successfully deleted.
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Sets Deleted.
     * Returns as `true` if the resource has been successfully deleted.
     *
     * @required
     * @maps deleted
     */
    public function setDeleted(bool $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * Returns S 3 Url.
     * The URL for the generated export file.
     */
    public function getS3Url(): string
    {
        return $this->s3Url;
    }

    /**
     * Sets S 3 Url.
     * The URL for the generated export file.
     *
     * @required
     * @maps s3Url
     */
    public function setS3Url(string $s3Url): void
    {
        $this->s3Url = $s3Url;
    }

    /**
     * Returns State.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @required
     * @maps state
     * @factory \LobLib\Models\StateEnum::checkValue
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     * @factory \LobLib\Models\Type1Enum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Upload Id.
     * Unique identifier prefixed with `upl_`.
     */
    public function getUploadId(): string
    {
        return $this->uploadId;
    }

    /**
     * Sets Upload Id.
     * Unique identifier prefixed with `upl_`.
     *
     * @required
     * @maps uploadId
     */
    public function setUploadId(string $uploadId): void
    {
        $this->uploadId = $uploadId;
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
        $json['id']           = $this->id;
        $json['dateCreated']  = DateTimeHelper::toRfc3339DateTime($this->dateCreated);
        $json['dateModified'] = DateTimeHelper::toRfc3339DateTime($this->dateModified);
        $json['deleted']      = $this->deleted;
        $json['s3Url']        = $this->s3Url;
        $json['state']        = StateEnum::checkValue($this->state);
        $json['type']         = Type1Enum::checkValue($this->type);
        $json['uploadId']     = $this->uploadId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
