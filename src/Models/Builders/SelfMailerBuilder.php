<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models\Builders;

use Core\Utils\CoreHelper;
use LobLib\Models\AddressUs;
use LobLib\Models\SelfMailer;

/**
 * Builder for model SelfMailer
 *
 * @see SelfMailer
 */
class SelfMailerBuilder
{
    /**
     * @var SelfMailer
     */
    private $instance;

    private function __construct(SelfMailer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new self mailer Builder object.
     */
    public static function init(array $to, string $id, array $useType, string $url): self
    {
        return new self(new SelfMailer($to, $id, $useType, $url));
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
     * Sets mail type field.
     */
    public function mailType(?string $value): self
    {
        $this->instance->setMailType($value);
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
     * Sets size field.
     */
    public function size(?string $value): self
    {
        $this->instance->setSize($value);
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
     * Sets from field.
     */
    public function from(?AddressUs $value): self
    {
        $this->instance->setFrom($value);
        return $this;
    }

    /**
     * Sets outside template id field.
     */
    public function outsideTemplateId(?string $value): self
    {
        $this->instance->setOutsideTemplateId($value);
        return $this;
    }

    /**
     * Unsets outside template id field.
     */
    public function unsetOutsideTemplateId(): self
    {
        $this->instance->unsetOutsideTemplateId();
        return $this;
    }

    /**
     * Sets inside template id field.
     */
    public function insideTemplateId(?string $value): self
    {
        $this->instance->setInsideTemplateId($value);
        return $this;
    }

    /**
     * Unsets inside template id field.
     */
    public function unsetInsideTemplateId(): self
    {
        $this->instance->unsetInsideTemplateId();
        return $this;
    }

    /**
     * Sets outside template version id field.
     */
    public function outsideTemplateVersionId(?string $value): self
    {
        $this->instance->setOutsideTemplateVersionId($value);
        return $this;
    }

    /**
     * Unsets outside template version id field.
     */
    public function unsetOutsideTemplateVersionId(): self
    {
        $this->instance->unsetOutsideTemplateVersionId();
        return $this;
    }

    /**
     * Sets inside template version id field.
     */
    public function insideTemplateVersionId(?string $value): self
    {
        $this->instance->setInsideTemplateVersionId($value);
        return $this;
    }

    /**
     * Unsets inside template version id field.
     */
    public function unsetInsideTemplateVersionId(): self
    {
        $this->instance->unsetInsideTemplateVersionId();
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
     * Sets tracking events field.
     */
    public function trackingEvents(?array $value): self
    {
        $this->instance->setTrackingEvents($value);
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
     * Initializes a new self mailer object.
     */
    public function build(): SelfMailer
    {
        return CoreHelper::clone($this->instance);
    }
}
