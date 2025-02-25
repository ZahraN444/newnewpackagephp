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

class Upload implements \JsonSerializable
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var RequiredAddressColumnMapping
     */
    private $requiredAddressColumnMapping;

    /**
     * @var OptionalAddressColumnMapping
     */
    private $optionalAddressColumnMapping;

    /**
     * @var Metadata1
     */
    private $metadata;

    /**
     * @var array|null
     */
    private $mergeVariableColumnMapping;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var string|null
     */
    private $failuresUrl;

    /**
     * @var string|null
     */
    private $originalFilename;

    /**
     * @var string
     */
    private $state;

    /**
     * @var int
     */
    private $totalMailpieces;

    /**
     * @var int
     */
    private $failedMailpieces;

    /**
     * @var int
     */
    private $validatedMailpieces;

    /**
     * @var int
     */
    private $bytesProcessed;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @param string $campaignId
     * @param RequiredAddressColumnMapping $requiredAddressColumnMapping
     * @param OptionalAddressColumnMapping $optionalAddressColumnMapping
     * @param Metadata1 $metadata
     * @param string $id
     * @param string $accountId
     * @param string $mode
     * @param string $state
     * @param int $totalMailpieces
     * @param int $failedMailpieces
     * @param int $validatedMailpieces
     * @param int $bytesProcessed
     * @param \DateTime $dateCreated
     * @param \DateTime $dateModified
     */
    public function __construct(
        string $campaignId,
        RequiredAddressColumnMapping $requiredAddressColumnMapping,
        OptionalAddressColumnMapping $optionalAddressColumnMapping,
        Metadata1 $metadata,
        string $id,
        string $accountId,
        string $mode,
        string $state,
        int $totalMailpieces,
        int $failedMailpieces,
        int $validatedMailpieces,
        int $bytesProcessed,
        \DateTime $dateCreated,
        \DateTime $dateModified
    ) {
        $this->campaignId = $campaignId;
        $this->requiredAddressColumnMapping = $requiredAddressColumnMapping;
        $this->optionalAddressColumnMapping = $optionalAddressColumnMapping;
        $this->metadata = $metadata;
        $this->id = $id;
        $this->accountId = $accountId;
        $this->mode = $mode;
        $this->state = $state;
        $this->totalMailpieces = $totalMailpieces;
        $this->failedMailpieces = $failedMailpieces;
        $this->validatedMailpieces = $validatedMailpieces;
        $this->bytesProcessed = $bytesProcessed;
        $this->dateCreated = $dateCreated;
        $this->dateModified = $dateModified;
    }

    /**
     * Returns Campaign Id.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * Sets Campaign Id.
     *
     * @required
     * @maps campaignId
     */
    public function setCampaignId(string $campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    /**
     * Returns Required Address Column Mapping.
     */
    public function getRequiredAddressColumnMapping(): RequiredAddressColumnMapping
    {
        return $this->requiredAddressColumnMapping;
    }

    /**
     * Sets Required Address Column Mapping.
     *
     * @required
     * @maps requiredAddressColumnMapping
     */
    public function setRequiredAddressColumnMapping(RequiredAddressColumnMapping $requiredAddressColumnMapping): void
    {
        $this->requiredAddressColumnMapping = $requiredAddressColumnMapping;
    }

    /**
     * Returns Optional Address Column Mapping.
     */
    public function getOptionalAddressColumnMapping(): OptionalAddressColumnMapping
    {
        return $this->optionalAddressColumnMapping;
    }

    /**
     * Sets Optional Address Column Mapping.
     *
     * @required
     * @maps optionalAddressColumnMapping
     */
    public function setOptionalAddressColumnMapping(OptionalAddressColumnMapping $optionalAddressColumnMapping): void
    {
        $this->optionalAddressColumnMapping = $optionalAddressColumnMapping;
    }

    /**
     * Returns Metadata.
     */
    public function getMetadata(): Metadata1
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @required
     * @maps metadata
     */
    public function setMetadata(Metadata1 $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Merge Variable Column Mapping.
     * The mapping of column headers in your file to the merge variables present in your creative. See our
     * <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-triggered-
     * sends/campaign-audience-guide#step-3-map-merge-variable-data-if-applicable-7"
     * target="_blank">Campaign Audience Guide</a> for additional details. <br />If a merge variable has
     * the same "name" as a "key" in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping`
     * objects, then they **CANNOT** have a different value in this object. If a different value is
     * provided, then when the campaign is processing it will get overwritten with the mapped value present
     * in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping` objects. If using customized
     * QR code redirect from the Audience file, then a `qr_code_redirect_url` must be mapped to the column
     * header as used in the CSV.
     */
    public function getMergeVariableColumnMapping(): ?array
    {
        return $this->mergeVariableColumnMapping;
    }

    /**
     * Sets Merge Variable Column Mapping.
     * The mapping of column headers in your file to the merge variables present in your creative. See our
     * <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-triggered-
     * sends/campaign-audience-guide#step-3-map-merge-variable-data-if-applicable-7"
     * target="_blank">Campaign Audience Guide</a> for additional details. <br />If a merge variable has
     * the same "name" as a "key" in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping`
     * objects, then they **CANNOT** have a different value in this object. If a different value is
     * provided, then when the campaign is processing it will get overwritten with the mapped value present
     * in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping` objects. If using customized
     * QR code redirect from the Audience file, then a `qr_code_redirect_url` must be mapped to the column
     * header as used in the CSV.
     *
     * @maps mergeVariableColumnMapping
     */
    public function setMergeVariableColumnMapping(?array $mergeVariableColumnMapping): void
    {
        $this->mergeVariableColumnMapping = $mergeVariableColumnMapping;
    }

    /**
     * Returns Id.
     * Unique identifier prefixed with `upl_`.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `upl_`.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Account Id.
     * Account ID that made the request
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account ID that made the request
     *
     * @required
     * @maps accountId
     */
    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Mode.
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     *
     * @required
     * @maps mode
     * @factory \LobLib\Models\ModeEnum::checkValue
     */
    public function setMode(string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Failures Url.
     * Url where your campaign mailpiece failures can be retrieved
     */
    public function getFailuresUrl(): ?string
    {
        return $this->failuresUrl;
    }

    /**
     * Sets Failures Url.
     * Url where your campaign mailpiece failures can be retrieved
     *
     * @maps failuresUrl
     */
    public function setFailuresUrl(?string $failuresUrl): void
    {
        $this->failuresUrl = $failuresUrl;
    }

    /**
     * Returns Original Filename.
     * Filename of the upload
     */
    public function getOriginalFilename(): ?string
    {
        return $this->originalFilename;
    }

    /**
     * Sets Original Filename.
     * Filename of the upload
     *
     * @maps originalFilename
     */
    public function setOriginalFilename(?string $originalFilename): void
    {
        $this->originalFilename = $originalFilename;
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
     * @factory \LobLib\Models\UploadStateEnum::checkValue
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Total Mailpieces.
     * Total number of recipients for the campaign
     */
    public function getTotalMailpieces(): int
    {
        return $this->totalMailpieces;
    }

    /**
     * Sets Total Mailpieces.
     * Total number of recipients for the campaign
     *
     * @required
     * @maps totalMailpieces
     */
    public function setTotalMailpieces(int $totalMailpieces): void
    {
        $this->totalMailpieces = $totalMailpieces;
    }

    /**
     * Returns Failed Mailpieces.
     * Number of mailpieces that failed to create
     */
    public function getFailedMailpieces(): int
    {
        return $this->failedMailpieces;
    }

    /**
     * Sets Failed Mailpieces.
     * Number of mailpieces that failed to create
     *
     * @required
     * @maps failedMailpieces
     */
    public function setFailedMailpieces(int $failedMailpieces): void
    {
        $this->failedMailpieces = $failedMailpieces;
    }

    /**
     * Returns Validated Mailpieces.
     * Number of mailpieces that were successfully created
     */
    public function getValidatedMailpieces(): int
    {
        return $this->validatedMailpieces;
    }

    /**
     * Sets Validated Mailpieces.
     * Number of mailpieces that were successfully created
     *
     * @required
     * @maps validatedMailpieces
     */
    public function setValidatedMailpieces(int $validatedMailpieces): void
    {
        $this->validatedMailpieces = $validatedMailpieces;
    }

    /**
     * Returns Bytes Processed.
     * Number of bytes processed in your CSV
     */
    public function getBytesProcessed(): int
    {
        return $this->bytesProcessed;
    }

    /**
     * Sets Bytes Processed.
     * Number of bytes processed in your CSV
     *
     * @required
     * @maps bytesProcessed
     */
    public function setBytesProcessed(int $bytesProcessed): void
    {
        $this->bytesProcessed = $bytesProcessed;
    }

    /**
     * Returns Date Created.
     * A timestamp in ISO 8601 format of the date the upload was created
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     * A timestamp in ISO 8601 format of the date the upload was created
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
     * A timestamp in ISO 8601 format of the date the upload was last modified
     */
    public function getDateModified(): \DateTime
    {
        return $this->dateModified;
    }

    /**
     * Sets Date Modified.
     * A timestamp in ISO 8601 format of the date the upload was last modified
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
        $json['campaignId']                   = $this->campaignId;
        $json['requiredAddressColumnMapping'] = $this->requiredAddressColumnMapping;
        $json['optionalAddressColumnMapping'] = $this->optionalAddressColumnMapping;
        $json['metadata']                     = $this->metadata;
        $json['mergeVariableColumnMapping']   = $this->mergeVariableColumnMapping;
        $json['id']                           = $this->id;
        $json['accountId']                    = $this->accountId;
        $json['mode']                         = ModeEnum::checkValue($this->mode);
        if (isset($this->failuresUrl)) {
            $json['failuresUrl']              = $this->failuresUrl;
        }
        if (isset($this->originalFilename)) {
            $json['originalFilename']         = $this->originalFilename;
        }
        $json['state']                        = UploadStateEnum::checkValue($this->state);
        $json['totalMailpieces']              = $this->totalMailpieces;
        $json['failedMailpieces']             = $this->failedMailpieces;
        $json['validatedMailpieces']          = $this->validatedMailpieces;
        $json['bytesProcessed']               = $this->bytesProcessed;
        $json['dateCreated']                  = DateTimeHelper::toRfc3339DateTime($this->dateCreated);
        $json['dateModified']                 = DateTimeHelper::toRfc3339DateTime($this->dateModified);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
