<?php

declare(strict_types=1);

namespace Steefdw\Simplicate;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Steefdw\Simplicate\Endpoint\DeleteTimersTimerById;
use Steefdw\Simplicate\Endpoint\GetCostsCoststype;
use Steefdw\Simplicate\Endpoint\GetTimersTimerById;
use Steefdw\Simplicate\Endpoint\PostUploadChunked;
use Steefdw\Simplicate\Endpoint\PutTimersTimerById;
use Steefdw\Simplicate\Endpoint\PutUploadChunkedById;
use Steefdw\Simplicate\Model\PostChunked;
use Steefdw\Simplicate\Model\PutChunked;
use Steefdw\Simplicate\Model\PutTimer;
use Steefdw\Simplicate\Normalizer\JaneObjectNormalizer;
use Steefdw\Simplicate\Runtime\Client\Client as ParentClient;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends ParentClient
{
    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHourTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsCoststype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCostsCoststype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCostsCoststypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHourType|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsCoststypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCostsCoststypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeExpenseList|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsExpense(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCostsExpense($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCostsExpenseByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeExpense|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsExpenseById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCostsExpenseById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContactPersons|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmContactperson(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmContactperson($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmContactpersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmContactpersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmContactpersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmContactpersonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCrmContactpersonById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmContactpersonByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContactPerson|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmContactpersonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmContactpersonById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCountries|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCountry(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmCountry($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmCountryByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCountry|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCountryById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmCountryById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmDebtorUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDebtorNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDebtorInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDebtorList|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDebtor(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmDebtor($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCrmDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCrmDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutCrmDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutCrmDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCrmDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmDocumenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultGenders|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmGender(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmGender($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmGenderByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultGender|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmGenderById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmGenderById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultIndustries|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmIndustry(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmIndustry($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmIndustryByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultIndustry|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmIndustryById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmIndustryById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInterests|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmInterest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmInterest($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmInterestByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInterest|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmInterestById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmInterestById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMyOrganizationProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmMyorganizationprofile(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmMyorganizationprofile($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmMyorganizationprofileByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMyOrganizationProfile|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmMyorganizationprofileById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmMyorganizationprofileById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultOrganizations|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganization(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganization($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostOrganization $body Organization object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCrmOrganizationBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCrmOrganizationUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCrmOrganizationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmOrganization(\Steefdw\Simplicate\Model\PostOrganization $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCrmOrganization($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmOrganizationByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmOrganizationByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmOrganizationById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCrmOrganizationById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultOrganization|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostOrganization $body Organization object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutCrmOrganizationByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCrmOrganizationByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCrmOrganizationByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmOrganizationById(string $id, \Steefdw\Simplicate\Model\PostOrganization $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutCrmOrganizationById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldgroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationcustomfieldgroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldgroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationcustomfieldgroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfield(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationcustomfield($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationcustomfieldById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultOrganizationSizes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationsize(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationsize($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmOrganizationsizeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultOrganizationSize|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationsizeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmOrganizationsizeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPersons|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPerson(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPerson($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostPerson $body Person object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCrmPersonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCrmPersonNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostCrmPersonInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmPerson(\Steefdw\Simplicate\Model\PostPerson $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCrmPerson($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmPersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmPersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmPersonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCrmPersonById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPerson|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPersonById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostPerson $body Person object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmPersonById(string $id, \Steefdw\Simplicate\Model\PostPerson $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutCrmPersonById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldgroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPersoncustomfieldgroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldgroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPersoncustomfieldgroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfield(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPersoncustomfield($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmPersoncustomfieldByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmPersoncustomfieldById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultRelationTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmRelationtype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmRelationtype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetCrmRelationtypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultRelationType|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmRelationtypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCrmRelationtypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsGroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsGroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsGroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomfieldsGroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCustomfieldsGroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsGroupById(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsGroupById($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\CustomFieldGroup $body Organization object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsGroupByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsGroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsGroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomfieldsGroupById(string $id, \Steefdw\Simplicate\Model\CustomFieldGroup $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCustomfieldsGroupById($id, $body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\CustomFieldGroup $body Organization object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsGroupByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsGroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsGroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomfieldsGroupById(string $id, \Steefdw\Simplicate\Model\CustomFieldGroup $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutCustomfieldsGroupById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldModels|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsModel(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsModel($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsModelByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsModelById(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsModelById($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldOptions|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsOption(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsOption($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsOptionByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsOptionByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteCustomfieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomfieldsOptionById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteCustomfieldsOptionById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldOption|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsOptionById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsOptionById($id, $queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\CustomFieldOption $body CustomFieldOption object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsOptionByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsOptionByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsOptionByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostCustomfieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomfieldsOptionById(\Steefdw\Simplicate\Model\CustomFieldOption $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCustomfieldsOptionById($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\CustomFieldOption $body CustomFieldOption object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsOptionByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsOptionByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsOptionByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutCustomfieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomfieldsOptionById(string $id, \Steefdw\Simplicate\Model\CustomFieldOption $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutCustomfieldsOptionById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsType(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsType($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetCustomfieldsTypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldType|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomfieldsTypeById(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetCustomfieldsTypeById($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetDocumentsDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostDocumentsDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostDocumentsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentsDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostDocumentsDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutDocumentsDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutDocumentsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putDocumentsDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutDocumentsDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteDocumentsDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDocumentsDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteDocumentsDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetDocumentsDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetDocumentsDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetDocumentsDocumenttypeById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDownloadByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDownloadByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDownloadByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetDocumentsDownloadByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDownloadById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetDocumentsDownloadById($id), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostAbsence $body absence object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursAbsenceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursAbsence(\Steefdw\Simplicate\Model\PostAbsence $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursAbsence($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostAbsence $body Absence object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursAbsenceById(string $id, \Steefdw\Simplicate\Model\PostAbsence $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursAbsenceById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultApprovals|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApproval(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursApproval($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostApproval $body Approval object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursApprovalUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursApprovalNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHoursApprovalInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursApproval(\Steefdw\Simplicate\Model\PostApproval $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursApproval($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursApprovalByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursApprovalByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursApprovalById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHoursApprovalById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultApproval|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursApprovalById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostApproval $body Approval object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursApprovalByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursApprovalByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursApprovalByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursApprovalById(string $id, \Steefdw\Simplicate\Model\PostApproval $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursApprovalById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultApprovalStatusList|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalstatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursApprovalstatus($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHoursApprovalstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultApprovalStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalstatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursApprovalstatusById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeExpenseList|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursEmployeeexpense(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursEmployeeexpense($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHoursEmployeeexpenseByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeExpense|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursEmployeeexpenseById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursEmployeeexpenseById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHours|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHour(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursHour($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostHours $body Hours object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursHour(\Steefdw\Simplicate\Model\PostHours $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursHour($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursHourByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursHourByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursHourByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursHourById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHoursHourById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHour|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursHourById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostHours $body Hours object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursHourById(string $id, \Steefdw\Simplicate\Model\PostHours $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursHourById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHourTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourstype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursHourstype($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostHoursType $body Hour type object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourstypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourstypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHoursHourstypeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursHourstype(\Steefdw\Simplicate\Model\PostHoursType $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursHourstype($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHoursHourstypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHourType|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourstypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursHourstypeById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostHoursType $body Hours type object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourstypeByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourstypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourstypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursHourstypeByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursHourstypeById(string $id, \Steefdw\Simplicate\Model\PostHoursType $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursHourstypeById($id, $body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostLeave $body leave object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursLeaveBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHoursLeaveUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursLeaveInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursLeave(\Steefdw\Simplicate\Model\PostLeave $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursLeave($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostLeave $body Leave object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursLeaveByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursLeaveByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursLeaveByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursLeaveByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursLeaveById(string $id, \Steefdw\Simplicate\Model\PostLeave $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursLeaveById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date]
     *     @var string $q[end_date]
     *     @var string $q[employee_id]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursSubmissionUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursSubmissionNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursSubmissionInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHoursSubmissions|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursSubmission(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursSubmission($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostSubmission $body Description of hours that need to be submitted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmissionUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmissionNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmissionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursSubmission(\Steefdw\Simplicate\Model\PostSubmission $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursSubmission($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\Submit $body Data that is needed to submit hours
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmitUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmitNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHoursSubmitInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursSubmit(\Steefdw\Simplicate\Model\Submit $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursSubmit($body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date] Y-m-d, must be a Monday
     *     @var string $q[end_date] Y-m-d, must be the Sunday after the Monday of the start_date
     *     @var string $q[employee_id]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowBadRequestException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultHoursTimesheetRows|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursTimesheetrow(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursTimesheetrow($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostTimesheetRow $body Description of timesheetrow that is submitted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHoursTimesheetrowBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHoursTimesheetrowUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHoursTimesheetrowInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursTimesheetrow(\Steefdw\Simplicate\Model\PostTimesheetRow $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHoursTimesheetrow($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursTimesheetrowByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursTimesheetrowByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursTimesheetrowByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHoursTimesheetrowByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursTimesheetrowById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHoursTimesheetrowById($id), $fetch);
    }

    /**
     * @param array $body List of external ids for timesheetrows that need to be ordered.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHoursTimesheetrowOrderBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHoursTimesheetrowOrderUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHoursTimesheetrowOrderNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHoursTimesheetrowOrderInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursTimesheetrowOrder(array $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHoursTimesheetrowOrder($body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[before_date]
     *     @var string $q[employee_id]
     *     @var string $q[type]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHoursTimesheetrowMostrecentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDateTimeRange|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursTimesheetrowMostrecent(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHoursTimesheetrowMostrecent($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultAbsenceMultiple|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsence(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmAbsence($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostAbsence $body absence object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHrmAbsenceBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHrmAbsenceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHrmAbsenceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmAbsence(\Steefdw\Simplicate\Model\PostAbsence $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHrmAbsence($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmAbsenceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmAbsenceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmAbsenceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHrmAbsenceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultAbsence|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsenceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmAbsenceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostAbsence $body Absence object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHrmAbsenceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHrmAbsenceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHrmAbsenceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmAbsenceById(string $id, \Steefdw\Simplicate\Model\PostAbsence $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHrmAbsenceById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultAbsenceTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsencetype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmAbsencetype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmAbsencetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultAbsenceType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsencetypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmAbsencetypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCivilStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmCivilstatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmCivilstatus($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmCivilstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCivilStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmCivilstatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmCivilstatusById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContracts|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContract(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmContract($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContractByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContract|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContractById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmContractById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContractTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContracttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmContracttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmContracttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultContractType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContracttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmContracttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHrmDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHrmDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHrmDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHrmDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHrmDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHrmDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmDocumenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployees|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployee(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployee($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostEmployee $body Employee object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHrmEmployeeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHrmEmployeeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHrmEmployeeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmEmployee(\Steefdw\Simplicate\Model\PostEmployee $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHrmEmployee($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployee|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeeById($id), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutEmployee $body Employee object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHrmEmployeeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHrmEmployeeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHrmEmployeeByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmEmployeeById(\Steefdw\Simplicate\Model\PutEmployee $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHrmEmployeeById($body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldgroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeecustomfieldgroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldgroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeecustomfieldgroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfield(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeecustomfield($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeecustomfieldByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeecustomfieldById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeetype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeetype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmployeetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmployeeType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeetypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmployeetypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmploymentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmploymenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmploymenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmEmploymenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultEmploymentType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmploymenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmEmploymenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultLeaveMultiple|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeave(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmLeave($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostLeave $body Leave object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHrmLeaveBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostHrmLeaveUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHrmLeaveInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmLeave(\Steefdw\Simplicate\Model\PostLeave $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHrmLeave($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeaveByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultLeave|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeaveById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmLeaveById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostLeave $body Leave object containing data that with the new values
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHrmLeaveByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutHrmLeaveByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHrmLeaveByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHrmLeaveByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmLeaveById(string $id, \Steefdw\Simplicate\Model\PostLeave $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHrmLeaveById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavebalanceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavebalanceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavebalanceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultLeaveBalances|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavebalance(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmLeavebalance($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultLeaveTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavetype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmLeavetype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmLeavetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultLeaveType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavetypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmLeavetypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTeams|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTeam(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmTeam($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTeamByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTeam|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTeamById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmTeamById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetHrmTimetableUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTimetableNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetHrmTimetableInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimetables|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTimetable(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetHrmTimetable($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostTimetable $body Timetable object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostHrmTimetableUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostHrmTimetableNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostHrmTimetableInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmTimetable(\Steefdw\Simplicate\Model\PostTimetable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostHrmTimetable($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmTimetableByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmTimetableByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteHrmTimetableByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmTimetableById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteHrmTimetableById($id), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutTimetable $body Timetable object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutHrmTimetableByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutHrmTimetableByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutHrmTimetableByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmTimetableById(\Steefdw\Simplicate\Model\PutTimetable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutHrmTimetableById($body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostInvoicesDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutInvoicesDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoicesDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteInvoicesDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesDocumenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInvoices|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesInvoice($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostInvoice $body Invoice object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesInvoiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesInvoiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesInvoiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesInvoice(\Steefdw\Simplicate\Model\PostInvoice $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostInvoicesInvoice($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesInvoiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesInvoiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoicesInvoiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteInvoicesInvoiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInvoice|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesInvoiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\Invoice $body template object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesInvoiceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesInvoiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesInvoiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesInvoiceById(string $id, \Steefdw\Simplicate\Model\Invoice $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutInvoicesInvoiceById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInvoiceStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoicestatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesInvoicestatus($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesInvoicestatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultInvoiceStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoicestatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesInvoicestatusById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPayments|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPayment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesPayment($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\Payment $body Payment object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesPaymentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesPaymentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostInvoicesPaymentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesPayment(\Steefdw\Simplicate\Model\Payment $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostInvoicesPayment($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPayment|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesPaymentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\Payment $body Payment object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesPaymentByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesPaymentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesPaymentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutInvoicesPaymentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesPaymentById(string $id, \Steefdw\Simplicate\Model\Payment $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutInvoicesPaymentById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPaymentTerms|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymentterm(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesPaymentterm($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPaymenttermByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPaymentTerm|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymenttermById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesPaymenttermById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPropositionUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPropositionNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesPropositionInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPropositions|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesProposition(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesProposition($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReminderSets|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesReminderset(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesReminderset($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindersetByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReminderSet|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindersetById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesRemindersetById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReminderTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindertemplate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesRemindertemplate($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesRemindertemplateByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReminderTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindertemplateById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesRemindertemplateById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultVatClasses|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesVatclass(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesVatclass($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetInvoicesVatclassByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultVatClass|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesVatclassById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetInvoicesVatclassById($id), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMergerCompare|\Psr\Http\Message\ResponseInterface
     */
    public function postMergerCompareorganization(\Steefdw\Simplicate\Model\PostMergerCompare $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostMergerCompareorganization($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostMergerComparepersonBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostMergerComparepersonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostMergerComparepersonInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMergerCompare|\Psr\Http\Message\ResponseInterface
     */
    public function postMergerCompareperson(\Steefdw\Simplicate\Model\PostMergerCompare $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostMergerCompareperson($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMerger $body Merge object containing the source id and target id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergeorganizationBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergeorganizationUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergeorganizationInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\ResultMergerMerge|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmMergeorganization(\Steefdw\Simplicate\Model\PostMerger $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCrmMergeorganization($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMerger $body Merge object containing the source id and target id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergepersonBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergepersonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostCrmMergepersonInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\ResultMergerMerge|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmMergeperson(\Steefdw\Simplicate\Model\PostMerger $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostCrmMergeperson($body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMileageList|\Psr\Http\Message\ResponseInterface
     */
    public function getMileageMileage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetMileageMileage($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMileage $body Mileage object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostMileageMileageUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostMileageMileageNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostMileageMileageInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postMileageMileage(\Steefdw\Simplicate\Model\PostMileage $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostMileageMileage($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteMileageMileageByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteMileageMileageByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMileageMileageById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteMileageMileageById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultMileage|\Psr\Http\Message\ResponseInterface
     */
    public function getMileageMileageById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetMileageMileageById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PutMileage $body Mileage object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutMileageMileageByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutMileageMileageByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutMileageMileageByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putMileageMileageById(string $id, \Steefdw\Simplicate\Model\PutMileage $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutMileageMileageById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignments|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsAssignment($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostAssignment $body Project assignment POST body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsAssignment(\Steefdw\Simplicate\Model\PostAssignment $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsAssignment($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignment|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsAssignmentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PutAssignment $body Project assignment PUT body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsAssignmentById(string $id, \Steefdw\Simplicate\Model\PutAssignment $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutProjectsAssignmentById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[range_start]
     *     @var string $q[employee_id]
     *     @var string $q[assignment_id]
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetPaymentRequiredException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentbudgetInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignmentbudget|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentbudget(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsAssignmentbudget($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignmentStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentstatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsAssignmentstatus($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\AssignmentStatus $body Project assignment POST body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentstatusBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsAssignmentstatusInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsAssignmentstatus(\Steefdw\Simplicate\Model\AssignmentStatus $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsAssignmentstatus($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsAssignmentstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectAssignmentStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentstatusById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsAssignmentstatusById($id, $queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\AssignmentStatus $body Project assignment POST body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentstatusByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsAssignmentstatusByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsAssignmentstatusById(string $id, \Steefdw\Simplicate\Model\AssignmentStatus $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutProjectsAssignmentstatusById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutProjectsDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutProjectsDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteProjectsDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsDocumenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjects|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProject(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProject($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostProject $body Project object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsProjectUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsProjectNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsProject(\Steefdw\Simplicate\Model\PostProject $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsProject($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsProjectByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsProjectByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsProjectById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteProjectsProjectById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProject|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostProject $body project object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutProjectsProjectByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsProjectByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsProjectByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsProjectById(string $id, \Steefdw\Simplicate\Model\PostProject $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutProjectsProjectById($id, $body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var string $by
     *     @var string $until_date Y-m-d
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectByIdPlanningBudget(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectByIdPlanningBudget($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldgroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectcustomfieldgroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldgroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectcustomfieldgroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfield(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectcustomfield($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectcustomfieldByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectcustomfieldById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectfilter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectfilter($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectfilterByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectfilterById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectfilterById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectStatusses|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectstatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectstatus($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsProjectstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectstatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsProjectstatusById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPurchases|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchase(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsPurchase($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchaseByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPurchase|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchaseById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsPurchaseById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPurchaseTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchasetype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsPurchasetype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsPurchasetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultPurchaseType|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchasetypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsPurchasetypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReverseInvoices|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsReverseinvoice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsReverseinvoice($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsReverseinvoiceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultReverseInvoice|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsReverseinvoiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsReverseinvoiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $body Optional parameters to overwrite
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceByIdDuplicateBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceByIdDuplicateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceByIdDuplicateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsServiceByIdDuplicate(string $id, string $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsServiceByIdDuplicate($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectServices|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsService($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostProjectService $body template object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostProjectsServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsService(\Steefdw\Simplicate\Model\PostProjectService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostProjectsService($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsServiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteProjectsServiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultProjectService|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsServiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsServiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PutProjectService $body Service object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutProjectsServiceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsServiceById(string $id, \Steefdw\Simplicate\Model\PutProjectService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutProjectsServiceById($id, $body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var string $by
     *     @var string $until_date Y-m-d
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsServiceByIdPlanningBudget(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetProjectsServiceByIdPlanningBudget($id, $queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesConverttoprojectByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesConverttoprojectByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesConverttoprojectByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesConverttoprojectByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSale|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesConverttoprojectById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesConverttoprojectById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesDocument($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesDocument(\Steefdw\Simplicate\Model\PostDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesDocument($body), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PutDocument $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesDocumentBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesDocumentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesDocument(\Steefdw\Simplicate\Model\PutDocument $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesDocument($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteSalesDocumentById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumentByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesDocumentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumenttype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesDocumenttype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumenttypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesDocumenttypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuotes|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuote(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuote($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostQuote $body Quote template object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuoteBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuoteUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuoteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesQuote(\Steefdw\Simplicate\Model\PostQuote $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesQuote($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuoteByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuoteByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesQuoteById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteSalesQuoteById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuote|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuoteById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuoteById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostQuote $body Quote template object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuoteById(string $id, \Steefdw\Simplicate\Model\PostQuote $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesQuoteById($id, $body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PutQuoteEmail $body Document object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuoteemailByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuoteemailById(string $id, \Steefdw\Simplicate\Model\PutQuoteEmail $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesQuoteemailById($id, $body), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuoteStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotestatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuotestatus(), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotestatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuoteStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotestatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuotestatusById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuoteTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotetemplate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuotetemplate($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostQuoteTemplate $body Quote template object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuotetemplateBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuotetemplateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesQuotetemplateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesQuotetemplate(\Steefdw\Simplicate\Model\PostQuoteTemplate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesQuotetemplate($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuotetemplateByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuotetemplateByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesQuotetemplateById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteSalesQuotetemplateById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultQuoteTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotetemplateById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesQuotetemplateById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostQuoteTemplate $body Quote template object containing data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuotetemplateByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuotetemplateByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuotetemplateById(string $id, \Steefdw\Simplicate\Model\PostQuoteTemplate $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesQuotetemplateById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultRevenueGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesRevenuegroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesRevenuegroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesRevenuegroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultRevenueGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesRevenuegroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesRevenuegroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSales|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSale(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSale($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostSales $body Sales object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesSaleUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSaleNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSaleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesSale(\Steefdw\Simplicate\Model\PostSales $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesSale($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSaleByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSale|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSaleById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSaleById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostSales $body project object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesSaleByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesSaleByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesSaleByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutSalesSaleByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesSaleById(string $id, \Steefdw\Simplicate\Model\PostSales $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesSaleById($id, $body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostDuplicateSales $body Optional parameters to overwrite
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSalesSalesByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesSalesByIdDuplicate(string $id, \Steefdw\Simplicate\Model\PostDuplicateSales $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesSalesByIdDuplicate($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldgroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalescustomfieldgroup($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldgroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalescustomfieldgroupById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfield(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalescustomfield($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalescustomfieldByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalescustomfieldById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesfilter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesfilter($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesfilterByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesfilterById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesfilterById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesProgresses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesprogress(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesprogress($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesprogressByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesProgress|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesprogressById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesprogressById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesReasons|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesreason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesreason($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesreasonByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesReason|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesreasonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesreasonById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesSources|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalessource(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalessource($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalessourceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesSource|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalessourceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalessourceById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesStatusses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesstatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesstatus($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesSalesstatusByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesstatusById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesSalesstatusById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $body Optional parameters to overwrite
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceByIdDuplicateBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceByIdDuplicateUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceByIdDuplicateNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesServiceByIdDuplicate(string $id, string $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesServiceByIdDuplicate($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesServices|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesService($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostSalesService $body template object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSalesServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesService(\Steefdw\Simplicate\Model\PostSalesService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSalesService($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesServiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteSalesServiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSalesService|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesServiceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSalesServiceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostSalesService $body Service object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSalesServiceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutSalesServiceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSalesServiceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesServiceById(string $id, \Steefdw\Simplicate\Model\PostSalesService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSalesServiceById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDefaultServices|\Psr\Http\Message\ResponseInterface
     */
    public function getServicesDefaultservice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetServicesDefaultservice($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostDefaultService $body Default service object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostServicesDefaultserviceUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostServicesDefaultserviceNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostServicesDefaultserviceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postServicesDefaultservice(\Steefdw\Simplicate\Model\PostDefaultService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostServicesDefaultservice($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteServicesDefaultserviceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteServicesDefaultserviceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultDefaultService|\Psr\Http\Message\ResponseInterface
     */
    public function getServicesDefaultserviceById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetServicesDefaultserviceById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostDefaultService $body default service object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutServicesDefaultserviceByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutServicesDefaultserviceByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutServicesDefaultserviceByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putServicesDefaultserviceById(string $id, \Steefdw\Simplicate\Model\PostDefaultService $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutServicesDefaultserviceById($id, $body), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSharedItems|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSharedItem($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostSharedItem $body Item object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostSharedItemUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostSharedItemNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostSharedItemInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSharedItem(\Steefdw\Simplicate\Model\PostSharedItem $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostSharedItem($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteSharedItemByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteSharedItemByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteSharedItemByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSharedItemById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteSharedItemById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetSharedItemByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultSharedItem|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedItemById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetSharedItemById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param \Steefdw\Simplicate\Model\PostSharedItem $body Shared item object that with the data that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutSharedItemByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutSharedItemByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutSharedItemByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSharedItemById(string $id, \Steefdw\Simplicate\Model\PostSharedItem $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PutSharedItemById($id, $body), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostTimelineAttachmentUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostTimelineAttachmentNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostTimelineAttachmentInternalServerErrorException
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimelineAttachment(\Steefdw\Simplicate\Model\PostAttachment $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostTimelineAttachment($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineAttachmentByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineAttachmentByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineAttachmentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimelineAttachmentById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteTimelineAttachmentById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimelineMessages|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetTimelineMessage($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostMessage $body Timeline message that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostTimelineMessageUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostTimelineMessageNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostTimelineMessageInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimelineMessage(\Steefdw\Simplicate\Model\PostMessage $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostTimelineMessage($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineMessageByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineMessageByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimelineMessageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimelineMessageById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\DeleteTimelineMessageById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessageByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimelineMessage|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessageById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetTimelineMessageById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimelineMessageTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessagetype(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetTimelineMessagetype($queryParameters), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetTimelineMessagetypeByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimelineMessageType|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessagetypeById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetTimelineMessagetypeById($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimers|\Psr\Http\Message\ResponseInterface
     */
    public function getTimersTimer(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\GetTimersTimer($queryParameters), $fetch);
    }

    /**
     * @param \Steefdw\Simplicate\Model\PostTimer $body Timer object that needs to be added
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostTimersTimerUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostTimersTimerNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostTimersTimerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimersTimer(\Steefdw\Simplicate\Model\PostTimer $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Steefdw\Simplicate\Endpoint\PostTimersTimer($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\DeleteTimersTimerByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimersTimerByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\DeleteTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimersTimerById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DeleteTimersTimerById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerByIdUnprocessableEntityException
     * @throws \Steefdw\Simplicate\Exception\GetTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Steefdw\Simplicate\Model\RestResultTimer|\Psr\Http\Message\ResponseInterface
     */
    public function getTimersTimerById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTimersTimerById($id), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param PutTimer $body Timer object that needs to be updated
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutTimersTimerByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutTimersTimerByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutTimersTimerByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putTimersTimerById(string $id, PutTimer $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutTimersTimerById($id, $body), $fetch);
    }

    /**
     * @param PostChunked $body Data required to initialize an upload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PostUploadChunkedBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PostUploadChunkedUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PostUploadChunkedNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PostUploadChunkedInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUploadChunked(PostChunked $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostUploadChunked($body), $fetch);
    }

    /**
     * @param string $id The template's id
     * @param PutChunked $body Next chunk for a chunked_upload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Steefdw\Simplicate\Exception\PutUploadChunkedByIdBadRequestException
     * @throws \Steefdw\Simplicate\Exception\PutUploadChunkedByIdUnauthorizedException
     * @throws \Steefdw\Simplicate\Exception\PutUploadChunkedByIdNotFoundException
     * @throws \Steefdw\Simplicate\Exception\PutUploadChunkedByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUploadChunkedById(string $id, PutChunked $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutUploadChunkedById($id, $body), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https:///api/v2');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [
            new ArrayDenormalizer(),
            new JaneObjectNormalizer(),
        ];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer($normalizers, [
            new JsonEncoder(
                new JsonEncode(),
                new JsonDecode(['json_decode_associative' => true])
            ),
        ]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
