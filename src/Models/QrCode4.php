<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class QrCode4 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $position;

    /**
     * @var string|null
     */
    private $top;

    /**
     * @var string|null
     */
    private $right;

    /**
     * @var string|null
     */
    private $left;

    /**
     * @var string|null
     */
    private $bottom;

    /**
     * @var string
     */
    private $redirectUrl;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string|null
     */
    private $pages;

    /**
     * @param string $redirectUrl
     * @param string $width
     */
    public function __construct(string $redirectUrl, string $width)
    {
        $this->redirectUrl = $redirectUrl;
        $this->width = $width;
    }

    /**
     * Returns Position.
     * Sets how a QR code is being positioned in the document. Together with this, you should provide one
     * of 'top' or 'bottom', and one of 'left' or 'right'.
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Sets Position.
     * Sets how a QR code is being positioned in the document. Together with this, you should provide one
     * of 'top' or 'bottom', and one of 'left' or 'right'.
     *
     * @maps position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * Returns Top.
     * Vertical distance (in inches) to place QR code from the top. Only allowed if "bottom" isn't provided.
     */
    public function getTop(): ?string
    {
        return $this->top;
    }

    /**
     * Sets Top.
     * Vertical distance (in inches) to place QR code from the top. Only allowed if "bottom" isn't provided.
     *
     * @maps top
     */
    public function setTop(?string $top): void
    {
        $this->top = $top;
    }

    /**
     * Returns Right.
     * Horizonal distance (in inches) to place QR code from the right. Only allowed if "left" isn't
     * provided.
     */
    public function getRight(): ?string
    {
        return $this->right;
    }

    /**
     * Sets Right.
     * Horizonal distance (in inches) to place QR code from the right. Only allowed if "left" isn't
     * provided.
     *
     * @maps right
     */
    public function setRight(?string $right): void
    {
        $this->right = $right;
    }

    /**
     * Returns Left.
     * Horizonal distance (in inches) to place QR code from the left. Only allowed if "right" isn't
     * provided.
     */
    public function getLeft(): ?string
    {
        return $this->left;
    }

    /**
     * Sets Left.
     * Horizonal distance (in inches) to place QR code from the left. Only allowed if "right" isn't
     * provided.
     *
     * @maps left
     */
    public function setLeft(?string $left): void
    {
        $this->left = $left;
    }

    /**
     * Returns Bottom.
     * Vertical distance (in inches) to place QR code from the bottom. Only allowed if "top" isn't provided.
     */
    public function getBottom(): ?string
    {
        return $this->bottom;
    }

    /**
     * Sets Bottom.
     * Vertical distance (in inches) to place QR code from the bottom. Only allowed if "top" isn't provided.
     *
     * @maps bottom
     */
    public function setBottom(?string $bottom): void
    {
        $this->bottom = $bottom;
    }

    /**
     * Returns Redirect Url.
     * The url to redirect the user when a QR code is scanned. The url must start with `https://`
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * Sets Redirect Url.
     * The url to redirect the user when a QR code is scanned. The url must start with `https://`
     *
     * @required
     * @maps redirect_url
     */
    public function setRedirectUrl(string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * Returns Width.
     * The size (in inches) of the QR code with a minimum of 1 inch. All QR codes are generated as a square.
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * Sets Width.
     * The size (in inches) of the QR code with a minimum of 1 inch. All QR codes are generated as a square.
     *
     * @required
     * @maps width
     */
    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    /**
     * Returns Pages.
     * Specify the pages where the QR code should be stamped in a comma separated format. Your QR code can
     * be printed in the same position on multiple pages. For postcards, the values should either be
     * "front", "back" (for either front or back) or "front,back" (for the QR code to be printed on both
     * sides). For self-mailers, the values should either be "inside", "outside" (for either inside or
     * outside) or "inside,outside" (for the QR code to be printed on both sides). For letters, the values
     * can be specific page numbers ("1", "3"), page number ranges such as "1-3", or a comma separated
     * combination of both ("1,3,5-7").
     */
    public function getPages(): ?string
    {
        return $this->pages;
    }

    /**
     * Sets Pages.
     * Specify the pages where the QR code should be stamped in a comma separated format. Your QR code can
     * be printed in the same position on multiple pages. For postcards, the values should either be
     * "front", "back" (for either front or back) or "front,back" (for the QR code to be printed on both
     * sides). For self-mailers, the values should either be "inside", "outside" (for either inside or
     * outside) or "inside,outside" (for the QR code to be printed on both sides). For letters, the values
     * can be specific page numbers ("1", "3"), page number ranges such as "1-3", or a comma separated
     * combination of both ("1,3,5-7").
     *
     * @maps pages
     */
    public function setPages(?string $pages): void
    {
        $this->pages = $pages;
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
        $json['position']     = $this->position;
        if (isset($this->top)) {
            $json['top']      = $this->top;
        }
        if (isset($this->right)) {
            $json['right']    = $this->right;
        }
        if (isset($this->left)) {
            $json['left']     = $this->left;
        }
        if (isset($this->bottom)) {
            $json['bottom']   = $this->bottom;
        }
        $json['redirect_url'] = $this->redirectUrl;
        $json['width']        = $this->width;
        if (isset($this->pages)) {
            $json['pages']    = $this->pages;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
