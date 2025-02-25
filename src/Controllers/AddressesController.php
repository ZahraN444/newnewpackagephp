<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use LobLib\Exceptions\ApiException;
use LobLib\Exceptions\Domains0Error1Exception;
use LobLib\Models\AddressesResponse1;
use LobLib\Models\AddressIntl;
use LobLib\Models\AddressUs;
use LobLib\Models\AllAddresses;
use LobLib\Models\Beforeafter;

class AddressesController extends BaseController
{
    /**
     * Returns a list of your addresses. The addresses are returned sorted by creation date, with the most
     * recently created addresses appearing first.
     *
     * @param int|null $limit How many results to return.
     * @param Beforeafter|null $beforeAfter `before` and `after` are both optional but only one of
     *        them can be in the query at a time.
     * @param string[]|null $mInclude Request that the response include the total count by
     *        specifying `include=["total_count"]`.
     * @param array<string,string>|null $dateCreated Filter by date created. Accepted formats are
     *        ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z"
     *        }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤.
     * @param array<string,string>|null $metadata Filter by metadata key-value pair`.
     *
     * @return AllAddresses Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addressesList(
        ?int $limit = 10,
        ?Beforeafter $beforeAfter = null,
        ?array $mInclude = null,
        ?array $dateCreated = null,
        ?array $metadata = null
    ): AllAddresses {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/addresses')
            ->auth('basicAuth')
            ->parameters(
                QueryParam::init('limit', $limit),
                QueryParam::init('before/after', $beforeAfter),
                QueryParam::init('include', $mInclude),
                QueryParam::init('date_created', $dateCreated),
                QueryParam::init('metadata', $metadata)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(AllAddresses::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new address given information
     *
     * @param array $body
     *
     * @return array Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addressCreate(array $body): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/addresses')
            ->auth('basicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class));

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of an existing address. You need only supply the unique identifier that was
     * returned upon address creation.
     *
     * @param string $adrId id of the address
     *
     * @return AddressUs|AddressIntl Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addressRetrieve(string $adrId)
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/addresses/{adr_id}')
            ->auth('basicAuth')
            ->parameters(TemplateParam::init('adr_id', $adrId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->typeGroup('oneOf(AddressUs,AddressIntl)');

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes the details of an existing address. You need only supply the unique identifier that was
     * returned upon address creation.
     *
     * @param string $adrId id of the address
     *
     * @return AddressesResponse1 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addressDelete(string $adrId): AddressesResponse1
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/addresses/{adr_id}')
            ->auth('basicAuth')
            ->parameters(TemplateParam::init('adr_id', $adrId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(AddressesResponse1::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
