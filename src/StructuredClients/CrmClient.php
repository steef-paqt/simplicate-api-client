<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Psr\Http\Message\ResponseInterface;

class CrmClient extends AbstractStructuredClient
{
    public function getContactPersons(array $queryParameters = []): ResponseInterface|Model\RestResultContactPersons|null
    {
        return $this->client->getCrmContactperson($queryParameters);
    }

    public function getContactPerson(string $id): Model\RestResultContactPerson|ResponseInterface|null
    {
        return $this->client->getCrmContactpersonById($id);
    }

    public function deleteContactPerson(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmContactpersonById($id);
    }

    public function getCountries(array $queryParameters = []): ResponseInterface|Model\RestResultCountries|null
    {
        return $this->client->getCrmCountry($queryParameters);
    }

    public function getCountry(string $id): Model\RestResultCountry|ResponseInterface|null
    {
        return $this->client->getCrmCountryById($id);
    }

    public function getDebtors(array $queryParameters = []): Model\RestResultDebtorList|ResponseInterface|null
    {
        return $this->client->getCrmDebtor($queryParameters);
    }

    public function getDocuments(array $queryParameters = []): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getCrmDocument($queryParameters);
    }

    public function postDocument(Model\PostDocument $body): ?ResponseInterface
    {
        return $this->client->postCrmDocument($body);
    }

    public function putDocument(Model\PutDocument $body): ?ResponseInterface
    {
        return $this->client->putCrmDocument($body);
    }

    public function deleteDocument(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmDocumentById($id);
    }

    public function getDocument(string $id): Model\RestResultDocument|ResponseInterface|null
    {
        return $this->client->getCrmDocumentById($id);
    }

    public function getDocumentTypes(array $queryParameters = []): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getCrmDocumenttype($queryParameters);
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getCrmDocumenttypeById($id);
    }

    public function getGenders(array $queryParameters = []): Model\RestResultGenders|ResponseInterface|null
    {
        return $this->client->getCrmGender($queryParameters);
    }

    public function getGender(string $id): Model\RestResultGender|ResponseInterface|null
    {
        return $this->client->getCrmGenderById($id);
    }

    public function getIndustries(array $queryParameters = []): Model\RestResultIndustries|ResponseInterface|null
    {
        return $this->client->getCrmIndustry($queryParameters);
    }

    public function getIndustry(string $id): ResponseInterface|Model\RestResultIndustry|null
    {
        return $this->client->getCrmIndustryById($id);
    }

    public function getInterests(array $queryParameters = []): Model\RestResultInterests|ResponseInterface|null
    {
        return $this->client->getCrmInterest($queryParameters);
    }

    public function getInterest(string $id): ResponseInterface|Model\RestResultInterest|null
    {
        return $this->client->getCrmInterestById($id);
    }

    public function getMyOrganizationProfiles(array $queryParameters = []): ResponseInterface|Model\RestResultMyOrganizationProfiles|null
    {
        return $this->client->getCrmMyorganizationprofile($queryParameters);
    }

    public function getMyOrganizationProfile(string $id): Model\RestResultMyOrganizationProfile|ResponseInterface|null
    {
        return $this->client->getCrmMyorganizationprofileById($id);
    }

    public function getOrganizations(array $queryParameters = []): Model\RestResultOrganizations|ResponseInterface|null
    {
        return $this->client->getCrmOrganization($queryParameters);
    }

    public function getOrganization(string $id): Model\RestResultOrganization|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationById($id);
    }

    public function postOrganization(Model\PostOrganization $body): ?ResponseInterface
    {
        return $this->client->postCrmOrganization($body);
    }

    public function deleteOrganization(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmOrganizationById($id);
    }

    public function putOrganization(string $id, Model\PostOrganization $body): ?ResponseInterface
    {
        return $this->client->putCrmOrganizationById($id, $body);
    }

    public function getOrganizationCustomFieldGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldgroup($queryParameters);
    }

    public function getOrganizationCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldgroupById($id);
    }

    public function getOrganizationCustomFields(array $queryParameters = []): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfield($queryParameters);
    }

    public function getOrganizationCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldById($id);
    }

    public function getOrganizationSizes(array $queryParameters = []): ResponseInterface|Model\RestResultOrganizationSizes|null
    {
        return $this->client->getCrmOrganizationsize($queryParameters);
    }

    public function getOrganizationSize(string $id): Model\RestResultOrganizationSize|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationsizeById($id);
    }

    public function getPersons(array $queryParameters = []): Model\RestResultPersons|ResponseInterface|null
    {
        return $this->client->getCrmPerson($queryParameters);
    }

    public function postPerson(Model\PostPerson $body): ?ResponseInterface
    {
        return $this->client->postCrmPerson($body);
    }

    public function deletePerson(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmPersonById($id);
    }

    public function getPerson(string $id): ResponseInterface|Model\RestResultPerson|null
    {
        return $this->client->getCrmPersonById($id);
    }

    public function putPerson(string $id, Model\PostPerson $body): ?ResponseInterface
    {
        return $this->client->putCrmPersonById($id, $body);
    }

    public function getPersonCustomFieldGroups(array $queryParameters = []): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldgroup($queryParameters);
    }

    public function getPersonCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldgroupById($id);
    }

    public function getPersonCustomFields(array $queryParameters = []): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfield($queryParameters);
    }

    public function getPersonCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldById($id);
    }

    public function getRelationTypes(array $queryParameters = []): Model\RestResultRelationTypes|ResponseInterface|null
    {
        return $this->client->getCrmRelationtype($queryParameters);
    }

    public function getRelationType(string $id): Model\RestResultRelationType|ResponseInterface|null
    {
        return $this->client->getCrmRelationtypeById($id);
    }
}
