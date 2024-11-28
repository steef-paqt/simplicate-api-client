<?php

declare(strict_types=1);

namespace Paqtcom\Simplicate;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Paqtcom\Simplicate\Endpoint\DeleteTimersTimerById;
use Paqtcom\Simplicate\Endpoint\GetCostsCoststype;
use Paqtcom\Simplicate\Endpoint\GetTimersTimerById;
use Paqtcom\Simplicate\Endpoint\PostUploadChunked;
use Paqtcom\Simplicate\Endpoint\PutTimersTimerById;
use Paqtcom\Simplicate\Endpoint\PutUploadChunkedById;
use Paqtcom\Simplicate\Model\PostChunked;
use Paqtcom\Simplicate\Model\PutChunked;
use Paqtcom\Simplicate\Model\PutTimer;
use Paqtcom\Simplicate\Normalizer\JaneObjectNormalizer;
use Paqtcom\Simplicate\Runtime\Client\Client as ParentClient;
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
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHourTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsCoststype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new GetCostsCoststype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsCoststypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHourType|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsCoststypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCostsCoststypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeExpenseList|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsExpense(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCostsExpense($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCostsExpenseByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeExpense|\Psr\Http\Message\ResponseInterface
     */
    public function getCostsExpenseById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCostsExpenseById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContactPersons|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmContactperson(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmContactperson($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmContactpersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmContactpersonById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCrmContactpersonById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmContactpersonByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContactPerson|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmContactpersonById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmContactpersonById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCountries|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCountry(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmCountry($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmCountryByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCountry|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCountryById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmCountryById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDebtorUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDebtorNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDebtorInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDebtorList|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDebtor(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmDebtor($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostCrmDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCrmDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutCrmDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutCrmDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCrmDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmDocumenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultGenders|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmGender(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmGender($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmGenderByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultGender|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmGenderById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmGenderById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultIndustries|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmIndustry(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmIndustry($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmIndustryByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultIndustry|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmIndustryById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmIndustryById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInterests|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmInterest(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmInterest($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmInterestByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInterest|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmInterestById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmInterestById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMyOrganizationProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmMyorganizationprofile(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmMyorganizationprofile($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmMyorganizationprofileByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMyOrganizationProfile|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmMyorganizationprofileById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmMyorganizationprofileById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultOrganizations|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganization(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganization($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostOrganization $body Organization object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostCrmOrganizationBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmOrganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmOrganizationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmOrganization(\Paqtcom\Simplicate\Model\PostOrganization $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCrmOrganization($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmOrganizationById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCrmOrganizationById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultOrganization|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostOrganization $body Organization object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmOrganizationByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmOrganizationById(string $id, \Paqtcom\Simplicate\Model\PostOrganization $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutCrmOrganizationById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldgroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationcustomfieldgroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldgroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationcustomfieldgroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfield(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationcustomfield($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationcustomfieldByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationcustomfieldById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationcustomfieldById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultOrganizationSizes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationsize(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationsize($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmOrganizationsizeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultOrganizationSize|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmOrganizationsizeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmOrganizationsizeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPersons|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPerson(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPerson($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostPerson $body Person object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostCrmPersonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmPersonNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmPersonInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmPerson(\Paqtcom\Simplicate\Model\PostPerson $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCrmPerson($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmPersonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmPersonByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmPersonById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCrmPersonById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPerson|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersonById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPersonById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostPerson $body Person object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PutCrmPersonByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmPersonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmPersonByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutCrmPersonByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmPersonById(string $id, \Paqtcom\Simplicate\Model\PostPerson $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutCrmPersonById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldgroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPersoncustomfieldgroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldgroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPersoncustomfieldgroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfield(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPersoncustomfield($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmPersoncustomfieldByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmPersoncustomfieldById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmPersoncustomfieldById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultRelationTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmRelationtype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmRelationtype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetCrmRelationtypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultRelationType|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmRelationtypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCrmRelationtypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsGroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsGroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomFieldsGroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCustomFieldsGroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsGroupById(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsGroupById($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\CustomFieldGroup $body Organization object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomFieldsGroupById(string $id, \Paqtcom\Simplicate\Model\CustomFieldGroup $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCustomFieldsGroupById($id, $body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\CustomFieldGroup $body Organization object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsGroupByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomFieldsGroupById(string $id, \Paqtcom\Simplicate\Model\CustomFieldGroup $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutCustomFieldsGroupById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldModels|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsModel(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsModel($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsModelByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldModel|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsModelById(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsModelById($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldOptions|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsOption(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsOption($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsOptionByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsOptionByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteCustomFieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomFieldsOptionById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteCustomFieldsOptionById($id));
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldOption|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsOptionById(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsOptionById($id, $queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\CustomFieldOption $body CustomFieldOption object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostCustomFieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomFieldsOptionById(\Paqtcom\Simplicate\Model\CustomFieldOption $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCustomFieldsOptionById($body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\CustomFieldOption $body CustomFieldOption object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutCustomFieldsOptionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomFieldsOptionById(string $id, \Paqtcom\Simplicate\Model\CustomFieldOption $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutCustomFieldsOptionById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsType(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsType($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetCustomFieldsTypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldType|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomFieldsTypeById(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetCustomFieldsTypeById($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetDocumentsDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostDocumentsDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostDocumentsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentsDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostDocumentsDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutDocumentsDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutDocumentsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutDocumentsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putDocumentsDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutDocumentsDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteDocumentsDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteDocumentsDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteDocumentsDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDocumentsDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteDocumentsDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetDocumentsDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetDocumentsDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetDocumentsDocumenttypeById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetDocumentsDownloadByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentsDownloadById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetDocumentsDownloadById($id));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostAbsence $body absence object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostHoursAbsenceBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursAbsenceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursAbsenceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursAbsence(\Paqtcom\Simplicate\Model\PostAbsence $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursAbsence($body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostAbsence $body Absence object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursAbsenceById(string $id, \Paqtcom\Simplicate\Model\PostAbsence $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursAbsenceById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultApprovals|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApproval(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursApproval($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostApproval $body Approval object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostHoursApprovalUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursApprovalNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursApprovalInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursApproval(\Paqtcom\Simplicate\Model\PostApproval $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursApproval($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursApprovalByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursApprovalByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursApprovalById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHoursApprovalById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultApproval|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursApprovalById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostApproval $body Approval object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutHoursApprovalByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursApprovalByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursApprovalByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursApprovalByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursApprovalById(string $id, \Paqtcom\Simplicate\Model\PostApproval $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursApprovalById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultApprovalStatusList|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalstatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursApprovalstatus($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursApprovalstatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultApprovalStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursApprovalstatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursApprovalstatusById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeExpenseList|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursEmployeeexpense(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursEmployeeexpense($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursEmployeeexpenseByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeExpense|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursEmployeeexpenseById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursEmployeeexpenseById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHours|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHour(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursHour($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostHours $body Hours object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursHour(\Paqtcom\Simplicate\Model\PostHours $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursHour($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursHourByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursHourByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursHourByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursHourById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHoursHourById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHour|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursHourById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostHours $body Hours object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursHourById(string $id, \Paqtcom\Simplicate\Model\PostHours $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursHourById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHourTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourstype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursHourstype($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostHoursType $body Hour type object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourstypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourstypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursHourstypeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursHourstype(\Paqtcom\Simplicate\Model\PostHoursType $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursHourstype($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursHourstypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHourType|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursHourstypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursHourstypeById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostHoursType $body Hours type object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursHourstypeByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursHourstypeById(string $id, \Paqtcom\Simplicate\Model\PostHoursType $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursHourstypeById($id, $body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostLeave $body leave object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostHoursLeaveBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursLeaveUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursLeaveInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursLeave(\Paqtcom\Simplicate\Model\PostLeave $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursLeave($body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostLeave $body Leave object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutHoursLeaveByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursLeaveByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursLeaveByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursLeaveByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursLeaveById(string $id, \Paqtcom\Simplicate\Model\PostLeave $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursLeaveById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date]
     *     @var string $q[end_date]
     *     @var string $q[employee_id]
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursSubmissionInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHoursSubmissions|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursSubmission(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursSubmission($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostSubmission $body Description of hours that need to be submitted.
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmissionUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmissionNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmissionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursSubmission(\Paqtcom\Simplicate\Model\PostSubmission $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursSubmission($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\Submit $body Data that is needed to submit hours
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmitUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmitNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursSubmitInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursSubmit(\Paqtcom\Simplicate\Model\Submit $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursSubmit($body));
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[start_date] Y-m-d, must be a Monday
     *     @var string $q[end_date] Y-m-d, must be the Sunday after the Monday of the start_date
     *     @var string $q[employee_id]
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultHoursTimesheetRows|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursTimesheetrow(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursTimesheetrow($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostTimesheetRow $body Description of timesheetrow that is submitted.
     * @throws \Paqtcom\Simplicate\Exception\PostHoursTimesheetrowBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursTimesheetrowUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHoursTimesheetrowInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHoursTimesheetrow(\Paqtcom\Simplicate\Model\PostTimesheetRow $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHoursTimesheetrow($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHoursTimesheetrowByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHoursTimesheetrowById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHoursTimesheetrowById($id));
    }

    /**
     * @param array $body List of external ids for timesheetrows that need to be ordered.
     * @throws \Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHoursTimesheetrowOrderInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHoursTimesheetrowOrder(array $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHoursTimesheetrowOrder($body));
    }

    /**
     * @param array $queryParameters {
     *     @var string $q[before_date]
     *     @var string $q[employee_id]
     *     @var string $q[type]
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHoursTimesheetrowMostrecentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDateTimeRange|\Psr\Http\Message\ResponseInterface
     */
    public function getHoursTimesheetrowMostrecent(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHoursTimesheetrowMostrecent($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultAbsenceMultiple|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsence(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmAbsence($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostAbsence $body absence object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostHrmAbsenceBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmAbsenceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmAbsenceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmAbsence(\Paqtcom\Simplicate\Model\PostAbsence $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHrmAbsence($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmAbsenceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHrmAbsenceById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultAbsence|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsenceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmAbsenceById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostAbsence $body Absence object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmAbsenceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmAbsenceById(string $id, \Paqtcom\Simplicate\Model\PostAbsence $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHrmAbsenceById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultAbsenceTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsencetype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmAbsencetype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmAbsencetypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultAbsenceType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmAbsencetypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmAbsencetypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCivilStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmCivilstatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmCivilstatus($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmCivilstatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCivilStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmCivilstatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmCivilstatusById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContracts|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContract(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmContract($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContractByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContract|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContractById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmContractById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContractTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContracttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmContracttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmContracttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultContractType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmContracttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmContracttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostHrmDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHrmDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutHrmDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHrmDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHrmDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmDocumenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployees|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployee(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployee($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostEmployee $body Employee object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostHrmEmployeeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmEmployeeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmEmployeeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmEmployee(\Paqtcom\Simplicate\Model\PostEmployee $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHrmEmployee($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployee|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeeById($id));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutEmployee $body Employee object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmEmployeeByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmEmployeeById(\Paqtcom\Simplicate\Model\PutEmployee $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHrmEmployeeById($body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldgroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeecustomfieldgroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldgroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeecustomfieldgroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfield(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeecustomfield($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeecustomfieldByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeecustomfieldById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeecustomfieldById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeetype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeetype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmployeetypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmployeeType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmployeetypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmployeetypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmploymentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmploymenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmploymenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmEmploymenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultEmploymentType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmEmploymenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmEmploymenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultLeaveMultiple|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeave(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmLeave($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostLeave $body Leave object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmLeaveInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmLeave(\Paqtcom\Simplicate\Model\PostLeave $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHrmLeave($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeaveByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultLeave|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeaveById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmLeaveById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostLeave $body Leave object containing data that with the new values
     * @throws \Paqtcom\Simplicate\Exception\PutHrmLeaveByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmLeaveByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmLeaveByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmLeaveByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmLeaveById(string $id, \Paqtcom\Simplicate\Model\PostLeave $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHrmLeaveById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavebalanceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavebalanceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavebalanceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultLeaveBalances|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavebalance(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmLeavebalance($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultLeaveTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavetype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmLeavetype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmLeavetypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultLeaveType|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmLeavetypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmLeavetypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTeams|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTeam(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmTeam($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTeamByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTeam|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTeamById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmTeamById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTimetableUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTimetableNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetHrmTimetableInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimetables|\Psr\Http\Message\ResponseInterface
     */
    public function getHrmTimetable(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetHrmTimetable($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostTimetable $body Timetable object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostHrmTimetableUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmTimetableNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostHrmTimetableInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHrmTimetable(\Paqtcom\Simplicate\Model\PostTimetable $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostHrmTimetable($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmTimetableByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmTimetableByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteHrmTimetableByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHrmTimetableById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteHrmTimetableById($id));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutTimetable $body Timetable object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutHrmTimetableByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmTimetableByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutHrmTimetableByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putHrmTimetableById(\Paqtcom\Simplicate\Model\PutTimetable $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutHrmTimetableById($body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostInvoicesDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutInvoicesDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoicesDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteInvoicesDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesDocumenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInvoices|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoice(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesInvoice($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostInvoice $body Invoice object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesInvoiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesInvoiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesInvoiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesInvoice(\Paqtcom\Simplicate\Model\PostInvoice $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostInvoicesInvoice($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesInvoiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesInvoiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvoicesInvoiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteInvoicesInvoiceById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInvoice|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesInvoiceById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\Invoice $body template object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesInvoiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesInvoiceById(string $id, \Paqtcom\Simplicate\Model\Invoice $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutInvoicesInvoiceById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInvoiceStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoicestatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesInvoicestatus($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesInvoicestatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultInvoiceStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesInvoicestatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesInvoicestatusById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPayments|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPayment(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesPayment($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\Payment $body Payment object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesPaymentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesPaymentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostInvoicesPaymentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInvoicesPayment(\Paqtcom\Simplicate\Model\Payment $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostInvoicesPayment($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPayment|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesPaymentById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\Payment $body Payment object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutInvoicesPaymentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putInvoicesPaymentById(string $id, \Paqtcom\Simplicate\Model\Payment $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutInvoicesPaymentById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPaymentTerms|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymentterm(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesPaymentterm($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPaymenttermByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPaymentTerm|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesPaymenttermById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesPaymenttermById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPropositionUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPropositionNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesPropositionInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPropositions|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesProposition(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesProposition($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReminderSets|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesReminderset(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesReminderset($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindersetByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReminderSet|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindersetById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesRemindersetById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReminderTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindertemplate(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesRemindertemplate($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesRemindertemplateByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReminderTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesRemindertemplateById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesRemindertemplateById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultVatClasses|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesVatclass(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesVatclass($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetInvoicesVatclassByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultVatClass|\Psr\Http\Message\ResponseInterface
     */
    public function getInvoicesVatclassById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetInvoicesVatclassById($id));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerCompareorganizationInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMergerCompare|\Psr\Http\Message\ResponseInterface
     */
    public function postMergerCompareorganization(\Paqtcom\Simplicate\Model\PostMergerCompare $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostMergerCompareorganization($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMergerCompare $body Compare objects containing the source id and target id
     * @throws \Paqtcom\Simplicate\Exception\PostMergerComparepersonBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerComparepersonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostMergerComparepersonInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMergerCompare|\Psr\Http\Message\ResponseInterface
     */
    public function postMergerCompareperson(\Paqtcom\Simplicate\Model\PostMergerCompare $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostMergerCompareperson($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMerger $body Merge object containing the source id and target id
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergeorganizationInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\ResultMergerMerge|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmMergeorganization(\Paqtcom\Simplicate\Model\PostMerger $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCrmMergeorganization($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMerger $body Merge object containing the source id and target id
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergepersonBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergepersonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostCrmMergepersonInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\ResultMergerMerge|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmMergeperson(\Paqtcom\Simplicate\Model\PostMerger $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostCrmMergeperson($body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMileageList|\Psr\Http\Message\ResponseInterface
     */
    public function getMileageMileage(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetMileageMileage($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMileage $body Mileage object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostMileageMileageUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostMileageMileageNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostMileageMileageInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postMileageMileage(\Paqtcom\Simplicate\Model\PostMileage $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostMileageMileage($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteMileageMileageByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteMileageMileageByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMileageMileageById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteMileageMileageById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultMileage|\Psr\Http\Message\ResponseInterface
     */
    public function getMileageMileageById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetMileageMileageById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PutMileage $body Mileage object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutMileageMileageByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutMileageMileageByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutMileageMileageByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutMileageMileageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putMileageMileageById(string $id, \Paqtcom\Simplicate\Model\PutMileage $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutMileageMileageById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectAssignments|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignment(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsAssignment($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostAssignment $body Project assignment POST body
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsAssignment(\Paqtcom\Simplicate\Model\PostAssignment $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsAssignment($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectAssignment|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsAssignmentById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PutAssignment $body Project assignment PUT body
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsAssignmentById(string $id, \Paqtcom\Simplicate\Model\PutAssignment $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutProjectsAssignmentById($id, $body));
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
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetPaymentRequiredException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentbudgetInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectAssignmentbudget|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentbudget(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsAssignmentbudget($queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentstatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsAssignmentstatus($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\AssignmentStatus $body Project assignment POST body
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsAssignmentstatusInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsAssignmentstatus(\Paqtcom\Simplicate\Model\AssignmentStatus $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsAssignmentstatus($body));
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsAssignmentstatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectAssignmentStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsAssignmentstatusById(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsAssignmentstatusById($id, $queryParameters));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\AssignmentStatus $body Project assignment POST body
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsAssignmentstatusByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsAssignmentstatusById(string $id, \Paqtcom\Simplicate\Model\AssignmentStatus $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutProjectsAssignmentstatusById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutProjectsDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteProjectsDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsDocumenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjects|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProject(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProject($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostProject $body Project object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsProject(\Paqtcom\Simplicate\Model\PostProject $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsProject($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsProjectByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsProjectByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsProjectById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteProjectsProjectById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProject|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostProject $body project object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsProjectByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsProjectByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsProjectByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsProjectByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsProjectById(string $id, \Paqtcom\Simplicate\Model\PostProject $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutProjectsProjectById($id, $body));
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var string $by
     *     @var string $until_date Y-m-d
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectByIdPlanningBudgetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectByIdPlanningBudget(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectByIdPlanningBudget($id, $queryParameters));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldgroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectcustomfieldgroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldgroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectcustomfieldgroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfield(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectcustomfield($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectcustomfieldByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectcustomfieldById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectcustomfieldById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectfilter(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectfilter($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectfilterByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectfilterById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectfilterById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectStatusses|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectstatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectstatus($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsProjectstatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsProjectstatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsProjectstatusById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPurchases|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchase(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsPurchase($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchaseByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPurchase|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchaseById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsPurchaseById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPurchaseTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchasetype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsPurchasetype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsPurchasetypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultPurchaseType|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsPurchasetypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsPurchasetypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReverseInvoices|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsReverseinvoice(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsReverseinvoice($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsReverseinvoiceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultReverseInvoice|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsReverseinvoiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsReverseinvoiceById($id));
    }

    /**
     * @param string $id The template's id
     * @param string $body Optional parameters to overwrite
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceByIdDuplicateBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceByIdDuplicateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceByIdDuplicateNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsServiceByIdDuplicate(string $id, string $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsServiceByIdDuplicate($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectServices|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsService(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsService($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostProjectService $body template object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostProjectsServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsService(\Paqtcom\Simplicate\Model\PostProjectService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostProjectsService($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsServiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteProjectsServiceById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultProjectService|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsServiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsServiceById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PutProjectService $body Service object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsServiceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutProjectsServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsServiceById(string $id, \Paqtcom\Simplicate\Model\PutProjectService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutProjectsServiceById($id, $body));
    }

    /**
     * @param string $id The template's id
     * @param array $queryParameters {
     *     @var string $by
     *     @var string $until_date Y-m-d
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetProjectsServiceByIdPlanningBudgetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsServiceByIdPlanningBudget(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetProjectsServiceByIdPlanningBudget($id, $queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesConverttoprojectByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSale|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesConverttoprojectById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesConverttoprojectById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocument(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesDocument($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostSalesDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesDocument(\Paqtcom\Simplicate\Model\PostDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesDocument($body));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PutDocument $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutSalesDocumentBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesDocumentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesDocumentInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesDocument(\Paqtcom\Simplicate\Model\PutDocument $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesDocument($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesDocumentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteSalesDocumentById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumentByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocument|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesDocumentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumenttype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesDocumenttype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesDocumenttypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDocumentType|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesDocumenttypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesDocumenttypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuotes|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuote(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuote($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostQuote $body Quote template object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuoteBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuoteUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuoteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesQuote(\Paqtcom\Simplicate\Model\PostQuote $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesQuote($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuoteByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuoteByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesQuoteById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteSalesQuoteById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuote|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuoteById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuoteById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostQuote $body Quote template object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuoteById(string $id, \Paqtcom\Simplicate\Model\PostQuote $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesQuoteById($id, $body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PutQuoteEmail $body Document object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuoteemailByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuoteemailById(string $id, \Paqtcom\Simplicate\Model\PutQuoteEmail $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesQuoteemailById($id, $body));
    }

    /**
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuoteStatuses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotestatus()
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuotestatus());
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotestatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuoteStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotestatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuotestatusById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuoteTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotetemplate(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuotetemplate($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostQuoteTemplate $body Quote template object containing data
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuotetemplateBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuotetemplateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesQuotetemplateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesQuotetemplate(\Paqtcom\Simplicate\Model\PostQuoteTemplate $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesQuotetemplate($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuotetemplateByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuotetemplateByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesQuotetemplateById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteSalesQuotetemplateById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultQuoteTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesQuotetemplateById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesQuotetemplateById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostQuoteTemplate $body Quote template object containing data
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesQuotetemplateByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesQuotetemplateById(string $id, \Paqtcom\Simplicate\Model\PostQuoteTemplate $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesQuotetemplateById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultRevenueGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesRevenuegroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesRevenuegroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesRevenuegroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultRevenueGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesRevenuegroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesRevenuegroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSales|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSale(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSale($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostSales $body Sales object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSaleUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSaleNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSaleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesSale(\Paqtcom\Simplicate\Model\PostSales $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesSale($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSaleByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSale|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSaleById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSaleById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostSales $body project object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutSalesSaleByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesSaleByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesSaleByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesSaleByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesSaleById(string $id, \Paqtcom\Simplicate\Model\PostSales $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesSaleById($id, $body));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostDuplicateSales $body Optional parameters to overwrite
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesSalesByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesSalesByIdDuplicate(string $id, \Paqtcom\Simplicate\Model\PostDuplicateSales $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesSalesByIdDuplicate($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroups|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldgroup(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalescustomfieldgroup($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldgroupByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFieldGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldgroupById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalescustomfieldgroupById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfield(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalescustomfield($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalescustomfieldByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultCustomField|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalescustomfieldById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalescustomfieldById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesfilter(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesfilter($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesfilterByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesfilterById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesfilterById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesProgresses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesprogress(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesprogress($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesprogressByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesProgress|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesprogressById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesprogressById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     *     @var string $select Select only specific fields to return
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesReasons|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesreason(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesreason($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesreasonByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesReason|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesreasonById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesreasonById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesSources|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalessource(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalessource($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalessourceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesSource|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalessourceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalessourceById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesStatusses|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesstatus(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesstatus($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesSalesstatusByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesSalesstatusById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesSalesstatusById($id));
    }

    /**
     * @param string $id The template's id
     * @param string $body Optional parameters to overwrite
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceByIdDuplicateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesServiceByIdDuplicate(string $id, string $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesServiceByIdDuplicate($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesServices|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesService(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesService($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostSalesService $body template object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostSalesServiceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesService(\Paqtcom\Simplicate\Model\PostSalesService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSalesService($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesServiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteSalesServiceById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSalesService|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesServiceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSalesServiceById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostSalesService $body Service object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutSalesServiceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesServiceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesServiceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutSalesServiceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesServiceById(string $id, \Paqtcom\Simplicate\Model\PostSalesService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSalesServiceById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDefaultServices|\Psr\Http\Message\ResponseInterface
     */
    public function getServicesDefaultservice(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetServicesDefaultservice($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostDefaultService $body Default service object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostServicesDefaultserviceUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostServicesDefaultserviceNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostServicesDefaultserviceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postServicesDefaultservice(\Paqtcom\Simplicate\Model\PostDefaultService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostServicesDefaultservice($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteServicesDefaultserviceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteServicesDefaultserviceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteServicesDefaultserviceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteServicesDefaultserviceById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultDefaultService|\Psr\Http\Message\ResponseInterface
     */
    public function getServicesDefaultserviceById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetServicesDefaultserviceById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostDefaultService $body default service object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutServicesDefaultserviceByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putServicesDefaultserviceById(string $id, \Paqtcom\Simplicate\Model\PostDefaultService $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutServicesDefaultserviceById($id, $body));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSharedItems|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedItem(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSharedItem($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostSharedItem $body Item object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostSharedItemUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostSharedItemNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostSharedItemInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSharedItem(\Paqtcom\Simplicate\Model\PostSharedItem $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostSharedItem($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteSharedItemByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSharedItemByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteSharedItemByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSharedItemById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteSharedItemById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetSharedItemByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultSharedItem|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedItemById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetSharedItemById($id));
    }

    /**
     * @param string $id The template's id
     * @param \Paqtcom\Simplicate\Model\PostSharedItem $body Shared item object that with the data that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutSharedItemByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutSharedItemByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutSharedItemByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSharedItemById(string $id, \Paqtcom\Simplicate\Model\PostSharedItem $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PutSharedItemById($id, $body));
    }

    /**
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineAttachmentUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineAttachmentNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineAttachmentInternalServerErrorException
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimelineAttachment(\Paqtcom\Simplicate\Model\PostAttachment $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostTimelineAttachment($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineAttachmentByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimelineAttachmentById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteTimelineAttachmentById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimelineMessages|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessage(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetTimelineMessage($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostMessage $body Timeline message that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineMessageUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineMessageNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostTimelineMessageInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimelineMessage(\Paqtcom\Simplicate\Model\PostMessage $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostTimelineMessage($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineMessageByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineMessageByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimelineMessageByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimelineMessageById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\DeleteTimelineMessageById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessageByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimelineMessage|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessageById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetTimelineMessageById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimelineMessageTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessagetype(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetTimelineMessagetype($queryParameters));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetTimelineMessagetypeByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimelineMessageType|\Psr\Http\Message\ResponseInterface
     */
    public function getTimelineMessagetypeById(string $id)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetTimelineMessagetypeById($id));
    }

    /**
     * @param array $queryParameters {
     *     @var int $offset The offset to search from
     *     @var int $limit The limit of max allowed results
     *     @var string $sort Sort the result by column name
     * }
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimers|\Psr\Http\Message\ResponseInterface
     */
    public function getTimersTimer(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\GetTimersTimer($queryParameters));
    }

    /**
     * @param \Paqtcom\Simplicate\Model\PostTimer $body Timer object that needs to be added
     * @throws \Paqtcom\Simplicate\Exception\PostTimersTimerUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostTimersTimerNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostTimersTimerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postTimersTimer(\Paqtcom\Simplicate\Model\PostTimer $body)
    {
        return $this->executeEndpoint(new \Paqtcom\Simplicate\Endpoint\PostTimersTimer($body));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimersTimerByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimersTimerByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\DeleteTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTimersTimerById(string $id)
    {
        return $this->executeEndpoint(new DeleteTimersTimerById($id));
    }

    /**
     * @param string $id The template's id
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerByIdUnprocessableEntityException
     * @throws \Paqtcom\Simplicate\Exception\GetTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Paqtcom\Simplicate\Model\RestResultTimer|\Psr\Http\Message\ResponseInterface
     */
    public function getTimersTimerById(string $id)
    {
        return $this->executeEndpoint(new GetTimersTimerById($id));
    }

    /**
     * @param string $id The template's id
     * @param PutTimer $body Timer object that needs to be updated
     * @throws \Paqtcom\Simplicate\Exception\PutTimersTimerByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutTimersTimerByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutTimersTimerByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutTimersTimerByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putTimersTimerById(string $id, PutTimer $body)
    {
        return $this->executeEndpoint(new PutTimersTimerById($id, $body));
    }

    /**
     * @param PostChunked $body Data required to initialize an upload
     * @throws \Paqtcom\Simplicate\Exception\PostUploadChunkedBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PostUploadChunkedUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PostUploadChunkedNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PostUploadChunkedInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUploadChunked(PostChunked $body)
    {
        return $this->executeEndpoint(new PostUploadChunked($body));
    }

    /**
     * @param string $id The template's id
     * @param PutChunked $body Next chunk for a chunked_upload
     * @throws \Paqtcom\Simplicate\Exception\PutUploadChunkedByIdBadRequestException
     * @throws \Paqtcom\Simplicate\Exception\PutUploadChunkedByIdUnauthorizedException
     * @throws \Paqtcom\Simplicate\Exception\PutUploadChunkedByIdNotFoundException
     * @throws \Paqtcom\Simplicate\Exception\PutUploadChunkedByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUploadChunkedById(string $id, PutChunked $body)
    {
        return $this->executeEndpoint(new PutUploadChunkedById($id, $body));
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
