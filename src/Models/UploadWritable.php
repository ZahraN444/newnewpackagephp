<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class UploadWritable implements \JsonSerializable
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var RequiredAddressColumnMapping|null
     */
    private $requiredAddressColumnMapping;

    /**
     * @var OptionalAddressColumnMapping|null
     */
    private $optionalAddressColumnMapping;

    /**
     * @var Metadata1|null
     */
    private $metadata;

    /**
     * @var array
     */
    private $mergeVariableColumnMapping = [];

    /**
     * @param string $campaignId
     */
    public function __construct(string $campaignId)
    {
        $this->campaignId = $campaignId;
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
    public function getRequiredAddressColumnMapping(): ?RequiredAddressColumnMapping
    {
        return $this->requiredAddressColumnMapping;
    }

    /**
     * Sets Required Address Column Mapping.
     *
     * @maps requiredAddressColumnMapping
     */
    public function setRequiredAddressColumnMapping(?RequiredAddressColumnMapping $requiredAddressColumnMapping): void
    {
        $this->requiredAddressColumnMapping = $requiredAddressColumnMapping;
    }

    /**
     * Returns Optional Address Column Mapping.
     */
    public function getOptionalAddressColumnMapping(): ?OptionalAddressColumnMapping
    {
        return $this->optionalAddressColumnMapping;
    }

    /**
     * Sets Optional Address Column Mapping.
     *
     * @maps optionalAddressColumnMapping
     */
    public function setOptionalAddressColumnMapping(?OptionalAddressColumnMapping $optionalAddressColumnMapping): void
    {
        $this->optionalAddressColumnMapping = $optionalAddressColumnMapping;
    }

    /**
     * Returns Metadata.
     */
    public function getMetadata(): ?Metadata1
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?Metadata1 $metadata): void
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
        if (count($this->mergeVariableColumnMapping) == 0) {
            return null;
        }
        return $this->mergeVariableColumnMapping['value'];
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
        $this->mergeVariableColumnMapping['value'] = $mergeVariableColumnMapping;
    }

    /**
     * Unsets Merge Variable Column Mapping.
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
    public function unsetMergeVariableColumnMapping(): void
    {
        $this->mergeVariableColumnMapping = [];
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
        $json['campaignId']                       = $this->campaignId;
        if (isset($this->requiredAddressColumnMapping)) {
            $json['requiredAddressColumnMapping'] = $this->requiredAddressColumnMapping;
        }
        if (isset($this->optionalAddressColumnMapping)) {
            $json['optionalAddressColumnMapping'] = $this->optionalAddressColumnMapping;
        }
        if (isset($this->metadata)) {
            $json['metadata']                     = $this->metadata;
        }
        if (!empty($this->mergeVariableColumnMapping)) {
            $json['mergeVariableColumnMapping']   = $this->mergeVariableColumnMapping['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
