<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use LobLib\Exceptions\ApiException;
use LobLib\Exceptions\Domains0Error1Exception;
use LobLib\Models\BillingGroup;
use LobLib\Models\BillingGroupEditable;
use LobLib\Models\BillingGroupsResponse;
use LobLib\Models\ContentTypeEnum;
use LobLib\Models\SortBy;

class BillingGroupsController extends BaseController
{
    /**
     * Retrieves the details of an existing billing_group. You need only supply the unique billing_group
     * identifier that was returned upon billing_group creation.
     *
     * @param string $bgId id of the billing_group
     *
     * @return BillingGroup Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function billingGroupRetrieve(string $bgId): BillingGroup
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/billing_groups/{bg_id}')
            ->auth('basicAuth')
            ->parameters(TemplateParam::init('bg_id', $bgId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(BillingGroup::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates all editable attributes of the billing_group with the given id.
     *
     * @param string $bgId id of the billing_group
     * @param string $contentType
     * @param string|null $description Description of the billing group.
     * @param string|null $name Name of the billing group.
     *
     * @return BillingGroup Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function billingGroupUpdate(
        string $bgId,
        string $contentType,
        ?string $description = null,
        ?string $name = null
    ): BillingGroup {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/billing_groups/{bg_id}')
            ->auth('basicAuth')
            ->parameters(
                TemplateParam::init('bg_id', $bgId),
                HeaderParam::init('Content-Type', $contentType)->serializeBy([ContentTypeEnum::class, 'checkValue']),
                FormParam::init('description', $description),
                FormParam::init('name', $name)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(BillingGroup::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a list of your billing_groups. The billing_groups are returned sorted by creation date, with
     * the most recently created billing_groups appearing first.
     *
     * @param int|null $limit How many results to return.
     * @param int|null $offset An integer that designates the offset at which to begin returning
     *        results. Defaults to 0.
     * @param string[]|null $mInclude Request that the response include the total count by
     *        specifying `include=["total_count"]`.
     * @param array<string,string>|null $dateCreated Filter by date created. Accepted formats are
     *        ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z"
     *        }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤.
     * @param array<string,string>|null $dateModified Filter by date modified. Accepted formats are
     *        ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z"
     *        }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤.
     * @param SortBy|null $sortBy Sorts items by ascending or descending dates. Use either
     *        `date_created` or `date_modified`, not both.
     *
     * @return BillingGroupsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function billingGroupsList(
        ?int $limit = 10,
        ?int $offset = 0,
        ?array $mInclude = null,
        ?array $dateCreated = null,
        ?array $dateModified = null,
        ?SortBy $sortBy = null
    ): BillingGroupsResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/billing_groups')
            ->auth('basicAuth')
            ->parameters(
                QueryParam::init('limit', $limit),
                QueryParam::init('offset', $offset),
                QueryParam::init('include', $mInclude),
                QueryParam::init('date_created', $dateCreated),
                QueryParam::init('date_modified', $dateModified),
                QueryParam::init('sort_by', $sortBy)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(BillingGroupsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new billing_group with the provided properties.
     *
     * @param BillingGroupEditable $body
     *
     * @return BillingGroup Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function billingGroupCreate(BillingGroupEditable $body): BillingGroup
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/billing_groups')
            ->auth('basicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error', Domains0Error1Exception::class))
            ->type(BillingGroup::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
