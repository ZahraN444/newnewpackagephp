<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\NoExtraService;

/**
 * Builder for model NoExtraService
 *
 * @see NoExtraService
 */
class NoExtraServiceBuilder
{
    /**
     * @var NoExtraService
     */
    private $instance;

    private function __construct(NoExtraService $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new no extra service Builder object.
     */
    public static function init(bool $color, array $to, array $from, string $id, array $useType): self
    {
        return new self(new NoExtraService($color, $to, $from, $id, $useType));
    }

    /**
     * Sets tracking events field.
     */
    public function trackingEvents(?array $value): self
    {
        $this->instance->setTrackingEvents($value);
        return $this;
    }

    /**
     * Sets cards field.
     */
    public function cards(?array $value): self
    {
        $this->instance->setCards($value);
        return $this;
    }

    /**
     * Unsets cards field.
     */
    public function unsetCards(): self
    {
        $this->instance->unsetCards();
        return $this;
    }

    /**
     * Sets buckslips field.
     */
    public function buckslips(?array $value): self
    {
        $this->instance->setBuckslips($value);
        return $this;
    }

    /**
     * Unsets buckslips field.
     */
    public function unsetBuckslips(): self
    {
        $this->instance->unsetBuckslips();
        return $this;
    }

    /**
     * Sets return address field.
     */
    public function returnAddress(?array $value): self
    {
        $this->instance->setReturnAddress($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Sets merge variables field.
     */
    public function mergeVariables(?array $value): self
    {
        $this->instance->setMergeVariables($value);
        return $this;
    }

    /**
     * Unsets merge variables field.
     */
    public function unsetMergeVariables(): self
    {
        $this->instance->unsetMergeVariables();
        return $this;
    }

    /**
     * Sets send date field.
     */
    public function sendDate(?array $value): self
    {
        $this->instance->setSendDate($value);
        return $this;
    }

    /**
     * Sets mail type field.
     */
    public function mailType(?string $value): self
    {
        $this->instance->setMailType($value);
        return $this;
    }

    /**
     * Sets double sided field.
     */
    public function doubleSided(?bool $value): self
    {
        $this->instance->setDoubleSided($value);
        return $this;
    }

    /**
     * Sets address placement field.
     */
    public function addressPlacement(?string $value): self
    {
        $this->instance->setAddressPlacement($value);
        return $this;
    }

    /**
     * Sets return envelope field.
     */
    public function returnEnvelope(?array $value): self
    {
        $this->instance->setReturnEnvelope($value);
        return $this;
    }

    /**
     * Sets perforated page field.
     */
    public function perforatedPage(?int $value): self
    {
        $this->instance->setPerforatedPage($value);
        return $this;
    }

    /**
     * Unsets perforated page field.
     */
    public function unsetPerforatedPage(): self
    {
        $this->instance->unsetPerforatedPage();
        return $this;
    }

    /**
     * Sets custom envelope field.
     */
    public function customEnvelope(?array $value): self
    {
        $this->instance->setCustomEnvelope($value);
        return $this;
    }

    /**
     * Sets thumbnails field.
     */
    public function thumbnails(?array $value): self
    {
        $this->instance->setThumbnails($value);
        return $this;
    }

    /**
     * Sets expected delivery date field.
     */
    public function expectedDeliveryDate(?\DateTime $value): self
    {
        $this->instance->setExpectedDeliveryDate($value);
        return $this;
    }

    /**
     * Sets date created field.
     */
    public function dateCreated(?\DateTime $value): self
    {
        $this->instance->setDateCreated($value);
        return $this;
    }

    /**
     * Sets date modified field.
     */
    public function dateModified(?\DateTime $value): self
    {
        $this->instance->setDateModified($value);
        return $this;
    }

    /**
     * Sets deleted field.
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets template id field.
     */
    public function templateId(?string $value): self
    {
        $this->instance->setTemplateId($value);
        return $this;
    }

    /**
     * Sets template version id field.
     */
    public function templateVersionId(?string $value): self
    {
        $this->instance->setTemplateVersionId($value);
        return $this;
    }

    /**
     * Sets campaign id field.
     */
    public function campaignId(?string $value): self
    {
        $this->instance->setCampaignId($value);
        return $this;
    }

    /**
     * Unsets campaign id field.
     */
    public function unsetCampaignId(): self
    {
        $this->instance->unsetCampaignId();
        return $this;
    }

    /**
     * Sets fsc field.
     */
    public function fsc(?bool $value): self
    {
        $this->instance->setFsc($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets failure reason field.
     */
    public function failureReason(?string $value): self
    {
        $this->instance->setFailureReason($value);
        return $this;
    }

    /**
     * Unsets failure reason field.
     */
    public function unsetFailureReason(): self
    {
        $this->instance->unsetFailureReason();
        return $this;
    }

    /**
     * Sets object field.
     */
    public function object(?string $value): self
    {
        $this->instance->setObject($value);
        return $this;
    }

    /**
     * Initializes a new no extra service object.
     */
    public function build(): NoExtraService
    {
        return CoreHelper::clone($this->instance);
    }
}
