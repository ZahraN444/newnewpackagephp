<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use LobLib\Authentication\BasicAuthCredentialsBuilder;
use LobLib\Authentication\BasicAuthManager;
use LobLib\Controllers\AddressesController;
use LobLib\Controllers\BankAccountsController;
use LobLib\Controllers\BillingGroupsController;
use LobLib\Controllers\BuckslipOrdersController;
use LobLib\Controllers\BuckslipsController;
use LobLib\Controllers\CampaignsController;
use LobLib\Controllers\CardOrdersController;
use LobLib\Controllers\CardsController;
use LobLib\Controllers\ChecksController;
use LobLib\Controllers\CreativesController;
use LobLib\Controllers\IdentityValidationController;
use LobLib\Controllers\IntlAutocompletionsController;
use LobLib\Controllers\IntlVerificationsController;
use LobLib\Controllers\LettersController;
use LobLib\Controllers\PostcardsController;
use LobLib\Controllers\QRCodesController;
use LobLib\Controllers\ReverseGeocodeLookupsController;
use LobLib\Controllers\SelfMailersController;
use LobLib\Controllers\TemplatesController;
use LobLib\Controllers\TemplateVersionsController;
use LobLib\Controllers\UploadsController;
use LobLib\Controllers\URLShortenerController;
use LobLib\Controllers\USAutocompletionsController;
use LobLib\Controllers\USVerificationsController;
use LobLib\Controllers\ZipLookupsController;
use LobLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class LobClient implements ConfigurationInterface
{
    private $addresses;

    private $bankAccounts;

    private $billingGroups;

    private $buckslipOrders;

    private $buckslips;

    private $campaigns;

    private $cardOrders;

    private $cards;

    private $checks;

    private $creatives;

    private $identityValidation;

    private $intlAutocompletions;

    private $intlVerifications;

    private $letters;

    private $postcards;

    private $qRCodes;

    private $reverseGeocodeLookups;

    private $selfMailers;

    private $templateVersions;

    private $templates;

    private $uploads;

    private $uRLShortener;

    private $uSAutocompletions;

    private $uSVerifications;

    private $zipLookups;

    private $basicAuthManager;

    private $config;

    private $client;

    /**
     * @see LobClientBuilder::init()
     * @see LobClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->basicAuthManager = new BasicAuthManager($this->config);
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['basicAuth' => $this->basicAuthManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return LobClientBuilder LobClientBuilder instance
     */
    public function toBuilder(): LobClientBuilder
    {
        $builder = LobClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $basicAuth = $this->getBasicAuthCredentialsBuilder();
        if ($basicAuth != null) {
            $builder->basicAuthCredentials($basicAuth);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getBasicAuthCredentials(): BasicAuthCredentials
    {
        return $this->basicAuthManager;
    }

    public function getBasicAuthCredentialsBuilder(): ?BasicAuthCredentialsBuilder
    {
        if (
            empty($this->basicAuthManager->getBasicAuthUserName()) &&
            empty($this->basicAuthManager->getBasicAuthPassword())
        ) {
            return null;
        }
        return BasicAuthCredentialsBuilder::init(
            $this->basicAuthManager->getBasicAuthUserName(),
            $this->basicAuthManager->getBasicAuthPassword()
        );
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see LobClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see LobClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Addresses Controller
     */
    public function getAddressesController(): AddressesController
    {
        if ($this->addresses == null) {
            $this->addresses = new AddressesController($this->client);
        }
        return $this->addresses;
    }

    /**
     * Returns Bank Accounts Controller
     */
    public function getBankAccountsController(): BankAccountsController
    {
        if ($this->bankAccounts == null) {
            $this->bankAccounts = new BankAccountsController($this->client);
        }
        return $this->bankAccounts;
    }

    /**
     * Returns Billing Groups Controller
     */
    public function getBillingGroupsController(): BillingGroupsController
    {
        if ($this->billingGroups == null) {
            $this->billingGroups = new BillingGroupsController($this->client);
        }
        return $this->billingGroups;
    }

    /**
     * Returns Buckslip Orders Controller
     */
    public function getBuckslipOrdersController(): BuckslipOrdersController
    {
        if ($this->buckslipOrders == null) {
            $this->buckslipOrders = new BuckslipOrdersController($this->client);
        }
        return $this->buckslipOrders;
    }

    /**
     * Returns Buckslips Controller
     */
    public function getBuckslipsController(): BuckslipsController
    {
        if ($this->buckslips == null) {
            $this->buckslips = new BuckslipsController($this->client);
        }
        return $this->buckslips;
    }

    /**
     * Returns Campaigns Controller
     */
    public function getCampaignsController(): CampaignsController
    {
        if ($this->campaigns == null) {
            $this->campaigns = new CampaignsController($this->client);
        }
        return $this->campaigns;
    }

    /**
     * Returns Card Orders Controller
     */
    public function getCardOrdersController(): CardOrdersController
    {
        if ($this->cardOrders == null) {
            $this->cardOrders = new CardOrdersController($this->client);
        }
        return $this->cardOrders;
    }

    /**
     * Returns Cards Controller
     */
    public function getCardsController(): CardsController
    {
        if ($this->cards == null) {
            $this->cards = new CardsController($this->client);
        }
        return $this->cards;
    }

    /**
     * Returns Checks Controller
     */
    public function getChecksController(): ChecksController
    {
        if ($this->checks == null) {
            $this->checks = new ChecksController($this->client);
        }
        return $this->checks;
    }

    /**
     * Returns Creatives Controller
     */
    public function getCreativesController(): CreativesController
    {
        if ($this->creatives == null) {
            $this->creatives = new CreativesController($this->client);
        }
        return $this->creatives;
    }

    /**
     * Returns Identity Validation Controller
     */
    public function getIdentityValidationController(): IdentityValidationController
    {
        if ($this->identityValidation == null) {
            $this->identityValidation = new IdentityValidationController($this->client);
        }
        return $this->identityValidation;
    }

    /**
     * Returns Intl Autocompletions Controller
     */
    public function getIntlAutocompletionsController(): IntlAutocompletionsController
    {
        if ($this->intlAutocompletions == null) {
            $this->intlAutocompletions = new IntlAutocompletionsController($this->client);
        }
        return $this->intlAutocompletions;
    }

    /**
     * Returns Intl Verifications Controller
     */
    public function getIntlVerificationsController(): IntlVerificationsController
    {
        if ($this->intlVerifications == null) {
            $this->intlVerifications = new IntlVerificationsController($this->client);
        }
        return $this->intlVerifications;
    }

    /**
     * Returns Letters Controller
     */
    public function getLettersController(): LettersController
    {
        if ($this->letters == null) {
            $this->letters = new LettersController($this->client);
        }
        return $this->letters;
    }

    /**
     * Returns Postcards Controller
     */
    public function getPostcardsController(): PostcardsController
    {
        if ($this->postcards == null) {
            $this->postcards = new PostcardsController($this->client);
        }
        return $this->postcards;
    }

    /**
     * Returns QR Codes Controller
     */
    public function getQRCodesController(): QRCodesController
    {
        if ($this->qRCodes == null) {
            $this->qRCodes = new QRCodesController($this->client);
        }
        return $this->qRCodes;
    }

    /**
     * Returns Reverse Geocode Lookups Controller
     */
    public function getReverseGeocodeLookupsController(): ReverseGeocodeLookupsController
    {
        if ($this->reverseGeocodeLookups == null) {
            $this->reverseGeocodeLookups = new ReverseGeocodeLookupsController($this->client);
        }
        return $this->reverseGeocodeLookups;
    }

    /**
     * Returns Self Mailers Controller
     */
    public function getSelfMailersController(): SelfMailersController
    {
        if ($this->selfMailers == null) {
            $this->selfMailers = new SelfMailersController($this->client);
        }
        return $this->selfMailers;
    }

    /**
     * Returns Template Versions Controller
     */
    public function getTemplateVersionsController(): TemplateVersionsController
    {
        if ($this->templateVersions == null) {
            $this->templateVersions = new TemplateVersionsController($this->client);
        }
        return $this->templateVersions;
    }

    /**
     * Returns Templates Controller
     */
    public function getTemplatesController(): TemplatesController
    {
        if ($this->templates == null) {
            $this->templates = new TemplatesController($this->client);
        }
        return $this->templates;
    }

    /**
     * Returns Uploads Controller
     */
    public function getUploadsController(): UploadsController
    {
        if ($this->uploads == null) {
            $this->uploads = new UploadsController($this->client);
        }
        return $this->uploads;
    }

    /**
     * Returns URL Shortener Controller
     */
    public function getURLShortenerController(): URLShortenerController
    {
        if ($this->uRLShortener == null) {
            $this->uRLShortener = new URLShortenerController($this->client);
        }
        return $this->uRLShortener;
    }

    /**
     * Returns US Autocompletions Controller
     */
    public function getUSAutocompletionsController(): USAutocompletionsController
    {
        if ($this->uSAutocompletions == null) {
            $this->uSAutocompletions = new USAutocompletionsController($this->client);
        }
        return $this->uSAutocompletions;
    }

    /**
     * Returns US Verifications Controller
     */
    public function getUSVerificationsController(): USVerificationsController
    {
        if ($this->uSVerifications == null) {
            $this->uSVerifications = new USVerificationsController($this->client);
        }
        return $this->uSVerifications;
    }

    /**
     * Returns Zip Lookups Controller
     */
    public function getZipLookupsController(): ZipLookupsController
    {
        if ($this->zipLookups == null) {
            $this->zipLookups = new ZipLookupsController($this->client);
        }
        return $this->zipLookups;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [Environment::PRODUCTION => [Server::DEFAULT_ => 'https://api.lob.com/v1']];
}
