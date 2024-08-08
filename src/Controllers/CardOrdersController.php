<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Controllers;

use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use LobLib\Exceptions\ApiException;
use LobLib\Exceptions\Domains0Error1Exception;
use LobLib\Models\CardOrder;
use LobLib\Models\CardsOrdersResponse;
use LobLib\Models\ContentTypeEnum;

class CardOrdersController extends BaseController
{
    /**
     * Retrieves the card orders associated with the given card id.
     *
     * @param string $cardId The ID of the card to which the card orders belong.
     * @param int|null $limit How many results to return.
     * @param int|null $offset An integer that designates the offset at which to begin returning
     *        results. Defaults to 0.
     *
     * @return CardsOrdersResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cardOrdersRetrieve(string $cardId, ?int $limit = 10, ?int $offset = 0): CardsOrdersResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/cards/{card_id}/orders')
            ->auth('basicAuth')
            ->parameters(
                TemplateParam::init('card_id', $cardId),
                QueryParam::init('limit', $limit),
                QueryParam::init('offset', $offset)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(CardsOrdersResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new card order given information
     *
     * @param string $cardId The ID of the card to which the card orders belong.
     * @param string $contentType
     * @param int $quantity The quantity of cards in the order (minimum 10,000).
     *
     * @return CardOrder Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cardOrderCreate(string $cardId, string $contentType, int $quantity): CardOrder
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/cards/{card_id}/orders')
            ->auth('basicAuth')
            ->parameters(
                TemplateParam::init('card_id', $cardId),
                HeaderParam::init('Content-Type', $contentType)->serializeBy([ContentTypeEnum::class, 'checkValue']),
                FormParam::init('quantity', $quantity)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(CardOrder::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
