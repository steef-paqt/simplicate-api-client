<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace Paqtcom\Simplicate\StructuredClients;

use Paqtcom\Simplicate\Model;
use Paqtcom\Simplicate\QueryBuilder;
use Psr\Http\Message\ResponseInterface;

class CrmClient extends AbstractStructuredClient
{
    public function getContactPersons(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultContactPersons|null
    {
        return $this->client->getCrmContactperson($queryParameters->toArray());
    }

    public function getContactPerson(string $id): Model\RestResultContactPerson|ResponseInterface|null
    {
        return $this->client->getCrmContactpersonById($id);
    }

    public function deleteContactPerson(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmContactpersonById($id);
    }

    public function getCountries(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultCountries|null
    {
        return $this->client->getCrmCountry($queryParameters->toArray());
    }

    public function getCountry(string $id): Model\RestResultCountry|ResponseInterface|null
    {
        return $this->client->getCrmCountryById($id);
    }

    public function getDebtors(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDebtorList|ResponseInterface|null
    {
        return $this->client->getCrmDebtor($queryParameters->toArray());
    }

    public function getDocuments(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocuments|ResponseInterface|null
    {
        return $this->client->getCrmDocument($queryParameters->toArray());
    }

    public function postDocument(Model\PostDocument $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postCrmDocument($body);
    }

    public function putDocument(Model\PutDocument $body): Model\RestPutResult|ResponseInterface|null
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

    public function getDocumentTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultDocumentTypes|ResponseInterface|null
    {
        return $this->client->getCrmDocumenttype($queryParameters->toArray());
    }

    public function getDocumentType(string $id): Model\RestResultDocumentType|ResponseInterface|null
    {
        return $this->client->getCrmDocumenttypeById($id);
    }

    public function getGenders(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultGenders|ResponseInterface|null
    {
        return $this->client->getCrmGender($queryParameters->toArray());
    }

    public function getGender(string $id): Model\RestResultGender|ResponseInterface|null
    {
        return $this->client->getCrmGenderById($id);
    }

    public function getIndustries(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultIndustries|ResponseInterface|null
    {
        return $this->client->getCrmIndustry($queryParameters->toArray());
    }

    public function getIndustry(string $id): ResponseInterface|Model\RestResultIndustry|null
    {
        return $this->client->getCrmIndustryById($id);
    }

    public function getInterests(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultInterests|ResponseInterface|null
    {
        return $this->client->getCrmInterest($queryParameters->toArray());
    }

    public function getInterest(string $id): ResponseInterface|Model\RestResultInterest|null
    {
        return $this->client->getCrmInterestById($id);
    }

    public function getMyOrganizationProfiles(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultMyOrganizationProfiles|null
    {
        return $this->client->getCrmMyorganizationprofile($queryParameters->toArray());
    }

    public function getMyOrganizationProfile(string $id): Model\RestResultMyOrganizationProfile|ResponseInterface|null
    {
        return $this->client->getCrmMyorganizationprofileById($id);
    }

    public function getOrganizations(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultOrganizations|ResponseInterface|null
    {
        return $this->client->getCrmOrganization($queryParameters->toArray());
    }

    public function getOrganization(string $id): Model\RestResultOrganization|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationById($id);
    }

    public function postOrganization(Model\PostOrganization $body): Model\RestPostResult|ResponseInterface|null
    {
        return $this->client->postCrmOrganization($body);
    }

    public function deleteOrganization(string $id): ?ResponseInterface
    {
        return $this->client->deleteCrmOrganizationById($id);
    }

    public function putOrganization(string $id, Model\PostOrganization $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putCrmOrganizationById($id, $body);
    }

    public function getOrganizationCustomFieldGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldgroup($queryParameters->toArray());
    }

    public function getOrganizationCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldgroupById($id);
    }

    public function getOrganizationCustomFields(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfield($queryParameters->toArray());
    }

    public function getOrganizationCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationcustomfieldById($id);
    }

    public function getOrganizationSizes(QueryBuilder $queryParameters = new QueryBuilder()): ResponseInterface|Model\RestResultOrganizationSizes|null
    {
        return $this->client->getCrmOrganizationsize($queryParameters->toArray());
    }

    public function getOrganizationSize(string $id): Model\RestResultOrganizationSize|ResponseInterface|null
    {
        return $this->client->getCrmOrganizationsizeById($id);
    }

    public function getPersons(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultPersons|ResponseInterface|null
    {
        return $this->client->getCrmPerson($queryParameters->toArray());
    }

    public function postPerson(Model\PostPerson $body): Model\RestPostResult|ResponseInterface|null
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

    public function putPerson(string $id, Model\PostPerson $body): Model\RestPutResult|ResponseInterface|null
    {
        return $this->client->putCrmPersonById($id, $body);
    }

    public function getPersonCustomFieldGroups(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFieldGroups|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldgroup($queryParameters->toArray());
    }

    public function getPersonCustomFieldGroup(string $id): Model\RestResultCustomFieldGroup|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldgroupById($id);
    }

    public function getPersonCustomFields(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultCustomFields|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfield($queryParameters->toArray());
    }

    public function getPersonCustomField(string $id): Model\RestResultCustomField|ResponseInterface|null
    {
        return $this->client->getCrmPersoncustomfieldById($id);
    }

    public function getRelationTypes(QueryBuilder $queryParameters = new QueryBuilder()): Model\RestResultRelationTypes|ResponseInterface|null
    {
        return $this->client->getCrmRelationtype($queryParameters->toArray());
    }

    public function getRelationType(string $id): Model\RestResultRelationType|ResponseInterface|null
    {
        return $this->client->getCrmRelationtypeById($id);
    }
}
