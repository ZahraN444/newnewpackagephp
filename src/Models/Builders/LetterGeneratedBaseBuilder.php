<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\LetterGeneratedBase;

/**
 * Builder for model LetterGeneratedBase
 *
 * @see LetterGeneratedBase
 */
class LetterGeneratedBaseBuilder
{
    /**
     * @var LetterGeneratedBase
     */
    private $instance;

    private function __construct(LetterGeneratedBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new letter generated base Builder object.
     */
    public static function init(array $to, array $from, string $id, array $useType): self
    {
        return new self(new LetterGeneratedBase($to, $from, $id, $useType));
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
     * Initializes a new letter generated base object.
     */
    public function build(): LetterGeneratedBase
    {
        return CoreHelper::clone($this->instance);
    }
}
